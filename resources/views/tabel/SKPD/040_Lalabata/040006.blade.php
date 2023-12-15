<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-0lax" rowspan="2"></th>
                        <th class="tg-yla0"><span style="font-weight:bold">{{ $judultabel }}, {{ $data->tahun }}</span>
                        </th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix" rowspan="2">Surat Miskin/ Poor Letter</td>
                        <td class="tg-nrix" rowspan="2">Kartu Askeskin/ Poor Health Insurance</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Umpungeng</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin1') is-invalid @enderror" id="miskin1"
                                name="miskin1" value="{{ old('miskin1', $data->miskin1) }}">
                            @error('miskin1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin1') is-invalid @enderror" id="askeskin1"
                                name="askeskin1" value="{{ old('askeskin1', $data->askeskin1) }}">
                            @error('askeskin1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Lalabata Rilau</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin2') is-invalid @enderror" id="miskin2"
                                name="miskin2" value="{{ old('miskin2', $data->miskin2) }}">
                            @error('miskin2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin2') is-invalid @enderror" id="askeskin2"
                                name="askeskin2" value="{{ old('askeskin2', $data->askeskin2) }}">
                            @error('askeskin2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Botto</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin3') is-invalid @enderror" id="miskin3"
                                name="miskin3" value="{{ old('miskin3', $data->miskin3) }}">
                            @error('miskin3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin3') is-invalid @enderror" id="askeskin3"
                                name="askeskin3" value="{{ old('askeskin3', $data->askeskin3) }}">
                            @error('askeskin3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lemba</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin4') is-invalid @enderror" id="miskin4"
                                name="miskin4" value="{{ old('miskin4', $data->miskin4) }}">
                            @error('miskin4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin4') is-invalid @enderror" id="askeskin4"
                                name="askeskin4" value="{{ old('askeskin4', $data->askeskin4) }}">
                            @error('askeskin4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Bila</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin5') is-invalid @enderror" id="miskin5"
                                name="miskin5" value="{{ old('miskin5', $data->miskin5) }}">
                            @error('miskin5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin5') is-invalid @enderror" id="askeskin5"
                                name="askeskin5" value="{{ old('askeskin5', $data->askeskin5) }}">
                            @error('askeskin5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Mattabulu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin6') is-invalid @enderror" id="miskin6"
                                name="miskin6" value="{{ old('miskin6', $data->miskin6) }}">
                            @error('miskin6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin6') is-invalid @enderror" id="askeskin6"
                                name="askeskin6" value="{{ old('askeskin6', $data->askeskin6) }}">
                            @error('askeskin6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Ompo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin7') is-invalid @enderror" id="miskin7"
                                name="miskin7" value="{{ old('miskin7', $data->miskin7) }}">
                            @error('miskin7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin7') is-invalid @enderror" id="askeskin7"
                                name="askeskin7" value="{{ old('askeskin7', $data->askeskin7) }}">
                            @error('askeskin7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Lapajung</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin8') is-invalid @enderror" id="miskin8"
                                name="miskin8" value="{{ old('miskin8', $data->miskin8) }}">
                            @error('miskin8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin8') is-invalid @enderror" id="askeskin8"
                                name="askeskin8" value="{{ old('askeskin8', $data->askeskin8) }}">
                            @error('askeskin8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Macille</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin9') is-invalid @enderror" id="miskin9"
                                name="miskin9" value="{{ old('miskin9', $data->miskin9) }}">
                            @error('miskin9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin9') is-invalid @enderror" id="askeskin9"
                                name="askeskin9" value="{{ old('askeskin9', $data->askeskin9) }}">
                            @error('askeskin9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Salokaraja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('miskin10') is-invalid @enderror" id="miskin10"
                                name="miskin10" value="{{ old('miskin10', $data->miskin10) }}">
                            @error('miskin10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskin10') is-invalid @enderror" id="askeskin10"
                                name="askeskin10" value="{{ old('askeskin10', $data->askeskin10) }}">
                            @error('askeskin10')
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
                                class="form-control @error('miskint') is-invalid @enderror" id="miskint"
                                name="miskint" value="{{ old('miskint', $data->miskint) }}">
                            @error('miskint')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('askeskint') is-invalid @enderror" id="askeskint"
                                name="askeskint" value="{{ old('askeskint', $data->askeskint) }}">
                            @error('askeskint')
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
                        <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Surat Miskin dan Kartu Askeskin
                                Menurut Desa/Kelurahan di Kecamatan Lalabata, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Poor Letter and
                                Poor Health Insurance Card by Villages/Urban Villages in Lalabata Subdistrict,
                                2021</span></th>
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
                        <td class="tg-nrix">Surat Miskin/</td>
                        <td class="tg-nrix">Kartu Askeskin/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Poor Letter</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Poor Health Insurance</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Umpungeng</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">130</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">398</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Lalabata Rilau</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">40</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">10</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Botto</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">62</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">120</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lemba</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">73</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">131</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Bila</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">157</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">80</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Mattabulu</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">28</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">78</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Ompo</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">41</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">81</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Lapajung</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">36</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">158</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Macille</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">42</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">812</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Salokaraja</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">63</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">70</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-nrix">672</td>
                        <td class="tg-nrix">1938</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.040_lalabata.script6')
    </x-slot>
</x-tabel-entri-view>
