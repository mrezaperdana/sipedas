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
        Schema::create('t018001_s', function (Blueprint $table) {
            // sekda
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('indikator1')->default('Jumlah Proyek');
            $table->string('satuan1')->default('Proyek');
            $table->string('jumlah1')->nullable(); 
            $table->string('nilai1')->nullable(); 
            $table->string('indikator2')->default('Jumlah Proyek');
            $table->string('satuan2')->default('Proyek');
            $table->string('jumlah2')->nullable(); 
            $table->string('nilai2')->nullable(); 
            $table->string('indikator3')->default('Jumlah Proyek');
            $table->string('satuan3')->default('Proyek');
            $table->string('jumlah3')->nullable(); 
            $table->string('nilai3')->nullable(); 
            $table->string('indikatorlainnya')->default('(Isi Jika ada)');
            $table->string('satuanlainnya')->default('(Isi Jika ada)');
            $table->string('jumlahlainnya')->default(0);
            $table->string('nilailainnya')->default(0);
            $table->string('lainnya')->default('Lainnya... (Isi Jika ada)');
            $table->string('jumlaht')->nullable(); 
            $table->string('nilait')->nullable(); 
            $table->string('catatan')->nullable(); 



            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t018001_s');
    }
};
