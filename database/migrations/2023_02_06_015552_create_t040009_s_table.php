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
        Schema::create('t040009_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('poolt')->nullable();
            $table->string('pool1')->nullable();
            $table->string('pool2')->nullable();
            $table->string('pool3')->nullable();
            $table->string('pool4')->nullable();
            $table->string('pool5')->nullable();
            $table->string('pool6')->nullable();
            $table->string('pool7')->nullable();
            $table->string('pool8')->nullable();
            $table->string('pool9')->nullable();
            $table->string('pool10')->nullable();
            $table->string('otherst')->nullable();
            $table->string('others1')->nullable();
            $table->string('others2')->nullable();
            $table->string('others3')->nullable();
            $table->string('others4')->nullable();
            $table->string('others5')->nullable();
            $table->string('others6')->nullable();
            $table->string('others7')->nullable();
            $table->string('others8')->nullable();
            $table->string('others9')->nullable();
            $table->string('others10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t040009_s');
    }
};
