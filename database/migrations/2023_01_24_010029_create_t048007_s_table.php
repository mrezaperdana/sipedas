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
        Schema::create('t048007_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('post')->nullable();
            $table->string('pos1')->nullable();
            $table->string('pos2')->nullable();
            $table->string('pos3')->nullable();
            $table->string('pos4')->nullable();
            $table->string('pos5')->nullable();
            $table->string('pos6')->nullable();
            $table->string('pos7')->nullable();
            $table->string('pos8')->nullable();
            $table->string('pos9')->nullable();
            $table->string('pos10')->nullable();
            $table->string('pos11')->nullable();
            $table->string('pos12')->nullable();
            $table->string('telepont')->nullable();
            $table->string('telepon1')->nullable();
            $table->string('telepon2')->nullable();
            $table->string('telepon3')->nullable();
            $table->string('telepon4')->nullable();
            $table->string('telepon5')->nullable();
            $table->string('telepon6')->nullable();
            $table->string('telepon7')->nullable();
            $table->string('telepon8')->nullable();
            $table->string('telepon9')->nullable();
            $table->string('telepon10')->nullable();
            $table->string('telepon11')->nullable();
            $table->string('telepon12')->nullable();
            $table->string('internett')->nullable();
            $table->string('internet1')->nullable();
            $table->string('internet2')->nullable();
            $table->string('internet3')->nullable();
            $table->string('internet4')->nullable();
            $table->string('internet5')->nullable();
            $table->string('internet6')->nullable();
            $table->string('internet7')->nullable();
            $table->string('internet8')->nullable();
            $table->string('internet9')->nullable();
            $table->string('internet10')->nullable();
            $table->string('internet11')->nullable();
            $table->string('internet12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t048007_s');
    }
};
