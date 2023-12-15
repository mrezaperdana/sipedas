<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">4.3.9</th>
                        <th>Banyaknya Sarana dan Prasarana Kebersihan Menurut Jenis di Kabupaten Soppeng, 2021</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th>Number of sanitation facilities and infrastructure by type in Soppeng Regency, 2021</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Jenis Sarana dan Prasarana/ Type of Infrastructure</td>
                        <td>Jumlah/ Amount</td>
                        <td>Keterangan/ Explanation</td>
                    </tr>

                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                    </tr>
                    <tr>
                        <td>Mobil Operasional Pimpinan/ Chief Operational Car</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('amount1') is-invalid @enderror" id="amount1" name="amount1"
                                value="{{ old('amount1', $data->amount1) }}">
                            @error('amount1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control form-control2 @error('deaf1') is-invalid @enderror" id="deaf1"
                                name="deaf1" value="{{ old('deaf1', $data->deaf1) }}">
                            @error('deaf1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Mobil Pengangkut Sampah (Kijang Box)/Car Garbage</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('amount2') is-invalid @enderror" id="amount2"
                                name="amount2" value="{{ old('amount2', $data->amount2) }}">
                            @error('amount2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control form-control2 @error('deaf2') is-invalid @enderror" id="deaf2"
                                name="deaf2" value="{{ old('deaf2', $data->deaf2) }}">
                            @error('deaf2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Mobil Pengangkut Sampah (Dump Truck Mini)/Car Garbage</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('amount3') is-invalid @enderror" id="amount3"
                                name="amount3" value="{{ old('amount3', $data->amount3) }}">
                            @error('amount3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control form-control2 @error('deaf3') is-invalid @enderror" id="deaf3"
                                name="deaf3" value="{{ old('deaf3', $data->deaf3) }}">
                            @error('deaf3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Truk Pengangkut Sampah (Dump Truck)/Car Garbage</td>
                        <td>10</td>
                        <td>1 rusak berat/1 severely damaged</td>
                    </tr>
                    <tr>
                        <td>Mobil Pengangkut Sampah (Arm Roll)/</td>
                        <td>6</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Operasional (Pick Up)/Operational Car</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Operasional (Mobil Tangki)/</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Pemangkas/Sky Lift</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Ekskavator/Excavator</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Wheel Loader</td>
                        <td>1</td>
                        <td>rusak berat/severely damaged</td>
                    </tr>
                    <tr>
                        <td>Buldoser/Bulldozer</td>
                        <td>2</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Sepeda Motor Operasional/ Operational Motorcycle</td>
                        <td>16</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Kontainer Sampah/Garbage Container</td>
                        <td>26</td>
                        <td>2 rusak/ 2 damaged</td>
                    </tr>
                    <tr>
                        <td>Mesin Pembakar Sampah/Incenarator</td>
                        <td>1</td>
                        <td>rusak berat/severely damaged</td>
                    </tr>
                    <tr>
                        <td>Motor Sampah (3 Roda)/Garbage Motors (3 Wheels)</td>
                        <td>17</td>
                        <td>2 rusak berat/2 severely damaged</td>
                    </tr>
                    <tr>
                        <td>Tanah TPA/Landfill</td>
                        <td>1</td>
                        <td>Luas 4,536 Ha (sesuai Sertifikat milik Pemda Kab. Soppeng)/Area 4,536 Ha</td>
                    </tr>
                    <tr>
                        <td>TPS Permanen (Komunal)/Permanent Landfill</td>
                        <td>15</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Kayu (Komunal)/Wood Landfill</td>
                        <td>12</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Fiber/Plastik (Rumah Tangga)/Fiber Landfill</td>
                        <td>2000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Pemilah/Landfill sorting</td>
                        <td>800</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Karung Gantung (Pemilah)/Hanging Sack Landfills</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mesin Pemotong Rumput/Mowing Machine</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @else
        <x-slot name="tabel2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">4.3.9</th>
                        <th>Banyaknya Sarana dan Prasarana Kebersihan Menurut Jenis di Kabupaten Soppeng, 2021</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th>Number of sanitation facilities and infrastructure by type in Soppeng Regency, 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jenis Sarana dan Prasarana/</td>
                        <td>Jumlah/</td>
                        <td>Keterangan/</td>
                    </tr>
                    <tr>
                        <td>Type of Infrastructure</td>
                        <td>Amount</td>
                        <td>Explanation</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                    </tr>
                    <tr>
                        <td>Mobil Operasional Pimpinan/ Chief Operational Car</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Pengangkut Sampah (Kijang Box)/Car Garbage</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Pengangkut Sampah (Dump Truck Mini)/Car Garbage</td>
                        <td>2</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Truk Pengangkut Sampah (Dump Truck)/Car Garbage</td>
                        <td>10</td>
                        <td>1 rusak berat/1 severely damaged</td>
                    </tr>
                    <tr>
                        <td>Mobil Pengangkut Sampah (Arm Roll)/</td>
                        <td>6</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Operasional (Pick Up)/Operational Car</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Operasional (Mobil Tangki)/</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mobil Pemangkas/Sky Lift</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Ekskavator/Excavator</td>
                        <td>1</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Wheel Loader</td>
                        <td>1</td>
                        <td>rusak berat/severely damaged</td>
                    </tr>
                    <tr>
                        <td>Buldoser/Bulldozer</td>
                        <td>2</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Sepeda Motor Operasional/ Operational Motorcycle</td>
                        <td>16</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Kontainer Sampah/Garbage Container</td>
                        <td>26</td>
                        <td>2 rusak/ 2 damaged</td>
                    </tr>
                    <tr>
                        <td>Mesin Pembakar Sampah/Incenarator</td>
                        <td>1</td>
                        <td>rusak berat/severely damaged</td>
                    </tr>
                    <tr>
                        <td>Motor Sampah (3 Roda)/Garbage Motors (3 Wheels)</td>
                        <td>17</td>
                        <td>2 rusak berat/2 severely damaged</td>
                    </tr>
                    <tr>
                        <td>Tanah TPA/Landfill</td>
                        <td>1</td>
                        <td>Luas 4,536 Ha (sesuai Sertifikat milik Pemda Kab. Soppeng)/Area 4,536 Ha</td>
                    </tr>
                    <tr>
                        <td>TPS Permanen (Komunal)/Permanent Landfill</td>
                        <td>15</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Kayu (Komunal)/Wood Landfill</td>
                        <td>12</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Fiber/Plastik (Rumah Tangga)/Fiber Landfill</td>
                        <td>2000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Pemilah/Landfill sorting</td>
                        <td>800</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>TPS Karung Gantung (Pemilah)/Hanging Sack Landfills</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Mesin Pemotong Rumput/Mowing Machine</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.023_DPMDes.script1')
    </x-slot>
</x-tabel-entri-view>
