<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-0lax" rowspan="2"></th>
                        <th class="tg-cly1" colspan="2">{{ $judultabel }}, {{ $data->tahun }}</th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span
                                style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix" rowspan="2">Rumah Permanen/ Permanent House</td>
                        <td class="tg-nrix" rowspan="2">Rumah Sehat/ Healthy House</td>
                        <td class="tg-nrix" rowspan="2">Rumah Tidak Sehat/ Non-Healthy House</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>

                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Kampiri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent1') is-invalid @enderror" id="permanent1"
                                name="permanent1" value="{{ old('permanent1', $data->permanent1) }}">
                            @error('permanent1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy1') is-invalid @enderror" id="healthy1"
                                name="healthy1" value="{{ old('healthy1', $data->healthy1) }}">
                            @error('healthy1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non1') is-invalid @enderror" id="non1" name="non1"
                                value="{{ old('non1', $data->non1) }}">
                            @error('non1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent2') is-invalid @enderror" id="permanent2"
                                name="permanent2" value="{{ old('permanent2', $data->permanent2) }}">
                            @error('permanent2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy2') is-invalid @enderror" id="healthy2"
                                name="healthy2" value="{{ old('healthy2', $data->healthy2) }}">
                            @error('healthy2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non2') is-invalid @enderror" id="non2" name="non2"
                                value="{{ old('non2', $data->non2) }}">
                            @error('non2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labae</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent3') is-invalid @enderror" id="permanent3"
                                name="permanent3" value="{{ old('permanent3', $data->permanent3) }}">
                            @error('permanent3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy3') is-invalid @enderror" id="healthy3"
                                name="healthy3" value="{{ old('healthy3', $data->healthy3) }}">
                            @error('healthy3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non3') is-invalid @enderror" id="non3" name="non3"
                                value="{{ old('non3', $data->non3) }}">
                            @error('non3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Tinco</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent4') is-invalid @enderror" id="permanent4"
                                name="permanent4" value="{{ old('permanent4', $data->permanent4) }}">
                            @error('permanent4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy4') is-invalid @enderror" id="healthy4"
                                name="healthy4" value="{{ old('healthy4', $data->healthy4) }}">
                            @error('healthy4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non4') is-invalid @enderror" id="non4"
                                name="non4" value="{{ old('non4', $data->non4) }}">
                            @error('non4')
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
                                class="form-control @error('permanentt') is-invalid @enderror" id="permanentt"
                                name="permanentt" value="{{ old('permanentt', $data->permanentt) }}">
                            @error('permanentt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthyt') is-invalid @enderror" id="healthyt"
                                name="healthyt" value="{{ old('healthyt', $data->healthyt) }}">
                            @error('healthyt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('nont') is-invalid @enderror" id="nont"
                                name="nont" value="{{ old('nont', $data->nont) }}">
                            @error('nont')
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
                        <th class="tg-amwm" rowspan="2">1.2</th>
                        <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Tempat Rekreasi Menurut
                                Desa/Kelurahan di Kecamatan Citta, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Recreation Area
                                by Villages/Urban Villages in Citta Subdistrict, 2021</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix">Kolam Renang/</td>
                        <td class="tg-nrix">Lainnya/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Swimming Pool</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Others</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Kampiri</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Citta</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labae</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Tinco</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">2</td>
                        <td class="tg-mwxe">2</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.043_citta.script8')

    </x-slot>
</x-tabel-entri-view>
