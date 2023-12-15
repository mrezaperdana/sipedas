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
        Schema::create('t038015_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('childt', 9)->nullable();
            $table->string('child1', 9)->nullable();
            $table->string('child2', 9)->nullable();
            $table->string('child3', 9)->nullable();
            $table->string('child4', 9)->nullable();
            $table->string('child5', 9)->nullable();
            $table->string('child6', 9)->nullable();
            $table->string('child7', 9)->nullable();
            $table->string('child8', 9)->nullable();
            $table->string('protectiont', 9)->nullable();
            $table->string('protection1', 9)->nullable();
            $table->string('protection2', 9)->nullable();
            $table->string('protection3', 9)->nullable();
            $table->string('protection4', 9)->nullable();
            $table->string('protection5', 9)->nullable();
            $table->string('protection6', 9)->nullable();
            $table->string('protection7', 9)->nullable();
            $table->string('protection8', 9)->nullable();
            $table->string('inmatet', 9)->nullable();
            $table->string('inmate1', 9)->nullable();
            $table->string('inmate2', 9)->nullable();
            $table->string('inmate3', 9)->nullable();
            $table->string('inmate4', 9)->nullable();
            $table->string('inmate5', 9)->nullable();
            $table->string('inmate6', 9)->nullable();
            $table->string('inmate7', 9)->nullable();
            $table->string('inmate8', 9)->nullable();
            $table->string('psychot', 9)->nullable();
            $table->string('psycho1', 9)->nullable();
            $table->string('psycho2', 9)->nullable();
            $table->string('psycho3', 9)->nullable();
            $table->string('psycho4', 9)->nullable();
            $table->string('psycho5', 9)->nullable();
            $table->string('psycho6', 9)->nullable();
            $table->string('psycho7', 9)->nullable();
            $table->string('psycho8', 9)->nullable();
            $table->string('drug_abuset', 9)->nullable();
            $table->string('drug_abuse1', 9)->nullable();
            $table->string('drug_abuse2', 9)->nullable();
            $table->string('drug_abuse3', 9)->nullable();
            $table->string('drug_abuse4', 9)->nullable();
            $table->string('drug_abuse5', 9)->nullable();
            $table->string('drug_abuse6', 9)->nullable();
            $table->string('drug_abuse7', 9)->nullable();
            $table->string('drug_abuse8', 9)->nullable();
            $table->string('poort', 9)->nullable();
            $table->string('poor1', 9)->nullable();
            $table->string('poor2', 9)->nullable();
            $table->string('poor3', 9)->nullable();
            $table->string('poor4', 9)->nullable();
            $table->string('poor5', 9)->nullable();
            $table->string('poor6', 9)->nullable();
            $table->string('poor7', 9)->nullable();
            $table->string('poor8', 9)->nullable();
            $table->string('scavengert', 9)->nullable();
            $table->string('scavenger1', 9)->nullable();
            $table->string('scavenger2', 9)->nullable();
            $table->string('scavenger3', 9)->nullable();
            $table->string('scavenger4', 9)->nullable();
            $table->string('scavenger5', 9)->nullable();
            $table->string('scavenger6', 9)->nullable();
            $table->string('scavenger7', 9)->nullable();
            $table->string('scavenger8', 9)->nullable();
            $table->string('migrantt', 9)->nullable();
            $table->string('migrant1', 9)->nullable();
            $table->string('migrant2', 9)->nullable();
            $table->string('migrant3', 9)->nullable();
            $table->string('migrant4', 9)->nullable();
            $table->string('migrant5', 9)->nullable();
            $table->string('migrant6', 9)->nullable();
            $table->string('migrant7', 9)->nullable();
            $table->string('migrant8', 9)->nullable();
            $table->string('vulnerablet', 9)->nullable();
            $table->string('vulnerable1', 9)->nullable();
            $table->string('vulnerable2', 9)->nullable();
            $table->string('vulnerable3', 9)->nullable();
            $table->string('vulnerable4', 9)->nullable();
            $table->string('vulnerable5', 9)->nullable();
            $table->string('vulnerable6', 9)->nullable();
            $table->string('vulnerable7', 9)->nullable();
            $table->string('vulnerable8', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t038015_s');
    }
};
