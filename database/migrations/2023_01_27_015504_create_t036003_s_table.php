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
        Schema::create('t036003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('newoutpatientt')->nullable();
            $table->string('newoutpatient1')->nullable();
            $table->string('newoutpatient2')->nullable();
            $table->string('newoutpatient3')->nullable();
            $table->string('newoutpatient7')->nullable();
            $table->string('newoutpatient6')->nullable();
            $table->string('newoutpatient5')->nullable();
            $table->string('newoutpatient4')->nullable();
            $table->string('totaloutpatientt')->nullable();
            $table->string('totaloutpatient1')->nullable();
            $table->string('totaloutpatient2')->nullable();
            $table->string('totaloutpatient3')->nullable();
            $table->string('totaloutpatient7')->nullable();
            $table->string('totaloutpatient6')->nullable();
            $table->string('totaloutpatient5')->nullable();
            $table->string('totaloutpatient4')->nullable();
            $table->string('inpatientt')->nullable();
            $table->string('inpatient1')->nullable();
            $table->string('inpatient2')->nullable();
            $table->string('inpatient3')->nullable();
            $table->string('inpatient7')->nullable();
            $table->string('inpatient6')->nullable();
            $table->string('inpatient5')->nullable();
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
        Schema::dropIfExists('t036003_s');
    }
};
