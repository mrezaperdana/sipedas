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
        Schema::create('t031001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('sekolahnegerit', 6)->nullable();
            $table->string('sekolahnegeri1', 6)->nullable();
            $table->string('sekolahnegeri2', 6)->nullable();
            $table->string('sekolahnegeri3', 6)->nullable();
            $table->string('sekolahnegeri4', 6)->nullable();
            $table->string('sekolahnegeri5', 6)->nullable();
            $table->string('sekolahnegeri6', 6)->nullable();
            $table->string('sekolahnegeri7', 6)->nullable();
            $table->string('sekolahnegeri8', 6)->nullable();
            $table->string('sekolahswastat', 6)->nullable();
            $table->string('sekolahswasta1', 6)->nullable();
            $table->string('sekolahswasta2', 6)->nullable();
            $table->string('sekolahswasta3', 6)->nullable();
            $table->string('sekolahswasta4', 6)->nullable();
            $table->string('sekolahswasta5', 6)->nullable();
            $table->string('sekolahswasta6', 6)->nullable();
            $table->string('sekolahswasta7', 6)->nullable();
            $table->string('sekolahswasta8', 6)->nullable();
            $table->string('sekolahjumlaht', 6)->nullable();
            $table->string('sekolahjumlah1', 6)->nullable();
            $table->string('sekolahjumlah2', 6)->nullable();
            $table->string('sekolahjumlah3', 6)->nullable();
            $table->string('sekolahjumlah4', 6)->nullable();
            $table->string('sekolahjumlah5', 6)->nullable();
            $table->string('sekolahjumlah6', 6)->nullable();
            $table->string('sekolahjumlah7', 6)->nullable();
            $table->string('sekolahjumlah8', 6)->nullable();
            $table->string('gurunegerit', 6)->nullable();
            $table->string('gurunegeri1', 6)->nullable();
            $table->string('gurunegeri2', 6)->nullable();
            $table->string('gurunegeri3', 6)->nullable();
            $table->string('gurunegeri4', 6)->nullable();
            $table->string('gurunegeri5', 6)->nullable();
            $table->string('gurunegeri6', 6)->nullable();
            $table->string('gurunegeri7', 6)->nullable();
            $table->string('gurunegeri8', 6)->nullable();
            $table->string('guruswastat', 6)->nullable();
            $table->string('guruswasta1', 6)->nullable();
            $table->string('guruswasta2', 6)->nullable();
            $table->string('guruswasta3', 6)->nullable();
            $table->string('guruswasta4', 6)->nullable();
            $table->string('guruswasta5', 6)->nullable();
            $table->string('guruswasta6', 6)->nullable();
            $table->string('guruswasta7', 6)->nullable();
            $table->string('guruswasta8', 6)->nullable();
            $table->string('gurujumlaht', 6)->nullable();
            $table->string('gurujumlah1', 6)->nullable();
            $table->string('gurujumlah2', 6)->nullable();
            $table->string('gurujumlah3', 6)->nullable();
            $table->string('gurujumlah4', 6)->nullable();
            $table->string('gurujumlah5', 6)->nullable();
            $table->string('gurujumlah6', 6)->nullable();
            $table->string('gurujumlah7', 6)->nullable();
            $table->string('gurujumlah8', 6)->nullable();
            $table->string('muridnegerit', 6)->nullable();
            $table->string('muridnegeri1', 6)->nullable();
            $table->string('muridnegeri2', 6)->nullable();
            $table->string('muridnegeri3', 6)->nullable();
            $table->string('muridnegeri4', 6)->nullable();
            $table->string('muridnegeri5', 6)->nullable();
            $table->string('muridnegeri6', 6)->nullable();
            $table->string('muridnegeri7', 6)->nullable();
            $table->string('muridnegeri8', 6)->nullable();
            $table->string('muridswastait', 6)->nullable();
            $table->string('muridswastai1', 6)->nullable();
            $table->string('muridswastai2', 6)->nullable();
            $table->string('muridswastai3', 6)->nullable();
            $table->string('muridswastai4', 6)->nullable();
            $table->string('muridswastai5', 6)->nullable();
            $table->string('muridswastai6', 6)->nullable();
            $table->string('muridswastai7', 6)->nullable();
            $table->string('muridswastai8', 6)->nullable();
            $table->string('muridjumlaht', 6)->nullable();
            $table->string('muridjumlah1', 6)->nullable();
            $table->string('muridjumlah2', 6)->nullable();
            $table->string('muridjumlah3', 6)->nullable();
            $table->string('muridjumlah4', 6)->nullable();
            $table->string('muridjumlah5', 6)->nullable();
            $table->string('muridjumlah6', 6)->nullable();
            $table->string('muridjumlah7', 6)->nullable();
            $table->string('muridjumlah8', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t031001_s');
    }
};
