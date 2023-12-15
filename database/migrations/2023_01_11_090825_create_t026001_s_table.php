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
        Schema::create('t026001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('polppt')->nullable();
            $table->string('polpp1')->nullable();
            $table->string('polpp2')->nullable();
            $table->string('polpp3')->nullable();
            $table->string('polpp4')->nullable();
            $table->string('polpp5')->nullable();
            $table->string('polpp6')->nullable();
            $table->string('polpp7')->nullable();
            $table->string('polpp8')->nullable();
            $table->string('pilmast')->nullable();
            $table->string('pilmas1')->nullable();
            $table->string('pilmas2')->nullable();
            $table->string('pilmas3')->nullable();
            $table->string('pilmas4')->nullable();
            $table->string('pilmas5')->nullable();
            $table->string('pilmas6')->nullable();
            $table->string('pilmas7')->nullable();
            $table->string('pilmas8')->nullable();
            $table->string('ket1')->nullable();
            $table->string('ket2')->nullable();
            $table->string('ket3')->nullable();
            $table->string('ket4')->nullable();
            $table->string('ket5')->nullable();
            $table->string('ket6')->nullable();
            $table->string('ket7')->nullable();
            $table->string('ket8')->nullable();
            $table->string('kett')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t026001_s');
    }
};
