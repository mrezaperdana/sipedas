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
        Schema::create('t038003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('blindt', 9)->nullable();
            $table->string('blind1', 9)->nullable();
            $table->string('blind2', 9)->nullable();
            $table->string('blind3', 9)->nullable();
            $table->string('blind4', 9)->nullable();
            $table->string('blind5', 9)->nullable();
            $table->string('blind6', 9)->nullable();
            $table->string('blind7', 9)->nullable();
            $table->string('blind8', 9)->nullable();
            $table->string('blind9', 9)->nullable();
            $table->string('blind10', 9)->nullable();
            $table->string('blind11', 9)->nullable();
            $table->string('blind12', 9)->nullable();
            $table->string('blind13', 9)->nullable();
            $table->string('deaft', 9)->nullable();
            $table->string('deaf1', 9)->nullable();
            $table->string('deaf2', 9)->nullable();
            $table->string('deaf3', 9)->nullable();
            $table->string('deaf4', 9)->nullable();
            $table->string('deaf5', 9)->nullable();
            $table->string('deaf6', 9)->nullable();
            $table->string('deaf7', 9)->nullable();
            $table->string('deaf8', 9)->nullable();
            $table->string('deaf9', 9)->nullable();
            $table->string('deaf10', 9)->nullable();
            $table->string('deaf11', 9)->nullable();
            $table->string('deaf12', 9)->nullable();
            $table->string('deaf13', 9)->nullable();
            $table->string('mentally_disabledt', 9)->nullable();
            $table->string('mentally_disabled1', 9)->nullable();
            $table->string('mentally_disabled2', 9)->nullable();
            $table->string('mentally_disabled3', 9)->nullable();
            $table->string('mentally_disabled4', 9)->nullable();
            $table->string('mentally_disabled5', 9)->nullable();
            $table->string('mentally_disabled6', 9)->nullable();
            $table->string('mentally_disabled7', 9)->nullable();
            $table->string('mentally_disabled8', 9)->nullable();
            $table->string('mentally_disabled9', 9)->nullable();
            $table->string('mentally_disabled10', 9)->nullable();
            $table->string('mentally_disabled11', 9)->nullable();
            $table->string('mentally_disabled12', 9)->nullable();
            $table->string('mentally_disabled13', 9)->nullable();
            $table->string('disabledt', 9)->nullable();
            $table->string('disabled1', 9)->nullable();
            $table->string('disabled2', 9)->nullable();
            $table->string('disabled3', 9)->nullable();
            $table->string('disabled4', 9)->nullable();
            $table->string('disabled5', 9)->nullable();
            $table->string('disabled6', 9)->nullable();
            $table->string('disabled7', 9)->nullable();
            $table->string('disabled8', 9)->nullable();
            $table->string('disabled9', 9)->nullable();
            $table->string('disabled10', 9)->nullable();
            $table->string('disabled11', 9)->nullable();
            $table->string('disabled12', 9)->nullable();
            $table->string('disabled13', 9)->nullable();
            $table->string('multiple_dissabilityt', 9)->nullable();
            $table->string('multiple_dissability1', 9)->nullable();
            $table->string('multiple_dissability2', 9)->nullable();
            $table->string('multiple_dissability3', 9)->nullable();
            $table->string('multiple_dissability4', 9)->nullable();
            $table->string('multiple_dissability5', 9)->nullable();
            $table->string('multiple_dissability6', 9)->nullable();
            $table->string('multiple_dissability7', 9)->nullable();
            $table->string('multiple_dissability8', 9)->nullable();
            $table->string('multiple_dissability9', 9)->nullable();
            $table->string('multiple_dissability10', 9)->nullable();
            $table->string('multiple_dissability11', 9)->nullable();
            $table->string('multiple_dissability12', 9)->nullable();
            $table->string('multiple_dissability13', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t038003_s');
    }
};
