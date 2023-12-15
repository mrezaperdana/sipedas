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
        Schema::create('t019003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('cetakt')->nullable();
            $table->string('cetak1')->nullable();
            $table->string('cetak2')->nullable();
            $table->string('cetak3')->nullable();
            $table->string('cetak4')->nullable();
            $table->string('onlinet')->nullable();
            $table->string('online1')->nullable();
            $table->string('online2')->nullable();
            $table->string('online3')->nullable();
            $table->string('online4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t019003_s');
    }
};
