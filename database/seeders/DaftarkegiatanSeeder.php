<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Daftarkegiatan;

class DaftarkegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Daftarkegiatan::truncate();

        $csvFile = fopen(base_path("database/data/daftartabel.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Daftarkegiatan::create([
                    "id"              => $data['0'],
                    "kodeinstansi"    => $data['1'],
                    "tipetabel"       => $data['2'],
                    "notabel"         => $data['3'],
                    "judultabel"      => $data['4'],
                    "judultabelen"    => $data['5']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
