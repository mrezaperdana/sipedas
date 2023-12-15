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
        Schema::create('t022002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('jabatanlt')->nullable();
            $table->string('jabatanl1')->nullable();
            $table->string('jabatanl2')->nullable();
            $table->string('jabatanl3')->nullable();
            $table->string('jabatanl4')->nullable();
            $table->string('jabatanl5')->nullable();
            $table->string('jabatanl6')->nullable();
            $table->string('jabatanl7')->nullable();
            $table->string('jabatanpt')->nullable();
            $table->string('jabatanp1')->nullable();
            $table->string('jabatanp2')->nullable();
            $table->string('jabatanp3')->nullable();
            $table->string('jabatanp4')->nullable();
            $table->string('jabatanp5')->nullable();
            $table->string('jabatanp6')->nullable();
            $table->string('jabatanp7')->nullable();
            $table->string('jabatanjumlaht')->nullable();
            $table->string('jabatanjumlah1')->nullable();
            $table->string('jabatanjumlah2')->nullable();
            $table->string('jabatanjumlah3')->nullable();
            $table->string('jabatanjumlah4')->nullable();
            $table->string('jabatanjumlah5')->nullable();
            $table->string('jabatanjumlah6')->nullable();
            $table->string('jabatanjumlah7')->nullable();
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t022002_s');
    }
};
