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
        Schema::create('t019002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('belumt')->nullable();
            $table->string('belum1')->nullable();
            $table->string('belum2')->nullable();
            $table->string('belum3')->nullable();
            $table->string('belum4')->nullable();
            $table->string('belum5')->nullable();
            $table->string('belum6')->nullable();
            $table->string('belum7')->nullable();
            $table->string('belum8')->nullable();
            $table->string('berizint')->nullable();
            $table->string('berizin1')->nullable();
            $table->string('berizin2')->nullable();
            $table->string('berizin3')->nullable();
            $table->string('berizin4')->nullable();
            $table->string('berizin5')->nullable();
            $table->string('berizin6')->nullable();
            $table->string('berizin7')->nullable();
            $table->string('berizin8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t019002_s');
    }
};
