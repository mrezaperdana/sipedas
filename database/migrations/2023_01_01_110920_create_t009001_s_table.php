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
        Schema::create('t009001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('produksi1')->nullable();
            $table->string('produksi2')->nullable();
            $table->string('produksi3')->nullable();
            $table->string('produksi4')->nullable();
            $table->string('produksi5')->nullable();
            $table->string('produksi6')->nullable();
            $table->string('produksi7')->nullable();
            $table->string('produksi8')->nullable();
            $table->string('produksi9')->nullable();
            $table->string('produksi10')->nullable();
            $table->string('produksi11')->nullable();
            $table->string('produksi12')->nullable(); 
            $table->string('produksit')->nullable(); 
            $table->string('harga1')->nullable();
            $table->string('harga2')->nullable();
            $table->string('harga3')->nullable();
            $table->string('harga4')->nullable();
            $table->string('harga5')->nullable();
            $table->string('harga6')->nullable();
            $table->string('harga7')->nullable();
            $table->string('harga8')->nullable();
            $table->string('harga9')->nullable();
            $table->string('harga10')->nullable();
            $table->string('harga11')->nullable();
            $table->string('harga12')->nullable(); 
            $table->string('hargat')->nullable(); 
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
        Schema::dropIfExists('t009001_s');
    }
};
