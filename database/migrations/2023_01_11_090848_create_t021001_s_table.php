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
        Schema::create('t021001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('hutanlindungt')->nullable();
            $table->string('hutanlindung1')->nullable();
            $table->string('hutanlindung2')->nullable();
            $table->string('hutanlindung3')->nullable();
            $table->string('hutanlindung4')->nullable();
            $table->string('hutanlindung5')->nullable();
            $table->string('hutanlindung6')->nullable();
            $table->string('hutanlindung7')->nullable();
            $table->string('hutanlindung8')->nullable();
            $table->string('hutanproduksit')->nullable();
            $table->string('hutanproduksi1')->nullable();
            $table->string('hutanproduksi2')->nullable();
            $table->string('hutanproduksi3')->nullable();
            $table->string('hutanproduksi4')->nullable();
            $table->string('hutanproduksi5')->nullable();
            $table->string('hutanproduksi6')->nullable();
            $table->string('hutanproduksi7')->nullable();
            $table->string('hutanproduksi8')->nullable();
            $table->string('hutanterbatast')->nullable();
            $table->string('hutanterbatas1')->nullable();
            $table->string('hutanterbatas2')->nullable();
            $table->string('hutanterbatas3')->nullable();
            $table->string('hutanterbatas4')->nullable();
            $table->string('hutanterbatas5')->nullable();
            $table->string('hutanterbatas6')->nullable();
            $table->string('hutanterbatas7')->nullable();
            $table->string('hutanterbatas8')->nullable();
            $table->string('hutankonservasit')->nullable();
            $table->string('hutankonservasi1')->nullable();
            $table->string('hutankonservasi2')->nullable();
            $table->string('hutankonservasi3')->nullable();
            $table->string('hutankonservasi4')->nullable();
            $table->string('hutankonservasi5')->nullable();
            $table->string('hutankonservasi6')->nullable();
            $table->string('hutankonservasi7')->nullable();
            $table->string('hutankonservasi8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t021001_s');
    }
};
