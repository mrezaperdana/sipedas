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
        Schema::create('t012002_s', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kodeinstansi', 4);
            $table->string('tipetabel', 13);
            $table->string('kodetabel', 13);
            $table->string('tahun', 5);
            $table->string('status', 2)->default(0);
            $table->timestamps();
            $table->string('catatan')->nullable();
            $table->string('sedanservicet', 6)->nullable();
            $table->string('sedanservice1', 6)->nullable();
            $table->string('sedanservice2', 6)->nullable();
            $table->string('sedanservice3', 6)->nullable();
            $table->string('sedanservice4', 6)->nullable();
            $table->string('sedanservice5', 6)->nullable();
            $table->string('sedanservice6', 6)->nullable();
            $table->string('sedanservice7', 6)->nullable();
            $table->string('sedanservice8', 6)->nullable();
            $table->string('jeepservicet', 6)->nullable();
            $table->string('jeepservice1', 6)->nullable();
            $table->string('jeepservice2', 6)->nullable();
            $table->string('jeepservice3', 6)->nullable();
            $table->string('jeepservice4', 6)->nullable();
            $table->string('jeepservice5', 6)->nullable();
            $table->string('jeepservice6', 6)->nullable();
            $table->string('jeepservice7', 6)->nullable();
            $table->string('jeepservice8', 6)->nullable();
            $table->string('busservicet', 6)->nullable();
            $table->string('busservice1', 6)->nullable();
            $table->string('busservice2', 6)->nullable();
            $table->string('busservice3', 6)->nullable();
            $table->string('busservice4', 6)->nullable();
            $table->string('busservice5', 6)->nullable();
            $table->string('busservice6', 6)->nullable();
            $table->string('busservice7', 6)->nullable();
            $table->string('busservice8', 6)->nullable();
            $table->string('ambulanceservicet', 6)->nullable();
            $table->string('ambulanceservice1', 6)->nullable();
            $table->string('ambulanceservice2', 6)->nullable();
            $table->string('ambulanceservice3', 6)->nullable();
            $table->string('ambulanceservice4', 6)->nullable();
            $table->string('ambulanceservice5', 6)->nullable();
            $table->string('ambulanceservice6', 6)->nullable();
            $table->string('ambulanceservice7', 6)->nullable();
            $table->string('ambulanceservice8', 6)->nullable();
            $table->string('fire_truckservicet', 6)->nullable();
            $table->string('fire_truckservice1', 6)->nullable();
            $table->string('fire_truckservice2', 6)->nullable();
            $table->string('fire_truckservice3', 6)->nullable();
            $table->string('fire_truckservice4', 6)->nullable();
            $table->string('fire_truckservice5', 6)->nullable();
            $table->string('fire_truckservice6', 6)->nullable();
            $table->string('fire_truckservice7', 6)->nullable();
            $table->string('fire_truckservice8', 6)->nullable();
            $table->string('motorservicet', 6)->nullable();
            $table->string('motorservice1', 6)->nullable();
            $table->string('motorservice2', 6)->nullable();
            $table->string('motorservice3', 6)->nullable();
            $table->string('motorservice4', 6)->nullable();
            $table->string('motorservice5', 6)->nullable();
            $table->string('motorservice6', 6)->nullable();
            $table->string('motorservice7', 6)->nullable();
            $table->string('motorservice8', 6)->nullable();
            $table->string('ojekservicet', 6)->nullable();
            $table->string('ojekservice1', 6)->nullable();
            $table->string('ojekservice2', 6)->nullable();
            $table->string('ojekservice3', 6)->nullable();
            $table->string('ojekservice4', 6)->nullable();
            $table->string('ojekservice5', 6)->nullable();
            $table->string('ojekservice6', 6)->nullable();
            $table->string('ojekservice7', 6)->nullable();
            $table->string('ojekservice8', 6)->nullable();
            $table->string('bemorservicet', 6)->nullable();
            $table->string('bemorservice1', 6)->nullable();
            $table->string('bemorservice2', 6)->nullable();
            $table->string('bemorservice3', 6)->nullable();
            $table->string('bemorservice4', 6)->nullable();
            $table->string('bemorservice5', 6)->nullable();
            $table->string('bemorservice6', 6)->nullable();
            $table->string('bemorservice7', 6)->nullable();
            $table->string('bemorservice8', 6)->nullable();
            $table->string('pedicabservicet', 6)->nullable();
            $table->string('pedicabservice1', 6)->nullable();
            $table->string('pedicabservice2', 6)->nullable();
            $table->string('pedicabservice3', 6)->nullable();
            $table->string('pedicabservice4', 6)->nullable();
            $table->string('pedicabservice5', 6)->nullable();
            $table->string('pedicabservice6', 6)->nullable();
            $table->string('pedicabservice7', 6)->nullable();
            $table->string('pedicabservice8', 6)->nullable();
            $table->string('pickupservicet', 6)->nullable();
            $table->string('pickupservice1', 6)->nullable();
            $table->string('pickupservice2', 6)->nullable();
            $table->string('pickupservice3', 6)->nullable();
            $table->string('pickupservice4', 6)->nullable();
            $table->string('pickupservice5', 6)->nullable();
            $table->string('pickupservice6', 6)->nullable();
            $table->string('pickupservice7', 6)->nullable();
            $table->string('pickupservice8', 6)->nullable();
            $table->string('large_truckservicet', 6)->nullable();
            $table->string('large_truckservice1', 6)->nullable();
            $table->string('large_truckservice2', 6)->nullable();
            $table->string('large_truckservice3', 6)->nullable();
            $table->string('large_truckservice4', 6)->nullable();
            $table->string('large_truckservice5', 6)->nullable();
            $table->string('large_truckservice6', 6)->nullable();
            $table->string('large_truckservice7', 6)->nullable();
            $table->string('large_truckservice8', 6)->nullable();
            $table->string('tractorservicet', 6)->nullable();
            $table->string('tractorservice1', 6)->nullable();
            $table->string('tractorservice2', 6)->nullable();
            $table->string('tractorservice3', 6)->nullable();
            $table->string('tractorservice4', 6)->nullable();
            $table->string('tractorservice5', 6)->nullable();
            $table->string('tractorservice6', 6)->nullable();
            $table->string('tractorservice7', 6)->nullable();
            $table->string('tractorservice8', 6)->nullable();
            $table->string('bikeservicet', 6)->nullable();
            $table->string('bikeservice1', 6)->nullable();
            $table->string('bikeservice2', 6)->nullable();
            $table->string('bikeservice3', 6)->nullable();
            $table->string('bikeservice4', 6)->nullable();
            $table->string('bikeservice5', 6)->nullable();
            $table->string('bikeservice6', 6)->nullable();
            $table->string('bikeservice7', 6)->nullable();
            $table->string('bikeservice8', 6)->nullable();
            $table->string('gigservicet', 6)->nullable();
            $table->string('gigservice1', 6)->nullable();
            $table->string('gigservice2', 6)->nullable();
            $table->string('gigservice3', 6)->nullable();
            $table->string('gigservice4', 6)->nullable();
            $table->string('gigservice5', 6)->nullable();
            $table->string('gigservice6', 6)->nullable();
            $table->string('gigservice7', 6)->nullable();
            $table->string('gigservice8', 6)->nullable();
            $table->string('cartservicet', 6)->nullable();
            $table->string('cartservice1', 6)->nullable();
            $table->string('cartservice2', 6)->nullable();
            $table->string('cartservice3', 6)->nullable();
            $table->string('cartservice4', 6)->nullable();
            $table->string('cartservice5', 6)->nullable();
            $table->string('cartservice6', 6)->nullable();
            $table->string('cartservice7', 6)->nullable();
            $table->string('cartservice8', 6)->nullable();
            $table->string('mikroletservicet', 6)->nullable();
            $table->string('mikroletservice1', 6)->nullable();
            $table->string('mikroletservice2', 6)->nullable();
            $table->string('mikroletservice3', 6)->nullable();
            $table->string('mikroletservice4', 6)->nullable();
            $table->string('mikroletservice5', 6)->nullable();
            $table->string('mikroletservice6', 6)->nullable();
            $table->string('mikroletservice7', 6)->nullable();
            $table->string('mikroletservice8', 6)->nullable();
            $table->string('truk_6_rodaservicet', 6)->nullable();
            $table->string('truk_6_rodaservice1', 6)->nullable();
            $table->string('truk_6_rodaservice2', 6)->nullable();
            $table->string('truk_6_rodaservice3', 6)->nullable();
            $table->string('truk_6_rodaservice4', 6)->nullable();
            $table->string('truk_6_rodaservice5', 6)->nullable();
            $table->string('truk_6_rodaservice6', 6)->nullable();
            $table->string('truk_6_rodaservice7', 6)->nullable();
            $table->string('truk_6_rodaservice8', 6)->nullable();
            $table->string('sedanprivatet', 6)->nullable();
            $table->string('sedanprivate1', 6)->nullable();
            $table->string('sedanprivate2', 6)->nullable();
            $table->string('sedanprivate3', 6)->nullable();
            $table->string('sedanprivate4', 6)->nullable();
            $table->string('sedanprivate5', 6)->nullable();
            $table->string('sedanprivate6', 6)->nullable();
            $table->string('sedanprivate7', 6)->nullable();
            $table->string('sedanprivate8', 6)->nullable();
            $table->string('jeepprivatet', 6)->nullable();
            $table->string('jeepprivate1', 6)->nullable();
            $table->string('jeepprivate2', 6)->nullable();
            $table->string('jeepprivate3', 6)->nullable();
            $table->string('jeepprivate4', 6)->nullable();
            $table->string('jeepprivate5', 6)->nullable();
            $table->string('jeepprivate6', 6)->nullable();
            $table->string('jeepprivate7', 6)->nullable();
            $table->string('jeepprivate8', 6)->nullable();
            $table->string('busprivatet', 6)->nullable();
            $table->string('busprivate1', 6)->nullable();
            $table->string('busprivate2', 6)->nullable();
            $table->string('busprivate3', 6)->nullable();
            $table->string('busprivate4', 6)->nullable();
            $table->string('busprivate5', 6)->nullable();
            $table->string('busprivate6', 6)->nullable();
            $table->string('busprivate7', 6)->nullable();
            $table->string('busprivate8', 6)->nullable();
            $table->string('ambulanceprivatet', 6)->nullable();
            $table->string('ambulanceprivate1', 6)->nullable();
            $table->string('ambulanceprivate2', 6)->nullable();
            $table->string('ambulanceprivate3', 6)->nullable();
            $table->string('ambulanceprivate4', 6)->nullable();
            $table->string('ambulanceprivate5', 6)->nullable();
            $table->string('ambulanceprivate6', 6)->nullable();
            $table->string('ambulanceprivate7', 6)->nullable();
            $table->string('ambulanceprivate8', 6)->nullable();
            $table->string('fire_truckprivatet', 6)->nullable();
            $table->string('fire_truckprivate1', 6)->nullable();
            $table->string('fire_truckprivate2', 6)->nullable();
            $table->string('fire_truckprivate3', 6)->nullable();
            $table->string('fire_truckprivate4', 6)->nullable();
            $table->string('fire_truckprivate5', 6)->nullable();
            $table->string('fire_truckprivate6', 6)->nullable();
            $table->string('fire_truckprivate7', 6)->nullable();
            $table->string('fire_truckprivate8', 6)->nullable();
            $table->string('motorprivatet', 6)->nullable();
            $table->string('motorprivate1', 6)->nullable();
            $table->string('motorprivate2', 6)->nullable();
            $table->string('motorprivate3', 6)->nullable();
            $table->string('motorprivate4', 6)->nullable();
            $table->string('motorprivate5', 6)->nullable();
            $table->string('motorprivate6', 6)->nullable();
            $table->string('motorprivate7', 6)->nullable();
            $table->string('motorprivate8', 6)->nullable();
            $table->string('ojekprivatet', 6)->nullable();
            $table->string('ojekprivate1', 6)->nullable();
            $table->string('ojekprivate2', 6)->nullable();
            $table->string('ojekprivate3', 6)->nullable();
            $table->string('ojekprivate4', 6)->nullable();
            $table->string('ojekprivate5', 6)->nullable();
            $table->string('ojekprivate6', 6)->nullable();
            $table->string('ojekprivate7', 6)->nullable();
            $table->string('ojekprivate8', 6)->nullable();
            $table->string('bemorprivatet', 6)->nullable();
            $table->string('bemorprivate1', 6)->nullable();
            $table->string('bemorprivate2', 6)->nullable();
            $table->string('bemorprivate3', 6)->nullable();
            $table->string('bemorprivate4', 6)->nullable();
            $table->string('bemorprivate5', 6)->nullable();
            $table->string('bemorprivate6', 6)->nullable();
            $table->string('bemorprivate7', 6)->nullable();
            $table->string('bemorprivate8', 6)->nullable();
            $table->string('pedicabprivatet', 6)->nullable();
            $table->string('pedicabprivate1', 6)->nullable();
            $table->string('pedicabprivate2', 6)->nullable();
            $table->string('pedicabprivate3', 6)->nullable();
            $table->string('pedicabprivate4', 6)->nullable();
            $table->string('pedicabprivate5', 6)->nullable();
            $table->string('pedicabprivate6', 6)->nullable();
            $table->string('pedicabprivate7', 6)->nullable();
            $table->string('pedicabprivate8', 6)->nullable();
            $table->string('pickupprivatet', 6)->nullable();
            $table->string('pickupprivate1', 6)->nullable();
            $table->string('pickupprivate2', 6)->nullable();
            $table->string('pickupprivate3', 6)->nullable();
            $table->string('pickupprivate4', 6)->nullable();
            $table->string('pickupprivate5', 6)->nullable();
            $table->string('pickupprivate6', 6)->nullable();
            $table->string('pickupprivate7', 6)->nullable();
            $table->string('pickupprivate8', 6)->nullable();
            $table->string('large_truckprivatet', 6)->nullable();
            $table->string('large_truckprivate1', 6)->nullable();
            $table->string('large_truckprivate2', 6)->nullable();
            $table->string('large_truckprivate3', 6)->nullable();
            $table->string('large_truckprivate4', 6)->nullable();
            $table->string('large_truckprivate5', 6)->nullable();
            $table->string('large_truckprivate6', 6)->nullable();
            $table->string('large_truckprivate7', 6)->nullable();
            $table->string('large_truckprivate8', 6)->nullable();
            $table->string('tractorprivatet', 6)->nullable();
            $table->string('tractorprivate1', 6)->nullable();
            $table->string('tractorprivate2', 6)->nullable();
            $table->string('tractorprivate3', 6)->nullable();
            $table->string('tractorprivate4', 6)->nullable();
            $table->string('tractorprivate5', 6)->nullable();
            $table->string('tractorprivate6', 6)->nullable();
            $table->string('tractorprivate7', 6)->nullable();
            $table->string('tractorprivate8', 6)->nullable();
            $table->string('bikeprivatet', 6)->nullable();
            $table->string('bikeprivate1', 6)->nullable();
            $table->string('bikeprivate2', 6)->nullable();
            $table->string('bikeprivate3', 6)->nullable();
            $table->string('bikeprivate4', 6)->nullable();
            $table->string('bikeprivate5', 6)->nullable();
            $table->string('bikeprivate6', 6)->nullable();
            $table->string('bikeprivate7', 6)->nullable();
            $table->string('bikeprivate8', 6)->nullable();
            $table->string('gigprivatet', 6)->nullable();
            $table->string('gigprivate1', 6)->nullable();
            $table->string('gigprivate2', 6)->nullable();
            $table->string('gigprivate3', 6)->nullable();
            $table->string('gigprivate4', 6)->nullable();
            $table->string('gigprivate5', 6)->nullable();
            $table->string('gigprivate6', 6)->nullable();
            $table->string('gigprivate7', 6)->nullable();
            $table->string('gigprivate8', 6)->nullable();
            $table->string('cartprivatet', 6)->nullable();
            $table->string('cartprivate1', 6)->nullable();
            $table->string('cartprivate2', 6)->nullable();
            $table->string('cartprivate3', 6)->nullable();
            $table->string('cartprivate4', 6)->nullable();
            $table->string('cartprivate5', 6)->nullable();
            $table->string('cartprivate6', 6)->nullable();
            $table->string('cartprivate7', 6)->nullable();
            $table->string('cartprivate8', 6)->nullable();
            $table->string('mikroletprivatet', 6)->nullable();
            $table->string('mikroletprivate1', 6)->nullable();
            $table->string('mikroletprivate2', 6)->nullable();
            $table->string('mikroletprivate3', 6)->nullable();
            $table->string('mikroletprivate4', 6)->nullable();
            $table->string('mikroletprivate5', 6)->nullable();
            $table->string('mikroletprivate6', 6)->nullable();
            $table->string('mikroletprivate7', 6)->nullable();
            $table->string('mikroletprivate8', 6)->nullable();
            $table->string('truk_6_rodaprivatet', 6)->nullable();
            $table->string('truk_6_rodaprivate1', 6)->nullable();
            $table->string('truk_6_rodaprivate2', 6)->nullable();
            $table->string('truk_6_rodaprivate3', 6)->nullable();
            $table->string('truk_6_rodaprivate4', 6)->nullable();
            $table->string('truk_6_rodaprivate5', 6)->nullable();
            $table->string('truk_6_rodaprivate6', 6)->nullable();
            $table->string('truk_6_rodaprivate7', 6)->nullable();
            $table->string('truk_6_rodaprivate8', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t012002_s');
    }
};
