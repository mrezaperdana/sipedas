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
        Schema::create('t037001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('pengusahat')->nullable();
            $table->string('pengusaha1')->nullable();
            $table->string('pengusaha2')->nullable();
            $table->string('pengusaha3')->nullable();
            $table->string('pengusaha4')->nullable();
            $table->string('pengusaha5')->nullable();
            $table->string('pengusaha6')->nullable();
            $table->string('pengusaha7')->nullable();
            $table->string('pengusaha8')->nullable();
            $table->string('luast')->nullable();
            $table->string('luas1')->nullable();
            $table->string('luas2')->nullable();
            $table->string('luas3')->nullable();
            $table->string('luas4')->nullable();
            $table->string('luas5')->nullable();
            $table->string('luas6')->nullable();
            $table->string('luas7')->nullable();
            $table->string('luas8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t037001_s');
    }
};
