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
        Schema::create('t038007_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('blindt')->nullable();
            $table->string('blind1')->nullable();
            $table->string('blind2')->nullable();
            $table->string('blind3')->nullable();
            $table->string('blind4')->nullable();
            $table->string('deaft')->nullable();
            $table->string('deaf1')->nullable();
            $table->string('deaf2')->nullable();
            $table->string('deaf3')->nullable();
            $table->string('deaf4')->nullable();
            $table->string('mentally_disabledt')->nullable();
            $table->string('mentally_disabled1')->nullable();
            $table->string('mentally_disabled2')->nullable();
            $table->string('mentally_disabled3')->nullable();
            $table->string('mentally_disabled4')->nullable();
            $table->string('disabledt')->nullable();
            $table->string('disabled1')->nullable();
            $table->string('disabled2')->nullable();
            $table->string('disabled3')->nullable();
            $table->string('disabled4')->nullable();
            $table->string('multiple_dissabilityt')->nullable();
            $table->string('multiple_dissability1')->nullable();
            $table->string('multiple_dissability2')->nullable();
            $table->string('multiple_dissability3')->nullable();
            $table->string('multiple_dissability4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t038007_s');
    }
};
