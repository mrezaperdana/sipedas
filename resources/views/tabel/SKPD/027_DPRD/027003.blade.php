<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">2.2.2</th>
                        <th colspan="2">{{ $judultabel }}, {{ $data->tahun }}</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="2">{{ $judultabelen }}, {{ $data->tahun }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">Nama Fraksi/Political Faction</td>
                        <td colspan="3">Jenis Kelamin/Sex</td>
                    </tr>
                    <tr>
                        <td>Laki-Laki/ Men</td>
                        <td>Perempuan/ Women</td>
                        <td>Jumlah/ Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                    </tr>
                    <tr>
                        <td>GOLKAR</td>

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
                        <td>PDIP</td>
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
                        <td>PARTAI NASDEM</td>
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
                        <td>PARTAI DEMOKRAT</td>
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
                        <td>PARTAI GERINDRA</td>
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
                        <td class="tg-cly1"><input type="text"
                                class="form-control form-control2 @error('fraksilainnya') is-invalid @enderror"
                                id="fraksilainnya" name="fraksilainnya"
                                value="{{ old('fraksilainnya', $data->fraksilainnya) }}">
                            @error('fraksilainnya')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('menlainnya') is-invalid @enderror" id="menlainnya"
                                name="menlainnya" value="{{ old('menlainnya', $data->menlainnya) }}">
                            @error('menlainnya')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('womenlainnya') is-invalid @enderror" id="womenlainnya"
                                name="womenlainnya" value="{{ old('womenlainnya', $data->womenlainnya) }}">
                            @error('womenlainnya')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('totallainnya') is-invalid @enderror" id="totallainnya"
                                name="totallainnya" value="{{ old('totallainnya', $data->totallainnya) }}">
                            @error('totallainnya')
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
            {{-- //tabel 2 disini --}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">2.2.2</th>
                        <th colspan="2">Banyaknya Anggota DPRD Menurut Nama Fraksi dan Jenis Kelamin di Kabupaten
                            Soppeng, 2021</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="2">Number of Regional Parliaments Members by Political Faction and Sex in
                            Soppeng Regency, 2021</th>
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
                        <td rowspan="2">Nama Fraksi/Political Faction</td>
                        <td colspan="3">Jenis Kelamin/Sex</td>
                    </tr>
                    <tr>
                        <td>Laki-Laki/</td>
                        <td>Perempuan/</td>
                        <td>Jumlah/</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                    </tr>
                    <tr>
                        <td>GOLKAR</td>
                        <td>9</td>
                        <td>4</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>PDIP</td>
                        <td>5</td>
                        <td>0</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>PARTAI NASDEM</td>
                        <td>4</td>
                        <td>1</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>PARTAI DEMOKRAT</td>
                        <td>2</td>
                        <td>1</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PARTAI GERINDRA</td>
                        <td>3</td>
                        <td>1</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td>23</td>
                        <td>7</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.027_dprd.script')
    </x-slot>
</x-tabel-entri-view>
