<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
// use App\Http\Controllers\getConcatenatedCollection;
use Illuminate\Http\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;


use App\Models\Excel;
use App\Models\Daftartabel;
use App\Models\Tables\entriexcel;
use App\Models\Instansi;
use App\Models\daftarkegiatan;
use App\Models\User;

class UserController extends Controller
{

    public function getConcatenatedCollection()
    {
        $modelClasses = app('modelClasses');
        $collection = collect();
        foreach ($modelClasses as $modelClass) {
            $collection = $collection->concat($modelClass::query()->where('kodeinstansi', auth()->user()->kodeinstansi)->get());
        }
        $totalStatus1 = $collection->where('status', 1)->count();
        $totalStatus0 = $collection->where('status', 0)->count();
        $totalStatus3 = $collection->where('status', 3)->count();
        $notiftabel = $totalStatus3 +  $totalStatus0;

        $user = User::find(Auth::user()->id);
        $namainstansi = $user->instansi->namainstansi;
        return (object) [
            'collection' => $collection,
            'totalStatus1' => $totalStatus1,
            'totalStatus3' => $totalStatus3,
            'totalStatus0' => $totalStatus0,
            'notiftabel' => $notiftabel,
            'namainstansi' => $namainstansi
        ];
    }


    public function entrian()
    {
        $values = $this->getConcatenatedCollection();

        $daftarTabel = new Daftartabel;
        $allItems = collect();
        foreach ($values->collection as $item) {
            $tableModel = $daftarTabel->getTableModel($item->tipetabel);
            $allItems->push([
                'judultabel' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabel'),
                'judultabelen' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabelen'),
                'item' => $item,
                'tableModel' => $tableModel
            ]);
        }
        $listTahun  = $allItems->pluck('item.tahun')->unique()->sort()->all();
        return view('dashboard.users.DaftarEntri', [
            'allitems' => $allItems,
            'listtahun' => $listTahun,
            'result' => app('result', [auth()->user()->kodeinstansi]),
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    public function listEntriExcels()
    {
        $values = $this->getConcatenatedCollection();
        $user_id = Auth::user()->id;
        $instansi_id = Auth::user()->kodeinstansi;

        $daftarTabel = new Daftartabel;
        $allItems = collect();
        foreach ($values->collection as $item) {
            $tableModel = $daftarTabel->getTableModel($item->tipetabel);
            $allItems->push([
                'judultabel' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabel'),
                'judultabelen' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabelen'),
                'item' => $item,
                'tableModel' => $tableModel
            ]);
        }
        $listTahun = $allItems->pluck('item.tahun')->unique()->sort()->all();

        // Get all the daftarkegiatan which have current user instansi
        $instansi = Instansi::get();
        $datakegiatan = daftarkegiatan::where('responden', 'like', '%' . $instansi_id . '%')
            ->where('status', '=', 1)
            ->get();

        // Iterate over $datakegiatan collection and check for corresponding data in entriexels table
        foreach ($datakegiatan as $daftarkegiatan) {
            $entriexcel = Entriexcel::where('kodetabel', $daftarkegiatan->kodetabel)
                ->where('kodeinstansi', $instansi_id)
                ->first();

            if ($entriexcel) {
                $daftarkegiatan->status_entri = 1;
            } else {
                $daftarkegiatan->status_entri = 0;
            }
        }

        return view('dashboard.users.entriexcel.entriexcel', [
            'listtahun' => $listTahun,
            'datakegiatan' => $datakegiatan,
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    public function updateEntriExcel(Request $request)
    {

        $this->validate($request, [
            'user_file' => 'mimes: xls,xlxs'
        ]);
        $path = 'users/excel/';
        $upload_path = storage_path($path);

        $file = $request->file('user_file');
        $new_name = 'UEXCEL_' . date('Ymd') . uniqid() . '.' . $request->file('user_file')->getClientOriginalName();

        // upload new excel file
        $file->storeAs($path, $new_name);

        // store the file path in the database
        $user_id = Auth::user()->id;
        $excel = Excel::create([
            'file_name' => $new_name,
            'file_path' => $path . $new_name,
            'user_id' => $user_id,
        ]);
        $excel->save();

        return redirect()->back()->with('success', 'Excel file uploaded successfully.');
    }


    public function downloadEntriExcel($kodetabel)
    {
        $file_name = daftarkegiatan::where('kodetabel', $kodetabel)->value('templatename');

        $file_path = storage_path("app/admins/template/{$file_name}");

        // Check if file exists
        if (!file_exists($file_path)) {
            abort(404);
        }

        // Download the file
        return response()->download($file_path, $file_name);
    }




    public function uploadEntriExcel(Request $request)
    {

        // $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];
        $validatedData = $request->validate([
            'file' => 'required|mimes:xls,xlsx|max:3072',
        ], [
            'file.required' => 'Please select a file to upload',
            'file.mimes' => 'The file must be a type of :values',
            'file.max' => 'The file may not be larger than :max kilobytes',
        ]);
        $kodetabel = $request->kodetabel;
        $user_id = Auth::user()->id;
        $kodeinstansi = Auth::user()->kodeinstansi;
        $data = $request->file('file');
        $oriname = $data->getClientOriginalName();
        // $filename = 'EntriExcel_'  . $user_id . '_' .  $oriname;
        $path = 'users/excel/';
        $upload_path = public_path($path);
        $judul = daftarkegiatan::where('kodetabel', $request->kodetabel)->value('judul');
        $tahun = daftarkegiatan::where('kodetabel', $request->kodetabel)->value('tahun');

        $filename = 'EntriExcel_'  . $kodeinstansi . '_' . $user_id . '_' . $judul . '_' .  $tahun . '_' . date('Ymd')  . '_' . $oriname;

        // Check if there is an existing row for this instansi and kodetabel
        $existingExcel = entriexcel::where('kodeinstansi', $kodeinstansi)
            ->where('kodetabel', $kodetabel)
            ->first();

        if ($existingExcel) {
            // Delete the existing file
            $existingFilePath = $upload_path . '/' . $existingExcel->filename;
            if (File::exists($existingFilePath)) {
                File::delete($existingFilePath);
            }

            // Delete the existing row
            $existingExcel->delete();
        }
        // $oldExcel = entriexcel::where('filename', $check)->first()->filename;
        $upload = $data->move($upload_path, $filename);

        if (!$upload) {
            return redirect()->back()->with('danger', 'Excel file upload failed.');
        } else {
            $oldExcel = entriexcel::where('filename', $filename)->first();
            if ($oldExcel) {
                if ($oldExcel->filename != '') {
                    if (File::exists(public_path($path . $oldExcel->filename))) {
                        File::delete(public_path($path . $oldExcel->filename));
                    }
                }
            }
        }

        $datakegiatan = daftarkegiatan::where('kodetabel', $kodetabel)->first();
        $judul = $datakegiatan->judul;
        $tahun = $datakegiatan->tahun;
        $templatename = $datakegiatan->templatename;
        $templatepath = $datakegiatan->templatepath;
        $entriexcel = entriexcel::create([
            'user_id' =>        $user_id,
            'kodeinstansi' =>   $kodeinstansi,
            'judul' =>          $judul,
            'tahun' =>          $tahun,
            'filename' =>          $filename,
            'filepath' =>          $upload_path,
            'kodetabel' =>      $kodetabel,
            'templatename' =>   $templatename,
            'templatepath' =>   $templatepath,
            'status' =>   1

        ]);
        $entriexcel->save();
        if (!$entriexcel) {
            // return redirect()->back()->with('danger', 'Excel file upload failed.');
            return response()->json(['status' => 0, 'error' => "gagal"]);
        } else {
            return redirect()->back()->with('success', 'Excel file uploaded successfully.');
        }
    }

    public function index(User $user)
    {
        $values = $this->getConcatenatedCollection();

        // Pass the values to the view
        return view('dashboard.users.index', [
            'kosong' => $values->totalStatus0,
            'belum' => $values->totalStatus3,
            'selesai' => $values->totalStatus1

        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }
    public function profile()
    {
        $values = $this->getConcatenatedCollection();
        return view('dashboard.users.profile', [])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }
    public function updateInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,' . Auth::user()->id,
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'name' => 'required',
            'nohp' => 'required'
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'username' => $request->username,
                'email' => $request->email,
                'name' => $request->name,
                'nohp' => $request->nohp
            ]);
            if (!$query) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Informasi Profil gagal diupdate']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Profil berhasil diupdate.']);
            }
        }
    }
    public function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $upload_path = public_path($path);
        $file = $request->file('user_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        // upload new image
        $upload = $file->move($upload_path, $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, gagal mengupload foto.']);
        } else {

            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (File::exists(public_path($path . $oldPicture))) {
                    File::delete(public_path($path . $oldPicture));
                }
            }

            // updating data 
            $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Foto Profil gagal diupdate']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Foto Profil berhasil diupdate.']);
            }
        }
    }


    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        return $fail(__('Password salah'));
                    }
                },
            ],
            'newpassword' => 'required|min:6|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Masukkan password anda.',
            'newpassword.required' => 'Masukkan password anda.',
            'newpassword.min' => 'Panjang Password minimal 6 Karakter',
            'newpassword.max' => 'Panjang Password maksimal 30 Karakter',
            'cnewpassword.required' => 'Masukkan password anda.',
            'cnewpassword.same' => 'Konfirmasi Password tidak sama dengan Password Baru'

        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            // updating data 
            $update = User::find(Auth::user()->id)->update(['password' => Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Password gagal diupdate']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Password berhasil diupdate.']);
            }
        }
    }


    public function settings()
    {
        $values = $this->getConcatenatedCollection();
        return view('dashboard.users.settings', [])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $values = $this->getConcatenatedCollection();
        return view('dashboard.kuesioners.pertanyaan', [])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {
        $idprev = substr($id, 0, -1) . (string)((int)substr($id, -1) - 1);

        $values = $this->getConcatenatedCollection();
        $kode = auth()->user()->kodeinstansi;

        $result = app('result', [$kode]);
        $models = app('models');
        $model_class = $models[$type] ?? null;

        if ($model_class) {
            $table = $model_class::where('kodetabel', $id)->first();
            $tableprev = $model_class::where('kodetabel', $idprev)->first();
        } else {
            $table = null;
            $tableprev = null;
        }
        // dd($table);
        $daftarTabel = new Daftartabel;
        $judultabel = $daftarTabel->where('tipetabel', $type)->value('judultabel');
        $judultabelen = $daftarTabel->where('tipetabel', $type)->value('judultabelen');
        $notabel = $daftarTabel->where('tipetabel', $type)->value('notabel');

        return view('dashboard.users.entriedit', [

            'judultabel' => $judultabel,
            'judultabelen' => $judultabelen,
            'notabel' => $notabel,
            'data' => $table,
            'dataprev' => $tableprev,
            'tipetabel' => $result . $type
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, $id)
    {
        // dd($request);
        $values = $this->getConcatenatedCollection();
        $kodeinstansi = auth()->user()->kodeinstansi;

        $models = app('models');
        $model_class = $models[$type] ?? null;

        if ($model_class) {
            $tabel = $model_class::where('kodetabel', $id)->first();
        } else {
            // Type code not found, redirect with error message
            return redirect('user/DaftarEntri')->with('failed', 'Gagal disimpan!');
        }


        $tabel = $model_class::where('kodetabel', $id)->first();
        $requestData = $request->all();
        $hasNull = false;

        foreach ($requestData as $key => $value) {
            if ($key !== 'catatan' && is_null($value)) {
                // The value is null and the key is not 'catatan'
                $hasNull = true;
                break;
            }
        }

        if ($hasNull) {
            $tabel->status = '3';
        } else {
            $tabel->status = '1';
        }
        $tabel->update($request->all());
        return redirect('user/DaftarEntri')->with('success', 'Tabel berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function updateExcel(Request $request)
    {

        $this->validate($request, [
            'user_file' => 'mimes: xls,xlxs'
        ]);
        $path = 'users/excel/';
        $upload_path = storage_path($path);

        $file = $request->file('user_file');
        $new_name = 'UpEXCEL_' . date('Ymd') . uniqid() . '.' . $request->file('user_file')->getClientOriginalName();

        // upload new excel file
        $file->storeAs($path, $new_name);

        // store the file path in the database
        $user_id = Auth::user()->id;
        $excel = Excel::create([
            'file_name' => $new_name,
            'file_path' => $path . $new_name,
            'user_id' => $user_id,
        ]);
        $excel->save();

        return redirect()->back()->with('success', 'Excel file uploaded successfully.');
    }

    public function listExcels()
    {
        $values = $this->getConcatenatedCollection();
        $user_id = Auth::user()->id;
        $files = Excel::where('user_id', $user_id)->get();

        return view('dashboard.users.pengajuan', ['files' => $files])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    // public function downloadExcel($id)
    // {
    //     $excel = Excel::find($id);
    //     return response()->download(public_path($excel->file_path), $excel->file_name);
    // }

    public function uploadExcel(Request $request)
    {
        $request->validate(['file' => 'required|mimes:xlsx,xls|max:3072',], ['file.mimes' => 'File hanya boleh excel, dengan ukuran maksimal 3mb.']);
        $path = 'users/excel/';
        $upload_path = public_path($path);

        $data = $request->file('file');
        $new_name = 'Up2EXCEL_' . date('Ymd') . uniqid() . '_' . $data->getClientOriginalName();
        $data->move($upload_path, $new_name);

        $user_id = Auth::id();
        Excel::create([
            'file_name' => $new_name,
            'file_path' => $path . $new_name,
            'user_id' => $user_id
        ]);

        return redirect('user/entriexcel')->with('success', 'Excel file uploaded successfully.');
    }




    // public function updatePicture(Request $request)
    // {
    //     $path = '/../../public_html/users/images/';
    //     $upload_path = public_path() . $path;
    //     $file = $request->file('user_image');
    //     $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

    //     // upload new image
    //     $upload = $file->move($upload_path, $new_name);

    //     if (!$upload) {
    //         return response()->json(['status' => 0, 'msg' => 'Something went wrong, gagal mengupload foto.']);
    //     } else {

    //         $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

    //         if ($oldPicture != '') {
    //             if (File::exists(public_path($path . $oldPicture))) {
    //                 File::delete(public_path($path . $oldPicture));
    //             }
    //         }

    //         // updating data 
    //         $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

    //         if (!$update) {
    //             return response()->json(['status' => 0, 'msg' => 'Something went wrong, Foto Profil gagal diupdate']);
    //         } else {
    //             return response()->json(['status' => 1, 'msg' => 'Foto Profil berhasil diupdate.']);
    //         }
    //     }
    // }

    // public function uploadExcel(Request $request)
    // {
    //     $request->validate(['file' => 'required|mimes:xlsx,xls|max:3072',], ['file.mimes' => 'File hanya boleh excel, dengan ukuran maksimal 3mb.']);
    //     $path = 'users/excel/';
    //     $upload_path = public_path() . '/../../public_html/' . $path;

    //     $data = $request->file('file');
    //     $new_name = 'UEXCEL_' . date('Ymd') . uniqid() . '_' . $data->getClientOriginalName();
    //     $data->move($upload_path, $new_name);

    //     $user_id = Auth::id();
    //     Excel::create([
    //         'file_name' => $new_name,
    //         'file_path' => $path . $new_name,
    //         'user_id' => $user_id
    //     ]);

    //     return redirect()->back()->with('success', 'Excel file uploaded successfully.');
    // }
}
