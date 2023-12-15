<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">1.1</th>
                        <th class="tg-wa1i" colspan="5"><span style="font-weight:bold">{{ $judultabel }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="5"><span
                                style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix" rowspan="2">Sepak Bola/ Football</td>
                        <td class="tg-nrix" rowspan="2">Bola Voli/ Volley Ball</td>
                        <td class="tg-nrix" rowspan="2">Tenis/ Tennis</td>
                        <td class="tg-nrix" rowspan="2">Bulu Tangkis/ Badminton</td>
                        <td class="tg-nrix" rowspan="2">Tenis Meja/ Table Tennis</td>
                        <td class="tg-nrix" rowspan="2">Bola Basket/ Basketball</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>

                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                        <td class="tg-nrix">(6)</td>
                        <td class="tg-nrix">(7)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Belo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football1') is-invalid @enderror" id="football1"
                                name="football1" value="{{ old('football1', $data->football1) }}">
                            @error('football1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley1') is-invalid @enderror" id="volley1"
                                name="volley1" value="{{ old('volley1', $data->volley1) }}">
                            @error('volley1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis1') is-invalid @enderror" id="tennis1"
                                name="tennis1" value="{{ old('tennis1', $data->tennis1) }}">
                            @error('tennis1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton1') is-invalid @enderror" id="badminton1"
                                name="badminton1" value="{{ old('badminton1', $data->badminton1) }}">
                            @error('badminton1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis1') is-invalid @enderror" id="table_tennis1"
                                name="table_tennis1" value="{{ old('table_tennis1', $data->table_tennis1) }}">
                            @error('table_tennis1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball1') is-invalid @enderror" id="basketball1"
                                name="basketball1" value="{{ old('basketball1', $data->basketball1) }}">
                            @error('basketball1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football2') is-invalid @enderror" id="football2"
                                name="football2" value="{{ old('football2', $data->football2) }}">
                            @error('football2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley2') is-invalid @enderror" id="volley2"
                                name="volley2" value="{{ old('volley2', $data->volley2) }}">
                            @error('volley2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis2') is-invalid @enderror" id="tennis2"
                                name="tennis2" value="{{ old('tennis2', $data->tennis2) }}">
                            @error('tennis2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton2') is-invalid @enderror" id="badminton2"
                                name="badminton2" value="{{ old('badminton2', $data->badminton2) }}">
                            @error('badminton2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis2') is-invalid @enderror" id="table_tennis2"
                                name="table_tennis2" value="{{ old('table_tennis2', $data->table_tennis2) }}">
                            @error('table_tennis2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball2') is-invalid @enderror" id="basketball2"
                                name="basketball2" value="{{ old('basketball2', $data->basketball2) }}">
                            @error('basketball2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Enrekeng</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football3') is-invalid @enderror" id="football3"
                                name="football3" value="{{ old('football3', $data->football3) }}">
                            @error('football3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley3') is-invalid @enderror" id="volley3"
                                name="volley3" value="{{ old('volley3', $data->volley3) }}">
                            @error('volley3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis3') is-invalid @enderror" id="tennis3"
                                name="tennis3" value="{{ old('tennis3', $data->tennis3) }}">
                            @error('tennis3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton3') is-invalid @enderror" id="badminton3"
                                name="badminton3" value="{{ old('badminton3', $data->badminton3) }}">
                            @error('badminton3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis3') is-invalid @enderror" id="table_tennis3"
                                name="table_tennis3" value="{{ old('table_tennis3', $data->table_tennis3) }}">
                            @error('table_tennis3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball3') is-invalid @enderror" id="basketball3"
                                name="basketball3" value="{{ old('basketball3', $data->basketball3) }}">
                            @error('basketball3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lompulle</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football4') is-invalid @enderror" id="football4"
                                name="football4" value="{{ old('football4', $data->football4) }}">
                            @error('football4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley4') is-invalid @enderror" id="volley4"
                                name="volley4" value="{{ old('volley4', $data->volley4) }}">
                            @error('volley4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis4') is-invalid @enderror" id="tennis4"
                                name="tennis4" value="{{ old('tennis4', $data->tennis4) }}">
                            @error('tennis4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton4') is-invalid @enderror" id="badminton4"
                                name="badminton4" value="{{ old('badminton4', $data->badminton4) }}">
                            @error('badminton4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis4') is-invalid @enderror" id="table_tennis4"
                                name="table_tennis4" value="{{ old('table_tennis4', $data->table_tennis4) }}">
                            @error('table_tennis4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball4') is-invalid @enderror" id="basketball4"
                                name="basketball4" value="{{ old('basketball4', $data->basketball4) }}">
                            @error('basketball4')
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
                                class="form-control @error('footballt') is-invalid @enderror" id="footballt"
                                name="footballt" value="{{ old('footballt', $data->footballt) }}">
                            @error('footballt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volleyt') is-invalid @enderror" id="volleyt"
                                name="volleyt" value="{{ old('volleyt', $data->volleyt) }}">
                            @error('volleyt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennist') is-invalid @enderror" id="tennist"
                                name="tennist" value="{{ old('tennist', $data->tennist) }}">
                            @error('tennist')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badmintont') is-invalid @enderror" id="badmintont"
                                name="badmintont" value="{{ old('badmintont', $data->badmintont) }}">
                            @error('badmintont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennist') is-invalid @enderror" id="table_tennist"
                                name="table_tennist" value="{{ old('table_tennist', $data->table_tennist) }}">
                            @error('table_tennist')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketballt') is-invalid @enderror" id="basketballt"
                                name="basketballt" value="{{ old('basketballt', $data->basketballt) }}">
                            @error('basketballt')
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
            {{-- //tabel 2 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">1.1</th>
                        <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya Fasilitas
                                Olahraga Menurut
                                Desa/Kelurahan di Kecamatan Ganra, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                                Sport
                                Facilities by Villages/Urban Villages in Ganra Subdistrict, 2021</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix">Sepak Bola/</td>
                        <td class="tg-nrix">Bola Voli/</td>
                        <td class="tg-nrix">Tenis/</td>
                        <td class="tg-nrix">Bulu Tangkis/</td>
                        <td class="tg-nrix">Tenis Meja/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Football</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Volley Ball</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Tennis</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Badminton</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Table Tennis</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                        <td class="tg-nrix">(6)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Belo</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Ganra</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Enrekeng</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lompulle</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">2</td>
                        <td class="tg-mwxe">2</td>
                        <td class="tg-mwxe">0</td>
                        <td class="tg-mwxe">2</td>
                        <td class="tg-mwxe">1</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.042_ganra.script7')

    </x-slot>
</x-tabel-entri-view>
