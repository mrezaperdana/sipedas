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
        Schema::create('t013001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel',11);
            $table->string('tahun',5);
            $table->string('status')->default(0);
            $table->string('awujud1',20)->default('IKAN HIDUP');
            $table->string('aproduksi1')->nullable(); 
            $table->string('anilai1')->nullable(); 
            $table->string('awujud2',20)->default('IKAN HIDUP');
            $table->string('aproduksi2')->nullable(); 
            $table->string('anilai2')->nullable(); 
            $table->string('awujud3',20)->default('IKAN HIDUP');
            $table->string('aproduksi3')->nullable(); 
            $table->string('anilai3')->nullable(); 
            $table->string('jumlahnilaia')->default(0);
            $table->string('jumlahproduksia')->default(0);
            $table->string('bwujud1',20)->default('IKAN HIDUP');
            $table->string('bproduksi1')->nullable(); 
            $table->string('bnilai1')->nullable(); 
            $table->string('jumlahnilaib')->default(0);
            $table->string('jumlahproduksib')->default(0);
            $table->string('cwujud1',20)->default('IKAN HIDUP');
            $table->string('cproduksi1')->nullable(); 
            $table->string('cnilai1')->nullable(); 
            $table->string('jumlahnilaic')->default(0);
            $table->string('jumlahproduksic')->default(0);
            $table->string('dwujud1',20)->default('IKAN SEGAR');
            $table->string('dproduksi1')->nullable(); 
            $table->string('dnilai1')->nullable(); 
            $table->string('dwujud2',20)->default('IKAN SEGAR');
            $table->string('dproduksi2')->nullable(); 
            $table->string('dnilai2')->nullable(); 
            $table->string('dwujud3',20)->default('IKAN SEGAR');
            $table->string('dproduksi3')->nullable(); 
            $table->string('dnilai3')->nullable(); 
            $table->string('dwujud4',20)->default('IKAN SEGAR');
            $table->string('dproduksi4')->nullable(); 
            $table->string('dnilai4')->nullable(); 
            $table->string('dwujud5',20)->default('IKAN SEGAR');
            $table->string('dproduksi5')->nullable(); 
            $table->string('dnilai5')->nullable(); 
            $table->string('dwujud6',20)->default('IKAN SEGAR');
            $table->string('dproduksi6')->nullable(); 
            $table->string('dnilai6')->nullable(); 
            $table->string('dwujud7',20)->default('IKAN SEGAR');
            $table->string('dproduksi7')->nullable(); 
            $table->string('dnilai7')->nullable(); 
            $table->string('dwujud8',20)->default('IKAN SEGAR');
            $table->string('dproduksi8')->nullable(); 
            $table->string('dnilai8')->nullable(); 
            $table->string('dwujud9',20)->default('IKAN SEGAR');
            $table->string('dproduksi9')->nullable(); 
            $table->string('dnilai9')->nullable(); 
            $table->string('dwujud10',20)->default('IKAN SEGAR');
            $table->string('dproduksi10')->nullable(); 
            $table->string('dnilai10')->nullable(); 
            $table->string('dwujud11',20)->default('IKAN SEGAR');
            $table->string('dproduksi11')->nullable(); 
            $table->string('dnilai11')->nullable(); 
            $table->string('dwujud12',20)->default('IKAN SEGAR');
            $table->string('dproduksi12')->nullable(); 
            $table->string('dnilai12')->nullable(); 
            $table->string('dwujud13',20)->default('IKAN SEGAR');
            $table->string('dproduksi13')->nullable(); 
            $table->string('dnilai13')->nullable(); 
            $table->string('dwujud14',20)->default('IKAN SEGAR');
            $table->string('dproduksi14')->nullable(); 
            $table->string('dnilai14')->nullable(); 
            $table->string('jumlahnilaid')->default(0);
            $table->string('jumlahproduksid')->default(0);
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
        Schema::dropIfExists('t013001_s');
    }
};
