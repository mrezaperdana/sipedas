<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">1.2</th>
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
                        <td class="tg-baqh" colspan="2"><span
                                style="font-style:normal;color:#000">Wilayah/</span><span
                                style="font-style:italic;color:#000">Area</span></td>
                        <td class="tg-baqh" colspan="2"><span
                                style="font-style:normal;color:#000">Topografi/</span><span
                                style="font-style:italic;color:#000">Topography</span></td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-nrix">Pantai/ Coast</td>
                        <td class="tg-nrix">Bukan Pantai/ Non-Coast</td>
                        <td class="tg-nrix">Datar/ Flatland</td>
                        <td class="tg-nrix">Berbukit-Bukit/ Hilly</td>
                    </tr>

                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Gattareng</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai1') is-invalid @enderror" id="pantai1"
                                name="pantai1" value="{{ old('pantai1', $data->pantai1) }}">
                            @error('pantai1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai1') is-invalid @enderror" id="bukanpantai1"
                                name="bukanpantai1" value="{{ old('bukanpantai1', $data->bukanpantai1) }}">
                            @error('bukanpantai1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar1') is-invalid @enderror" id="datar1" name="datar1"
                                value="{{ old('datar1', $data->datar1) }}">
                            @error('datar1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit1') is-invalid @enderror" id="bukit1" name="bukit1"
                                value="{{ old('bukit1', $data->bukit1) }}">
                            @error('bukit1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Marioriaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai2') is-invalid @enderror" id="pantai2"
                                name="pantai2" value="{{ old('pantai2', $data->pantai2) }}">
                            @error('pantai2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai2') is-invalid @enderror" id="bukanpantai2"
                                name="bukanpantai2" value="{{ old('bukanpantai2', $data->bukanpantai2) }}">
                            @error('bukanpantai2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar2') is-invalid @enderror" id="datar2" name="datar2"
                                value="{{ old('datar2', $data->datar2) }}">
                            @error('datar2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit2') is-invalid @enderror" id="bukit2" name="bukit2"
                                value="{{ old('bukit2', $data->bukit2) }}">
                            @error('bukit2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Watu </td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai3') is-invalid @enderror" id="pantai3"
                                name="pantai3" value="{{ old('pantai3', $data->pantai3) }}">
                            @error('pantai3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai3') is-invalid @enderror" id="bukanpantai3"
                                name="bukanpantai3" value="{{ old('bukanpantai3', $data->bukanpantai3) }}">
                            @error('bukanpantai3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar3') is-invalid @enderror" id="datar3"
                                name="datar3" value="{{ old('datar3', $data->datar3) }}">
                            @error('datar3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit3') is-invalid @enderror" id="bukit3"
                                name="bukit3" value="{{ old('bukit3', $data->bukit3) }}">
                            @error('bukit3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Marioritengnga</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai4') is-invalid @enderror" id="pantai4"
                                name="pantai4" value="{{ old('pantai4', $data->pantai4) }}">
                            @error('pantai4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai4') is-invalid @enderror" id="bukanpantai4"
                                name="bukanpantai4" value="{{ old('bukanpantai4', $data->bukanpantai4) }}">
                            @error('bukanpantai4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar4') is-invalid @enderror" id="datar4"
                                name="datar4" value="{{ old('datar4', $data->datar4) }}">
                            @error('datar4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit4') is-invalid @enderror" id="bukit4"
                                name="bukit4" value="{{ old('bukit4', $data->bukit4) }}">
                            @error('bukit4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Goarie</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai5') is-invalid @enderror" id="pantai5"
                                name="pantai5" value="{{ old('pantai5', $data->pantai5) }}">
                            @error('pantai5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai5') is-invalid @enderror" id="bukanpantai5"
                                name="bukanpantai5" value="{{ old('bukanpantai5', $data->bukanpantai5) }}">
                            @error('bukanpantai5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar5') is-invalid @enderror" id="datar5"
                                name="datar5" value="{{ old('datar5', $data->datar5) }}">
                            @error('datar5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit5') is-invalid @enderror" id="bukit5"
                                name="bukit5" value="{{ old('bukit5', $data->bukit5) }}">
                            @error('bukit5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Barae</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai6') is-invalid @enderror" id="pantai6"
                                name="pantai6" value="{{ old('pantai6', $data->pantai6) }}">
                            @error('pantai6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai6') is-invalid @enderror" id="bukanpantai6"
                                name="bukanpantai6" value="{{ old('bukanpantai6', $data->bukanpantai6) }}">
                            @error('bukanpantai6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar6') is-invalid @enderror" id="datar6"
                                name="datar6" value="{{ old('datar6', $data->datar6) }}">
                            @error('datar6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit6') is-invalid @enderror" id="bukit6"
                                name="bukit6" value="{{ old('bukit6', $data->bukit6) }}">
                            @error('bukit6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Mariorilau</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai7') is-invalid @enderror" id="pantai7"
                                name="pantai7" value="{{ old('pantai7', $data->pantai7) }}">
                            @error('pantai7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai7') is-invalid @enderror" id="bukanpantai7"
                                name="bukanpantai7" value="{{ old('bukanpantai7', $data->bukanpantai7) }}">
                            @error('bukanpantai7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar7') is-invalid @enderror" id="datar7"
                                name="datar7" value="{{ old('datar7', $data->datar7) }}">
                            @error('datar7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit7') is-invalid @enderror" id="bukit7"
                                name="bukit7" value="{{ old('bukit7', $data->bukit7) }}">
                            @error('bukit7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Tettikenrarae</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai8') is-invalid @enderror" id="pantai8"
                                name="pantai8" value="{{ old('pantai8', $data->pantai8) }}">
                            @error('pantai8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai8') is-invalid @enderror" id="bukanpantai8"
                                name="bukanpantai8" value="{{ old('bukanpantai8', $data->bukanpantai8) }}">
                            @error('bukanpantai8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar8') is-invalid @enderror" id="datar8"
                                name="datar8" value="{{ old('datar8', $data->datar8) }}">
                            @error('datar8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit8') is-invalid @enderror" id="bukit8"
                                name="bukit8" value="{{ old('bukit8', $data->bukit8) }}">
                            @error('bukit8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Labessi</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai9') is-invalid @enderror" id="pantai9"
                                name="pantai9" value="{{ old('pantai9', $data->pantai9) }}">
                            @error('pantai9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai9') is-invalid @enderror" id="bukanpantai9"
                                name="bukanpantai9" value="{{ old('bukanpantai9', $data->bukanpantai9) }}">
                            @error('bukanpantai9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar9') is-invalid @enderror" id="datar9"
                                name="datar9" value="{{ old('datar9', $data->datar9) }}">
                            @error('datar9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit9') is-invalid @enderror" id="bukit9"
                                name="bukit9" value="{{ old('bukit9', $data->bukit9) }}">
                            @error('bukit9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Congko</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai10') is-invalid @enderror" id="pantai10"
                                name="pantai10" value="{{ old('pantai10', $data->pantai10) }}">
                            @error('pantai10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai10') is-invalid @enderror" id="bukanpantai10"
                                name="bukanpantai10" value="{{ old('bukanpantai10', $data->bukanpantai10) }}">
                            @error('bukanpantai10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar10') is-invalid @enderror" id="datar10"
                                name="datar10" value="{{ old('datar10', $data->datar10) }}">
                            @error('datar10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit10') is-invalid @enderror" id="bukit10"
                                name="bukit10" value="{{ old('bukit10', $data->bukit10) }}">
                            @error('bukit10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">011. Watu Toa</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai11') is-invalid @enderror" id="pantai11"
                                name="pantai11" value="{{ old('pantai11', $data->pantai11) }}">
                            @error('pantai11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai11') is-invalid @enderror" id="bukanpantai11"
                                name="bukanpantai11" value="{{ old('bukanpantai11', $data->bukanpantai11) }}">
                            @error('bukanpantai11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar11') is-invalid @enderror" id="datar11"
                                name="datar11" value="{{ old('datar11', $data->datar11) }}">
                            @error('datar11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit11') is-invalid @enderror" id="bukit11"
                                name="bukit11" value="{{ old('bukit11', $data->bukit11) }}">
                            @error('bukit11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">012. Gattareng Toa</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai12') is-invalid @enderror" id="pantai12"
                                name="pantai12" value="{{ old('pantai12', $data->pantai12) }}">
                            @error('pantai12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai12') is-invalid @enderror" id="bukanpantai12"
                                name="bukanpantai12" value="{{ old('bukanpantai12', $data->bukanpantai12) }}">
                            @error('bukanpantai12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar12') is-invalid @enderror" id="datar12"
                                name="datar12" value="{{ old('datar12', $data->datar12) }}">
                            @error('datar12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit12') is-invalid @enderror" id="bukit12"
                                name="bukit12" value="{{ old('bukit12', $data->bukit12) }}">
                            @error('bukit12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">013. Soga</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('pantai13') is-invalid @enderror" id="pantai13"
                                name="pantai13" value="{{ old('pantai13', $data->pantai13) }}">
                            @error('pantai13')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukanpantai13') is-invalid @enderror" id="bukanpantai13"
                                name="bukanpantai13" value="{{ old('bukanpantai13', $data->bukanpantai13) }}">
                            @error('bukanpantai13')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('datar13') is-invalid @enderror" id="datar13"
                                name="datar13" value="{{ old('datar13', $data->datar13) }}">
                            @error('datar13')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukit13') is-invalid @enderror" id="bukit13"
                                name="bukit13" value="{{ old('bukit13', $data->bukit13) }}">
                            @error('bukit13')
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
                        <th class="tg-amwm" rowspan="2">1.2</th>
                        <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">Wilayah dan Topografi
                                Desa/Kelurahan
                                Menurut Desa/Kelurahan di Kecamatan Marioriwawo, {{ $data->tahun }}
                            </span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Area and
                                Topography of Villages/Urban Villages by Villages/Urban Villages in Marioriwawo
                                Subdistrict,
                                {{ $data->tahun }}
                            </span></th>
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
                        <td class="tg-baqh" colspan="2"><span
                                style="font-style:normal;color:#000">Wilayah/</span><span
                                style="font-style:italic;color:#000">Area</span></td>
                        <td class="tg-baqh" colspan="2"><span
                                style="font-style:normal;color:#000">Topografi/</span><span
                                style="font-style:italic;color:#000">Topography</span></td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-nrix">Pantai/</td>
                        <td class="tg-nrix">Bukan Pantai/</td>
                        <td class="tg-nrix">Datar/</td>
                        <td class="tg-nrix">Berbukit-Bukit/</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-lhti"><span style="font-style:italic">Coast</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Non-Coast</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Flatland</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Hilly</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Gattareng</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Marioriaja</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Watu </td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Marioritengnga</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Goarie</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Barae</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Mariorilau</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Tettikenrarae</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Labessi</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Congko</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">011. Watu Toa</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">012. Gattareng Toa</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">013. Soga</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">√</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}

    </x-slot>
</x-tabel-entri-view>
