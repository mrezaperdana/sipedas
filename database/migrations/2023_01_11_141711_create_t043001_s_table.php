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
        Schema::create('t043001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('pantai1')->nullable();
            $table->string('pantai2')->nullable();
            $table->string('pantai3')->nullable();
            $table->string('pantai4')->nullable();
            $table->string('bukanpantai1')->nullable();
            $table->string('bukanpantai2')->nullable();
            $table->string('bukanpantai3')->nullable();
            $table->string('bukanpantai4')->nullable();
            $table->string('datar1')->nullable();
            $table->string('datar2')->nullable();
            $table->string('datar3')->nullable();
            $table->string('datar4')->nullable();
            $table->string('bukit1')->nullable();
            $table->string('bukit2')->nullable();
            $table->string('bukit3')->nullable();
            $table->string('bukit4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t043001_s');
    }
};
