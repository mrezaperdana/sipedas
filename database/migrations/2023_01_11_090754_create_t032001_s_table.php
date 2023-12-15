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
        Schema::create('t032001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('sawaht')->nullable();
            $table->string('sawah1')->nullable();
            $table->string('sawah2')->nullable();
            $table->string('sawah3')->nullable();
            $table->string('sawah4')->nullable();
            $table->string('sawah5')->nullable();
            $table->string('sawah6')->nullable();
            $table->string('sawah7')->nullable();
            $table->string('sawah8')->nullable();
            $table->string('bukansawaht')->nullable();
            $table->string('bukansawah1')->nullable();
            $table->string('bukansawah2')->nullable();
            $table->string('bukansawah3')->nullable();
            $table->string('bukansawah4')->nullable();
            $table->string('bukansawah5')->nullable();
            $table->string('bukansawah6')->nullable();
            $table->string('bukansawah7')->nullable();
            $table->string('bukansawah8')->nullable();
            $table->string('jumlaht')->nullable();
            $table->string('jumlah1')->nullable();
            $table->string('jumlah2')->nullable();
            $table->string('jumlah3')->nullable();
            $table->string('jumlah4')->nullable();
            $table->string('jumlah5')->nullable();
            $table->string('jumlah6')->nullable();
            $table->string('jumlah7')->nullable();
            $table->string('jumlah8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t032001_s');
    }
};
