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
                        <td class="tg-cly1">001. Umpungeng</td>
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
                        <td class="tg-cly1">002. Lalabata Rilau</td>
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
                        <td class="tg-cly1">003. Botto</td>
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
                        <td class="tg-cly1">004. Lemba</td>
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
                        <td class="tg-cly1">005. Bila</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent5') is-invalid @enderror" id="permanent5"
                                name="permanent5" value="{{ old('permanent5', $data->permanent5) }}">
                            @error('permanent5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy5') is-invalid @enderror" id="healthy5"
                                name="healthy5" value="{{ old('healthy5', $data->healthy5) }}">
                            @error('healthy5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non5') is-invalid @enderror" id="non5"
                                name="non5" value="{{ old('non5', $data->non5) }}">
                            @error('non5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Mattabulu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent6') is-invalid @enderror" id="permanent6"
                                name="permanent6" value="{{ old('permanent6', $data->permanent6) }}">
                            @error('permanent6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy6') is-invalid @enderror" id="healthy6"
                                name="healthy6" value="{{ old('healthy6', $data->healthy6) }}">
                            @error('healthy6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non6') is-invalid @enderror" id="non6"
                                name="non6" value="{{ old('non6', $data->non6) }}">
                            @error('non6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Ompo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent7') is-invalid @enderror" id="permanent7"
                                name="permanent7" value="{{ old('permanent7', $data->permanent7) }}">
                            @error('permanent7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy7') is-invalid @enderror" id="healthy7"
                                name="healthy7" value="{{ old('healthy7', $data->healthy7) }}">
                            @error('healthy7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non7') is-invalid @enderror" id="non7"
                                name="non7" value="{{ old('non7', $data->non7) }}">
                            @error('non7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Lapajung</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent8') is-invalid @enderror" id="permanent8"
                                name="permanent8" value="{{ old('permanent8', $data->permanent8) }}">
                            @error('permanent8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy8') is-invalid @enderror" id="healthy8"
                                name="healthy8" value="{{ old('healthy8', $data->healthy8) }}">
                            @error('healthy8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non8') is-invalid @enderror" id="non8"
                                name="non8" value="{{ old('non8', $data->non8) }}">
                            @error('non8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Macille</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent9') is-invalid @enderror" id="permanent9"
                                name="permanent9" value="{{ old('permanent9', $data->permanent9) }}">
                            @error('permanent9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy9') is-invalid @enderror" id="healthy9"
                                name="healthy9" value="{{ old('healthy9', $data->healthy9) }}">
                            @error('healthy9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non9') is-invalid @enderror" id="non9"
                                name="non9" value="{{ old('non9', $data->non9) }}">
                            @error('non9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Salokaraja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('permanent10') is-invalid @enderror" id="permanent10"
                                name="permanent10" value="{{ old('permanent10', $data->permanent10) }}">
                            @error('permanent10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('healthy10') is-invalid @enderror" id="healthy10"
                                name="healthy10" value="{{ old('healthy10', $data->healthy10) }}">
                            @error('healthy10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('non10') is-invalid @enderror" id="non10"
                                name="non10" value="{{ old('non10', $data->non10) }}">
                            @error('non10')
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
                        <th class="tg-0lax" rowspan="2"></th>
                        <th class="tg-cly1" colspan="2">Banyaknya Rumah Permanen, Rumah Sehat dan Rumah Tidak Sehat
                            Menurut Desa/Kelurahan di Kecamatan Lalabata, 2021</th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                                Permanent, Healthy and Non-Healthy House by Villages/Urban Villages in Lalabata
                                Subdistrict, 2021</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix">Rumah Permanen/</td>
                        <td class="tg-nrix">Rumah Sehat/</td>
                        <td class="tg-nrix">Rumah Tidak Sehat/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Permanent House</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Healthy House</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Non-Healthy House</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Umpungeng</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">34</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Lalabata Rilau</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1080</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">825</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">63</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Botto</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">453</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">578</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lemba</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">350</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">751</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">17</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Bila</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">112</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">28</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Mattabulu</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">17</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">8</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Ompo</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">157</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">514</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">57</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Lapajung</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1.085</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1001</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">591</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Macille</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">154</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">675</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">20</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Salokaraja</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">46</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">3604.085</td>
                        <td class="tg-mwxe">4357</td>
                        <td class="tg-mwxe">791</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.040_lalabata.script8')

    </x-slot>
</x-tabel-entri-view>
