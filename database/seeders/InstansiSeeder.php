<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instansi;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Instansi::truncate();

        $csvFile = fopen(base_path("database/data/instansi.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Instansi::create([

                    "id"              => $data['0'],
                    "kodeinstansi"    => $data['1'],
                    "namainstansi"    => $data['2'],
                    "singkatan"       => $data['3'],
                    "alamatinstansi"  => $data['4']

                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
