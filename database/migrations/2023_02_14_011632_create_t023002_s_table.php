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
        Schema::create('t023002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('helpt')->nullable();
            $table->string('help1')->nullable();
            $table->string('help2')->nullable();
            $table->string('help3')->nullable();
            $table->string('help4')->nullable();
            $table->string('help5')->nullable();
            $table->string('help6')->nullable();
            $table->string('help7')->nullable();
            $table->string('help8')->nullable();
            $table->string('initiativet')->nullable();
            $table->string('initiative1')->nullable();
            $table->string('initiative2')->nullable();
            $table->string('initiative3')->nullable();
            $table->string('initiative4')->nullable();
            $table->string('initiative5')->nullable();
            $table->string('initiative6')->nullable();
            $table->string('initiative7')->nullable();
            $table->string('initiative8')->nullable();
            $table->string('sufficiencyt')->nullable();
            $table->string('sufficiency1')->nullable();
            $table->string('sufficiency2')->nullable();
            $table->string('sufficiency3')->nullable();
            $table->string('sufficiency4')->nullable();
            $table->string('sufficiency5')->nullable();
            $table->string('sufficiency6')->nullable();
            $table->string('sufficiency7')->nullable();
            $table->string('sufficiency8')->nullable();
            $table->string('totalt')->nullable();
            $table->string('total1')->nullable();
            $table->string('total2')->nullable();
            $table->string('total3')->nullable();
            $table->string('total4')->nullable();
            $table->string('total5')->nullable();
            $table->string('total6')->nullable();
            $table->string('total7')->nullable();
            $table->string('total8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t023002_s');
    }
};
