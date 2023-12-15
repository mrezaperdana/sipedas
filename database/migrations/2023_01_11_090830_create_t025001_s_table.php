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
        Schema::create('t025001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('anggotalt')->nullable();
            $table->string('anggotal1')->nullable();
            $table->string('anggotal2')->nullable();
            $table->string('anggotal3')->nullable();
            $table->string('anggotal4')->nullable();
            $table->string('anggotal5')->nullable();
            $table->string('anggotal6')->nullable();
            $table->string('anggotal7')->nullable();
            $table->string('anggotal8')->nullable();
            $table->string('anggotal9')->nullable();
            $table->string('anggotal10')->nullable();
            $table->string('anggotal11')->nullable();
            $table->string('anggotal12')->nullable();
            $table->string('anggotapt')->nullable();
            $table->string('anggotap1')->nullable();
            $table->string('anggotap2')->nullable();
            $table->string('anggotap3')->nullable();
            $table->string('anggotap4')->nullable();
            $table->string('anggotap5')->nullable();
            $table->string('anggotap6')->nullable();
            $table->string('anggotap7')->nullable();
            $table->string('anggotap8')->nullable();
            $table->string('anggotap9')->nullable();
            $table->string('anggotap10')->nullable();
            $table->string('anggotap11')->nullable();
            $table->string('anggotap12')->nullable();
            $table->string('anggotajumlaht')->nullable();
            $table->string('anggotajumlah1')->nullable();
            $table->string('anggotajumlah2')->nullable();
            $table->string('anggotajumlah3')->nullable();
            $table->string('anggotajumlah4')->nullable();
            $table->string('anggotajumlah5')->nullable();
            $table->string('anggotajumlah6')->nullable();
            $table->string('anggotajumlah7')->nullable();
            $table->string('anggotajumlah8')->nullable();
            $table->string('anggotajumlah9')->nullable();
            $table->string('anggotajumlah10')->nullable();
            $table->string('anggotajumlah11')->nullable();
            $table->string('anggotajumlah12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t025001_s');
    }
};
