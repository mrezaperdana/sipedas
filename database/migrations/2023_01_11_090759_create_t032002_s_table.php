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
        Schema::create('t032002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('kelapasawitt', 6)->nullable();
            $table->string('kelapasawit1', 6)->nullable();
            $table->string('kelapasawit2', 6)->nullable();
            $table->string('kelapasawit3', 6)->nullable();
            $table->string('kelapasawit4', 6)->nullable();
            $table->string('kelapasawit5', 6)->nullable();
            $table->string('kelapasawit6', 6)->nullable();
            $table->string('kelapasawit7', 6)->nullable();
            $table->string('kelapasawit8', 6)->nullable();
            $table->string('kelapahibridat', 6)->nullable();
            $table->string('kelapahibrida1', 6)->nullable();
            $table->string('kelapahibrida2', 6)->nullable();
            $table->string('kelapahibrida3', 6)->nullable();
            $table->string('kelapahibrida4', 6)->nullable();
            $table->string('kelapahibrida5', 6)->nullable();
            $table->string('kelapahibrida6', 6)->nullable();
            $table->string('kelapahibrida7', 6)->nullable();
            $table->string('kelapahibrida8', 6)->nullable();
            $table->string('kelapadalamt', 6)->nullable();
            $table->string('kelapadalam1', 6)->nullable();
            $table->string('kelapadalam2', 6)->nullable();
            $table->string('kelapadalam3', 6)->nullable();
            $table->string('kelapadalam4', 6)->nullable();
            $table->string('kelapadalam5', 6)->nullable();
            $table->string('kelapadalam6', 6)->nullable();
            $table->string('kelapadalam7', 6)->nullable();
            $table->string('kelapadalam8', 6)->nullable();
            $table->string('karett', 6)->nullable();
            $table->string('karet1', 6)->nullable();
            $table->string('karet2', 6)->nullable();
            $table->string('karet3', 6)->nullable();
            $table->string('karet4', 6)->nullable();
            $table->string('karet5', 6)->nullable();
            $table->string('karet6', 6)->nullable();
            $table->string('karet7', 6)->nullable();
            $table->string('karet8', 6)->nullable();
            $table->string('kopit', 6)->nullable();
            $table->string('kopi1', 6)->nullable();
            $table->string('kopi2', 6)->nullable();
            $table->string('kopi3', 6)->nullable();
            $table->string('kopi4', 6)->nullable();
            $table->string('kopi5', 6)->nullable();
            $table->string('kopi6', 6)->nullable();
            $table->string('kopi7', 6)->nullable();
            $table->string('kopi8', 6)->nullable();
            $table->string('kakaot', 6)->nullable();
            $table->string('kakao1', 6)->nullable();
            $table->string('kakao2', 6)->nullable();
            $table->string('kakao3', 6)->nullable();
            $table->string('kakao4', 6)->nullable();
            $table->string('kakao5', 6)->nullable();
            $table->string('kakao6', 6)->nullable();
            $table->string('kakao7', 6)->nullable();
            $table->string('kakao8', 6)->nullable();
            $table->string('tebut', 6)->nullable();
            $table->string('tebu1', 6)->nullable();
            $table->string('tebu2', 6)->nullable();
            $table->string('tebu3', 6)->nullable();
            $table->string('tebu4', 6)->nullable();
            $table->string('tebu5', 6)->nullable();
            $table->string('tebu6', 6)->nullable();
            $table->string('tebu7', 6)->nullable();
            $table->string('tebu8', 6)->nullable();
            $table->string('teht', 6)->nullable();
            $table->string('teh1', 6)->nullable();
            $table->string('teh2', 6)->nullable();
            $table->string('teh3', 6)->nullable();
            $table->string('teh4', 6)->nullable();
            $table->string('teh5', 6)->nullable();
            $table->string('teh6', 6)->nullable();
            $table->string('teh7', 6)->nullable();
            $table->string('teh8', 6)->nullable();
            $table->string('tembakaut', 6)->nullable();
            $table->string('tembakau1', 6)->nullable();
            $table->string('tembakau2', 6)->nullable();
            $table->string('tembakau3', 6)->nullable();
            $table->string('tembakau4', 6)->nullable();
            $table->string('tembakau5', 6)->nullable();
            $table->string('tembakau6', 6)->nullable();
            $table->string('tembakau7', 6)->nullable();
            $table->string('tembakau8', 6)->nullable();
            $table->string('cengkeht', 6)->nullable();
            $table->string('cengkeh1', 6)->nullable();
            $table->string('cengkeh2', 6)->nullable();
            $table->string('cengkeh3', 6)->nullable();
            $table->string('cengkeh4', 6)->nullable();
            $table->string('cengkeh5', 6)->nullable();
            $table->string('cengkeh6', 6)->nullable();
            $table->string('cengkeh7', 6)->nullable();
            $table->string('cengkeh8', 6)->nullable();
            $table->string('ladat', 6)->nullable();
            $table->string('lada1', 6)->nullable();
            $table->string('lada2', 6)->nullable();
            $table->string('lada3', 6)->nullable();
            $table->string('lada4', 6)->nullable();
            $table->string('lada5', 6)->nullable();
            $table->string('lada6', 6)->nullable();
            $table->string('lada7', 6)->nullable();
            $table->string('lada8', 6)->nullable();
            $table->string('arent', 6)->nullable();
            $table->string('aren1', 6)->nullable();
            $table->string('aren2', 6)->nullable();
            $table->string('aren3', 6)->nullable();
            $table->string('aren4', 6)->nullable();
            $table->string('aren5', 6)->nullable();
            $table->string('aren6', 6)->nullable();
            $table->string('aren7', 6)->nullable();
            $table->string('aren8', 6)->nullable();
            $table->string('jambumetet', 6)->nullable();
            $table->string('jambumete1', 6)->nullable();
            $table->string('jambumete2', 6)->nullable();
            $table->string('jambumete3', 6)->nullable();
            $table->string('jambumete4', 6)->nullable();
            $table->string('jambumete5', 6)->nullable();
            $table->string('jambumete6', 6)->nullable();
            $table->string('jambumete7', 6)->nullable();
            $table->string('jambumete8', 6)->nullable();
            $table->string('kemirit', 6)->nullable();
            $table->string('kemiri1', 6)->nullable();
            $table->string('kemiri2', 6)->nullable();
            $table->string('kemiri3', 6)->nullable();
            $table->string('kemiri4', 6)->nullable();
            $table->string('kemiri5', 6)->nullable();
            $table->string('kemiri6', 6)->nullable();
            $table->string('kemiri7', 6)->nullable();
            $table->string('kemiri8', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t032002_s');
    }
};
