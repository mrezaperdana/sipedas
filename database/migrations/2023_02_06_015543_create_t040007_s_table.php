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
        Schema::create('t040007_s', function (Blueprint $table) {
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
            $table->string('football5', 9)->nullable();
            $table->string('football6', 9)->nullable();
            $table->string('football7', 9)->nullable();
            $table->string('football8', 9)->nullable();
            $table->string('football9', 9)->nullable();
            $table->string('football10', 9)->nullable();
            $table->string('volleyt', 9)->nullable();
            $table->string('volley1', 9)->nullable();
            $table->string('volley2', 9)->nullable();
            $table->string('volley3', 9)->nullable();
            $table->string('volley4', 9)->nullable();
            $table->string('volley5', 9)->nullable();
            $table->string('volley6', 9)->nullable();
            $table->string('volley7', 9)->nullable();
            $table->string('volley8', 9)->nullable();
            $table->string('volley9', 9)->nullable();
            $table->string('volley10', 9)->nullable();
            $table->string('tennist', 9)->nullable();
            $table->string('tennis1', 9)->nullable();
            $table->string('tennis2', 9)->nullable();
            $table->string('tennis3', 9)->nullable();
            $table->string('tennis4', 9)->nullable();
            $table->string('tennis5', 9)->nullable();
            $table->string('tennis6', 9)->nullable();
            $table->string('tennis7', 9)->nullable();
            $table->string('tennis8', 9)->nullable();
            $table->string('tennis9', 9)->nullable();
            $table->string('tennis10', 9)->nullable();
            $table->string('badmintont', 9)->nullable();
            $table->string('badminton1', 9)->nullable();
            $table->string('badminton2', 9)->nullable();
            $table->string('badminton3', 9)->nullable();
            $table->string('badminton4', 9)->nullable();
            $table->string('badminton5', 9)->nullable();
            $table->string('badminton6', 9)->nullable();
            $table->string('badminton7', 9)->nullable();
            $table->string('badminton8', 9)->nullable();
            $table->string('badminton9', 9)->nullable();
            $table->string('badminton10', 9)->nullable();
            $table->string('table_tennist', 9)->nullable();
            $table->string('table_tennis1', 9)->nullable();
            $table->string('table_tennis2', 9)->nullable();
            $table->string('table_tennis3', 9)->nullable();
            $table->string('table_tennis4', 9)->nullable();
            $table->string('table_tennis5', 9)->nullable();
            $table->string('table_tennis6', 9)->nullable();
            $table->string('table_tennis7', 9)->nullable();
            $table->string('table_tennis8', 9)->nullable();
            $table->string('table_tennis9', 9)->nullable();
            $table->string('table_tennis10', 9)->nullable();
            $table->string('basketballt', 9)->nullable();
            $table->string('basketball1', 9)->nullable();
            $table->string('basketball2', 9)->nullable();
            $table->string('basketball3', 9)->nullable();
            $table->string('basketball4', 9)->nullable();
            $table->string('basketball5', 9)->nullable();
            $table->string('basketball6', 9)->nullable();
            $table->string('basketball7', 9)->nullable();
            $table->string('basketball8', 9)->nullable();
            $table->string('basketball9', 9)->nullable();
            $table->string('basketball10', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t040007_s');
    }
};
