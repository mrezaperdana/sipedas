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
        Schema::create('t027004_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('chairmant')->nullable();
            $table->string('chairman1')->nullable();
            $table->string('chairman2')->nullable();
            $table->string('chairman3')->nullable();
            $table->string('chairman4')->nullable();
            $table->string('chairman5')->nullable();
            $table->string('vicet')->nullable();
            $table->string('vice1')->nullable();
            $table->string('vice2')->nullable();
            $table->string('vice3')->nullable();
            $table->string('vice4')->nullable();
            $table->string('vice5')->nullable();
            $table->string('secretaryt')->nullable();
            $table->string('secretary1')->nullable();
            $table->string('secretary2')->nullable();
            $table->string('secretary3')->nullable();
            $table->string('secretary4')->nullable();
            $table->string('secretary5')->nullable();
            $table->string('membert')->nullable();
            $table->string('member1')->nullable();
            $table->string('member2')->nullable();
            $table->string('member3')->nullable();
            $table->string('member4')->nullable();
            $table->string('member5')->nullable();
            $table->string('totalt')->nullable();
            $table->string('total1')->nullable();
            $table->string('total2')->nullable();
            $table->string('total3')->nullable();
            $table->string('total4')->nullable();
            $table->string('total5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t027004_s');
    }
};
