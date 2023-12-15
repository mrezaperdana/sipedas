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
        Schema::create('t036002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('outpatientt')->nullable();
            $table->string('outpatient1')->nullable();
            $table->string('outpatient2')->nullable();
            $table->string('outpatient3')->nullable();
            $table->string('outpatient4')->nullable();
            $table->string('inpatientt')->nullable();
            $table->string('inpatient1')->nullable();
            $table->string('inpatient2')->nullable();
            $table->string('inpatient3')->nullable();
            $table->string('inpatient4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t036002_s');
    }
};
