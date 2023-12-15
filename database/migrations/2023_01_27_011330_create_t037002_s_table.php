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
        Schema::create('t037002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('statet')->nullable();
            $table->string('state1')->nullable();
            $table->string('state2')->nullable();
            $table->string('state3')->nullable();
            $table->string('state4')->nullable();
            $table->string('state5')->nullable();
            $table->string('provincet')->nullable();
            $table->string('province1')->nullable();
            $table->string('province2')->nullable();
            $table->string('province3')->nullable();
            $table->string('province4')->nullable();
            $table->string('province5')->nullable();
            $table->string('regencyt')->nullable();
            $table->string('regency1')->nullable();
            $table->string('regency2')->nullable();
            $table->string('regency3')->nullable();
            $table->string('regency4')->nullable();
            $table->string('regency5')->nullable();
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
        Schema::dropIfExists('t037002_s');
    }
};
