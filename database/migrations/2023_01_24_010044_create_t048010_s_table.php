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
        Schema::create('t048010_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('sambungant')->nullable();
            $table->string('sambungan1')->nullable();
            $table->string('sambungan2')->nullable();
            $table->string('sambungan3')->nullable();
            $table->string('sambungan4')->nullable();
            $table->string('sambungan5')->nullable();
            $table->string('sambungan6')->nullable();
            $table->string('sambungan7')->nullable();
            $table->string('sambungan8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t048010_s');
    }
};
