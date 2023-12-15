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
        Schema::create('t004001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('amountt')->nullable();
            $table->string('amount1')->nullable();
            $table->string('amount2')->nullable();
            $table->string('amount3')->nullable();
            $table->string('amount4')->nullable();
            $table->string('amount5')->nullable();
            $table->string('amount6')->nullable();
            $table->string('amount7')->nullable();
            $table->string('amount8')->nullable();
            $table->string('amount9')->nullable();
            $table->string('amount10')->nullable();
            $table->string('amount11')->nullable();
            $table->string('amount12')->nullable();
            $table->string('amount13')->nullable();
            $table->string('amount14')->nullable();
            $table->string('amount15')->nullable();
            $table->string('amount16')->nullable();
            $table->string('amount17')->nullable();
            $table->string('amount18')->nullable();
            $table->string('amount19')->nullable();
            $table->string('amount20')->nullable();
            $table->string('amount21')->nullable();
            $table->string('amount22')->nullable();
            $table->string('explainationt')->nullable();
            $table->string('explaination1')->nullable();
            $table->string('explaination2')->nullable();
            $table->string('explaination3')->nullable();
            $table->string('explaination4')->nullable();
            $table->string('explaination5')->nullable();
            $table->string('explaination6')->nullable();
            $table->string('explaination7')->nullable();
            $table->string('explaination8')->nullable();
            $table->string('explaination9')->nullable();
            $table->string('explaination10')->nullable();
            $table->string('explaination11')->nullable();
            $table->string('explaination12')->nullable();
            $table->string('explaination13')->nullable();
            $table->string('explaination14')->nullable();
            $table->string('explaination15')->nullable();
            $table->string('explaination16')->nullable();
            $table->string('explaination17')->nullable();
            $table->string('explaination18')->nullable();
            $table->string('explaination19')->nullable();
            $table->string('explaination20')->nullable();
            $table->string('explaination21')->nullable();
            $table->string('explaination22')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t004001_s');
    }
};
