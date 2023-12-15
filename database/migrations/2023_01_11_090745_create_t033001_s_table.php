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
        Schema::create('t033001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('restorant')->nullable();
            $table->string('restoran1')->nullable();
            $table->string('restoran2')->nullable();
            $table->string('restoran3')->nullable();
            $table->string('restoran4')->nullable();
            $table->string('restoran5')->nullable();
            $table->string('restoran6')->nullable();
            $table->string('restoran7')->nullable();
            $table->string('restoran8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t033001_s');
    }
};
