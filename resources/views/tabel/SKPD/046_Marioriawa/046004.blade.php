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
                        <td class="tg-cly1">001. Patampanua</td>

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
                        <td class="tg-cly1">002. Panincong</td>
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
                        <td class="tg-cly1">003. Tellulimpoe</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan6') is-invalid @enderror" id="lingkungan6"
                                name="lingkungan6" value="{{ old('lingkungan6', $data->lingkungan6) }}">
                            @error('lingkungan6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun6') is-invalid @enderror" id="dusun6" name="dusun6"
                                value="{{ old('dusun6', $data->dusun6) }}">
                            @error('dusun6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw6') is-invalid @enderror" id="rw6"
                                name="rw6" value="{{ old('rw6', $data->rw6) }}">
                            @error('rw6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt6') is-invalid @enderror" id="rt6"
                                name="rt6" value="{{ old('rt6', $data->rt6) }}">
                            @error('rt6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Attang Salo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan6') is-invalid @enderror" id="lingkungan6"
                                name="lingkungan6" value="{{ old('lingkungan6', $data->lingkungan6) }}">
                            @error('lingkungan6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun6') is-invalid @enderror" id="dusun6"
                                name="dusun6" value="{{ old('dusun6', $data->dusun6) }}">
                            @error('dusun6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw6') is-invalid @enderror" id="rw6"
                                name="rw6" value="{{ old('rw6', $data->rw6) }}">
                            @error('rw6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt6') is-invalid @enderror" id="rt6"
                                name="rt6" value="{{ old('rt6', $data->rt6) }}">
                            @error('rt6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Kaca</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan6') is-invalid @enderror" id="lingkungan6"
                                name="lingkungan6" value="{{ old('lingkungan6', $data->lingkungan6) }}">
                            @error('lingkungan6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun6') is-invalid @enderror" id="dusun6"
                                name="dusun6" value="{{ old('dusun6', $data->dusun6) }}">
                            @error('dusun6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw6') is-invalid @enderror" id="rw6"
                                name="rw6" value="{{ old('rw6', $data->rw6) }}">
                            @error('rw6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt6') is-invalid @enderror" id="rt6"
                                name="rt6" value="{{ old('rt6', $data->rt6) }}">
                            @error('rt6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Limpomajang</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan6') is-invalid @enderror" id="lingkungan6"
                                name="lingkungan6" value="{{ old('lingkungan6', $data->lingkungan6) }}">
                            @error('lingkungan6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun6') is-invalid @enderror" id="dusun6"
                                name="dusun6" value="{{ old('dusun6', $data->dusun6) }}">
                            @error('dusun6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw6') is-invalid @enderror" id="rw6"
                                name="rw6" value="{{ old('rw6', $data->rw6) }}">
                            @error('rw6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt6') is-invalid @enderror" id="rt6"
                                name="rt6" value="{{ old('rt6', $data->rt6) }}">
                            @error('rt6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Batu-Batu</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan7') is-invalid @enderror" id="lingkungan7"
                                name="lingkungan7" value="{{ old('lingkungan7', $data->lingkungan7) }}">
                            @error('lingkungan7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun7') is-invalid @enderror" id="dusun7"
                                name="dusun7" value="{{ old('dusun7', $data->dusun7) }}">
                            @error('dusun7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw7') is-invalid @enderror" id="rw7"
                                name="rw7" value="{{ old('rw7', $data->rw7) }}">
                            @error('rw7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt7') is-invalid @enderror" id="rt7"
                                name="rt7" value="{{ old('rt7', $data->rt7) }}">
                            @error('rt7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Manorang Salo</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan8') is-invalid @enderror" id="lingkungan8"
                                name="lingkungan8" value="{{ old('lingkungan8', $data->lingkungan8) }}">
                            @error('lingkungan8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun8') is-invalid @enderror" id="dusun8"
                                name="dusun8" value="{{ old('dusun8', $data->dusun8) }}">
                            @error('dusun8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw8') is-invalid @enderror" id="rw8"
                                name="rw8" value="{{ old('rw8', $data->rw8) }}">
                            @error('rw8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt8') is-invalid @enderror" id="rt8"
                                name="rt8" value="{{ old('rt8', $data->rt8) }}">
                            @error('rt8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Laringgi</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan9') is-invalid @enderror" id="lingkungan9"
                                name="lingkungan9" value="{{ old('lingkungan9', $data->lingkungan9) }}">
                            @error('lingkungan9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun9') is-invalid @enderror" id="dusun9"
                                name="dusun9" value="{{ old('dusun9', $data->dusun9) }}">
                            @error('dusun9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw9') is-invalid @enderror" id="rw9"
                                name="rw9" value="{{ old('rw9', $data->rw9) }}">
                            @error('rw9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt9') is-invalid @enderror" id="rt9"
                                name="rt9" value="{{ old('rt9', $data->rt9) }}">
                            @error('rt9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Bulue</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan10') is-invalid @enderror" id="lingkungan10"
                                name="lingkungan10" value="{{ old('lingkungan10', $data->lingkungan10) }}">
                            @error('lingkungan10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun10') is-invalid @enderror" id="dusun10"
                                name="dusun10" value="{{ old('dusun10', $data->dusun10) }}">
                            @error('dusun10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw10') is-invalid @enderror" id="rw10"
                                name="rw10" value="{{ old('rw10', $data->rw10) }}">
                            @error('rw10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt10') is-invalid @enderror" id="rt10"
                                name="rt10" value="{{ old('rt10', $data->rt10) }}">
                            @error('rt10')
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
                                Dusun, RW dan
                                RT Menurut Desa/Kelurahan di Kecamatan Marioriawa, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Number of
                                Urban
                                Backwoods, Backwoods, Hamlets and Neighbourhoods by Villages/Urban Villages in
                                Marioriawa
                                Subdistrict, 2021</span></th>
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
                        <td class="tg-cly1">001. Patampanua</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">15</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Panincong</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">8</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">32</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Tellulimpoe</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">18</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Attang Salo</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Kaca</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Limpomajang</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">14</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Batu-Batu</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Manorang Salo</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Laringgi</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">19</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Bulue</td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">8</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">20</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">6</td>
                        <td class="tg-mwxe">14</td>
                        <td class="tg-mwxe">54</td>
                        <td class="tg-mwxe">164</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}

        @include('tabel.skpd.046_marioriawa.script4')
    </x-slot>
</x-tabel-entri-view>
