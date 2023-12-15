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
        Schema::create('t035001_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('malariat', 6)->nullable();
            $table->string('malaria1', 6)->nullable();
            $table->string('malaria2', 6)->nullable();
            $table->string('malaria3', 6)->nullable();
            $table->string('malaria4', 6)->nullable();
            $table->string('malaria5', 6)->nullable();
            $table->string('malaria6', 6)->nullable();
            $table->string('malaria7', 6)->nullable();
            $table->string('malaria8', 6)->nullable();
            $table->string('malaria9', 6)->nullable();
            $table->string('malaria10', 6)->nullable();
            $table->string('malaria11', 6)->nullable();
            $table->string('malaria12', 6)->nullable();
            $table->string('malaria13', 6)->nullable();
            $table->string('tbct', 6)->nullable();
            $table->string('tbc1', 6)->nullable();
            $table->string('tbc2', 6)->nullable();
            $table->string('tbc3', 6)->nullable();
            $table->string('tbc4', 6)->nullable();
            $table->string('tbc5', 6)->nullable();
            $table->string('tbc6', 6)->nullable();
            $table->string('tbc7', 6)->nullable();
            $table->string('tbc8', 6)->nullable();
            $table->string('tbc9', 6)->nullable();
            $table->string('tbc10', 6)->nullable();
            $table->string('tbc11', 6)->nullable();
            $table->string('tbc12', 6)->nullable();
            $table->string('tbc13', 6)->nullable();
            $table->string('pneumoniat', 6)->nullable();
            $table->string('pneumonia1', 6)->nullable();
            $table->string('pneumonia2', 6)->nullable();
            $table->string('pneumonia3', 6)->nullable();
            $table->string('pneumonia4', 6)->nullable();
            $table->string('pneumonia5', 6)->nullable();
            $table->string('pneumonia6', 6)->nullable();
            $table->string('pneumonia7', 6)->nullable();
            $table->string('pneumonia8', 6)->nullable();
            $table->string('pneumonia9', 6)->nullable();
            $table->string('pneumonia10', 6)->nullable();
            $table->string('pneumonia11', 6)->nullable();
            $table->string('pneumonia12', 6)->nullable();
            $table->string('pneumonia13', 6)->nullable();
            $table->string('kustat', 6)->nullable();
            $table->string('kusta1', 6)->nullable();
            $table->string('kusta2', 6)->nullable();
            $table->string('kusta3', 6)->nullable();
            $table->string('kusta4', 6)->nullable();
            $table->string('kusta5', 6)->nullable();
            $table->string('kusta6', 6)->nullable();
            $table->string('kusta7', 6)->nullable();
            $table->string('kusta8', 6)->nullable();
            $table->string('kusta9', 6)->nullable();
            $table->string('kusta10', 6)->nullable();
            $table->string('kusta11', 6)->nullable();
            $table->string('kusta12', 6)->nullable();
            $table->string('kusta13', 6)->nullable();
            $table->string('tetanust', 6)->nullable();
            $table->string('tetanus1', 6)->nullable();
            $table->string('tetanus2', 6)->nullable();
            $table->string('tetanus3', 6)->nullable();
            $table->string('tetanus4', 6)->nullable();
            $table->string('tetanus5', 6)->nullable();
            $table->string('tetanus6', 6)->nullable();
            $table->string('tetanus7', 6)->nullable();
            $table->string('tetanus8', 6)->nullable();
            $table->string('tetanus9', 6)->nullable();
            $table->string('tetanus10', 6)->nullable();
            $table->string('tetanus11', 6)->nullable();
            $table->string('tetanus12', 6)->nullable();
            $table->string('tetanus13', 6)->nullable();
            $table->string('campakt', 6)->nullable();
            $table->string('campak1', 6)->nullable();
            $table->string('campak2', 6)->nullable();
            $table->string('campak3', 6)->nullable();
            $table->string('campak4', 6)->nullable();
            $table->string('campak5', 6)->nullable();
            $table->string('campak6', 6)->nullable();
            $table->string('campak7', 6)->nullable();
            $table->string('campak8', 6)->nullable();
            $table->string('campak9', 6)->nullable();
            $table->string('campak10', 6)->nullable();
            $table->string('campak11', 6)->nullable();
            $table->string('campak12', 6)->nullable();
            $table->string('campak13', 6)->nullable();
            $table->string('diaret', 6)->nullable();
            $table->string('diare1', 6)->nullable();
            $table->string('diare2', 6)->nullable();
            $table->string('diare3', 6)->nullable();
            $table->string('diare4', 6)->nullable();
            $table->string('diare5', 6)->nullable();
            $table->string('diare6', 6)->nullable();
            $table->string('diare7', 6)->nullable();
            $table->string('diare8', 6)->nullable();
            $table->string('diare9', 6)->nullable();
            $table->string('diare10', 6)->nullable();
            $table->string('diare11', 6)->nullable();
            $table->string('diare12', 6)->nullable();
            $table->string('diare13', 6)->nullable();
            $table->string('dbdt', 6)->nullable();
            $table->string('dbd1', 6)->nullable();
            $table->string('dbd2', 6)->nullable();
            $table->string('dbd3', 6)->nullable();
            $table->string('dbd4', 6)->nullable();
            $table->string('dbd5', 6)->nullable();
            $table->string('dbd6', 6)->nullable();
            $table->string('dbd7', 6)->nullable();
            $table->string('dbd8', 6)->nullable();
            $table->string('dbd9', 6)->nullable();
            $table->string('dbd10', 6)->nullable();
            $table->string('dbd11', 6)->nullable();
            $table->string('dbd12', 6)->nullable();
            $table->string('dbd13', 6)->nullable();
            $table->string('hivt', 6)->nullable();
            $table->string('hiv1', 6)->nullable();
            $table->string('hiv2', 6)->nullable();
            $table->string('hiv3', 6)->nullable();
            $table->string('hiv4', 6)->nullable();
            $table->string('hiv5', 6)->nullable();
            $table->string('hiv6', 6)->nullable();
            $table->string('hiv7', 6)->nullable();
            $table->string('hiv8', 6)->nullable();
            $table->string('hiv9', 6)->nullable();
            $table->string('hiv10', 6)->nullable();
            $table->string('hiv11', 6)->nullable();
            $table->string('hiv12', 6)->nullable();
            $table->string('hiv13', 6)->nullable();
            $table->string('imst', 6)->nullable();
            $table->string('ims1', 6)->nullable();
            $table->string('ims2', 6)->nullable();
            $table->string('ims3', 6)->nullable();
            $table->string('ims4', 6)->nullable();
            $table->string('ims5', 6)->nullable();
            $table->string('ims6', 6)->nullable();
            $table->string('ims7', 6)->nullable();
            $table->string('ims8', 6)->nullable();
            $table->string('ims9', 6)->nullable();
            $table->string('ims10', 6)->nullable();
            $table->string('ims11', 6)->nullable();
            $table->string('ims12', 6)->nullable();
            $table->string('ims13', 6)->nullable();
            $table->string('covidt', 6)->nullable();
            $table->string('covid1', 6)->nullable();
            $table->string('covid2', 6)->nullable();
            $table->string('covid3', 6)->nullable();
            $table->string('covid4', 6)->nullable();
            $table->string('covid5', 6)->nullable();
            $table->string('covid6', 6)->nullable();
            $table->string('covid7', 6)->nullable();
            $table->string('covid8', 6)->nullable();
            $table->string('covid9', 6)->nullable();
            $table->string('covid10', 6)->nullable();
            $table->string('covid11', 6)->nullable();
            $table->string('covid12', 6)->nullable();
            $table->string('covid13', 6)->nullable();
            $table->string('lainnyat')->default(0);
            $table->string('lainnya1')->default(0);
            $table->string('lainnya2')->default(0);
            $table->string('lainnya3')->default(0);
            $table->string('lainnya4')->default(0);
            $table->string('lainnya5')->default(0);
            $table->string('lainnya6')->default(0);
            $table->string('lainnya7')->default(0);
            $table->string('lainnya8')->default(0);
            $table->string('lainnya9')->default(0);
            $table->string('lainnya10')->default(0);
            $table->string('lainnya11')->default(0);
            $table->string('lainnya12')->default(0);
            $table->string('lainnya13')->default(0);
            $table->string('lainnyavar')->default('Isikan Jika ada jenis lain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t035001_s');
    }
};
