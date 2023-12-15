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
        Schema::create('t027002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('ment')->nullable();
            $table->string('men1')->nullable();
            $table->string('men2')->nullable();
            $table->string('men3')->nullable();
            $table->string('men4')->nullable();
            $table->string('men5')->nullable();
            $table->string('men6')->nullable();
            $table->string('men7')->nullable();
            $table->string('men8')->nullable();
            $table->string('men9')->nullable();
            $table->string('men10')->nullable();
            $table->string('woment')->nullable();
            $table->string('women1')->nullable();
            $table->string('women2')->nullable();
            $table->string('women3')->nullable();
            $table->string('women4')->nullable();
            $table->string('women5')->nullable();
            $table->string('women6')->nullable();
            $table->string('women7')->nullable();
            $table->string('women8')->nullable();
            $table->string('women9')->nullable();
            $table->string('women10')->nullable();
            $table->string('totalt')->nullable();
            $table->string('total1')->nullable();
            $table->string('total2')->nullable();
            $table->string('total3')->nullable();
            $table->string('total4')->nullable();
            $table->string('total5')->nullable();
            $table->string('total6')->nullable();
            $table->string('total7')->nullable();
            $table->string('total8')->nullable();
            $table->string('total9')->nullable();
            $table->string('total10')->nullable();
            $table->string('perda')->nullable();
            $table->string('prakarsa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t027002_s');
    }
};
