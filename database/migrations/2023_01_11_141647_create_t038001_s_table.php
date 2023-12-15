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
        Schema::create('t038001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('penerimarencanat')->nullable();
            $table->string('penerimarencana1')->nullable();
            $table->string('penerimarencana2')->nullable();
            $table->string('penerimarencana3')->nullable();
            $table->string('penerimarencana4')->nullable();
            $table->string('penerimarencana5')->nullable();
            $table->string('penerimarencana6')->nullable();
            $table->string('penerimarencana7')->nullable();
            $table->string('penerimarencana8')->nullable();
            $table->string('penerimarealisasit')->nullable();
            $table->string('penerimarealisasi1')->nullable();
            $table->string('penerimarealisasi2')->nullable();
            $table->string('penerimarealisasi3')->nullable();
            $table->string('penerimarealisasi4')->nullable();
            $table->string('penerimarealisasi5')->nullable();
            $table->string('penerimarealisasi6')->nullable();
            $table->string('penerimarealisasi7')->nullable();
            $table->string('penerimarealisasi8')->nullable();
            $table->string('anggaranrencana')->nullable();
            $table->string('anggaranrencanat')->nullable();
            $table->string('anggaranrencana1')->nullable();
            $table->string('anggaranrencana2')->nullable();
            $table->string('anggaranrencana3')->nullable();
            $table->string('anggaranrencana4')->nullable();
            $table->string('anggaranrencana5')->nullable();
            $table->string('anggaranrencana6')->nullable();
            $table->string('anggaranrencana7')->nullable();
            $table->string('anggaranrencana8')->nullable();
            $table->string('anggaranrealisasit')->nullable();
            $table->string('anggaranrealisasi1')->nullable();
            $table->string('anggaranrealisasi2')->nullable();
            $table->string('anggaranrealisasi3')->nullable();
            $table->string('anggaranrealisasi4')->nullable();
            $table->string('anggaranrealisasi5')->nullable();
            $table->string('anggaranrealisasi6')->nullable();
            $table->string('anggaranrealisasi7')->nullable();
            $table->string('anggaranrealisasi8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t038001_s');
    }
};
