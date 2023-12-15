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
        Schema::create('t016001_s', function (Blueprint $table) {
            // plmn
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('pelanggan1')->nullable();
            $table->string('pelanggan2')->nullable();
            $table->string('pelanggan3')->nullable();
            $table->string('pelanggan4')->nullable();
            $table->string('pelanggan5')->nullable();
            $table->string('pelanggan6')->nullable();
            $table->string('pelanggan7')->nullable();
            $table->string('pelanggan8')->nullable();
            $table->string('pelanggan9')->nullable();
            $table->string('pelanggan10')->nullable();
            $table->string('pelanggan11')->nullable();
            $table->string('pelanggan12')->nullable(); 
            $table->string('kwhterjual1')->nullable();
            $table->string('kwhterjual2')->nullable();
            $table->string('kwhterjual3')->nullable();
            $table->string('kwhterjual4')->nullable();
            $table->string('kwhterjual5')->nullable();
            $table->string('kwhterjual6')->nullable();
            $table->string('kwhterjual7')->nullable();
            $table->string('kwhterjual8')->nullable();
            $table->string('kwhterjual9')->nullable();
            $table->string('kwhterjual10')->nullable();
            $table->string('kwhterjual11')->nullable();
            $table->string('kwhterjual12')->nullable(); 
            $table->string('nilai1')->nullable();
            $table->string('nilai2')->nullable();
            $table->string('nilai3')->nullable();
            $table->string('nilai4')->nullable();
            $table->string('nilai5')->nullable();
            $table->string('nilai6')->nullable();
            $table->string('nilai7')->nullable();
            $table->string('nilai8')->nullable();
            $table->string('nilai9')->nullable();
            $table->string('nilai10')->nullable();
            $table->string('nilai11')->nullable();
            $table->string('nilai12')->nullable(); 
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
        Schema::dropIfExists('t016001_s');
    }
};
