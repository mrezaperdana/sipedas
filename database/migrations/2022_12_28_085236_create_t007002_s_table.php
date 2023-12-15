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
        Schema::create('t007002_s', function (Blueprint $table) {
                        // kodim

            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('rkmo1')->nullable();
            $table->string('rkmo2')->nullable();
            $table->string('rkmo3')->nullable();
            $table->string('rkmo4')->nullable();
            $table->string('rkmot')->nullable();
            $table->string('rkl1')->nullable();
            $table->string('rkl2')->nullable();
            $table->string('rkl3')->nullable();
            $table->string('rkl4')->nullable();
            $table->string('rklt')->nullable();
            $table->string('rkla1')->nullable();
            $table->string('rkla2')->nullable();
            $table->string('rkla3')->nullable();
            $table->string('rkla4')->nullable();
            $table->string('rklat')->nullable();
            $table->string('rklu1')->nullable();
            $table->string('rklu2')->nullable();
            $table->string('rklu3')->nullable();
            $table->string('rklu4')->nullable();
            $table->string('rklut')->nullable();
            $table->string('rkg1')->nullable();
            $table->string('rkg2')->nullable();
            $table->string('rkg3')->nullable();
            $table->string('rkg4')->nullable();
            $table->string('rkgt')->nullable();
            $table->string('rkc1')->nullable();
            $table->string('rkc2')->nullable();
            $table->string('rkc3')->nullable();
            $table->string('rkc4')->nullable();
            $table->string('rkct')->nullable();
            $table->string('rkd1')->nullable();
            $table->string('rkd2')->nullable();
            $table->string('rkd3')->nullable();
            $table->string('rkd4')->nullable();
            $table->string('rkdt')->nullable();
            $table->string('rkma1')->nullable();
            $table->string('rkma2')->nullable();
            $table->string('rkma3')->nullable();
            $table->string('rkma4')->nullable();
            $table->string('rkmat')->nullable();
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
        Schema::dropIfExists('t007002_s');
    }
};
