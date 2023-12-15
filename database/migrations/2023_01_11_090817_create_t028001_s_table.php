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
        Schema::create('t028001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('perkawinant')->nullable();
            $table->string('perkawinan1')->nullable();
            $table->string('perkawinan2')->nullable();
            $table->string('perkawinan3')->nullable();
            $table->string('perkawinan4')->nullable();
            $table->string('perkawinan5')->nullable();
            $table->string('perkawinan6')->nullable();
            $table->string('perkawinan7')->nullable();
            $table->string('perkawinan8')->nullable();
            $table->string('perceraiant')->nullable();
            $table->string('perceraian1')->nullable();
            $table->string('perceraian2')->nullable();
            $table->string('perceraian3')->nullable();
            $table->string('perceraian4')->nullable();
            $table->string('perceraian5')->nullable();
            $table->string('perceraian6')->nullable();
            $table->string('perceraian7')->nullable();
            $table->string('perceraian8')->nullable();
            $table->string('kelahirant')->nullable();
            $table->string('kelahiran1')->nullable();
            $table->string('kelahiran2')->nullable();
            $table->string('kelahiran3')->nullable();
            $table->string('kelahiran4')->nullable();
            $table->string('kelahiran5')->nullable();
            $table->string('kelahiran6')->nullable();
            $table->string('kelahiran7')->nullable();
            $table->string('kelahiran8')->nullable();
            $table->string('kematiant')->nullable();
            $table->string('kematian1')->nullable();
            $table->string('kematian2')->nullable();
            $table->string('kematian3')->nullable();
            $table->string('kematian4')->nullable();
            $table->string('kematian5')->nullable();
            $table->string('kematian6')->nullable();
            $table->string('kematian7')->nullable();
            $table->string('kematian8')->nullable();
            $table->string('jumlaht')->nullable();
            $table->string('jumlah1')->nullable();
            $table->string('jumlah2')->nullable();
            $table->string('jumlah3')->nullable();
            $table->string('jumlah4')->nullable();
            $table->string('jumlah5')->nullable();
            $table->string('jumlah6')->nullable();
            $table->string('jumlah7')->nullable();
            $table->string('jumlah8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t028001_s');
    }
};
