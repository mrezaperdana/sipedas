<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\Instansi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\daftarkegiatan;
use App\Models\Tables\entriexcel;

class AdminDaftarKegiatanController extends Controller
{


    // public function hasil($kodetabel)
    // {
    //     //
    //     $firstController = new AdminController();
    //     $values = $firstController->getConcatenatedCollection();
    //     // $values = $this->getConcatenatedCollection();
    //     $data = Instansi::get();
    //     $datakegiatan = daftarkegiatan::get();
    //     $entriexcel = entriexcel::get();
    //     $listTahun  = $datakegiatan->pluck('tahun')->unique()->sort()->all();
    //     // Pass the values to the view
    //     return view('dashboard/admins/daftarkegiatan/hasil', [
    //         'kosong' => $values->totalStatus0,
    //         'belum' => $values->totalStatus3,
    //         'selesai' => $values->totalStatus1,
    //         'data' => $data,
    //         'listtahun' => $listTahun,
    //         'datakegiatan' => $datakegiatan
    //     ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    // }

    // public function hasil($kodetabel)
    // {
    //     $firstController = new AdminController();
    //     $values = $firstController->getConcatenatedCollection();

    //     $daftarKegiatans = daftarkegiatan::where('kodetabel', $kodetabel)->get();
    //     $daftarKegiatanResponden = [];

    //     foreach ($daftarKegiatans as $daftarKegiatan) {
    //         $responden = json_decode($daftarKegiatan->responden, true);
    //         $daftarKegiatanResponden = array_merge($daftarKegiatanResponden, $responden);
    //     }

    //     $daftarKegiatanResponden = array_unique($daftarKegiatanResponden);


    //     return view('dashboard/admins/daftarkegiatan/hasil', [
    //         'daftarKegiatanResponden' => $daftarKegiatanResponden,
    //         'daftarKegiatan' => $daftarKegiatan,
    //         'kosong' => $values->totalStatus0,
    //         'belum' => $values->totalStatus3,
    //         'selesai' => $values->totalStatus1,
    //         'data' => Instansi::get(),
    //         'listtahun' => daftarkegiatan::pluck('tahun')->unique()->sort()->all(),
    //         'daftarKegiatan' => $daftarKegiatan,
    //     ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    // }

