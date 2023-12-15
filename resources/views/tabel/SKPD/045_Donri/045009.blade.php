<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">8.2</th>
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
                        <td class="tg-cly1">001. Pesse</td>
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
                        <td class="tg-cly1">002. Pising</td>
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
                        <td class="tg-cly1">003. Labokong</td>
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
                        <td class="tg-cly1">004. Donri-Donri</td>
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
                        <td class="tg-cly1">005. Sering</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool5') is-invalid @enderror" id="pool5" name="pool5"
                                value="{{ old('pool5', $data->pool5) }}">
                            @error('pool5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others5') is-invalid @enderror" id="others5"
                                name="others5" value="{{ old('others5', $data->others5) }}">
                            @error('others5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Lalabata Riaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool6') is-invalid @enderror" id="pool6"
                                name="pool6" value="{{ old('pool6', $data->pool6) }}">
                            @error('pool6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others6') is-invalid @enderror" id="others6"
                                name="others6" value="{{ old('others6', $data->others6) }}">
                            @error('others6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Tottong</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool7') is-invalid @enderror" id="pool7"
                                name="pool7" value="{{ old('pool7', $data->pool7) }}">
                            @error('pool7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others7') is-invalid @enderror" id="others7"
                                name="others7" value="{{ old('others7', $data->others7) }}">
                            @error('others7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Leworeng</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool8') is-invalid @enderror" id="pool8"
                                name="pool8" value="{{ old('pool8', $data->pool8) }}">
                            @error('pool8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others8') is-invalid @enderror" id="others8"
                                name="others8" value="{{ old('others8', $data->others8) }}">
                            @error('others8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Kessing</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pool9') is-invalid @enderror" id="pool9"
                                name="pool9" value="{{ old('pool9', $data->pool9) }}">
                            @error('pool9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('others9') is-invalid @enderror" id="others9"
                                name="others9" value="{{ old('others9', $data->others9) }}">
                            @error('others9')
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
                                class="form-control @error('poolt') is-invalid @enderror" id="poolt"
                                name="poolt" value="{{ old('poolt', $data->poolt) }}">
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
                        <th class="tg-amwm" rowspan="2">8.2</th>
                        <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Tempat Rekreasi Menurut
                                Desa/Kelurahan di Kecamatan Donri-Donri, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Recreation Area
                                by Villages/Urban Villages in Donri-Donri Subdistrict, 2021</span></th>
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
                        <td class="tg-cly1">001. Pesse</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Pising</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labokong</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Donri-Donri</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Sering</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Lalabata Riaja</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Tottong</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Leworeng</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Kessing</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-nrix">1</td>
                        <td class="tg-nrix">7</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.044_lilirilau.script9')
    </x-slot>
</x-tabel-entri-view>
