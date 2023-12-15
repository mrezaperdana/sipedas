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
        Schema::create('entriexcels', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->foreignid('user_id');
            $table->string('kodetabel');
            $table->string('filename');
            $table->string('filepath');
            $table->string('templatename')->nullable();
            $table->string('templatepath')->nullable();
            $table->string('tahun');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->string('catatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entriexcels');
    }
};
