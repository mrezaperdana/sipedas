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
        Schema::create('t019004_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('menarat')->nullable();
            $table->string('menara1')->nullable();
            $table->string('menara2')->nullable();
            $table->string('menara3')->nullable();
            $table->string('menara4')->nullable();
            $table->string('menara5')->nullable();
            $table->string('menara6')->nullable();
            $table->string('menara7')->nullable();
            $table->string('menara8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t019004_s');
    }
};
