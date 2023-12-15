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
        Schema::create('t002001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('target1')->nullable();
            $table->string('realisasi1')->nullable();
            $table->string('target2')->nullable();
            $table->string('realisasi2')->nullable();
            $table->string('target3')->nullable();
            $table->string('realisasi3')->nullable();
            $table->string('target4')->nullable();
            $table->string('realisasi4')->nullable();
            $table->string('target5')->nullable();
            $table->string('realisasi5')->nullable();
            $table->string('target6')->nullable();
            $table->string('realisasi6')->nullable();
            $table->string('target7')->nullable();
            $table->string('realisasi7')->nullable();
            $table->string('target8')->nullable();
            $table->string('realisasi8')->nullable();
            $table->string('lainnya')->default('Lainnya... (Isi Jika ada)');
            $table->string('target9')->default(0);
            $table->string('realisasi9')->default(0);
            $table->string('targett')->nullable();
            $table->string('realisasit')->nullable();
            $table->string('catatan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t002001_s');
    }
};
