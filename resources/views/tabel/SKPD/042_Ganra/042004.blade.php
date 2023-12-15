<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">2.2</th>
                        <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">{{ $judultabel }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="3"><span
                                style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix" rowspan="2">Lingkungan/ Urban Backwoods</td>
                        <td class="tg-nrix" rowspan="2">Dusun/ Backwoods</td>
                        <td class="tg-nrix" rowspan="2">RW/ Hamlets</td>
                        <td class="tg-nrix" rowspan="2">RT/ Neighbour-hoods</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>

                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Belo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan1') is-invalid @enderror" id="lingkungan1"
                                name="lingkungan1" value="{{ old('lingkungan1', $data->lingkungan1) }}">
                            @error('lingkungan1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun1') is-invalid @enderror" id="dusun1" name="dusun1"
                                value="{{ old('dusun1', $data->dusun1) }}">
                            @error('dusun1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw1') is-invalid @enderror" id="rw1" name="rw1"
                                value="{{ old('rw1', $data->rw1) }}">
                            @error('rw1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt1') is-invalid @enderror" id="rt1" name="rt1"
                                value="{{ old('rt1', $data->rt1) }}">
                            @error('rt1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan2') is-invalid @enderror" id="lingkungan2"
                                name="lingkungan2" value="{{ old('lingkungan2', $data->lingkungan2) }}">
                            @error('lingkungan2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun2') is-invalid @enderror" id="dusun2" name="dusun2"
                                value="{{ old('dusun2', $data->dusun2) }}">
                            @error('dusun2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw2') is-invalid @enderror" id="rw2" name="rw2"
                                value="{{ old('rw2', $data->rw2) }}">
                            @error('rw2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt2') is-invalid @enderror" id="rt2" name="rt2"
                                value="{{ old('rt2', $data->rt2) }}">
                            @error('rt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Enrekeng</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan3') is-invalid @enderror" id="lingkungan3"
                                name="lingkungan3" value="{{ old('lingkungan3', $data->lingkungan3) }}">
                            @error('lingkungan3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun3') is-invalid @enderror" id="dusun3" name="dusun3"
                                value="{{ old('dusun3', $data->dusun3) }}">
                            @error('dusun3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw3') is-invalid @enderror" id="rw3"
                                name="rw3" value="{{ old('rw3', $data->rw3) }}">
                            @error('rw3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt3') is-invalid @enderror" id="rt3"
                                name="rt3" value="{{ old('rt3', $data->rt3) }}">
                            @error('rt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lompulle</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan4') is-invalid @enderror" id="lingkungan4"
                                name="lingkungan4" value="{{ old('lingkungan4', $data->lingkungan4) }}">
                            @error('lingkungan4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun4') is-invalid @enderror" id="dusun4"
                                name="dusun4" value="{{ old('dusun4', $data->dusun4) }}">
                            @error('dusun4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw4') is-invalid @enderror" id="rw4"
                                name="rw4" value="{{ old('rw4', $data->rw4) }}">
                            @error('rw4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt4') is-invalid @enderror" id="rt4"
                                name="rt4" value="{{ old('rt4', $data->rt4) }}">
                            @error('rt4')
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
                                class="form-control @error('lingkungant') is-invalid @enderror" id="lingkungant"
                                name="lingkungant" value="{{ old('lingkungant', $data->lingkungant) }}">
                            @error('lingkungant')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusunt') is-invalid @enderror" id="dusunt"
                                name="dusunt" value="{{ old('dusunt', $data->dusunt) }}">
                            @error('dusunt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rwt') is-invalid @enderror" id="rwt"
                                name="rwt" value="{{ old('rwt', $data->rwt) }}">
                            @error('rwt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rtt') is-invalid @enderror" id="rtt"
                                name="rtt" value="{{ old('rtt', $data->rtt) }}">
                            @error('rtt')
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
                        <th class="tg-amwm" rowspan="2">2.2</th>
                        <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">Banyaknya Lingkungan,
                                Dusun,
                                RW dan
                                RT Menurut Desa/Kelurahan di Kecamatan Ganra, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Number of
                                Urban
                                Backwoods, Backwoods, Hamlets and Neighbourhoods by Villages/Urban Villages in Ganra
                                Subdistrict,
                                2021</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix">Lingkungan/</td>
                        <td class="tg-nrix">Dusun/</td>
                        <td class="tg-nrix">RW/</td>
                        <td class="tg-nrix">RT/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Urban Backwoods</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Backwoods</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Hamlets</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Neighbour-hoods</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Belo</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Ganra</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">19</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Enrekeng</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Lompulle</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">11</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">0</td>
                        <td class="tg-mwxe">10</td>
                        <td class="tg-mwxe">22</td>
                        <td class="tg-mwxe">57</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}

        @include('tabel.skpd.042_ganra.script4')
    </x-slot>
</x-tabel-entri-view>
