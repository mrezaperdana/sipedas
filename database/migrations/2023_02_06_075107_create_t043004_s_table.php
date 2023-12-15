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
        Schema::create('t043004_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('lingkungant')->nullable();
            $table->string('lingkungan1')->nullable();
            $table->string('lingkungan2')->nullable();
            $table->string('lingkungan3')->nullable();
            $table->string('lingkungan4')->nullable();
            $table->string('dusunt')->nullable();
            $table->string('dusun1')->nullable();
            $table->string('dusun2')->nullable();
            $table->string('dusun3')->nullable();
            $table->string('dusun4')->nullable();
            $table->string('rwt')->nullable();
            $table->string('rw1')->nullable();
            $table->string('rw2')->nullable();
            $table->string('rw3')->nullable();
            $table->string('rw4')->nullable();
            $table->string('rtt')->nullable();
            $table->string('rt1')->nullable();
            $table->string('rt2')->nullable();
            $table->string('rt3')->nullable();
            $table->string('rt4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t043004_s');
    }
};
