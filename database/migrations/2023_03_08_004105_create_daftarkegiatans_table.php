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
        Schema::create('daftarkegiatans', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('user_id')->unsigned()->zerofill();
            $table->json('responden')->nullable();
            $table->string('judul')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kodetabel')->nullable();
            $table->tinyInteger('status')->default(1)->unsigned();
            $table->string('templatename')->nullable();
            $table->string('templatepath')->nullable();
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
        Schema::dropIfExists('daftarkegiatans');
    }
};
