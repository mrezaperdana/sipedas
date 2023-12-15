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
        Schema::create('t047001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('layakt')->nullable();
            $table->string('layak1')->nullable();
            $table->string('layak2')->nullable();
            $table->string('layak3')->nullable();
            $table->string('layak4')->nullable();
            $table->string('taklayakt')->nullable();
            $table->string('taklayak1')->nullable();
            $table->string('taklayak2')->nullable();
            $table->string('taklayak3')->nullable();
            $table->string('taklayak4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('t047001_s');
    }
};
