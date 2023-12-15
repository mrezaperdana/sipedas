<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Tables\T002001;
use App\Models\Tables\T003001;
use App\Models\Tables\T004001;
use App\Models\Tables\T004002;
use App\Models\Tables\T004003;
use App\Models\Tables\T005001;
use App\Models\Tables\T006001;
use App\Models\Tables\T006002;
use App\Models\Tables\T007001;
use App\Models\Tables\T007002;
use App\Models\Tables\T008001;
use App\Models\Tables\T009001;
use App\Models\Tables\T010001;
use App\Models\Tables\T011001;
use App\Models\Tables\T012001;
use App\Models\Tables\T012002;
use App\Models\Tables\T012003;
use App\Models\Tables\T013001;
use App\Models\Tables\T014001;
use App\Models\Tables\T014002;
use App\Models\Tables\T015001;
use App\Models\Tables\T015002;
use App\Models\Tables\T016001;
use App\Models\Tables\T017001;
use App\Models\Tables\T018001;
use App\Models\Tables\T019005;
use App\Models\Tables\T019004;
use App\Models\Tables\T019003;
use App\Models\Tables\T019002;
use App\Models\Tables\T019001;
use App\Models\Tables\T020001;
use App\Models\Tables\T020002;
use App\Models\Tables\T021001;
use App\Models\Tables\T022002;
use App\Models\Tables\T023001;
use App\Models\Tables\T023002;
use App\Models\Tables\T023003;
use App\Models\Tables\T024001;
use App\Models\Tables\T025001;
use App\Models\Tables\T025002;
use App\Models\Tables\T026001;
use App\Models\Tables\T027001;
use App\Models\Tables\T027002;
use App\Models\Tables\T027003;
use App\Models\Tables\T027004;
use App\Models\Tables\T027005;
use App\Models\Tables\T028001;
use App\Models\Tables\T029001;
use App\Models\Tables\T030001;
use App\Models\Tables\T031001;
use App\Models\Tables\T032001;
use App\Models\Tables\T032002;
use App\Models\Tables\T033001;
use App\Models\Tables\T034001;
use App\Models\Tables\T035001;
use App\Models\Tables\T036001;
use App\Models\Tables\T036002;
use App\Models\Tables\T036003;
use App\Models\Tables\T037001;
use App\Models\Tables\T037002;
use App\Models\Tables\T037003;
use App\Models\Tables\T038001;
use App\Models\Tables\T038002;
use App\Models\Tables\T038003;
use App\Models\Tables\T038004;
use App\Models\Tables\T038005;
use App\Models\Tables\T038006;
use App\Models\Tables\T038007;
use App\Models\Tables\T038008;
use App\Models\Tables\T038009;
use App\Models\Tables\T038010;
use App\Models\Tables\T038011;
use App\Models\Tables\T038012;
use App\Models\Tables\T038013;
use App\Models\Tables\T038014;
use App\Models\Tables\T038015;
use App\Models\Tables\T038016;
use App\Models\Tables\T039001;
use App\Models\Tables\T039002;
use App\Models\Tables\T039003;
use App\Models\Tables\T039004;
use App\Models\Tables\T039005;
use App\Models\Tables\T039006;
use App\Models\Tables\T039007;
use App\Models\Tables\T039008;
use App\Models\Tables\T039009;
use App\Models\Tables\T040001;
use App\Models\Tables\T040002;
use App\Models\Tables\T040003;
use App\Models\Tables\T040004;
use App\Models\Tables\T040005;
use App\Models\Tables\T040006;
use App\Models\Tables\T040007;
use App\Models\Tables\T040008;
use App\Models\Tables\T040009;
use App\Models\Tables\T041001;
use App\Models\Tables\T041002;
use App\Models\Tables\T041003;
use App\Models\Tables\T041004;
use App\Models\Tables\T041005;
use App\Models\Tables\T041006;
use App\Models\Tables\T041007;
use App\Models\Tables\T041008;
use App\Models\Tables\T041009;
use App\Models\Tables\T042001;
use App\Models\Tables\T042002;
use App\Models\Tables\T042003;
use App\Models\Tables\T042004;
use App\Models\Tables\T042005;
use App\Models\Tables\T042006;
use App\Models\Tables\T042007;
use App\Models\Tables\T042008;
use App\Models\Tables\T042009;
use App\Models\Tables\T043001;
use App\Models\Tables\T043002;
use App\Models\Tables\T043003;
use App\Models\Tables\T043004;
use App\Models\Tables\T043005;
use App\Models\Tables\T043006;
use App\Models\Tables\T043007;
use App\Models\Tables\T043008;
use App\Models\Tables\T043009;
use App\Models\Tables\T044001;
use App\Models\Tables\T044002;
use App\Models\Tables\T044003;
use App\Models\Tables\T044004;
use App\Models\Tables\T044005;
use App\Models\Tables\T044006;
use App\Models\Tables\T044007;
use App\Models\Tables\T044008;
use App\Models\Tables\T044009;
use App\Models\Tables\T045001;
use App\Models\Tables\T045002;
use App\Models\Tables\T045003;
use App\Models\Tables\T045004;
use App\Models\Tables\T045005;
use App\Models\Tables\T045006;
use App\Models\Tables\T045007;
use App\Models\Tables\T045008;
use App\Models\Tables\T045009;
use App\Models\Tables\T046001;
use App\Models\Tables\T046002;
use App\Models\Tables\T046003;
use App\Models\Tables\T046004;
use App\Models\Tables\T046005;
use App\Models\Tables\T046006;
use App\Models\Tables\T046007;
use App\Models\Tables\T046008;
use App\Models\Tables\T046009;
use App\Models\Tables\T047001;
use App\Models\Tables\T047002;
use App\Models\Tables\T047003;
use App\Models\Tables\T047004;
use App\Models\Tables\T047005;
use App\Models\Tables\T047006;
use App\Models\Tables\T047007;
use App\Models\Tables\T047008;
use App\Models\Tables\T048001;
use App\Models\Tables\T048002;
use App\Models\Tables\T048003;
use App\Models\Tables\T048004;
use App\Models\Tables\T048005;
use App\Models\Tables\T048006;
use App\Models\Tables\T048007;
use App\Models\Tables\T048008;
use App\Models\Tables\T048009;
use App\Models\Tables\T048010;
use App\Models\Tables\T048011;
use App\Models\Tables\T048012;
use App\Models\Tables\T049001;
use App\Models\Tables\T049002;
use App\Models\Tables\T049003;
use App\Models\Tables\T050001;
use App\Models\Tables\T050002;

