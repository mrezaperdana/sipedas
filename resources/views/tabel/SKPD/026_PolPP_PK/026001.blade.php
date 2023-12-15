<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">2.3.9</th>
                        <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Personil Satuan Polisi Pamong Praja
                                dan
                                Perlindungan Masyarakat Menurut Kecamatan di Kabupaten Soppeng,
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Public Order
                                Enforces
                                and
                                Civil Defense Personnel by Subdistrict in Soppeng Regency,
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Kecamatan/ </span><span
                                style="font-style:italic;color:#000">Subdistrict</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Satuan Polisi Pamong Praja/
                            </span><span style="font-style:italic;color:#000">Civil Service Police Unit</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Pelindungan Masyarakat/
                            </span><span style="font-style:italic;color:#000">Civil Defense</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Marioriwawo</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp1') is-invalid @enderror" id="polpp1" name="polpp1"
                                value="{{ old('polpp1', $data->polpp1) }}">
                            @error('polpp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas1') is-invalid @enderror" id="pilmas1"
                                name="pilmas1" value="{{ old('pilmas1', $data->pilmas1) }}">
                            @error('pilmas1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">020. Lalabata</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp2') is-invalid @enderror" id="polpp2" name="polpp2"
                                value="{{ old('polpp2', $data->polpp2) }}">
                            @error('polpp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas2') is-invalid @enderror" id="pilmas2"
                                name="pilmas2" value="{{ old('pilmas2', $data->pilmas2) }}">
                            @error('pilmas2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">030. Liliriaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp3') is-invalid @enderror" id="polpp3" name="polpp3"
                                value="{{ old('polpp3', $data->polpp3) }}">
                            @error('polpp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas3') is-invalid @enderror" id="pilmas3"
                                name="pilmas3" value="{{ old('pilmas3', $data->pilmas3) }}">
                            @error('pilmas3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">031. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp4') is-invalid @enderror" id="polpp4" name="polpp4"
                                value="{{ old('polpp4', $data->polpp4) }}">
                            @error('polpp4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas4') is-invalid @enderror" id="pilmas4"
                                name="pilmas4" value="{{ old('pilmas4', $data->pilmas4) }}">
                            @error('pilmas4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">032. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp5') is-invalid @enderror" id="polpp5" name="polpp5"
                                value="{{ old('polpp5', $data->polpp5) }}">
                            @error('polpp5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas5') is-invalid @enderror" id="pilmas5"
                                name="pilmas5" value="{{ old('pilmas5', $data->pilmas5) }}">
                            @error('pilmas5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">040. Lilirilau</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp6') is-invalid @enderror" id="polpp6"
                                name="polpp6" value="{{ old('polpp6', $data->polpp6) }}">
                            @error('polpp6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas6') is-invalid @enderror" id="pilmas6"
                                name="pilmas6" value="{{ old('pilmas6', $data->pilmas6) }}">
                            @error('pilmas6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">050. Donri-Donri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp7') is-invalid @enderror" id="polpp7"
                                name="polpp7" value="{{ old('polpp7', $data->polpp7) }}">
                            @error('polpp7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas7') is-invalid @enderror" id="pilmas7"
                                name="pilmas7" value="{{ old('pilmas7', $data->pilmas7) }}">
                            @error('pilmas7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">060. Marioriawa</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polpp8') is-invalid @enderror" id="polpp8"
                                name="polpp8" value="{{ old('polpp8', $data->polpp8) }}">
                            @error('polpp8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmas8') is-invalid @enderror" id="pilmas8"
                                name="pilmas8" value="{{ old('pilmas8', $data->pilmas8) }}">
                            @error('pilmas8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('polppt') is-invalid @enderror" id="polppt"
                                name="polppt" value="{{ old('polppt', $data->polppt) }}">
                            @error('polppt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pilmast') is-invalid @enderror" id="pilmast"
                                name="pilmast" value="{{ old('pilmast', $data->pilmast) }}">
                            @error('pilmast')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Keterangan :</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PNS POLPP &amp; PMK</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket1') is-invalid @enderror" id="ket1"
                                name="ket1" value="{{ old('ket1', $data->ket1) }}">
                            @error('ket1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>CPNS</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket2') is-invalid @enderror" id="ket2"
                                name="ket2" value="{{ old('ket2', $data->ket2) }}">
                            @error('ket2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>KONTRAK POLPP</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket3') is-invalid @enderror" id="ket3"
                                name="ket3" value="{{ old('ket3', $data->ket3) }}">
                            @error('ket3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>KONTRAK PMK</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket4') is-invalid @enderror" id="ket4"
                                name="ket4" value="{{ old('ket4', $data->ket4) }}">
                            @error('ket4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>PHTL POLPP</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket5') is-invalid @enderror" id="ket5"
                                name="ket5" value="{{ old('ket5', $data->ket5) }}">
                            @error('ket5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>PHTL PMK</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket6') is-invalid @enderror" id="ket6"
                                name="ket6" value="{{ old('ket6', $data->ket6) }}">
                            @error('ket6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>MAGANG POLPP</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket7') is-invalid @enderror" id="ket7"
                                name="ket7" value="{{ old('ket7', $data->ket7) }}">
                            @error('ket7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>MAGANG PMK</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ket8') is-invalid @enderror" id="ket8"
                                name="ket8" value="{{ old('ket8', $data->ket8) }}">
                            @error('ket8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>KESELURUHAN :</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kett') is-invalid @enderror" id="kett"
                                name="kett" value="{{ old('kett', $data->kett) }}">
                            @error('kett')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @else
        <x-slot name="tabel2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">2.3.9</th>
                        <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Personil Satuan Polisi Pamong
                                Praja dan
                                Perlindungan Masyarakat Menurut Kecamatan di Kabupaten Soppeng,
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Public Order
                                Enforces
                                and
                                Civil Defense Personnel by Subdistrict in Soppeng Regency,
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Kecamatan/ </span><span
                                style="font-style:italic;color:#000">Subdistrict</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Satuan Polisi Pamong Praja/
                            </span><span style="font-style:italic;color:#000">Civil Service Police Unit</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Pelindungan Masyarakat/
                            </span><span style="font-style:italic;color:#000">Civil Defense</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Marioriwawo</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">32</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">328</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">020. Lalabata</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">449</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">308</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">030. Liliriaja</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">31</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">180</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">031. Ganra</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">28</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">76</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">032. Citta</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">32</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">56</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">040. Lilirilau</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">28</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">262</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">050. Donri-Donri</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">29</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">168</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">060. Marioriawa</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">28</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">188</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">657</td>
                        <td class="tg-mwxe">1566</td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.026_PolPP_PK.script1')
    </x-slot>
</x-tabel-entri-view>
