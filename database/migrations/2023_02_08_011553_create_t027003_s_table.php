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
        Schema::create('t027003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('fraksilainnya')->default('Lainnya... (Isi Jika ada)');
            $table->string('ment')->nullable();
            $table->string('men1')->nullable();
            $table->string('men2')->nullable();
            $table->string('men3')->nullable();
            $table->string('men4')->nullable();
            $table->string('men5')->nullable();
            $table->string('menlainnya')->default(0);
            $table->string('woment')->nullable();
            $table->string('women1')->nullable();
            $table->string('women2')->nullable();
            $table->string('women3')->nullable();
            $table->string('women4')->nullable();
            $table->string('women5')->nullable();
            $table->string('womenlainnya')->default(0);
            $table->string('totalt')->nullable();
            $table->string('total1')->nullable();
            $table->string('total2')->nullable();
            $table->string('total3')->nullable();
            $table->string('total4')->nullable();
            $table->string('total5')->nullable();
            $table->string('totallainnya')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t027003_s');
    }
};
