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
        Schema::create('t047007_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
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
            $table->string('layak5')->nullable();
            $table->string('layak6')->nullable();
            $table->string('layak7')->nullable();
            $table->string('layak8')->nullable();
            $table->string('layak9')->nullable();
            $table->string('layak10')->nullable();
            $table->string('taklayakt')->nullable();
            $table->string('taklayak1')->nullable();
            $table->string('taklayak2')->nullable();
            $table->string('taklayak3')->nullable();
            $table->string('taklayak4')->nullable();
            $table->string('taklayak5')->nullable();
            $table->string('taklayak6')->nullable();
            $table->string('taklayak7')->nullable();
            $table->string('taklayak8')->nullable();
            $table->string('taklayak9')->nullable();
            $table->string('taklayak10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t047007_s');
    }
};
