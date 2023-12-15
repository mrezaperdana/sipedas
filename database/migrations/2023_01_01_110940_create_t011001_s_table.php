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
        Schema::create('t011001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('uraian')->nullable();
            $table->string('jumlahusaha1')->nullable();
            $table->string('omzet1')->nullable();
            $table->string('jumlahusaha2')->nullable();
            $table->string('omzet2')->nullable();
            $table->string('jumlahusaha3')->nullable();
            $table->string('omzet3')->nullable();
            $table->string('jumlahusaha4')->nullable();
            $table->string('omzet4')->nullable();
            $table->string('lainnya')->default('Lainnya... (Isi Jika ada)');
            $table->string('jumlahusaha5')->nullable();
            $table->string('omzet5')->nullable();
            $table->string('jumlahusahat')->nullable();
            $table->string('omzett')->nullable();
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
        Schema::dropIfExists('t011001_s');
    }
};
