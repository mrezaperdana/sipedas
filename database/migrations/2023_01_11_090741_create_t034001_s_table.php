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
        Schema::create('t034001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('olahragat')->nullable();
            $table->string('olahraga1')->nullable();
            $table->string('olahraga2')->nullable();
            $table->string('olahraga3')->nullable();
            $table->string('olahraga4')->nullable();
            $table->string('olahraga5')->nullable();
            $table->string('olahraga6')->nullable();
            $table->string('olahraga7')->nullable();
            $table->string('olahraga8')->nullable();
            $table->string('ekonomit')->nullable();
            $table->string('ekonomi1')->nullable();
            $table->string('ekonomi2')->nullable();
            $table->string('ekonomi3')->nullable();
            $table->string('ekonomi4')->nullable();
            $table->string('ekonomi5')->nullable();
            $table->string('ekonomi6')->nullable();
            $table->string('ekonomi7')->nullable();
            $table->string('ekonomi8')->nullable();
            $table->string('sosialt')->nullable();
            $table->string('sosial1')->nullable();
            $table->string('sosial2')->nullable();
            $table->string('sosial3')->nullable();
            $table->string('sosial4')->nullable();
            $table->string('sosial5')->nullable();
            $table->string('sosial6')->nullable();
            $table->string('sosial7')->nullable();
            $table->string('sosial8')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t034001_s');
    }
};
