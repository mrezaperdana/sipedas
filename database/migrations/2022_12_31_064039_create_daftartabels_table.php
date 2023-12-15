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
        Schema::create('daftartabels', function (Blueprint $table) {
            $table->id();
            $table->string('kodeinstansi');
            $table->string('tipetabel');
            $table->string('notabel');
            $table->string('judultabel');
            $table->string('judultabelen');
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
        Schema::dropIfExists('daftartabels');
    }
};
