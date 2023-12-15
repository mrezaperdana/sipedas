<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\getConcatenatedCollection;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Collection;

use App\Models\Instansi;
use App\Models\Daftartabel;
use App\Models\User;

class AdminController extends Controller
{
    public function storeModelClasses()
    {
    }
    public function getConcatenatedCollection()
    {
        $modelClasses = app('modelClasses');
        $collection = collect();
        foreach ($modelClasses as $modelClass) {
            $collection = $collection->concat($modelClass::query()->get());
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


    public function index()
    {
        $values = $this->getConcatenatedCollection();

        // Pass the values to the view
        return view('dashboard.admins.index', [
            'kosong' => $values->totalStatus0,
            'belum' => $values->totalStatus3,
            'selesai' => $values->totalStatus1,
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    public function entrian()
    {
        $kode = auth()->user()->kodeinstansi;
        $result = app('result', [$kode]);
        $values = $this->getConcatenatedCollection();
        $daftarTabel = new Daftartabel;
        $allItems = collect();
        $listTahun  = $allItems->pluck('item.tahun')->unique()->sort()->all();
        foreach ($values->collection as $item) {
            $tableModel = $daftarTabel->getTableModel($item->tipetabel);
            $allItems->push([
                'judultabel' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabel'),
                'judultabelen' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabelen'),
                'item' => $item,
                'tableModel' => $tableModel
            ]);
        }
        return view('dashboard.admins.DaftarEntri', [
            'allitems' => $allItems,
            'listtahun' => $listTahun,
            'result' => $result,
            'allitem' => $values->collection,
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    public function entriexcel()
    {
        $kode = auth()->user()->kodeinstansi;
        $result = app('result', [$kode]);
        $values = $this->getConcatenatedCollection();
        $daftarTabel = new Daftartabel;
        $allItems = collect();
        $listTahun  = $allItems->pluck('item.tahun')->unique()->sort()->all();
        foreach ($values->collection as $item) {
            $tableModel = $daftarTabel->getTableModel($item->tipetabel);
            $allItems->push([
                'judultabel' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabel'),
                'judultabelen' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabelen'),
                'item' => $item,
                'tableModel' => $tableModel
            ]);
        }
        return view('dashboard.admins.DaftarEntri', [
            'allitems' => $allItems,
            'listtahun' => $listTahun,
            'result' => $result,
            'allitem' => $values->collection,
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }
    // public function entrian()
    // {
    //     $kode = auth()->user()->kodeinstansi;
    //     $result = app('result', [$kode]);
    //     $values = $this->getConcatenatedCollection();

    //     $daftarTabel = new Daftartabel;
    //     $allItems = collect();
    //     foreach ($values->collection as $item) {
    //         $tableModel = $daftarTabel->getTableModel($item->tipetabel);
    //         $allItems->push([
    //             'judultabel' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabel'),
    //             'judultabelen' => $daftarTabel->where('tipetabel', $item->tipetabel)->value('judultabelen'),
    //             'item' => $item,
    //             'tableModel' => $tableModel
    //         ]);
    //     }
    //     $listTahun  = $allItems->pluck('item.tahun')->unique()->sort()->all();
    //     return view('dashboard.users.DaftarEntri', [
    //         'allitems' => $allItems,
    //         'listtahun' => $listTahun,
    //         'result' => $result,
    //         'allitem' => $values->collection,

    //     ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    // }

    public function viewtabel(Daftartabel $daftartabel, $type)
    {
        $values = $this->getConcatenatedCollection();
        $kode = substr($type, 0, 3);
        $result = app('result', [$kode]);
        $daftarTabel = new Daftartabel;
        $judultabel = $daftarTabel->where('tipetabel', $type)->value('judultabel');
        $judultabelen = $daftarTabel->where('tipetabel', $type)->value('judultabelen');

        return view('dashboard.admins.viewtabel', [
            'judultabel' => $judultabel,
            'judultabelen' => $judultabelen, 'data' => null,
            'tipetabel' => $result . '/' . $type,
            'kodetabel' => $type,
            'daftartabel' => $daftartabel

        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }

    public function daftartabel()
    {
        $data = Daftartabel::get();
        $values = $this->getConcatenatedCollection();
        // dd($data);
        return view('dashboard.admins.daftartabel', [
            'data' => $data
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }
    public function profile()
    {
        $values = $this->getConcatenatedCollection();
        return view('dashboard.admins.profile', [])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }
    public function updateInfo(Request $request)
    {
        $values = $this->getConcatenatedCollection();
        return view('dashboard.admins.profile', [])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    public function settings()
    {
        $values = $this->getConcatenatedCollection();
        return view('dashboard.admins.settings', [])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {




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
        $request->validate([
            'tahun' => 'required|digits:4',
        ], [
            'tahun.digits' => 'Format tahun yang anda masukkan salah',
        ]);
        $modelClasses = app('modelClasses');

        $tahun = $request->tahun; // Set the value for the tahun column here

        $addedTo = []; // Initialize an array to store the tables where a new row was added

        foreach ($modelClasses as $modelClass) {
            $model = new $modelClass();

            // Check if a row with the specified tahun value already exists
            $existingRow = $model->where('tahun', $tahun)->first();
            if ($existingRow) {
                // Skip creating a new row if a row with the specified tahun value already exists
                continue;
            }

            // Set null values for all columns except those with default values
            foreach ($model->getFillable() as $column) {
                if (!isset($model->$column)) {
                    $model->$column = null;
                }
            }

            // Set the tahun, kodeinstansi, and tipetabel columns
            $model->tahun = $tahun;
            $model->kodeinstansi = substr(class_basename($modelClass), 1, 3);
            $model->tipetabel = substr(class_basename($modelClass), 1);
            $model->kodetabel = substr(class_basename($modelClass), 1) . $tahun;

            $model->incrementing = true;
            // Save the model to the database
            $model->save();

            // Add the table name to the addedTo array
            $addedTo[] = $modelClass;
        }

        // Redirect the user with a success message and the list of tables where a new row was added
        return back()->with('success', 'Berhasil menambahkan semua tabel untuk tahun ' . $tahun . ' ! Tables added to: ' . implode(', ', $addedTo));
    }

    public function bulkDelete(Request $request)
    {
        $tahun = $request->tahun;

        // Confirmation message
        if ($request->has('tahun') && $request->tahun) {
            if (!$request->has('confirm')) {
                return back()->with('warning', 'Are you sure you want to delete all data for year ' . $tahun . '? <a href="' . url()->current() . '?confirm=1">Yes</a> | <a href="' . route('admin.dashboard') . '">No</a>');
            }
        }
        try {
            DB::transaction(function () use ($request) {

                global $modelClasses;

                $tahun = $request->tahun;
                $deletedFrom = [];

                foreach ($modelClasses as $modelClass) {
                    $model = new $modelClass();

                    $rowsToDelete = $model->where('tahun', $tahun)->get();
                    if ($rowsToDelete->isEmpty()) {
                        continue;
                    }

                    $model->where('tahun', $tahun)->delete();
                    $deletedFrom[] = $modelClass;
                }
                // dd(DB::getQueryLog());
                return redirect('admin.dashboard.DaftarEntri')->with('success', 'Berhasil menambahkan semua tabel untuk tahun ' . $tahun);
            });
        } catch (\Exception $e) {
            return redirect('admin.dashboard.DaftarEntri')->with('error', 'Error occurred during delete process : ' . $e->getMessage());
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tables\T007001  $T007001
     * @return \Illuminate\Http\Response
     */
    public function edit($type, $id)
    {
        $idprev = substr($id, 0, -1) . (string)((int)substr($id, -1) - 1);

        $values = $this->getConcatenatedCollection();


        $kode = substr($type, 0, -3);
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

        return view('dashboard.admins.entriedit', [

            'judultabel' => $judultabel,
            'judultabelen' => $judultabelen,
            'notabel' => $notabel,
            'data' => $table,
            'dataprev' => $tableprev,
            'tipetabel' => $result . $type
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }


    public function menu()
    {
        return view('dashboard.admins.menu');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, $id)
    {
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

        $requestData = $request->all();
        $hasNull = false;

        foreach ($requestData as $key => $value) {
            if (is_null($value)) {
                // The value is null
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
        return redirect('admin/DaftarEntri')->with('success', 'Tabel berhasil disimpan!');
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


    public function instansi()
    {

        $data = Instansi::get();
        $values = $this->getConcatenatedCollection();
        // dd($data);
        return view('dashboard.admins.daftarinstansi', [
            'data' => $data
        ])->with('notiftabel', $values->notiftabel)->with('namainstansi', $values->namainstansi);
    }
}
