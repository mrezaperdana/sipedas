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
        Schema::create('t019001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('catatan')->nullable();
            $table->string('kelompokt')->nullable();
            $table->string('kelompok1')->nullable();
            $table->string('kelompok2')->nullable();
            $table->string('kelompok3')->nullable();
            $table->string('kelompok4')->nullable();
            $table->string('kelompok5')->nullable();
            $table->string('kelompok6')->nullable();
            $table->string('kelompok7')->nullable();
            $table->string('kelompok8')->nullable();

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
        Schema::dropIfExists('t019001_s');
    }
};
