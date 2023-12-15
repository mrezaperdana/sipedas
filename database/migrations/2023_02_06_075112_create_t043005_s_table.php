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
        Schema::create('t043005_s', function (Blueprint $table) {
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
            $table->string('youtht')->nullable();
            $table->string('youth1')->nullable();
            $table->string('youth2')->nullable();
            $table->string('youth3')->nullable();
            $table->string('youth4')->nullable();
            $table->string('p3at')->nullable();
            $table->string('p3a1')->nullable();
            $table->string('p3a2')->nullable();
            $table->string('p3a3')->nullable();
            $table->string('p3a4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t043005_s');
    }
};
