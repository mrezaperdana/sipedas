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
        Schema::create('t007001_s', function (Blueprint $table) {
            // kodim
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);

            $table->string('rpns1')->nullable();
            $table->string('rpns2')->nullable();
            $table->string('rpns3')->nullable();
            $table->string('rpns4')->nullable();
            $table->string('rpnst')->nullable();
            $table->string('rtni1')->nullable();
            $table->string('rtni2')->nullable();
            $table->string('rtni3')->nullable();
            $table->string('rtni4')->nullable();
            $table->string('rtnit')->nullable();
            $table->string('tpns1')->nullable();
            $table->string('tpns2')->nullable();
            $table->string('tpns3')->nullable();
            $table->string('tpns4')->nullable();
            $table->string('tpnst')->nullable();
            $table->string('ttni1')->nullable();
            $table->string('ttni2')->nullable();
            $table->string('ttni3')->nullable();
            $table->string('ttni4')->nullable();
            $table->string('ttnit')->nullable();
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
        Schema::dropIfExists('t007001_s');
    }
};
