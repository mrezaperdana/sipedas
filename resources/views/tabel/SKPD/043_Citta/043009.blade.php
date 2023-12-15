<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">1.2</th>
                        <th class="tg-yla0"><span style="font-weight:bold">{{ $judultabel }}, {{ $data->tahun }}</span>
                        </th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix" rowspan="2">Kolam Renang/ Swimming Pool</td>
                        <td class="tg-nrix" rowspan="2">Lainnya/ Others</td>
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
                                class="form-control @error('pool1') is-invalid @enderror" id="pool1" name="pool1"
                                value="{{ old('pool1', $data->pool1) }}">
                            @error('pool1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others1') is-invalid @enderror" id="others1"
                                name="others1" value="{{ old('others1', $data->others1) }}">
                            @error('others1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool2') is-invalid @enderror" id="pool2" name="pool2"
                                value="{{ old('pool2', $data->pool2) }}">
                            @error('pool2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others2') is-invalid @enderror" id="others2"
                                name="others2" value="{{ old('others2', $data->others2) }}">
                            @error('others2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labae</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool3') is-invalid @enderror" id="pool3" name="pool3"
                                value="{{ old('pool3', $data->pool3) }}">
                            @error('pool3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others3') is-invalid @enderror" id="others3"
                                name="others3" value="{{ old('others3', $data->others3) }}">
                            @error('others3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Tinco</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool4') is-invalid @enderror" id="pool4" name="pool4"
                                value="{{ old('pool4', $data->pool4) }}">
                            @error('pool4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others4') is-invalid @enderror" id="others4"
                                name="others4" value="{{ old('others4', $data->others4) }}">
                            @error('others4')
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
                                class="form-control @error('poolt') is-invalid @enderror" id="poolt" name="poolt"
                                value="{{ old('poolt', $data->poolt) }}">
                            @error('poolt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('otherst') is-invalid @enderror" id="otherst"
                                name="otherst" value="{{ old('otherst', $data->otherst) }}">
                            @error('otherst')
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
                        <th class="tg-amwm" rowspan="2">4.19</th>
                        <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Rumah Permanen,
                                Rumah Sehat dan Rumah Tidak Sehat Menurut Desa/Kelurahan di Kecamatan Citta, 2021</span>
                        </th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                                Permanent, Healthy and Non-Healthy House by Villages/Urban Villages in Citta
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
                        <td class="tg-cly1">001. Kampiri</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">40</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">340</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Citta</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">131</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">790</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labae</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">41</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">455</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Tinco</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">39</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">357</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">265</td>
                        <td class="tg-mwxe">1251</td>
                        <td class="tg-mwxe">697</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.043_citta.script9')
    </x-slot>
</x-tabel-entri-view>
