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
        Schema::create('t023003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('backwardt')->nullable();
            $table->string('backward1')->nullable();
            $table->string('backward2')->nullable();
            $table->string('backward3')->nullable();
            $table->string('backward4')->nullable();
            $table->string('backward5')->nullable();
            $table->string('backward6')->nullable();
            $table->string('backward7')->nullable();
            $table->string('backward8')->nullable();
            $table->string('developingt')->nullable();
            $table->string('developing1')->nullable();
            $table->string('developing2')->nullable();
            $table->string('developing3')->nullable();
            $table->string('developing4')->nullable();
            $table->string('developing5')->nullable();
            $table->string('developing6')->nullable();
            $table->string('developing7')->nullable();
            $table->string('developing8')->nullable();
            $table->string('developedt')->nullable();
            $table->string('developed1')->nullable();
            $table->string('developed2')->nullable();
            $table->string('developed3')->nullable();
            $table->string('developed4')->nullable();
            $table->string('developed5')->nullable();
            $table->string('developed6')->nullable();
            $table->string('developed7')->nullable();
            $table->string('developed8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t023003_s');
    }
};
