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
        Schema::create('t015001_s', function (Blueprint $table) {
            // peternakan
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('produksi1')->nullable();
            $table->string('produksi2')->nullable();
            $table->string('produksi3')->nullable();
            $table->string('produksi4')->nullable();
            $table->string('produksi5')->nullable();
            $table->string('produksi6')->nullable();
            $table->string('produksi7')->nullable();
            $table->string('produksi8')->nullable();
            $table->string('produksi9')->nullable();
            $table->string('produksi10')->nullable();
            $table->string('produksi11')->nullable();
            $table->string('produksi12')->nullable();
            $table->string('produksi13')->nullable();
            $table->string('produksi14')->nullable();
            $table->string('produksi15')->nullable();
            $table->string('produksi16')->nullable();
            $table->string('produksi17')->nullable();
            $table->string('produksi18')->nullable();
            $table->string('produksi19')->nullable();
            $table->string('produksi20')->nullable();
            $table->string('produksi21')->nullable();
            $table->string('produksi22')->nullable();

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
        Schema::dropIfExists('t015001_s');
    }
};
