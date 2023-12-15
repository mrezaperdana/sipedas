<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModelsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $models = [
            '002001'  => 'App\Models\Tables\T002001',
            '003001'  => 'App\Models\Tables\T003001',
            '004001'  => 'App\Models\Tables\T004001',
            '004002'  => 'App\Models\Tables\T004002',
            '004003'  => 'App\Models\Tables\T004003',
            '005001'  => 'App\Models\Tables\T005001',
            '006001'  => 'App\Models\Tables\T006001',
            '006002'  => 'App\Models\Tables\T006002',
            '007001'  => 'App\Models\Tables\T007001',
            '007002'  => 'App\Models\Tables\T007002',
            '008001'  => 'App\Models\Tables\T008001',
            '009001'  => 'App\Models\Tables\T009001',
            '010001'  => 'App\Models\Tables\T010001',
            '011001'  => 'App\Models\Tables\T011001',
            '012001'  => 'App\Models\Tables\T012001',
            '012002'  => 'App\Models\Tables\T012002',
            '012003'  => 'App\Models\Tables\T012003',
            '013001'  => 'App\Models\Tables\T013001',
            '014001'  => 'App\Models\Tables\T014001',
            '014002'  => 'App\Models\Tables\T014002',
            '015001'  => 'App\Models\Tables\T015001',
            '015002'  => 'App\Models\Tables\T015002',
            '016001'  => 'App\Models\Tables\T016001',
            '017001'  => 'App\Models\Tables\T017001',
            '018001'  => 'App\Models\Tables\T018001',
            '019001'  => 'App\Models\Tables\T019001',
            '019002'  => 'App\Models\Tables\T019002',
            '019003'  => 'App\Models\Tables\T019003',
            '019004'  => 'App\Models\Tables\T019004',
            '019005'  => 'App\Models\Tables\T019005',
            '020001'  => 'App\Models\Tables\T020001',
            '020002'  => 'App\Models\Tables\T020002',
            '020003'  => 'App\Models\Tables\T020003',
            '020004'  => 'App\Models\Tables\T020004',
            '020005'  => 'App\Models\Tables\T020005',
            '021001'  => 'App\Models\Tables\T021001',
            '022002'  => 'App\Models\Tables\T022002',
            '023001'  => 'App\Models\Tables\T023001',
            '023002'  => 'App\Models\Tables\T023002',
            '023003'  => 'App\Models\Tables\T023003',
            '024001'  => 'App\Models\Tables\T024001',
            '025001'  => 'App\Models\Tables\T025001',
            '025002'  => 'App\Models\Tables\T025002',
            '026001'  => 'App\Models\Tables\T026001',
            '027001'  => 'App\Models\Tables\T027001',
            '027002'  => 'App\Models\Tables\T027002',
            '027003'  => 'App\Models\Tables\T027003',
            '027004'  => 'App\Models\Tables\T027004',
            '027005'  => 'App\Models\Tables\T027005',
            '028001'  => 'App\Models\Tables\T028001',
            '029001'  => 'App\Models\Tables\T029001',
            '030001'  => 'App\Models\Tables\T030001',
            '031001'  => 'App\Models\Tables\T031001',
            '032001'  => 'App\Models\Tables\T032001',
            '032002'  => 'App\Models\Tables\T032002',
            '033001'  => 'App\Models\Tables\T033001',
            '034001'  => 'App\Models\Tables\T034001',
            '035001'  => 'App\Models\Tables\T035001',
            '036001'  => 'App\Models\Tables\T036001',
            '036002'  => 'App\Models\Tables\T036002',
            '036003'  => 'App\Models\Tables\T036003',
            '037001'  => 'App\Models\Tables\T037001',
            '037002'  => 'App\Models\Tables\T037002',
            '037003'  => 'App\Models\Tables\T037003',
            '038001'  => 'App\Models\Tables\T038001',
            '038002'  => 'App\Models\Tables\T038002',
            '038003'  => 'App\Models\Tables\T038003',
            '038004'  => 'App\Models\Tables\T038004',
            '038005'  => 'App\Models\Tables\T038005',
            '038006'  => 'App\Models\Tables\T038006',
            '038007'  => 'App\Models\Tables\T038007',
            '038008'  => 'App\Models\Tables\T038008',
            '038009'  => 'App\Models\Tables\T038009',
            '038010'  => 'App\Models\Tables\T038010',
            '038011'  => 'App\Models\Tables\T038011',
            '038012'  => 'App\Models\Tables\T038012',
            '038013'  => 'App\Models\Tables\T038013',
            '038014'  => 'App\Models\Tables\T038014',
            '038015'  => 'App\Models\Tables\T038015',
            '038016'  => 'App\Models\Tables\T038016',
            '039001'  => 'App\Models\Tables\T039001',
            '039002'  => 'App\Models\Tables\T039002',
            '039003'  => 'App\Models\Tables\T039003',
            '039004'  => 'App\Models\Tables\T039004',
            '039005'  => 'App\Models\Tables\T039005',
            '039006'  => 'App\Models\Tables\T039006',
            '039007'  => 'App\Models\Tables\T039007',
            '039008'  => 'App\Models\Tables\T039008',
            '039009'  => 'App\Models\Tables\T039009',
            '040001'  => 'App\Models\Tables\T040001',
            '040002'  => 'App\Models\Tables\T040002',
            '040003'  => 'App\Models\Tables\T040003',
            '040004'  => 'App\Models\Tables\T040004',
            '040005'  => 'App\Models\Tables\T040005',
            '040006'  => 'App\Models\Tables\T040006',
            '040007'  => 'App\Models\Tables\T040007',
            '040008'  => 'App\Models\Tables\T040008',
            '040009'  => 'App\Models\Tables\T040009',
            '041001'  => 'App\Models\Tables\T041001',
            '041002'  => 'App\Models\Tables\T041002',
            '041003'  => 'App\Models\Tables\T041003',
            '041004'  => 'App\Models\Tables\T041004',
            '041005'  => 'App\Models\Tables\T041005',
            '041006'  => 'App\Models\Tables\T041006',
            '041007'  => 'App\Models\Tables\T041007',
            '041008'  => 'App\Models\Tables\T041008',
            '041009'  => 'App\Models\Tables\T041009',
            '042001'  => 'App\Models\Tables\T042001',
            '042002'  => 'App\Models\Tables\T042002',
            '042003'  => 'App\Models\Tables\T042003',
            '042004'  => 'App\Models\Tables\T042004',
            '042005'  => 'App\Models\Tables\T042005',
            '042006'  => 'App\Models\Tables\T042006',
            '042007'  => 'App\Models\Tables\T042007',
            '042008'  => 'App\Models\Tables\T042008',
            '042009'  => 'App\Models\Tables\T042009',
            '043001'  => 'App\Models\Tables\T043001',
            '043002'  => 'App\Models\Tables\T043002',
            '043003'  => 'App\Models\Tables\T043003',
            '043004'  => 'App\Models\Tables\T043004',
            '043005'  => 'App\Models\Tables\T043005',
            '043006'  => 'App\Models\Tables\T043006',
            '043007'  => 'App\Models\Tables\T043007',
            '043008'  => 'App\Models\Tables\T043008',
            '043009'  => 'App\Models\Tables\T043009',
            '044001'  => 'App\Models\Tables\T044001',
            '044002'  => 'App\Models\Tables\T044002',
            '044003'  => 'App\Models\Tables\T044003',
            '044004'  => 'App\Models\Tables\T044004',
            '044005'  => 'App\Models\Tables\T044005',
            '044006'  => 'App\Models\Tables\T044006',
            '044007'  => 'App\Models\Tables\T044007',
            '044008'  => 'App\Models\Tables\T044008',
            '044009'  => 'App\Models\Tables\T044009',
            '045001'  => 'App\Models\Tables\T045001',
            '045002'  => 'App\Models\Tables\T045002',
            '045003'  => 'App\Models\Tables\T045003',
            '045004'  => 'App\Models\Tables\T045004',
            '045005'  => 'App\Models\Tables\T045005',
            '045006'  => 'App\Models\Tables\T045006',
            '045007'  => 'App\Models\Tables\T045007',
            '045008'  => 'App\Models\Tables\T045008',
            '045009'  => 'App\Models\Tables\T045009',
            '046001'  => 'App\Models\Tables\T046001',
            '046002'  => 'App\Models\Tables\T046002',
            '046003'  => 'App\Models\Tables\T046003',
            '046004'  => 'App\Models\Tables\T046004',
            '046005'  => 'App\Models\Tables\T046005',
            '046006'  => 'App\Models\Tables\T046006',
            '046007'  => 'App\Models\Tables\T046007',
            '046008'  => 'App\Models\Tables\T046008',
            '046009'  => 'App\Models\Tables\T046009',
            '047001'  => 'App\Models\Tables\T047001',
            '047002'  => 'App\Models\Tables\T047002',
            '047003'  => 'App\Models\Tables\T047003',
            '047004'  => 'App\Models\Tables\T047004',
            '047005'  => 'App\Models\Tables\T047005',
            '047006'  => 'App\Models\Tables\T047006',
            '047007'  => 'App\Models\Tables\T047007',
            '047008'  => 'App\Models\Tables\T047008',
            '048001'  => 'App\Models\Tables\T048001',
            '048002'  => 'App\Models\Tables\T048002',
            '048003'  => 'App\Models\Tables\T048003',
            '048004'  => 'App\Models\Tables\T048004',
            '048005'  => 'App\Models\Tables\T048005',
            '048006'  => 'App\Models\Tables\T048006',
            '048007'  => 'App\Models\Tables\T048007',
            '048008'  => 'App\Models\Tables\T048008',
            '048009'  => 'App\Models\Tables\T048009',
            '048010'  => 'App\Models\Tables\T048010',
            '048011'  => 'App\Models\Tables\T048011',
            '048012'  => 'App\Models\Tables\T048012',
            '049001'  => 'App\Models\Tables\T049001',
            '049002'  => 'App\Models\Tables\T049002',
            '049003'  => 'App\Models\Tables\T049003',
            '050001'  => 'App\Models\Tables\T050001',
            '050002'  => 'App\Models\Tables\T050002',
            // ...
        ];

        $this->app->singleton('models', function () use ($models) {
            return $models;
        });

        $modelClasses = [
            'App\Models\Tables\T002001',
            'App\Models\Tables\T003001',
            'App\Models\Tables\T004001',
            'App\Models\Tables\T004002',
            'App\Models\Tables\T004003',
            'App\Models\Tables\T005001',
            'App\Models\Tables\T006001',
            'App\Models\Tables\T006002',
            'App\Models\Tables\T007001',
            'App\Models\Tables\T007002',
            'App\Models\Tables\T008001',
            'App\Models\Tables\T009001',
            'App\Models\Tables\T010001',
            'App\Models\Tables\T011001',
            'App\Models\Tables\T012001',
            'App\Models\Tables\T012002',
            'App\Models\Tables\T012003',
            'App\Models\Tables\T013001',
            'App\Models\Tables\T014001',
            'App\Models\Tables\T014002',
            'App\Models\Tables\T015001',
            'App\Models\Tables\T015002',
            'App\Models\Tables\T016001',
            'App\Models\Tables\T017001',
            'App\Models\Tables\T018001',
            'App\Models\Tables\T019001',
            'App\Models\Tables\T019002',
            'App\Models\Tables\T019003',
            'App\Models\Tables\T019004',
            'App\Models\Tables\T019005',
            'App\Models\Tables\T020001',
            'App\Models\Tables\T020002',
            'App\Models\Tables\T020003',
            'App\Models\Tables\T020004',
            'App\Models\Tables\T020005',
            'App\Models\Tables\T021001',
            'App\Models\Tables\T022002',
            'App\Models\Tables\T023001',
            'App\Models\Tables\T023002',
            'App\Models\Tables\T023003',
            'App\Models\Tables\T024001',
            'App\Models\Tables\T025001',
            'App\Models\Tables\T025002',
            'App\Models\Tables\T026001',
            'App\Models\Tables\T027001',
            'App\Models\Tables\T027002',
            'App\Models\Tables\T027003',
            'App\Models\Tables\T027004',
            'App\Models\Tables\T027005',
            'App\Models\Tables\T028001',
            'App\Models\Tables\T029001',
            'App\Models\Tables\T030001',
            'App\Models\Tables\T031001',
            'App\Models\Tables\T032001',
            'App\Models\Tables\T032002',
            'App\Models\Tables\T033001',
            'App\Models\Tables\T034001',
            'App\Models\Tables\T035001',
            'App\Models\Tables\T036001',
            'App\Models\Tables\T036002',
            'App\Models\Tables\T036003',
            'App\Models\Tables\T037001',
            'App\Models\Tables\T037002',
            'App\Models\Tables\T037003',
            'App\Models\Tables\T038001',
            'App\Models\Tables\T038002',
            'App\Models\Tables\T038003',
            'App\Models\Tables\T038004',
            'App\Models\Tables\T038005',
            'App\Models\Tables\T038006',
            'App\Models\Tables\T038007',
            'App\Models\Tables\T038008',
            'App\Models\Tables\T038009',
            'App\Models\Tables\T038010',
            'App\Models\Tables\T038011',
            'App\Models\Tables\T038012',
            'App\Models\Tables\T038013',
            'App\Models\Tables\T038014',
            'App\Models\Tables\T038015',
            'App\Models\Tables\T038016',
            'App\Models\Tables\T039001',
            'App\Models\Tables\T039002',
            'App\Models\Tables\T039003',
            'App\Models\Tables\T039004',
            'App\Models\Tables\T039005',
            'App\Models\Tables\T039006',
            'App\Models\Tables\T039007',
            'App\Models\Tables\T039008',
            'App\Models\Tables\T039009',
            'App\Models\Tables\T040001',
            'App\Models\Tables\T040002',
            'App\Models\Tables\T040003',
            'App\Models\Tables\T040004',
            'App\Models\Tables\T040005',
            'App\Models\Tables\T040006',
            'App\Models\Tables\T040007',
            'App\Models\Tables\T040008',
            'App\Models\Tables\T040009',
            'App\Models\Tables\T041001',
            'App\Models\Tables\T041002',
            'App\Models\Tables\T041003',
            'App\Models\Tables\T041004',
            'App\Models\Tables\T041005',
            'App\Models\Tables\T041006',
            'App\Models\Tables\T041007',
            'App\Models\Tables\T041008',
            'App\Models\Tables\T041009',
            'App\Models\Tables\T042001',
            'App\Models\Tables\T042002',
            'App\Models\Tables\T042003',
            'App\Models\Tables\T042004',
            'App\Models\Tables\T042005',
            'App\Models\Tables\T042006',
            'App\Models\Tables\T042007',
            'App\Models\Tables\T042008',
            'App\Models\Tables\T042009',
            'App\Models\Tables\T043001',
            'App\Models\Tables\T043002',
            'App\Models\Tables\T043003',
            'App\Models\Tables\T043004',
            'App\Models\Tables\T043005',
            'App\Models\Tables\T043006',
            'App\Models\Tables\T043007',
            'App\Models\Tables\T043008',
            'App\Models\Tables\T043009',
            'App\Models\Tables\T044001',
            'App\Models\Tables\T044002',
            'App\Models\Tables\T044003',
            'App\Models\Tables\T044004',
            'App\Models\Tables\T044005',
            'App\Models\Tables\T044006',
            'App\Models\Tables\T044007',
            'App\Models\Tables\T044008',
            'App\Models\Tables\T044009',
            'App\Models\Tables\T045001',
            'App\Models\Tables\T045002',
            'App\Models\Tables\T045003',
            'App\Models\Tables\T045004',
            'App\Models\Tables\T045005',
            'App\Models\Tables\T045006',
            'App\Models\Tables\T045007',
            'App\Models\Tables\T045008',
            'App\Models\Tables\T045009',
            'App\Models\Tables\T046001',
            'App\Models\Tables\T046002',
            'App\Models\Tables\T046003',
            'App\Models\Tables\T046004',
            'App\Models\Tables\T046005',
            'App\Models\Tables\T046006',
            'App\Models\Tables\T046007',
            'App\Models\Tables\T046008',
            'App\Models\Tables\T046009',
            'App\Models\Tables\T047001',
            'App\Models\Tables\T047002',
            'App\Models\Tables\T047003',
            'App\Models\Tables\T047004',
            'App\Models\Tables\T047005',
            'App\Models\Tables\T047006',
            'App\Models\Tables\T047007',
            'App\Models\Tables\T047008',
            'App\Models\Tables\T048001',
            'App\Models\Tables\T048002',
            'App\Models\Tables\T048003',
            'App\Models\Tables\T048004',
            'App\Models\Tables\T048005',
            'App\Models\Tables\T048006',
            'App\Models\Tables\T048007',
            'App\Models\Tables\T048008',
            'App\Models\Tables\T048009',
            'App\Models\Tables\T048010',
            'App\Models\Tables\T048011',
            'App\Models\Tables\T048012',
            'App\Models\Tables\T049001',
            'App\Models\Tables\T049002',
            'App\Models\Tables\T049003',
            'App\Models\Tables\T050001',
            'App\Models\Tables\T050002',
        ];

        $this->app->singleton('modelClasses', function () use ($modelClasses) {
            return $modelClasses;
        });

        $this->app->bind('result', function ($app, $kode) {
            $kode = $kode[0];
            switch ($kode) {
                case '001':
                    return "tabel/SKPD/001_BPS/";
                case '002':
                    return "tabel/SKPD/002_BPKAD/";

                case '003':
                    return "tabel/SKPD/003_Cukai/";

                case '004':
                    return "tabel/SKPD/004_DLH/";

                case '005':
                    return "tabel/SKPD/005_Industri/";

                case '006':
                    return "tabel/SKPD/006_Kehutanan/";

                case '007':
                    return "tabel/SKPD/007_Kodim/";

                case '008':
                    return "tabel/SKPD/008_Koperasi/";

                case '009':
                    return "tabel/SKPD/009_PDAM/";

                case '010':
                    return "tabel/SKPD/010_Pegadaian/";

                case '011':
                    return "tabel/SKPD/011_Perdagangan/";

                case '012':
                    return "tabel/SKPD/012_Perhubungan/";

                case '013':
                    return "tabel/SKPD/013_Perikanan/";

                case '014':
                    return "tabel/SKPD/014_Perkebunan/";

                case '015':
                    return "tabel/SKPD/015_Peternakan/";

                case '016':
                    return "tabel/SKPD/016_PLN/";

                case '017':
                    return "tabel/SKPD/017_POS/";

                case '018':
                    return "tabel/SKPD/018_Sekda/";

                case '019':
                    return "tabel/SKPD/019_Diskominfo/";

                case '020':
                    return "tabel/SKPD/020_Kesbangpol/";

                case '021':
                    return "tabel/SKPD/021_Kehutanan_Wil_V/";

                case '022':
                    return "tabel/SKPD/022_BKPSDM/";

                case '023':
                    return "tabel/SKPD/023_DPMDes/";

                case '024':
                    return "tabel/SKPD/024_BPKPD/";

                case '025':
                    return "tabel/SKPD/025_DPK/";

                case '026':
                    return "tabel/SKPD/026_PolPP_PK/";

                case '027':
                    return "tabel/SKPD/027_DPRD/";

                case '028':
                    return "tabel/SKPD/028_Disdukcapil/";

                case '029':
                    return "tabel/SKPD/029_DP3AP2KB/";
                case '030':
                    return "tabel/SKPD/030_DPMPTSP_Nakertrans/";
                case '031':
                    return "tabel/SKPD/031_Pendidikan/";
                case '032':
                    return "tabel/SKPD/032_Pertanian/";
                case '033':
                    return "tabel/SKPD/033_DPPKUKM/";
                case '034':
                    return "tabel/SKPD/034_DPKO/";
                case '035':
                    return "tabel/SKPD/035_Kesehatan/";
                case '036':
                    return "tabel/SKPD/036_RSUD/";
                case '037':
                    return "tabel/SKPD/037_DPUPR/";
                case '038':
                    return "tabel/SKPD/038_Sosial/";
                case '039':
                    return "tabel/SKPD/039_Marioriwawo/";
                case '040':
                    return "tabel/SKPD/040_Lalabata/";
                case '041':
                    return "tabel/SKPD/041_Liliriaja/";
                case '042':
                    return "tabel/SKPD/042_Ganra/";
                case '043':
                    return "tabel/SKPD/043_Citta/";
                case '044':
                    return "tabel/SKPD/044_Lilirilau/";
                case '045':
                    return "tabel/SKPD/045_Donri/";
                case '046':
                    return "tabel/SKPD/046_Marioriawa/";
                case '047':
                    return "tabel/SKPD/047_DPKP/";
                case '048':
                    return "tabel/SKPD/048_Telkom_Cangadi/";
                case '049':
                    return "tabel/SKPD/049_BPBD/";
                case '050':
                    return "tabel/SKPD/050_Inspekda/";
                case '051':
                    return "tabel/Others/051_BRI/";
                case '052':
                    return "tabel/Others/052_BNI/";
                case '053':
                    return "tabel/Others/053_BSulselbar/";
                case '054':
                    return "tabel/Others/054_Telkom/";
                case '055':
                    return "tabel/Others/055_Kejari/";
                case '056':
                    return "tabel/Others/056_BULOG/";
                case '057':
                    return "tabel/Others/057_Rutan/";
                case '058':
                    return "tabel/Others/058_BPN/";
                case '059':
                    return "tabel/Others/059_Kemenag/";
                case '060':
                    return "tabel/Others/060_POLRES/";
                case '061':
                    return "tabel/Others/061_PN/";
                case '062':
                    return "tabel/Others/062_PA/";
                case '063':
                    return "tabel/Others/063_AKBID/";
                case '064':
                    return "tabel/Others/064_AKPER/";
                case '065':
                    return "tabel/Others/065_Lamappapoleonro/";
                case '066':
                    return "tabel/Others/066_Pettabaringeng/";
                case '067':
                    return "tabel/Others/067_Al_Gazali/";
                case '068':
                    return "tabel/Others/068_KP2KP/";
                case '069':
                    return "tabel/Others/069_AMIK/";
                case '070':
                    return "tabel/Others/070_KPU/";
                case '071':
                    return "tabel/Others/071_Bawaslu/";
                case '072':
                    return "tabel/Others/072_BSM/";
                case '073':
                    return "tabel/Others/073_BMKG/";
                default:
                    return null;
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
