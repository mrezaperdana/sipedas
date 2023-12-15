<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">2.3</th>
                        <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">{{ $judultabel }},
                                {{ $data->tahun }}</span></th>
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
                        <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">BPD (Badan
                                Permusyawaratan Desa)/ </span><span style="font-style:italic;color:#000">Village
                                Consultative Agency</span></td>
                        <td class="tg-nrix" rowspan="2">Kepemudaan/ Youth</td>
                        <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">P3A (Perkumpulan
                                Petani Pemakai Air)/ </span><span style="font-style:italic;color:#000">Water User Farmer
                                Association</span></td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic"></span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Timusu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd1') is-invalid @enderror" id="bpd1" name="bpd1"
                                value="{{ old('bpd1', $data->bpd1) }}">
                            @error('bpd1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth1') is-invalid @enderror" id="youth1" name="youth1"
                                value="{{ old('youth1', $data->youth1) }}">
                            @error('youth1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a1') is-invalid @enderror" id="p3a1" name="p3a1"
                                value="{{ old('p3a1', $data->p3a1) }}">
                            @error('p3a1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Rompegading</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd2') is-invalid @enderror" id="bpd2" name="bpd2"
                                value="{{ old('bpd2', $data->bpd2) }}">
                            @error('bpd2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth2') is-invalid @enderror" id="youth2" name="youth2"
                                value="{{ old('youth2', $data->youth2) }}">
                            @error('youth2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a2') is-invalid @enderror" id="p3a2" name="p3a2"
                                value="{{ old('p3a2', $data->p3a2) }}">
                            @error('p3a2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Pattojo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd3') is-invalid @enderror" id="bpd3" name="bpd3"
                                value="{{ old('bpd3', $data->bpd3) }}">
                            @error('bpd3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth3') is-invalid @enderror" id="youth3" name="youth3"
                                value="{{ old('youth3', $data->youth3) }}">
                            @error('youth3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a3') is-invalid @enderror" id="p3a3" name="p3a3"
                                value="{{ old('p3a3', $data->p3a3) }}">
                            @error('p3a3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Galung</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd4') is-invalid @enderror" id="bpd4"
                                name="bpd4" value="{{ old('bpd4', $data->bpd4) }}">
                            @error('bpd4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth4') is-invalid @enderror" id="youth4"
                                name="youth4" value="{{ old('youth4', $data->youth4) }}">
                            @error('youth4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a4') is-invalid @enderror" id="p3a4"
                                name="p3a4" value="{{ old('p3a4', $data->p3a4) }}">
                            @error('p3a4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Jennae</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd5') is-invalid @enderror" id="bpd5"
                                name="bpd5" value="{{ old('bpd5', $data->bpd5) }}">
                            @error('bpd5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth5') is-invalid @enderror" id="youth5"
                                name="youth5" value="{{ old('youth5', $data->youth5) }}">
                            @error('youth5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a5') is-invalid @enderror" id="p3a5"
                                name="p3a5" value="{{ old('p3a5', $data->p3a5) }}">
                            @error('p3a5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Jampu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd6') is-invalid @enderror" id="bpd6"
                                name="bpd6" value="{{ old('bpd6', $data->bpd6) }}">
                            @error('bpd6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth6') is-invalid @enderror" id="youth6"
                                name="youth6" value="{{ old('youth6', $data->youth6) }}">
                            @error('youth6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a6') is-invalid @enderror" id="p3a6"
                                name="p3a6" value="{{ old('p3a6', $data->p3a6) }}">
                            @error('p3a6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Barang</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd7') is-invalid @enderror" id="bpd7"
                                name="bpd7" value="{{ old('bpd7', $data->bpd7) }}">
                            @error('bpd7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth7') is-invalid @enderror" id="youth7"
                                name="youth7" value="{{ old('youth7', $data->youth7) }}">
                            @error('youth7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a7') is-invalid @enderror" id="p3a7"
                                name="p3a7" value="{{ old('p3a7', $data->p3a7) }}">
                            @error('p3a7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">011. Appanang</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bpd8') is-invalid @enderror" id="bpd8"
                                name="bpd8" value="{{ old('bpd8', $data->bpd8) }}">
                            @error('bpd8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youth8') is-invalid @enderror" id="youth8"
                                name="youth8" value="{{ old('youth8', $data->youth8) }}">
                            @error('youth8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3a8') is-invalid @enderror" id="p3a8"
                                name="p3a8" value="{{ old('p3a8', $data->p3a8) }}">
                            @error('p3a8')
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
                                class="form-control @error('bpdt') is-invalid @enderror" id="bpdt"
                                name="bpdt" value="{{ old('bpdt', $data->bpdt) }}">
                            @error('bpdt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('youtht') is-invalid @enderror" id="youtht"
                                name="youtht" value="{{ old('youtht', $data->youtht) }}">
                            @error('youtht')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('p3at') is-invalid @enderror" id="p3at"
                                name="p3at" value="{{ old('p3at', $data->p3at) }}">
                            @error('p3at')
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
                        <th class="tg-amwm" rowspan="2">2.3</th>
                        <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Kelembagaan
                                Desa/Kelurahan Menurut Desa/Kelurahan di Kecamatan Liliriaja, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                                Villages/Urban Villages Institutional by Villages/Urban Villages in Liliriaja
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
                        <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">BPD (Badan
                                Permusyawaratan Desa)/ </span><span style="font-style:italic;color:#000">Village
                                Consultative Agency</span></td>
                        <td class="tg-nrix">Kepemudaan/</td>
                        <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">P3A
                                (Perkumpulan Petani Pemakai Air)/ </span><span
                                style="font-style:italic;color:#000">Water User Farmer Association</span></td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Youth</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Timusu</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Rompegading</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">8</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Pattojo</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">15</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Galung</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Jennae</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">5</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Jampu</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">7</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Barang</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">011. Appanang</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">11</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-nrix">5</td>
                        <td class="tg-nrix">1</td>
                        <td class="tg-nrix">55</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.041_liliriaja.script5')
    </x-slot>
</x-tabel-entri-view>
