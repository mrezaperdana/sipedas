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
        Schema::create('t019005_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('websitet')->nullable();
            $table->string('website1')->nullable();
            $table->string('website2')->nullable();
            $table->string('website3')->nullable();
            $table->string('website4')->nullable();
            $table->string('website5')->nullable();
            $table->string('website6')->nullable();
            $table->string('website7')->nullable();
            $table->string('website8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t019005_s');
    }
};