    public function hasil($kodetabel)
    {
        $firstController = new AdminController();
        $values = $firstController->getConcatenatedCollection();

        $daftarKegiatans = daftarkegiatan::where('kodetabel', $kodetabel)->get();
        $daftarKegiatanResponden = [];

        foreach ($daftarKegiatans as $daftarKegiatan) {
            $responden = json_decode($daftarKegiatan->responden, true);
            $daftarKegiatanResponden = array_merge($daftarKegiatanResponden, $responden);
        }

        $daftarKegiatanResponden = array_unique($daftarKegiatanResponden);

        $dataentritabel = [];

        foreach ($daftarKegiatanResponden as $kodeinstansi) {
            $entriexcel = EntriExcel::where('kodetabel', $kodetabel)
                ->where('kodeinstansi', $kodeinstansi)
                ->first();

            $daftarKegiatan = daftarkegiatan::where('kodetabel', $kodetabel)
                ->first();

            $dataentritabel[] = [
                'kodetabel' => $kodetabel,
                'kodeinstansi' => $kodeinstansi,
                'filename' => $entriexcel ? $entriexcel->filename : null,
                'judul' => $daftarKegiatan ? $daftarKegiatan->judul : null,
                'tahun' => $daftarKegiatan ? $daftarKegiatan->tahun : null,
            ];
        }
        $dataentritabel = collect($dataentritabel)->sortByDesc('filename')->values()->all();

        return view('dashboard/admins/daftarkegiatan/hasil', [
            'daftarKegiatanResponden' => $daftarKegiatanResponden,
            'daftarKegiatan' => $daftarKegiatan,
            'kosong' => $values->totalStatus0,
            'belum' => $values->totalStatus3,
            'selesai' => $values->totalStatus1,
            'data' => Instansi::get(),
            'listtahun' => daftarkegiatan::pluck('tahun')->unique()->sort()->all(),
            'daftarKegiatan' => $daftarKegiatan,
            'dataentritabel' => $dataentritabel,
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    public function downloadhasil($kodetabel, $kodeinstansi)
    {
        $file_name = entriexcel::where('kodetabel', $kodetabel)->where('kodeinstansi', $kodeinstansi)->value('filename');
        $file_path = public_path("users/excel/{$file_name}");
        // Check if file exists
        // dd($file_name);
        if (!file_exists($file_path)) {
            abort(404);
        }

        // Download the file
        return response()->download($file_path, $file_name);
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $firstController = new AdminController();
        $values = $firstController->getConcatenatedCollection();
        // $values = $this->getConcatenatedCollection();
        $data = Instansi::get();

        $datakegiatan = daftarkegiatan::get();
        // Pass the values to the view
        return view('dashboard/admins/daftarkegiatan/index', [
            'kosong' => $values->totalStatus0,
            'belum' => $values->totalStatus3,
            'selesai' => $values->totalStatus1,
            'data' => $data,
            'datakegiatan' => $datakegiatan
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firstController = new AdminController();
        $values = $firstController->getConcatenatedCollection();
        // $values = $this->getConcatenatedCollection();
        $data = Instansi::get()->sortBy('singkatan');
        // $datakegiatan = daftarkegiatan::select('judul', 'tahun')->distinct()->get();
        // $datakegiatan = daftarkegiatan::select('judul', 'tahun')->distinct()->groupBy('judul', 'tahun')->get();
        $datakegiatan = daftarkegiatan::select('judul', 'tahun')->groupBy('judul', 'tahun')->get();
        $unique_judul = $datakegiatan->pluck('judul')->unique();


        // $datakegiatan = daftarkegiatan::where('responden', Auth::user()->kodeinstansi)->first();
        return view('dashboard/admins/daftarkegiatan/create', [
            'kosong' => $values->totalStatus0,
            'belum' => $values->totalStatus3,
            'selesai' => $values->totalStatus1,
            'data' => $data,
            'datakegiatan' => $datakegiatan,
            'unique_judul' => $unique_judul,
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //
        // return $request->file('image')->store('post-images');
        $request->validate([
            'judul' => 'required|max:255',
            'tahun' => 'required|max:4|unique:daftarkegiatans,tahun,null,null,judul,' . $request->judul,

        ]);

        $user_id = Auth::user()->id;
        $kodeinstansi = Auth::user()->kodeinstansi;
        // dd($kodeinstansi);
        $judul = $request->judul;
        $tahun = $request->tahun;
        $kodetabel = uniqid();
        $responden = $request->input('responden');

        // Encode the array as a JSON string
        $responden_json = json_encode($responden);
        $path = 'admins/template/';
        $templatepath = storage_path($path);
        if ($request->file('template_file')) {
            $extension = pathinfo($request->file('template_file')->getClientOriginalName(), PATHINFO_EXTENSION);
            $file = $request->file('template_file');
            $templatename = 'Template_' . $kodetabel . '.' .  $extension;
            // upload new excel file
            $file->storeAs($path, $templatename);

            $kegiatan = daftarkegiatan::create([
                'user_id' =>        $user_id,
                'kodeinstansi' =>   $kodeinstansi,
                'judul' =>          $judul,
                'tahun' =>          $tahun,
                'kodetabel' =>      $kodetabel,
                'templatename' =>   $templatename,
                'templatepath' =>   $templatepath,
                'responden' => $responden_json,
            ]);
        } else {
            $kegiatan = daftarkegiatan::create([
                'user_id' =>        $user_id,
                'kodeinstansi' =>   $kodeinstansi,
                'judul' =>          $judul,
                'tahun' =>          $tahun,
                'kodetabel' =>      $kodetabel,
                'responden' => $responden_json,
            ]);
        }

        $kegiatan->save();
        if (!$kegiatan) {
            return redirect('/salah')->with('success', 'Kegiatan berhasil ditambahkan!');
        } else {
            return redirect(route('admin.daftarkegiatan'))->with('success', 'Kegiatan berhasil ditambahkan!');
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $data = daftarkegiatan::findOrFail($id);
        $data->status = $request->status;
        $data->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarKegiatan  $daftarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarKegiatan $daftarKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarKegiatan  $daftarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // $cekid = $id;
        $firstController = new AdminController();
        $values = $firstController->getConcatenatedCollection();
        // $values = $this->getConcatenatedCollection();
        $instansi = Instansi::get()->sortBy('singkatan');
        // $datakegiatan = daftarkegiatan::select('judul', 'tahun')->distinct()->get();
        // $datakegiatan = daftarkegiatan::select('judul', 'tahun')->distinct()->groupBy('judul', 'tahun')->get();
        $data = daftarkegiatan::find($id);
        $datakegiatan = daftarkegiatan::select('judul', 'tahun')->groupBy('judul', 'tahun')->get();
        $unique_judul = $datakegiatan->pluck('judul')->unique();
        // dd($instansi);
        // $datakegiatan = daftarkegiatan::where('responden', Auth::user()->kodeinstansi)->first();
        return view('dashboard/admins/daftarkegiatan/edit', [
            'kosong' => $values->totalStatus0,
            'belum' => $values->totalStatus3,
            'selesai' => $values->totalStatus1,
            'instansi' => $instansi,
            'id' => $id,
            'data' => $data,
            'datakegiatan' => $datakegiatan,
            'unique_judul' => $unique_judul,

        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarKegiatan  $daftarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarKegiatan $daftarKegiatan, $id)
    {
        //
        // dd($request);
        if ($id) {
            // Editing existing record
            $request->validate([
                'judul' => 'required|max:255',
            ]);
        } else {
            // Creating new record
            $request->validate([
                'judul' => 'required|max:255',
                'tahun' => 'required|max:4|unique:daftarkegiatans,tahun,null,null,judul,' . $request->judul,
            ]);
        }


        $data = $request->file('template_file');
        if ($request->file('template_file')) {
            $path = 'admins/template/';
            $templatepath = storage_path($path);
            $extension = pathinfo($request->file('template_file')->getClientOriginalName(), PATHINFO_EXTENSION);
            $kodetabel = daftarkegiatan::find($id)->get('kodetabel');
            $templatename = 'Template_' . $kodetabel . '.' .  $extension;
            $upload = $data->move($templatepath, $templatename);

            if (!$upload) {
                return redirect()->back()->with('danger', 'Excel file upload failed.');
            } else {
                $oldExcel = daftarkegiatan::find($id)->getAttributes()['templatename'];
                if ($oldExcel != '') {
                    if (File::exists(public_path($path . $oldExcel))) {
                        File::delete(public_path($path . $oldExcel));
                    }
                }

                // updating data 
                $update = daftarkegiatan::find($id)->update(['templatename' => $templatename]);

                if (!$update) {
                    return redirect('/salah')->with('danger', 'Kegiatan gagal diupdate!');
                } else {
                    return redirect(route('admin.daftarkegiatan'))->with('success', 'Kegiatan berhasil ditambahkan!');
                }
            }
        }
        if (!$request->has('responden')) {
            $request->merge(['responden' => null]);
        }
        $dataupdate = daftarkegiatan::find($id)->update($request->except('templatepath', 'templatename'));
        if (!$dataupdate) {
            return redirect('/salah')->with('danger', 'Kegiatan gagal diupdate!');
        } else {
            return redirect(route('admin.daftarkegiatan'))->with('success', 'Kegiatan berhasil ditambahkan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarKegiatan  $daftarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarKegiatan $daftarKegiatan, $id)
    {
        $oldExcel = daftarkegiatan::find($id)->getAttributes()['templatename'];
        $data = daftarkegiatan::findOrFail($id);
        $data->delete();

        if (!$data) {
            return redirect()->back()->with('danger', 'Kegiatan gagal dihapus!');
        } else {
            if ($oldExcel != '') {
                $file_path = storage_path("app/admins/template/{$oldExcel}");
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
        }
        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
