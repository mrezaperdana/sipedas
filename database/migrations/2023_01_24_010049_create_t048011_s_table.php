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
        Schema::create('t048011_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('speedyt')->nullable();
            $table->string('speedy1')->nullable();
            $table->string('speedy2')->nullable();
            $table->string('speedy3')->nullable();
            $table->string('speedy4')->nullable();
            $table->string('speedy5')->nullable();
            $table->string('speedy6')->nullable();
            $table->string('speedy7')->nullable();
            $table->string('speedy8')->nullable();
            $table->string('speedy9')->nullable();
            $table->string('speedy10')->nullable();
            $table->string('speedy11')->nullable();
            $table->string('speedy12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t048011_s');
    }
};
