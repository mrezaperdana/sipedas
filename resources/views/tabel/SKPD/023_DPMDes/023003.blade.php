<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">Tabel</th>
                        <th rowspan="2">2.1.3</th>
                        <th colspan="2">{{ $judultabel }}, {{ $data->tahun }}</th>
                    </tr>
                    <tr>
                        <th colspan="2">{{ $judultabelen }}, {{ $data->tahun }} </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Kecamatan/ Subdistrict</td>
                        <td>Tertinggal/ Backward Village</td>
                        <td>Berkembang/ Developing Village</td>
                        <td>Maju/ Developed Village</td>
                    </tr>

                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                    </tr>
                    <tr>
                        <td>010. Marioriwawo</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward1') is-invalid @enderror" id="backward1"
                                name="backward1" value="{{ old('backward1', $data->backward1) }}">
                            @error('backward1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing1') is-invalid @enderror" id="developing1"
                                name="developing1" value="{{ old('developing1', $data->developing1) }}">
                            @error('developing1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed1') is-invalid @enderror" id="developed1"
                                name="developed1" value="{{ old('developed1', $data->developed1) }}">
                            @error('developed1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>020. Lalabata</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward2') is-invalid @enderror" id="backward2"
                                name="backward2" value="{{ old('backward2', $data->backward2) }}">
                            @error('backward2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing2') is-invalid @enderror" id="developing2"
                                name="developing2" value="{{ old('developing2', $data->developing2) }}">
                            @error('developing2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed2') is-invalid @enderror" id="developed2"
                                name="developed2" value="{{ old('developed2', $data->developed2) }}">
                            @error('developed2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>030. Liliriaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward3') is-invalid @enderror" id="backward3"
                                name="backward3" value="{{ old('backward3', $data->backward3) }}">
                            @error('backward3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing3') is-invalid @enderror" id="developing3"
                                name="developing3" value="{{ old('developing3', $data->developing3) }}">
                            @error('developing3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed3') is-invalid @enderror" id="developed3"
                                name="developed3" value="{{ old('developed3', $data->developed3) }}">
                            @error('developed3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>031. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward4') is-invalid @enderror" id="backward4"
                                name="backward4" value="{{ old('backward4', $data->backward4) }}">
                            @error('backward4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing4') is-invalid @enderror" id="developing4"
                                name="developing4" value="{{ old('developing4', $data->developing4) }}">
                            @error('developing4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed4') is-invalid @enderror" id="developed4"
                                name="developed4" value="{{ old('developed4', $data->developed4) }}">
                            @error('developed4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>032. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward5') is-invalid @enderror" id="backward5"
                                name="backward5" value="{{ old('backward5', $data->backward5) }}">
                            @error('backward5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing5') is-invalid @enderror" id="developing5"
                                name="developing5" value="{{ old('developing5', $data->developing5) }}">
                            @error('developing5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed5') is-invalid @enderror" id="developed5"
                                name="developed5" value="{{ old('developed5', $data->developed5) }}">
                            @error('developed5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>040. Lilirilau</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward6') is-invalid @enderror" id="backward6"
                                name="backward6" value="{{ old('backward6', $data->backward6) }}">
                            @error('backward6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing6') is-invalid @enderror" id="developing6"
                                name="developing6" value="{{ old('developing6', $data->developing6) }}">
                            @error('developing6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed6') is-invalid @enderror" id="developed6"
                                name="developed6" value="{{ old('developed6', $data->developed6) }}">
                            @error('developed6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>050. Donri-Donri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward7') is-invalid @enderror" id="backward7"
                                name="backward7" value="{{ old('backward7', $data->backward7) }}">
                            @error('backward7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing7') is-invalid @enderror" id="developing7"
                                name="developing7" value="{{ old('developing7', $data->developing7) }}">
                            @error('developing7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed7') is-invalid @enderror" id="developed7"
                                name="developed7" value="{{ old('developed7', $data->developed7) }}">
                            @error('developed7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>060. Marioriawa</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backward8') is-invalid @enderror" id="backward8"
                                name="backward8" value="{{ old('backward8', $data->backward8) }}">
                            @error('backward8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developing8') is-invalid @enderror" id="developing8"
                                name="developing8" value="{{ old('developing8', $data->developing8) }}">
                            @error('developing8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developed8') is-invalid @enderror" id="developed8"
                                name="developed8" value="{{ old('developed8', $data->developed8) }}">
                            @error('developed8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('backwardt') is-invalid @enderror" id="backwardt"
                                name="backwardt" value="{{ old('backwardt', $data->backwardt) }}">
                            @error('backwardt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developingt') is-invalid @enderror" id="developingt"
                                name="developingt" value="{{ old('developingt', $data->developingt) }}">
                            @error('developingt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('developedt') is-invalid @enderror" id="developedt"
                                name="developedt" value="{{ old('developedt', $data->developedt) }}">
                            @error('developedt')
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
                        <th rowspan="2">2.1.3</th>
                        <th colspan="2">Jumlah Desa Menurut Kecamatan dan Klasifikasi Indeks Desa Membangun di
                            Kabupaten Soppeng, 2021</th>
                    </tr>
                    <tr>
                        <th colspan="2">Number of Villages by Subdistrict and Development Villages Index Categories
                            in
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
                        <td>Kecamatan/</td>
                        <td>Tertinggal/</td>
                        <td>Berkembang/</td>
                        <td>Maju/</td>
                    </tr>
                    <tr>
                        <td>Subdistrict</td>
                        <td>Backward Village</td>
                        <td>Developing Village</td>
                        <td>Developed Village</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                    </tr>
                    <tr>
                        <td>010. Marioriwawo</td>
                        <td>0</td>
                        <td>8</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>020. Lalabata</td>
                        <td>0</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>030. Liliriaja</td>
                        <td>0</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>031. Ganra</td>
                        <td>0</td>
                        <td>0</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>032. Citta</td>
                        <td>0</td>
                        <td>1</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>040. Lilirilau</td>
                        <td>0</td>
                        <td>5</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>050. Donri-Donri</td>
                        <td>1</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>060. Marioriawa</td>
                        <td>0</td>
                        <td>3</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td>1</td>
                        <td>26</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.023_DPMDes.script3')

    </x-slot>
</x-tabel-entri-view>
