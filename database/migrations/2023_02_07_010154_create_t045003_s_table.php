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
        Schema::create('t045003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('jumlaht')->nullable();
            $table->string('jumlah1')->nullable();
            $table->string('jumlah2')->nullable();
            $table->string('jumlah3')->nullable();
            $table->string('jumlah4')->nullable();
            $table->string('jumlah5')->nullable();
            $table->string('jumlah6')->nullable();
            $table->string('jumlah7')->nullable();
            $table->string('jumlah8')->nullable();
            $table->string('jumlah9')->nullable();
            $table->string('jumlah10')->nullable();
            $table->string('jumlah11')->nullable();
            $table->string('jumlah12')->nullable();
            $table->string('jumlah13')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t045003_s');
    }
};
