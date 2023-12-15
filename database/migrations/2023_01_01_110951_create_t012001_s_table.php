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
        Schema::create('t012001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->string('apvariabel1')->default('Jumlah Armada');
            $table->string('apsatuan1')->default('Unit');
            $table->string('apisi1')->nullable();
            $table->string('apvariabel2')->default('Jumlah Armada');
            $table->string('apsatuan2')->default('Unit');
            $table->string('apisi2')->nullable();
            $table->string('apvariabel3')->default('Jumlah Armada');
            $table->string('apsatuan3')->default('Unit');
            $table->string('apisi3')->nullable();
            $table->string('apvariabel4')->default('Jumlah Armada');
            $table->string('apsatuan4')->default('Unit');
            $table->string('apisi4')->nullable();
            $table->string('apvariabel5')->default('Jumlah Armada');
            $table->string('apsatuan5')->default('Unit');
            $table->string('apisi5')->nullable();
            $table->string('apvariabel6')->default('Jumlah Armada');
            $table->string('apsatuan6')->default('Unit');
            $table->string('apisi6')->nullable();
            $table->string('apvariabel7')->default('Jumlah Armada');
            $table->string('apsatuan7')->default('Unit');
            $table->string('apisi7')->nullable();
            $table->string('jenisangkutpenumpanglainnya')->default('Lainnya... (Isi Jika ada)');
            $table->string('apvariabel8')->default('(Isi Jika ada)');
            $table->string('apsatuan8')->default('(Isi Jika ada)');
            $table->string('apisi8')->default(0);
            $table->string('abvariabel1')->default('Jumlah Armada');
            $table->string('absatuan1')->default('Unit');
            $table->string('abisi1')->nullable();
            $table->string('abvariabel2')->default('Jumlah Armada');
            $table->string('absatuan2')->default('Unit');
            $table->string('abisi2')->nullable();
            $table->string('abvariabel3')->default('Jumlah Armada');
            $table->string('absatuan3')->default('Unit');
            $table->string('abisi3')->nullable();
            $table->string('abvariabel4')->default('Jumlah Armada');
            $table->string('absatuan4')->default('Unit');
            $table->string('abisi4')->nullable();
            $table->string('abvariabel5')->default('Jumlah Armada');            
            $table->string('absatuan5')->default('Unit');
            $table->string('abisi5')->nullable();
            $table->string('abvariabel6')->default('Jumlah Armada');
            $table->string('absatuan6')->default('Unit');
            $table->string('abisi6')->nullable();
            $table->string('jenisangkutbaranglainnya')->default('Lainnya... (Isi Jika ada)');
            $table->string('abvariabel7')->default('(Isi Jika ada)');
            $table->string('absatuan7')->default('(Isi Jika ada)');
            $table->string('abisi7')->default(0);
            $table->string('catatan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t012001_s');
    }
};
