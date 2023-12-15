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
        Schema::create('t049001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('banjir1')->nullable();
            $table->string('banjir2')->nullable();
            $table->string('banjir3')->nullable();
            $table->string('banjir4')->nullable();
            $table->string('banjir5')->nullable();
            $table->string('banjir6')->nullable();
            $table->string('banjir7')->nullable();
            $table->string('banjir8')->nullable();
            $table->string('banjirt')->nullable();
            $table->string('longsor1')->nullable();
            $table->string('longsor2')->nullable();
            $table->string('longsor3')->nullable();
            $table->string('longsor4')->nullable();
            $table->string('longsor5')->nullable();
            $table->string('longsor6')->nullable();
            $table->string('longsor7')->nullable();
            $table->string('longsor8')->nullable();
            $table->string('longsort')->nullable();
            $table->string('angin1')->nullable();
            $table->string('angin2')->nullable();
            $table->string('angin3')->nullable();
            $table->string('angin4')->nullable();
            $table->string('angin5')->nullable();
            $table->string('angin6')->nullable();
            $table->string('angin7')->nullable();
            $table->string('angin8')->nullable();
            $table->string('angint')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t049001_s');
    }
};
