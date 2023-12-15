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
        Schema::create('t005001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            
            $table->string('ju1')->nullable();
            $table->string('ju2')->nullable();
            $table->string('ju3')->nullable();
            $table->string('ju4')->nullable();
            $table->string('ju5')->nullable();
            $table->string('ju6')->nullable();
            $table->string('ju7')->nullable();
            $table->string('ju8')->nullable();
            $table->string('ju9')->nullable();
            $table->string('ju10')->nullable();
            $table->string('ju11')->nullable();            
            $table->string('nu1')->nullable();
            $table->string('nu2')->nullable();
            $table->string('nu3')->nullable();
            $table->string('nu4')->nullable();
            $table->string('nu5')->nullable();
            $table->string('nu6')->nullable();
            $table->string('nu7')->nullable();
            $table->string('nu8')->nullable();
            $table->string('nu9')->nullable();
            $table->string('nu10')->nullable();
            $table->string('nu11')->nullable();    
            $table->string('catatan')->nullable(); 
        
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
        Schema::dropIfExists('t005001_s');
    }
};
