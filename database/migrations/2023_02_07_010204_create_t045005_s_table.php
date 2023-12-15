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
        Schema::create('t045005_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('bpdt')->nullable();
            $table->string('bpd1')->nullable();
            $table->string('bpd2')->nullable();
            $table->string('bpd3')->nullable();
            $table->string('bpd4')->nullable();
            $table->string('bpd5')->nullable();
            $table->string('bpd6')->nullable();
            $table->string('bpd7')->nullable();
            $table->string('bpd8')->nullable();
            $table->string('bpd9')->nullable();
            $table->string('youtht')->nullable();
            $table->string('youth1')->nullable();
            $table->string('youth2')->nullable();
            $table->string('youth3')->nullable();
            $table->string('youth4')->nullable();
            $table->string('youth5')->nullable();
            $table->string('youth6')->nullable();
            $table->string('youth7')->nullable();
            $table->string('youth8')->nullable();
            $table->string('youth9')->nullable();
            $table->string('p3at')->nullable();
            $table->string('p3a1')->nullable();
            $table->string('p3a2')->nullable();
            $table->string('p3a3')->nullable();
            $table->string('p3a4')->nullable();
            $table->string('p3a5')->nullable();
            $table->string('p3a6')->nullable();
            $table->string('p3a7')->nullable();
            $table->string('p3a8')->nullable();
            $table->string('p3a9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t045005_s');
    }
};
