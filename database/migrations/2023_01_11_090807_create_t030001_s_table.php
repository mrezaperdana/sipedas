<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t030001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('rumahpermanent', 6)->nullable();
            $table->string('rumahpermanen1', 6)->nullable();
            $table->string('rumahpermanen2', 6)->nullable();
            $table->string('rumahpermanen3', 6)->nullable();
            $table->string('rumahpermanen4', 6)->nullable();
            $table->string('rumahpermanen5', 6)->nullable();
            $table->string('rumahpermanen6', 6)->nullable();
            $table->string('rumahpermanen7', 6)->nullable();
            $table->string('rumahpermanen8', 6)->nullable();
            $table->string('rumahpanggungt', 6)->nullable();
            $table->string('rumahpanggung1', 6)->nullable();
            $table->string('rumahpanggung2', 6)->nullable();
            $table->string('rumahpanggung3', 6)->nullable();
            $table->string('rumahpanggung4', 6)->nullable();
            $table->string('rumahpanggung5', 6)->nullable();
            $table->string('rumahpanggung6', 6)->nullable();
            $table->string('rumahpanggung7', 6)->nullable();
            $table->string('rumahpanggung8', 6)->nullable();
            $table->string('rumahtokot', 6)->nullable();
            $table->string('rumahtoko1', 6)->nullable();
            $table->string('rumahtoko2', 6)->nullable();
            $table->string('rumahtoko3', 6)->nullable();
            $table->string('rumahtoko4', 6)->nullable();
            $table->string('rumahtoko5', 6)->nullable();
            $table->string('rumahtoko6', 6)->nullable();
            $table->string('rumahtoko7', 6)->nullable();
            $table->string('rumahtoko8', 6)->nullable();
            $table->string('sarangburungt', 6)->nullable();
            $table->string('sarangburung1', 6)->nullable();
            $table->string('sarangburung2', 6)->nullable();
            $table->string('sarangburung3', 6)->nullable();
            $table->string('sarangburung4', 6)->nullable();
            $table->string('sarangburung5', 6)->nullable();
            $table->string('sarangburung6', 6)->nullable();
            $table->string('sarangburung7', 6)->nullable();
            $table->string('sarangburung8', 6)->nullable();
            $table->string('gudangt', 6)->nullable();
            $table->string('gudang1', 6)->nullable();
            $table->string('gudang2', 6)->nullable();
            $table->string('gudang3', 6)->nullable();
            $table->string('gudang4', 6)->nullable();
            $table->string('gudang5', 6)->nullable();
            $table->string('gudang6', 6)->nullable();
            $table->string('gudang7', 6)->nullable();
            $table->string('gudang8', 6)->nullable();
            $table->string('asramat', 6)->nullable();
            $table->string('asrama1', 6)->nullable();
            $table->string('asrama2', 6)->nullable();
            $table->string('asrama3', 6)->nullable();
            $table->string('asrama4', 6)->nullable();
            $table->string('asrama5', 6)->nullable();
            $table->string('asrama6', 6)->nullable();
            $table->string('asrama7', 6)->nullable();
            $table->string('asrama8', 6)->nullable();
            $table->string('sekolaht', 6)->nullable();
            $table->string('sekolah1', 6)->nullable();
            $table->string('sekolah2', 6)->nullable();
            $table->string('sekolah3', 6)->nullable();
            $table->string('sekolah4', 6)->nullable();
            $table->string('sekolah5', 6)->nullable();
            $table->string('sekolah6', 6)->nullable();
            $table->string('sekolah7', 6)->nullable();
            $table->string('sekolah8', 6)->nullable();
            $table->string('kampust', 6)->nullable();
            $table->string('kampus1', 6)->nullable();
            $table->string('kampus2', 6)->nullable();
            $table->string('kampus3', 6)->nullable();
            $table->string('kampus4', 6)->nullable();
            $table->string('kampus5', 6)->nullable();
            $table->string('kampus6', 6)->nullable();
            $table->string('kampus7', 6)->nullable();
            $table->string('kampus8', 6)->nullable();
            $table->string('kantort', 6)->nullable();
            $table->string('kantor1', 6)->nullable();
            $table->string('kantor2', 6)->nullable();
            $table->string('kantor3', 6)->nullable();
            $table->string('kantor4', 6)->nullable();
            $table->string('kantor5', 6)->nullable();
            $table->string('kantor6', 6)->nullable();
            $table->string('kantor7', 6)->nullable();
            $table->string('kantor8', 6)->nullable();
            $table->string('pasart', 6)->nullable();
            $table->string('pasar1', 6)->nullable();
            $table->string('pasar2', 6)->nullable();
            $table->string('pasar3', 6)->nullable();
            $table->string('pasar4', 6)->nullable();
            $table->string('pasar5', 6)->nullable();
            $table->string('pasar6', 6)->nullable();
            $table->string('pasar7', 6)->nullable();
            $table->string('pasar8', 6)->nullable();
            $table->string('towert', 6)->nullable();
            $table->string('tower1', 6)->nullable();
            $table->string('tower2', 6)->nullable();
            $table->string('tower3', 6)->nullable();
            $table->string('tower4', 6)->nullable();
            $table->string('tower5', 6)->nullable();
            $table->string('tower6', 6)->nullable();
            $table->string('tower7', 6)->nullable();
            $table->string('tower8', 6)->nullable();
            $table->string('hotelt', 6)->nullable();
            $table->string('hotel1', 6)->nullable();
            $table->string('hotel2', 6)->nullable();
            $table->string('hotel3', 6)->nullable();
            $table->string('hotel4', 6)->nullable();
            $table->string('hotel5', 6)->nullable();
            $table->string('hotel6', 6)->nullable();
            $table->string('hotel7', 6)->nullable();
            $table->string('hotel8', 6)->nullable();
            $table->string('perpustakaant', 6)->nullable();
            $table->string('perpustakaan1', 6)->nullable();
            $table->string('perpustakaan2', 6)->nullable();
            $table->string('perpustakaan3', 6)->nullable();
            $table->string('perpustakaan4', 6)->nullable();
            $table->string('perpustakaan5', 6)->nullable();
            $table->string('perpustakaan6', 6)->nullable();
            $table->string('perpustakaan7', 6)->nullable();
            $table->string('perpustakaan8', 6)->nullable();
            $table->string('menarat', 6)->nullable();
            $table->string('menara1', 6)->nullable();
            $table->string('menara2', 6)->nullable();
            $table->string('menara3', 6)->nullable();
            $table->string('menara4', 6)->nullable();
            $table->string('menara5', 6)->nullable();
            $table->string('menara6', 6)->nullable();
            $table->string('menara7', 6)->nullable();
            $table->string('menara8', 6)->nullable();
            $table->string('gedungt', 6)->nullable();
            $table->string('gedung1', 6)->nullable();
            $table->string('gedung2', 6)->nullable();
            $table->string('gedung3', 6)->nullable();
            $table->string('gedung4', 6)->nullable();
            $table->string('gedung5', 6)->nullable();
            $table->string('gedung6', 6)->nullable();
            $table->string('gedung7', 6)->nullable();
            $table->string('gedung8', 6)->nullable();
            $table->string('jumlaht', 6)->nullable();
            $table->string('jumlah1', 6)->nullable();
            $table->string('jumlah2', 6)->nullable();
            $table->string('jumlah3', 6)->nullable();
            $table->string('jumlah4', 6)->nullable();
            $table->string('jumlah5', 6)->nullable();
            $table->string('jumlah6', 6)->nullable();
            $table->string('jumlah7', 6)->nullable();
            $table->string('jumlah8', 6)->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t030001_s');
    }
};
