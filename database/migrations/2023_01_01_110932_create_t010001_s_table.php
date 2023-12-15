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
        Schema::create('t010001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('omzet1')->nullable();
            $table->string('omzet2')->nullable();
            $table->string('omzet3')->nullable();
            $table->string('omzet4')->nullable();
            $table->string('omzet5')->nullable();
            $table->string('omzet6')->nullable();
            $table->string('omzet7')->nullable();
            $table->string('omzet8')->nullable();
            $table->string('omzett')->nullable();
            $table->string('laba1')->nullable();
            $table->string('laba2')->nullable();
            $table->string('laba3')->nullable();
            $table->string('laba4')->nullable();
            $table->string('laba5')->nullable();
            $table->string('laba6')->nullable();
            $table->string('laba7')->nullable();
            $table->string('laba8')->nullable();
            $table->string('labat')->nullable();
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
        Schema::dropIfExists('t010001_s');
    }
};
