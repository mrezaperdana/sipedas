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
        Schema::create('t036001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('tenagamedist')->nullable();
            $table->string('tenagamedis1')->nullable();
            $table->string('tenagamedis2')->nullable();
            $table->string('tenagamedis3')->nullable();
            $table->string('tenagamedis4')->nullable();
            $table->string('tenagamedis5')->nullable();
            $table->string('tenagamedis6')->nullable();
            $table->string('tenagamedis7')->nullable();
            $table->string('tenagamedis8')->nullable();
            $table->string('tenagamedis9')->nullable();
            $table->string('tenagamedis10')->nullable();
            $table->string('tenagamedis11')->nullable();
            $table->string('tenagamedis12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t036001_s');
    }
};
