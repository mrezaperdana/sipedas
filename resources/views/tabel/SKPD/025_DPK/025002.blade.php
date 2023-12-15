<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">4.1.24</th>
                        <th colspan="2">{{ $judultabel }}, {{ $data->tahun }}</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="2">{{ $judultabelen }}, {{ $data->tahun }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bulan/Month</td>
                        <td>Laki-Laki/Men</td>
                        <td>Perempuan/ Women</td>
                        <td>Jumlah/ Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2) </td>
                        <td>(3)</td>
                        <td>(4)</td>
                    </tr>
                    <tr>
                        <td>Januari/January</td>
                        <td class="tg-cly1"><input type="text" class="form-control @error('men1') is-invalid @enderror"
                                id="men1" name="men1" value="{{ old('men1', $data->men1) }}">
                            @error('men1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women1') is-invalid @enderror" id="women1" name="women1"
                                value="{{ old('women1', $data->women1) }}">
                            @error('women1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total1') is-invalid @enderror" id="total1" name="total1"
                                value="{{ old('total1', $data->total1) }}">
                            @error('total1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Februari/February</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men2') is-invalid @enderror" id="men2" name="men2"
                                value="{{ old('men2', $data->men2) }}">
                            @error('men2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women2') is-invalid @enderror" id="women2" name="women2"
                                value="{{ old('women2', $data->women2) }}">
                            @error('women2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total2') is-invalid @enderror" id="total2" name="total2"
                                value="{{ old('total2', $data->total2) }}">
                            @error('total2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Maret/March</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men3') is-invalid @enderror" id="men3" name="men3"
                                value="{{ old('men3', $data->men3) }}">
                            @error('men3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women3') is-invalid @enderror" id="women3" name="women3"
                                value="{{ old('women3', $data->women3) }}">
                            @error('women3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total3') is-invalid @enderror" id="total3" name="total3"
                                value="{{ old('total3', $data->total3) }}">
                            @error('total3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>April/April</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men4') is-invalid @enderror" id="men4" name="men4"
                                value="{{ old('men4', $data->men4) }}">
                            @error('men4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women4') is-invalid @enderror" id="women4"
                                name="women4" value="{{ old('women4', $data->women4) }}">
                            @error('women4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total4') is-invalid @enderror" id="total4"
                                name="total4" value="{{ old('total4', $data->total4) }}">
                            @error('total4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Mei/May</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men5') is-invalid @enderror" id="men5" name="men5"
                                value="{{ old('men5', $data->men5) }}">
                            @error('men5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women5') is-invalid @enderror" id="women5"
                                name="women5" value="{{ old('women5', $data->women5) }}">
                            @error('women5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total5') is-invalid @enderror" id="total5"
                                name="total5" value="{{ old('total5', $data->total5) }}">
                            @error('total5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Juni/June</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men6') is-invalid @enderror" id="men6"
                                name="men6" value="{{ old('men6', $data->men6) }}">
                            @error('men6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women6') is-invalid @enderror" id="women6"
                                name="women6" value="{{ old('women6', $data->women6) }}">
                            @error('women6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total6') is-invalid @enderror" id="total6"
                                name="total6" value="{{ old('total6', $data->total6) }}">
                            @error('total6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Juli/July</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men7') is-invalid @enderror" id="men7"
                                name="men7" value="{{ old('men7', $data->men7) }}">
                            @error('men7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women7') is-invalid @enderror" id="women7"
                                name="women7" value="{{ old('women7', $data->women7) }}">
                            @error('women7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total7') is-invalid @enderror" id="total7"
                                name="total7" value="{{ old('total7', $data->total7) }}">
                            @error('total7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Agustus/August</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men8') is-invalid @enderror" id="men8"
                                name="men8" value="{{ old('men8', $data->men8) }}">
                            @error('men8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women8') is-invalid @enderror" id="women8"
                                name="women8" value="{{ old('women8', $data->women8) }}">
                            @error('women8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total8') is-invalid @enderror" id="total8"
                                name="total8" value="{{ old('total8', $data->total8) }}">
                            @error('total8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>September/September</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men9') is-invalid @enderror" id="men9"
                                name="men9" value="{{ old('men9', $data->men9) }}">
                            @error('men9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women9') is-invalid @enderror" id="women9"
                                name="women9" value="{{ old('women9', $data->women9) }}">
                            @error('women9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total9') is-invalid @enderror" id="total9"
                                name="total9" value="{{ old('total9', $data->total9) }}">
                            @error('total9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Oktober/October</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men10') is-invalid @enderror" id="men10"
                                name="men10" value="{{ old('men10', $data->men10) }}">
                            @error('men10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women10') is-invalid @enderror" id="women10"
                                name="women10" value="{{ old('women10', $data->women10) }}">
                            @error('women10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total10') is-invalid @enderror" id="total10"
                                name="total10" value="{{ old('total10', $data->total10) }}">
                            @error('total10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>November/November</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men11') is-invalid @enderror" id="men11"
                                name="men11" value="{{ old('men11', $data->men11) }}">
                            @error('men11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women11') is-invalid @enderror" id="women11"
                                name="women11" value="{{ old('women11', $data->women11) }}">
                            @error('women11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total11') is-invalid @enderror" id="total11"
                                name="total11" value="{{ old('total11', $data->total11) }}">
                            @error('total11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Desember/December</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('men12') is-invalid @enderror" id="men12"
                                name="men12" value="{{ old('men12', $data->men12) }}">
                            @error('men12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('women12') is-invalid @enderror" id="women12"
                                name="women12" value="{{ old('women12', $data->women12) }}">
                            @error('women12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total12') is-invalid @enderror" id="total12"
                                name="total12" value="{{ old('total12', $data->total12) }}">
                            @error('total12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('ment') is-invalid @enderror" id="ment"
                                name="ment" value="{{ old('ment', $data->ment) }}">
                            @error('ment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('woment') is-invalid @enderror" id="woment"
                                name="woment" value="{{ old('woment', $data->woment) }}">
                            @error('woment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('totalt') is-invalid @enderror" id="totalt"
                                name="totalt" value="{{ old('totalt', $data->totalt) }}">
                            @error('totalt')
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
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">4.1.24</th>
                        <th colspan="2">Banyaknya Pengunjung Perpustakaan Menurut Bulan dan Jenis Kelamin di
                            Kabupaten
                            Soppeng, 2021</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="2">Number of Library Visitors by Month and Sex in Soppeng Regency, 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bulan/Month</td>
                        <td>Laki-Laki/Men</td>
                        <td>Perempuan/ Women</td>
                        <td>Jumlah/ Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>58 </td>
                        <td>(3)</td>
                        <td>(4)</td>
                    </tr>
                    <tr>
                        <td>Januari/January</td>
                        <td>18</td>
                        <td>32</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Februari/February</td>
                        <td>58</td>
                        <td>94</td>
                        <td>152</td>
                    </tr>
                    <tr>
                        <td>Maret/March</td>
                        <td>81</td>
                        <td>218</td>
                        <td>299</td>
                    </tr>
                    <tr>
                        <td>April/April</td>
                        <td>83</td>
                        <td>250</td>
                        <td>333</td>
                    </tr>
                    <tr>
                        <td>Mei/May</td>
                        <td>42</td>
                        <td>101</td>
                        <td>143</td>
                    </tr>
                    <tr>
                        <td>Juni/June</td>
                        <td>32</td>
                        <td>161</td>
                        <td>193</td>
                    </tr>
                    <tr>
                        <td>Juli/July</td>
                        <td>64</td>
                        <td>179</td>
                        <td>243</td>
                    </tr>
                    <tr>
                        <td>Agustus/August</td>
                        <td>42</td>
                        <td>107</td>
                        <td>149</td>
                    </tr>
                    <tr>
                        <td>September/September</td>
                        <td>54</td>
                        <td>143</td>
                        <td>197</td>
                    </tr>
                    <tr>
                        <td>Oktober/October</td>
                        <td>45</td>
                        <td>93</td>
                        <td>138</td>
                    </tr>
                    <tr>
                        <td>November/November</td>
                        <td>63</td>
                        <td>96</td>
                        <td>159</td>
                    </tr>
                    <tr>
                        <td>Desember/December</td>
                        <td>152</td>
                        <td>122</td>
                        <td>274</td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td>&nbsp;&nbsp;734 </td>
                        <td>&nbsp;&nbsp;1,596 </td>
                        <td>&nbsp;&nbsp;2,330 </td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.025_dpk.script2')
    </x-slot>
</x-tabel-entri-view>
