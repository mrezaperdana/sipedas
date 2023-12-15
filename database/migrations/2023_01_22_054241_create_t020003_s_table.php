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
        Schema::create('t020003_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kodeinstansi');
            $table->string('tipetabel');
            $table->string('kodetabel');
            $table->string('tahun');
            $table->string('status')->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('forumt')->nullable();
            $table->string('forum1')->nullable();
            $table->string('forum2')->nullable();
            $table->string('forum3')->nullable();
            $table->string('forum4')->nullable();
            $table->string('forum5')->nullable();
            $table->string('forum6')->nullable();
            $table->string('forum7')->nullable();
            $table->string('forum8')->nullable();
            $table->string('badant')->nullable();
            $table->string('badan1')->nullable();
            $table->string('badan2')->nullable();
            $table->string('badan3')->nullable();
            $table->string('badan4')->nullable();
            $table->string('badan5')->nullable();
            $table->string('badan6')->nullable();
            $table->string('badan7')->nullable();
            $table->string('badan8')->nullable();
            $table->string('komunitast')->nullable();
            $table->string('komunitas1')->nullable();
            $table->string('komunitas2')->nullable();
            $table->string('komunitas3')->nullable();
            $table->string('komunitas4')->nullable();
            $table->string('komunitas5')->nullable();
            $table->string('komunitas6')->nullable();
            $table->string('komunitas7')->nullable();
            $table->string('komunitas8')->nullable();
            $table->string('profesit')->nullable();
            $table->string('profesi1')->nullable();
            $table->string('profesi2')->nullable();
            $table->string('profesi3')->nullable();
            $table->string('profesi4')->nullable();
            $table->string('profesi5')->nullable();
            $table->string('profesi6')->nullable();
            $table->string('profesi7')->nullable();
            $table->string('profesi8')->nullable();
            $table->string('lainnyat')->nullable();
            $table->string('lainnya1')->nullable();
            $table->string('lainnya2')->nullable();
            $table->string('lainnya3')->nullable();
            $table->string('lainnya4')->nullable();
            $table->string('lainnya5')->nullable();
            $table->string('lainnya6')->nullable();
            $table->string('lainnya7')->nullable();
            $table->string('lainnya8')->nullable();
            $table->string('totalt')->nullable();
            $table->string('total1')->nullable();
            $table->string('total2')->nullable();
            $table->string('total3')->nullable();
            $table->string('total4')->nullable();
            $table->string('total5')->nullable();
            $table->string('total6')->nullable();
            $table->string('total7')->nullable();
            $table->string('total8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t020003_s');
    }
};
