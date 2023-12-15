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
        Schema::create('t048012_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('indihomet')->nullable();
            $table->string('indihome1')->nullable();
            $table->string('indihome2')->nullable();
            $table->string('indihome3')->nullable();
            $table->string('indihome4')->nullable();
            $table->string('indihome5')->nullable();
            $table->string('indihome6')->nullable();
            $table->string('indihome7')->nullable();
            $table->string('indihome8')->nullable();
            $table->string('indihome9')->nullable();
            $table->string('indihome10')->nullable();
            $table->string('indihome11')->nullable();
            $table->string('indihome12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t048012_s');
    }
};
