<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">1.4</th>
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
                        <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Jarak
                                Ke/</span><span style="font-style:italic;color:#000">Distance to (km)</span></td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-nrix">Ibukota Kecamatan/ Capital Subdistrict</td>
                        <td class="tg-nrix">Ibukota Kabupaten/ Capital Regency</td>
                    </tr>

                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Timusu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec1') is-invalid @enderror" id="jarakkec1"
                                name="jarakkec1" value="{{ old('jarakkec1', $data->jarakkec1) }}">
                            @error('jarakkec1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab1') is-invalid @enderror" id="jarakkab1"
                                name="jarakkab1" value="{{ old('jarakkab1', $data->jarakkab1) }}">
                            @error('jarakkab1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Rompegading</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec2') is-invalid @enderror" id="jarakkec2"
                                name="jarakkec2" value="{{ old('jarakkec2', $data->jarakkec2) }}">
                            @error('jarakkec2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab2') is-invalid @enderror" id="jarakkab2"
                                name="jarakkab2" value="{{ old('jarakkab2', $data->jarakkab2) }}">
                            @error('jarakkab2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Pattojo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec3') is-invalid @enderror" id="jarakkec3"
                                name="jarakkec3" value="{{ old('jarakkec3', $data->jarakkec3) }}">
                            @error('jarakkec3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab3') is-invalid @enderror" id="jarakkab3"
                                name="jarakkab3" value="{{ old('jarakkab3', $data->jarakkab3) }}">
                            @error('jarakkab3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Galung</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec4') is-invalid @enderror" id="jarakkec4"
                                name="jarakkec4" value="{{ old('jarakkec4', $data->jarakkec4) }}">
                            @error('jarakkec4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab4') is-invalid @enderror" id="jarakkab4"
                                name="jarakkab4" value="{{ old('jarakkab4', $data->jarakkab4) }}">
                            @error('jarakkab4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Jennae</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec5') is-invalid @enderror" id="jarakkec5"
                                name="jarakkec5" value="{{ old('jarakkec5', $data->jarakkec5) }}">
                            @error('jarakkec5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab5') is-invalid @enderror" id="jarakkab5"
                                name="jarakkab5" value="{{ old('jarakkab5', $data->jarakkab5) }}">
                            @error('jarakkab5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Jampu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec6') is-invalid @enderror" id="jarakkec6"
                                name="jarakkec6" value="{{ old('jarakkec6', $data->jarakkec6) }}">
                            @error('jarakkec6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab6') is-invalid @enderror" id="jarakkab6"
                                name="jarakkab6" value="{{ old('jarakkab6', $data->jarakkab6) }}">
                            @error('jarakkab6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Barang</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec7') is-invalid @enderror" id="jarakkec7"
                                name="jarakkec7" value="{{ old('jarakkec7', $data->jarakkec7) }}">
                            @error('jarakkec7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab7') is-invalid @enderror" id="jarakkab7"
                                name="jarakkab7" value="{{ old('jarakkab7', $data->jarakkab7) }}">
                            @error('jarakkab7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">011. Appanang</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkec8') is-invalid @enderror" id="jarakkec8"
                                name="jarakkec8" value="{{ old('jarakkec8', $data->jarakkec8) }}">
                            @error('jarakkec8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jarakkab8') is-invalid @enderror" id="jarakkab8"
                                name="jarakkab8" value="{{ old('jarakkab8', $data->jarakkab8) }}">
                            @error('jarakkab8')
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
                        <th class="tg-amwm" rowspan="2">1.4</th>
                        <th class="tg-yla0"><span style="font-weight:bold">Jarak ke Ibukota Kecamatan dan ke Ibukota
                                Kabupaten Menurut Desa/Kelurahan di Kecamatan Liliriaja, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Distance to Capital
                                Subdistrict and Capital Regency by Villages/Urban Villages in Liliriaja Subdistrict,
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
                        <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Jarak
                                Ke/</span><span style="font-style:italic;color:#000">Distance to</span></td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-nrix" colspan="2">(km)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-nrix">Ibukota Kecamatan/</td>
                        <td class="tg-nrix">Ibukota Kabupaten/</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-lhti"><span style="font-style:italic">Capital Subdistrict</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Capital Regency</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Timusu</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">15</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Rompegading</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">7</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">12</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Pattojo</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">9</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Galung</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">17</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Jennae</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">14</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Jampu</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">8</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">18</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Barang</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">20</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">011. Appanang</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">16</span></td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
    </x-slot>
</x-tabel-entri-view>
