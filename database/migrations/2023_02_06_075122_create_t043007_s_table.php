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
        Schema::create('t043007_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('footballt', 9)->nullable();
            $table->string('football1', 9)->nullable();
            $table->string('football2', 9)->nullable();
            $table->string('football3', 9)->nullable();
            $table->string('football4', 9)->nullable();
            $table->string('volleyt', 9)->nullable();
            $table->string('volley1', 9)->nullable();
            $table->string('volley2', 9)->nullable();
            $table->string('volley3', 9)->nullable();
            $table->string('volley4', 9)->nullable();
            $table->string('tennist', 9)->nullable();
            $table->string('tennis1', 9)->nullable();
            $table->string('tennis2', 9)->nullable();
            $table->string('tennis3', 9)->nullable();
            $table->string('tennis4', 9)->nullable();
            $table->string('badmintont', 9)->nullable();
            $table->string('badminton1', 9)->nullable();
            $table->string('badminton2', 9)->nullable();
            $table->string('badminton3', 9)->nullable();
            $table->string('badminton4', 9)->nullable();
            $table->string('table_tennist', 9)->nullable();
            $table->string('table_tennis1', 9)->nullable();
            $table->string('table_tennis2', 9)->nullable();
            $table->string('table_tennis3', 9)->nullable();
            $table->string('table_tennis4', 9)->nullable();
            $table->string('basketballt', 9)->nullable();
            $table->string('basketball1', 9)->nullable();
            $table->string('basketball2', 9)->nullable();
            $table->string('basketball3', 9)->nullable();
            $table->string('basketball4', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t043007_s');
    }
};
