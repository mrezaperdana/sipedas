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
        Schema::create('t020001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('organisasipolitikt')->nullable();
            $table->string('organisasipolitik1')->nullable();
            $table->string('organisasipolitik2')->nullable();
            $table->string('organisasipolitik3')->nullable();
            $table->string('organisasipolitik4')->nullable();
            $table->string('organisasipolitik5')->nullable();
            $table->string('organisasipolitik6')->nullable();
            $table->string('organisasipolitik7')->nullable();
            $table->string('organisasipolitik8')->nullable();
            $table->string('lsmt')->nullable();
            $table->string('lsm1')->nullable();
            $table->string('lsm2')->nullable();
            $table->string('lsm3')->nullable();
            $table->string('lsm4')->nullable();
            $table->string('lsm5')->nullable();
            $table->string('lsm6')->nullable();
            $table->string('lsm7')->nullable();
            $table->string('lsm8')->nullable();
            $table->string('yayasant')->nullable();
            $table->string('yayasan1')->nullable();
            $table->string('yayasan2')->nullable();
            $table->string('yayasan3')->nullable();
            $table->string('yayasan4')->nullable();
            $table->string('yayasan5')->nullable();
            $table->string('yayasan6')->nullable();
            $table->string('yayasan7')->nullable();
            $table->string('yayasan8')->nullable();
            $table->string('lembagat')->nullable();
            $table->string('lembaga1')->nullable();
            $table->string('lembaga2')->nullable();
            $table->string('lembaga3')->nullable();
            $table->string('lembaga4')->nullable();
            $table->string('lembaga5')->nullable();
            $table->string('lembaga6')->nullable();
            $table->string('lembaga7')->nullable();
            $table->string('lembaga8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t020001_s');
    }
};
