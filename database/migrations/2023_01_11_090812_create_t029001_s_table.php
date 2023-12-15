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
        Schema::create('t029001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('organisasit')->nullable();
            $table->string('organisasi1')->nullable();
            $table->string('organisasi2')->nullable();
            $table->string('organisasi3')->nullable();
            $table->string('organisasi4')->nullable();
            $table->string('organisasi5')->nullable();
            $table->string('organisasi6')->nullable();
            $table->string('organisasi7')->nullable();
            $table->string('organisasi8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t029001_s');
    }
};