class Daftartabel extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $guarded = [];

    public function getTableModel($tableCode)
    {
        $modelClasses = [
            '002001' => T002001::class,
            '003001' => T003001::class,
            '004001' => T004001::class,
            '004002' => T004002::class,
            '004003' => T004003::class,
            '005001' => T005001::class,
            '006001' => T006001::class,
            '006002' => T006002::class,
            '007001' => T007001::class,
            '007002' => T007002::class,
            '008001' => T008001::class,
            '009001' => T009001::class,
            '010001' => T010001::class,
            '011001' => T011001::class,
            '012001' => T012001::class,
            '012002' => T012002::class,
            '012003' => T012003::class,
            '013001' => T013001::class,
            '014001' => T014001::class,
            '014002' => T014002::class,
            '015001' => T015001::class,
            '015002' => T015002::class,
            '016001' => T016001::class,
            '017001' => T017001::class,
            '018001' => T018001::class,
            '019001' => T019001::class,
            '019002' => T019002::class,
            '019003' => T019003::class,
            '019004' => T019004::class,
            '019005' => T019005::class,
            '020001' => T020001::class,
            '020002' => T020002::class,
            '020003' => T020001::class,
            '020004' => T020002::class,
            '020005' => T020002::class,
            '021001' => T021001::class,
            '022002' => T022002::class,
            '023001' => T023001::class,
            '023002' => T023002::class,
            '023003' => T023003::class,
            '024001' => T024001::class,
            '025001' => T025001::class,
            '025002' => T025002::class,
            '026001' => T026001::class,
            '027001' => T027001::class,
            '027002' => T027002::class,
            '027003' => T027003::class,
            '027004' => T027004::class,
            '027005' => T027005::class,
            '028001' => T028001::class,
            '029001' => T029001::class,
            '030001' => T030001::class,
            '031001' => T031001::class,
            '032001' => T032001::class,
            '032002' => T032002::class,
            '033001' => T033001::class,
            '034001' => T034001::class,
            '035001' => T035001::class,
            '036001' => T036001::class,
            '036002' => T036002::class,
            '036003' => T036003::class,
            '037001' => T037001::class,
            '037002' => T037002::class,
            '037003' => T037003::class,
            '038001' => T038001::class,
            '038002' => T038002::class,
            '038003' => T038003::class,
            '038004' => T038004::class,
            '038005' => T038005::class,
            '038006' => T038006::class,
            '038007' => T038007::class,
            '038008' => T038008::class,
            '038009' => T038009::class,
            '038010' => T038010::class,
            '038011' => T038011::class,
            '038012' => T038012::class,
            '038013' => T038013::class,
            '038014' => T038014::class,
            '038015' => T038015::class,
            '038016' => T038016::class,
            '039001' => T039001::class,
            '039002' => T039002::class,
            '039003' => T039003::class,
            '039004' => T039004::class,
            '039005' => T039005::class,
            '039006' => T039006::class,
            '039007' => T039007::class,
            '039008' => T039008::class,
            '039009' => T039009::class,
            '040001' => T040001::class,
            '040002' => T040002::class,
            '040003' => T040003::class,
            '040004' => T040004::class,
            '040005' => T040005::class,
            '040006' => T040006::class,
            '040007' => T040007::class,
            '040008' => T040008::class,
            '040009' => T040009::class,
            '041001' => T041001::class,
            '041002' => T041002::class,
            '041003' => T041003::class,
            '041004' => T041004::class,
            '041005' => T041005::class,
            '041006' => T041006::class,
            '041007' => T041007::class,
            '041008' => T041008::class,
            '041009' => T041009::class,
            '042001' => T042001::class,
            '042002' => T042002::class,
            '042003' => T042003::class,
            '042004' => T042004::class,
            '042005' => T042005::class,
            '042006' => T042006::class,
            '042007' => T042007::class,
            '042008' => T042008::class,
            '042009' => T042009::class,
            '043001' => T043001::class,
            '043002' => T043002::class,
            '043003' => T043003::class,
            '043004' => T043004::class,
            '043005' => T043005::class,
            '043006' => T043006::class,
            '043007' => T043007::class,
            '043008' => T043008::class,
            '043009' => T043009::class,
            '044001' => T044001::class,
            '044002' => T044002::class,
            '044003' => T044003::class,
            '044004' => T044004::class,
            '044005' => T044005::class,
            '044006' => T044006::class,
            '044007' => T044007::class,
            '044008' => T044008::class,
            '044009' => T044009::class,
            '045001' => T045001::class,
            '045002' => T045002::class,
            '045003' => T045003::class,
            '045004' => T045004::class,
            '045005' => T045005::class,
            '045006' => T045006::class,
            '045007' => T045007::class,
            '045008' => T045008::class,
            '045009' => T045009::class,
            '046001' => T046001::class,
            '046002' => T046002::class,
            '046003' => T046003::class,
            '046004' => T046004::class,
            '046005' => T046005::class,
            '046006' => T046006::class,
            '046007' => T046007::class,
            '046008' => T046008::class,
            '046009' => T046009::class,
            '047001' => T047001::class,
            '047002' => T047002::class,
            '047003' => T047003::class,
            '047004' => T047004::class,
            '047005' => T047005::class,
            '047006' => T047006::class,
            '047007' => T047007::class,
            '047008' => T047008::class,
            '048001' => T048001::class,
            '048002' => T048002::class,
            '048003' => T048003::class,
            '048004' => T048004::class,
            '048005' => T048005::class,
            '048006' => T048006::class,
            '048007' => T048007::class,
            '048008' => T048008::class,
            '048009' => T048009::class,
            '048010' => T048010::class,
            '048011' => T048011::class,
            '048012' => T048012::class,
            '049001' => T049001::class,
            '049002' => T049002::class,
            '049003' => T049003::class,
            '050001' => T050001::class,
            '050002' => T050002::class,
        ];

        if (isset($modelClasses[$tableCode])) {
            return new $modelClasses[$tableCode];
        } else {
            throw new \Exception("Invalid table code: " . $tableCode);
        }
    }
}
