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
        Schema::create('t003001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('ht1')->nullable();
            $table->string('ht2')->nullable();
            $table->string('ht3')->nullable();
            $table->string('ht4')->nullable();
            $table->string('ht5')->nullable();
            $table->string('ht6')->nullable();
            $table->string('ht7')->nullable();
            $table->string('ht8')->nullable();
            $table->string('ht9')->nullable();
            $table->string('ht10')->nullable();
            $table->string('ht11')->nullable();
            $table->string('ht12')->nullable(); 
            $table->string('catatan', 1000)->nullable(); 

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t003001_s');
    }
};
