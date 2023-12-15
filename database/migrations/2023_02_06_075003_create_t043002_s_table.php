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
        Schema::create('t043002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('jarakkec1')->nullable();
            $table->string('jarakkec2')->nullable();
            $table->string('jarakkec3')->nullable();
            $table->string('jarakkec4')->nullable();
            $table->string('jarakkab1')->nullable();
            $table->string('jarakkab2')->nullable();
            $table->string('jarakkab3')->nullable();
            $table->string('jarakkab4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t043002_s');
    }
};
