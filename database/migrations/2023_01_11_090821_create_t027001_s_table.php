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
        Schema::create('t027001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('lainnyavar')->default('Isikan Jika ada');
            $table->string('lakilakit')->nullable();
            $table->string('lakilaki1')->nullable();
            $table->string('lakilaki2')->nullable();
            $table->string('lakilaki3')->nullable();
            $table->string('lakilaki4')->nullable();
            $table->string('lakilaki5')->nullable();
            $table->string('lakilaki6')->nullable();
            $table->string('lakilaki7')->nullable();
            $table->string('lakilaki8')->nullable();
            $table->string('lakilaki9')->nullable();
            $table->string('lakilaki10')->nullable();
            $table->string('lakilaki11')->default(0);
            $table->string('perempuant')->nullable();
            $table->string('perempuan1')->nullable();
            $table->string('perempuan2')->nullable();
            $table->string('perempuan3')->nullable();
            $table->string('perempuan4')->nullable();
            $table->string('perempuan5')->nullable();
            $table->string('perempuan6')->nullable();
            $table->string('perempuan7')->nullable();
            $table->string('perempuan8')->nullable();
            $table->string('perempuan9')->nullable();
            $table->string('perempuan10')->nullable();
            $table->string('perempuan11')->default(0);
            $table->string('jumlaht')->nullable();
            $table->string('jumlah1')->nullable();
            $table->string('jumlah2')->nullable();
            $table->string('jumlah3')->nullable();
            $table->string('jumlah4')->nullable();
            $table->string('jumlah5')->nullable();
            $table->string('jumlah6')->nullable();
            $table->string('jumlah7')->nullable();
            $table->string('jumlah8')->nullable();
            $table->string('jumlah9')->nullable();
            $table->string('jumlah10')->nullable();
            $table->string('jumlah11')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t027001_s');
    }
};
