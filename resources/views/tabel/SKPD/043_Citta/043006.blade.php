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
                        <td class="tg-cly1">001. Kampiri</td>
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
                        <td class="tg-cly1">002. Citta</td>
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
                        <td class="tg-cly1">003. Labae</td>
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
                        <td class="tg-cly1">004. Tinco</td>
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
                                Menurut Desa/Kelurahan di Kecamatan Citta, 2019</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Poor Letter and
                                Poor Health Insurance Card by Villages/Urban Villages in Citta Subdistrict, 2019</span>
                        </th>
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
                        <td class="tg-cly1">001. Kampiri</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">92</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1114</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Citta</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">61</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">359</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labae</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">31</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">353</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Tinco</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">17</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">946</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">201</td>
                        <td class="tg-mwxe">2142</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.043_citta.script6')
    </x-slot>
</x-tabel-entri-view>
