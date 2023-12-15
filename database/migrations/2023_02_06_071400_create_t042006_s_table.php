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
        Schema::create('t042006_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('miskint')->nullable();
            $table->string('miskin1')->nullable();
            $table->string('miskin2')->nullable();
            $table->string('miskin3')->nullable();
            $table->string('miskin4')->nullable();
            $table->string('askeskint')->nullable();
            $table->string('askeskin1')->nullable();
            $table->string('askeskin2')->nullable();
            $table->string('askeskin3')->nullable();
            $table->string('askeskin4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t042006_s');
    }
};
