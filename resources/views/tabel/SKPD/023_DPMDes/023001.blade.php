<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-amwm" rowspan="2">Tabel</th>
                        <th class="tg-amwm" rowspan="2">2.1.1</th>
                        <th class="tg-yla0" colspan="5"><span style="font-weight:bold">{{ $judultabel }}
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-sn55" colspan="5"><span
                                style="font-weight:bold;font-style:italic">{{ $judultabelen }}
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-5frq"><span style="font-style:italic;color:#000">Kecamatan/
                                Subdistrict</span><span style="font-style:normal;color:#000">/</span></td>
                        <td class="tg-nrix">Desa/ Villages</td>
                        <td class="tg-nrix">Kelurahan/ Urban Villages</td>
                        <td class="tg-nrix">Lingkungan/ Urban Back-woods</td>
                        <td class="tg-nrix">Dusun/ Back-woods</td>
                        <td class="tg-nrix">RW/ RK/Ham-let</td>
                        <td class="tg-nrix">RT/ Neigh-bour-hood</td>
                    </tr>

                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                        <td class="tg-nrix">(6)</td>
                        <td class="tg-nrix">(7)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Marioriwawo</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa1') is-invalid @enderror" id="desa1" name="desa1"
                                value="{{ old('desa1', $data->desa1) }}">
                            @error('desa1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan1') is-invalid @enderror" id="kelurahan1"
                                name="kelurahan1" value="{{ old('kelurahan1', $data->kelurahan1) }}">
                            @error('kelurahan1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                        <td class="tg-cly1">020. Lalabata</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa2') is-invalid @enderror" id="desa2" name="desa2"
                                value="{{ old('desa2', $data->desa2) }}">
                            @error('desa2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan2') is-invalid @enderror" id="kelurahan2"
                                name="kelurahan2" value="{{ old('kelurahan2', $data->kelurahan2) }}">
                            @error('kelurahan2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                                class="form-control @error('rw2') is-invalid @enderror" id="rw2"
                                name="rw2" value="{{ old('rw2', $data->rw2) }}">
                            @error('rw2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt2') is-invalid @enderror" id="rt2"
                                name="rt2" value="{{ old('rt2', $data->rt2) }}">
                            @error('rt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">030. Liliriaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa3') is-invalid @enderror" id="desa3"
                                name="desa3" value="{{ old('desa3', $data->desa3) }}">
                            @error('desa3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan3') is-invalid @enderror" id="kelurahan3"
                                name="kelurahan3" value="{{ old('kelurahan3', $data->kelurahan3) }}">
                            @error('kelurahan3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                                class="form-control @error('dusun3') is-invalid @enderror" id="dusun3"
                                name="dusun3" value="{{ old('dusun3', $data->dusun3) }}">
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
                        <td class="tg-cly1">031. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa4') is-invalid @enderror" id="desa4"
                                name="desa4" value="{{ old('desa4', $data->desa4) }}">
                            @error('desa4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan4') is-invalid @enderror" id="kelurahan4"
                                name="kelurahan4" value="{{ old('kelurahan4', $data->kelurahan4) }}">
                            @error('kelurahan4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                        <td class="tg-cly1">032. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa5') is-invalid @enderror" id="desa5"
                                name="desa5" value="{{ old('desa5', $data->desa5) }}">
                            @error('desa5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan5') is-invalid @enderror" id="kelurahan5"
                                name="kelurahan5" value="{{ old('kelurahan5', $data->kelurahan5) }}">
                            @error('kelurahan5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('lingkungan5') is-invalid @enderror" id="lingkungan5"
                                name="lingkungan5" value="{{ old('lingkungan5', $data->lingkungan5) }}">
                            @error('lingkungan5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('dusun5') is-invalid @enderror" id="dusun5"
                                name="dusun5" value="{{ old('dusun5', $data->dusun5) }}">
                            @error('dusun5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rw5') is-invalid @enderror" id="rw5"
                                name="rw5" value="{{ old('rw5', $data->rw5) }}">
                            @error('rw5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('rt5') is-invalid @enderror" id="rt5"
                                name="rt5" value="{{ old('rt5', $data->rt5) }}">
                            @error('rt5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">040. Lilirilau</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa6') is-invalid @enderror" id="desa6"
                                name="desa6" value="{{ old('desa6', $data->desa6) }}">
                            @error('desa6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan6') is-invalid @enderror" id="kelurahan6"
                                name="kelurahan6" value="{{ old('kelurahan6', $data->kelurahan6) }}">
                            @error('kelurahan6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                        <td class="tg-cly1">050. Donri-Donri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa7') is-invalid @enderror" id="desa7"
                                name="desa7" value="{{ old('desa7', $data->desa7) }}">
                            @error('desa7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan7') is-invalid @enderror" id="kelurahan7"
                                name="kelurahan7" value="{{ old('kelurahan7', $data->kelurahan7) }}">
                            @error('kelurahan7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                        <td class="tg-cly1">060. Marioriawa</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desa8') is-invalid @enderror" id="desa8"
                                name="desa8" value="{{ old('desa8', $data->desa8) }}">
                            @error('desa8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahan8') is-invalid @enderror" id="kelurahan8"
                                name="kelurahan8" value="{{ old('kelurahan8', $data->kelurahan8) }}">
                            @error('kelurahan8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('desat') is-invalid @enderror" id="desat"
                                name="desat" value="{{ old('desat', $data->desat) }}">
                            @error('desat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('kelurahant') is-invalid @enderror" id="kelurahant"
                                name="kelurahant" value="{{ old('kelurahant', $data->kelurahant) }}">
                            @error('kelurahant')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-amwm" rowspan="2">Tabel</th>
                        <th class="tg-amwm" rowspan="2">2.1.1</th>
                        <th class="tg-yla0" colspan="5"><span style="font-weight:bold">Jumlah Desa, Kelurahan,
                                Lingkungan,
                                Dusun, RW/RK, dan RT Menurut Kecamatan di Kabupaten Soppeng,
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-sn55" colspan="5"><span style="font-weight:bold;font-style:italic">Number of
                                Villages, Urban Villages, Backwoods, Urban Backwoods, Hamlet and
                                Neighbourhood&nbsp;&nbsp;by
                                Subdistrict in Soppeng Regency,
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-5frq"><span style="font-style:italic;color:#000">Kecamatan</span><span
                                style="font-style:normal;color:#000">/</span></td>
                        <td class="tg-nrix">Desa/</td>
                        <td class="tg-nrix">Kelurahan/</td>
                        <td class="tg-nrix">Lingkungan/</td>
                        <td class="tg-nrix">Dusun/</td>
                        <td class="tg-nrix">RW/</td>
                        <td class="tg-nrix">RT/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Urban Back-woods</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Back-woods</span></td>
                        <td class="tg-nrix">RK/Ham-let</td>
                        <td class="tg-lhti"><span style="font-style:italic">Neigh-bour-hood</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                        <td class="tg-nrix">(6)</td>
                        <td class="tg-nrix">(7)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Marioriwawo</td>
                        <td class="tg-mwxe">11</td>
                        <td class="tg-mwxe">2</td>
                        <td class="tg-mwxe">4</td>
                        <td class="tg-mwxe">27</td>
                        <td class="tg-mwxe">81</td>
                        <td class="tg-mwxe">215</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">020. Lalabata</td>
                        <td class="tg-mwxe">3</td>
                        <td class="tg-mwxe">7</td>
                        <td class="tg-mwxe">15</td>
                        <td class="tg-mwxe">11</td>
                        <td class="tg-mwxe">64</td>
                        <td class="tg-mwxe">185</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">030. Liliriaja</td>
                        <td class="tg-mwxe">5</td>
                        <td class="tg-mwxe">3</td>
                        <td class="tg-mwxe">6</td>
                        <td class="tg-mwxe">13</td>
                        <td class="tg-mwxe">51</td>
                        <td class="tg-mwxe">148</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">031. Ganra</td>
                        <td class="tg-mwxe">4</td>
                        <td class="tg-mwxe">-</td>
                        <td class="tg-mwxe">-</td>
                        <td class="tg-mwxe">10</td>
                        <td class="tg-mwxe">22</td>
                        <td class="tg-mwxe">56</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">032. Citta</td>
                        <td class="tg-mwxe">4</td>
                        <td class="tg-mwxe">-</td>
                        <td class="tg-mwxe">-</td>
                        <td class="tg-mwxe">10</td>
                        <td class="tg-mwxe">26</td>
                        <td class="tg-mwxe">58</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">040. Lilirilau</td>
                        <td class="tg-mwxe">8</td>
                        <td class="tg-mwxe">4</td>
                        <td class="tg-mwxe">8</td>
                        <td class="tg-mwxe">22</td>
                        <td class="tg-mwxe">84</td>
                        <td class="tg-mwxe">251</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">050. Donri-Donri</td>
                        <td class="tg-mwxe">9</td>
                        <td class="tg-mwxe">-</td>
                        <td class="tg-mwxe">-</td>
                        <td class="tg-mwxe">24</td>
                        <td class="tg-mwxe">70</td>
                        <td class="tg-mwxe">159</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">060. Marioriawa</td>
                        <td class="tg-mwxe">5</td>
                        <td class="tg-mwxe">5</td>
                        <td class="tg-mwxe">7</td>
                        <td class="tg-mwxe">12</td>
                        <td class="tg-mwxe">55</td>
                        <td class="tg-mwxe">163</td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">49</td>
                        <td class="tg-mwxe">21</td>
                        <td class="tg-mwxe">40</td>
                        <td class="tg-mwxe">129</td>
                        <td class="tg-mwxe">453</td>
                        <td class="tg-mwxe">1235</td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.023_DPMDes.script1')
    </x-slot>
</x-tabel-entri-view>
