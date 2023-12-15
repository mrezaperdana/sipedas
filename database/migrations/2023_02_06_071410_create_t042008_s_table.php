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
        Schema::create('t042008_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('permanentt')->nullable();
            $table->string('permanent1')->nullable();
            $table->string('permanent2')->nullable();
            $table->string('permanent3')->nullable();
            $table->string('permanent4')->nullable();
            $table->string('healthyt')->nullable();
            $table->string('healthy1')->nullable();
            $table->string('healthy2')->nullable();
            $table->string('healthy3')->nullable();
            $table->string('healthy4')->nullable();
            $table->string('nont')->nullable();
            $table->string('non1')->nullable();
            $table->string('non2')->nullable();
            $table->string('non3')->nullable();
            $table->string('non4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t042008_s');
    }
};
