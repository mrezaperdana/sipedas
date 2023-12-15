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
        Schema::create('t044004_s', function (Blueprint $table) {
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
            $table->string('lingkungan5')->nullable();
            $table->string('lingkungan6')->nullable();
            $table->string('lingkungan7')->nullable();
            $table->string('lingkungan8')->nullable();
            $table->string('lingkungan9')->nullable();
            $table->string('lingkungan10')->nullable();
            $table->string('lingkungan11')->nullable();
            $table->string('lingkungan12')->nullable();
            $table->string('dusunt')->nullable();
            $table->string('dusun1')->nullable();
            $table->string('dusun2')->nullable();
            $table->string('dusun3')->nullable();
            $table->string('dusun4')->nullable();
            $table->string('dusun5')->nullable();
            $table->string('dusun6')->nullable();
            $table->string('dusun7')->nullable();
            $table->string('dusun8')->nullable();
            $table->string('dusun9')->nullable();
            $table->string('dusun10')->nullable();
            $table->string('dusun11')->nullable();
            $table->string('dusun12')->nullable();
            $table->string('rwt')->nullable();
            $table->string('rw1')->nullable();
            $table->string('rw2')->nullable();
            $table->string('rw3')->nullable();
            $table->string('rw4')->nullable();
            $table->string('rw5')->nullable();
            $table->string('rw6')->nullable();
            $table->string('rw7')->nullable();
            $table->string('rw8')->nullable();
            $table->string('rw9')->nullable();
            $table->string('rw10')->nullable();
            $table->string('rw11')->nullable();
            $table->string('rw12')->nullable();
            $table->string('rtt')->nullable();
            $table->string('rt1')->nullable();
            $table->string('rt2')->nullable();
            $table->string('rt3')->nullable();
            $table->string('rt4')->nullable();
            $table->string('rt5')->nullable();
            $table->string('rt6')->nullable();
            $table->string('rt7')->nullable();
            $table->string('rt8')->nullable();
            $table->string('rt9')->nullable();
            $table->string('rt10')->nullable();
            $table->string('rt11')->nullable();
            $table->string('rt12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t044004_s');
    }
};
