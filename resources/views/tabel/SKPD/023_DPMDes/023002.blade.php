<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">Tabel</th>
                        <th></th>
                        <th rowspan="2">2.1.2</th>
                        <th colspan="2">{{ $judultabel }}, {{ $data->tahun }}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th colspan="2">{{ $judultabelen }}, {{ $data->tahun }} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kecamatan/ Subdistrict</td>
                        <td>Swadaya/ self-help</td>
                        <td>Swakarya/ Initiative</td>
                        <td>Swasembada/ Self-sufficiency</td>
                        <td>Jumlah/ Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>(5)</td>
                    </tr>
                    <tr>
                        <td>010. Marioriwawo</td>
                        <td class="tg-cly1"><input type="text" class="form-control @error('help1') is-invalid @enderror"
                                id="help1" name="help1" value="{{ old('help1', $data->help1) }}">
                            @error('help1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative1') is-invalid @enderror" id="initiative1"
                                name="initiative1" value="{{ old('initiative1', $data->initiative1) }}">
                            @error('initiative1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency1') is-invalid @enderror" id="sufficiency1"
                                name="sufficiency1" value="{{ old('sufficiency1', $data->sufficiency1) }}">
                            @error('sufficiency1')
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
                        <td>020. Lalabata</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help2') is-invalid @enderror" id="help2" name="help2"
                                value="{{ old('help2', $data->help2) }}">
                            @error('help2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative2') is-invalid @enderror" id="initiative2"
                                name="initiative2" value="{{ old('initiative2', $data->initiative2) }}">
                            @error('initiative2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency2') is-invalid @enderror" id="sufficiency2"
                                name="sufficiency2" value="{{ old('sufficiency2', $data->sufficiency2) }}">
                            @error('sufficiency2')
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
                        <td>030. Liliriaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help3') is-invalid @enderror" id="help3" name="help3"
                                value="{{ old('help3', $data->help3) }}">
                            @error('help3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative3') is-invalid @enderror" id="initiative3"
                                name="initiative3" value="{{ old('initiative3', $data->initiative3) }}">
                            @error('initiative3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency3') is-invalid @enderror" id="sufficiency3"
                                name="sufficiency3" value="{{ old('sufficiency3', $data->sufficiency3) }}">
                            @error('sufficiency3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total3') is-invalid @enderror" id="total3"
                                name="total3" value="{{ old('total3', $data->total3) }}">
                            @error('total3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>031. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help4') is-invalid @enderror" id="help4" name="help4"
                                value="{{ old('help4', $data->help4) }}">
                            @error('help4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative4') is-invalid @enderror" id="initiative4"
                                name="initiative4" value="{{ old('initiative4', $data->initiative4) }}">
                            @error('initiative4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency4') is-invalid @enderror" id="sufficiency4"
                                name="sufficiency4" value="{{ old('sufficiency4', $data->sufficiency4) }}">
                            @error('sufficiency4')
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
                        <td>032. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help5') is-invalid @enderror" id="help5"
                                name="help5" value="{{ old('help5', $data->help5) }}">
                            @error('help5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative5') is-invalid @enderror" id="initiative5"
                                name="initiative5" value="{{ old('initiative5', $data->initiative5) }}">
                            @error('initiative5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency5') is-invalid @enderror" id="sufficiency5"
                                name="sufficiency5" value="{{ old('sufficiency5', $data->sufficiency5) }}">
                            @error('sufficiency5')
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
                        <td>040. Lilirilau</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help6') is-invalid @enderror" id="help6"
                                name="help6" value="{{ old('help6', $data->help6) }}">
                            @error('help6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative6') is-invalid @enderror" id="initiative6"
                                name="initiative6" value="{{ old('initiative6', $data->initiative6) }}">
                            @error('initiative6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency6') is-invalid @enderror" id="sufficiency6"
                                name="sufficiency6" value="{{ old('sufficiency6', $data->sufficiency6) }}">
                            @error('sufficiency6')
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
                        <td>050. Donri-Donri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help7') is-invalid @enderror" id="help7"
                                name="help7" value="{{ old('help7', $data->help7) }}">
                            @error('help7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative7') is-invalid @enderror" id="initiative7"
                                name="initiative7" value="{{ old('initiative7', $data->initiative7) }}">
                            @error('initiative7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency7') is-invalid @enderror" id="sufficiency7"
                                name="sufficiency7" value="{{ old('sufficiency7', $data->sufficiency7) }}">
                            @error('sufficiency7')
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
                        <td>060. Marioriawa</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('help8') is-invalid @enderror" id="help8"
                                name="help8" value="{{ old('help8', $data->help8) }}">
                            @error('help8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiative8') is-invalid @enderror" id="initiative8"
                                name="initiative8" value="{{ old('initiative8', $data->initiative8) }}">
                            @error('initiative8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiency8') is-invalid @enderror" id="sufficiency8"
                                name="sufficiency8" value="{{ old('sufficiency8', $data->sufficiency8) }}">
                            @error('sufficiency8')
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
                        <td>Jumlah/Total</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('helpt') is-invalid @enderror" id="helpt"
                                name="helpt" value="{{ old('helpt', $data->helpt) }}">
                            @error('helpt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('initiativet') is-invalid @enderror" id="initiativet"
                                name="initiativet" value="{{ old('initiativet', $data->initiativet) }}">
                            @error('initiativet')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sufficiencyt') is-invalid @enderror" id="sufficiencyt"
                                name="sufficiencyt" value="{{ old('sufficiencyt', $data->sufficiencyt) }}">
                            @error('sufficiencyt')
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">Tabel</th>
                        <th></th>
                        <th rowspan="2">2.1.2</th>
                        <th colspan="2">Jumlah Desa/Kelurahan Menurut Kecamatan dan Klasifikasi Desa/Kelurahan di
                            Kabupaten Soppeng, 2021</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th colspan="2">Number of Villages/Urban Villages by Subdistrict and Villages/Urban Villages
                            Category in Soppeng Regency, 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Kecamatan/</td>
                        <td>Swadaya</td>
                        <td>Swakarya/</td>
                        <td>Swasembada/</td>
                        <td>Jumlah/</td>
                    </tr>
                    <tr>
                        <td>Subdistrict</td>
                        <td>self-help</td>
                        <td>Initiative</td>
                        <td>Self-sufficiency</td>
                        <td>Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>010. Marioriwawo</td>
                        <td>8</td>
                        <td>4</td>
                        <td>1</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>020. Lalabata</td>
                        <td>6</td>
                        <td>3</td>
                        <td>0</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>030. Liliriaja</td>
                        <td>4</td>
                        <td>3</td>
                        <td>1</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>031. Ganra</td>
                        <td>3</td>
                        <td>1</td>
                        <td>0</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>032. Citta</td>
                        <td>1</td>
                        <td>2</td>
                        <td>1</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>040. Lilirilau</td>
                        <td>3</td>
                        <td>7</td>
                        <td>2</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>050. Donri-Donri</td>
                        <td>7</td>
                        <td>2</td>
                        <td>0</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>060. Marioriawa</td>
                        <td>2</td>
                        <td>4</td>
                        <td>1</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td>34</td>
                        <td>26</td>
                        <td>6</td>
                        <td>66</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.023_DPMDes.script2')

    </x-slot>
</x-tabel-entri-view>
