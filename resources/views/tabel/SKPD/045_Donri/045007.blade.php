<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">8.1</th>
                        <th class="tg-wa1i" colspan="5"><span style="font-weight:bold">{{ $judultabel }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="5"><span
                                style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix" rowspan="2">Sepak Bola/ Football</td>
                        <td class="tg-nrix" rowspan="2">Bola Voli/ Volley Ball</td>
                        <td class="tg-nrix" rowspan="2">Tenis/ Tennis</td>
                        <td class="tg-nrix" rowspan="2">Bulu Tangkis/ Badminton</td>
                        <td class="tg-nrix" rowspan="2">Tenis Meja/ Table Tennis</td>
                        <td class="tg-nrix" rowspan="2">Bola Basket/ Basketball</td>
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
                        <td class="tg-nrix">(6)</td>
                        <td class="tg-nrix">(7)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Pesse</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football1') is-invalid @enderror" id="football1"
                                name="football1" value="{{ old('football1', $data->football1) }}">
                            @error('football1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley1') is-invalid @enderror" id="volley1"
                                name="volley1" value="{{ old('volley1', $data->volley1) }}">
                            @error('volley1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis1') is-invalid @enderror" id="tennis1"
                                name="tennis1" value="{{ old('tennis1', $data->tennis1) }}">
                            @error('tennis1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton1') is-invalid @enderror" id="badminton1"
                                name="badminton1" value="{{ old('badminton1', $data->badminton1) }}">
                            @error('badminton1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis1') is-invalid @enderror" id="table_tennis1"
                                name="table_tennis1" value="{{ old('table_tennis1', $data->table_tennis1) }}">
                            @error('table_tennis1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball1') is-invalid @enderror" id="basketball1"
                                name="basketball1" value="{{ old('basketball1', $data->basketball1) }}">
                            @error('basketball1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Pising</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football2') is-invalid @enderror" id="football2"
                                name="football2" value="{{ old('football2', $data->football2) }}">
                            @error('football2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley2') is-invalid @enderror" id="volley2"
                                name="volley2" value="{{ old('volley2', $data->volley2) }}">
                            @error('volley2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis2') is-invalid @enderror" id="tennis2"
                                name="tennis2" value="{{ old('tennis2', $data->tennis2) }}">
                            @error('tennis2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton2') is-invalid @enderror" id="badminton2"
                                name="badminton2" value="{{ old('badminton2', $data->badminton2) }}">
                            @error('badminton2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis2') is-invalid @enderror" id="table_tennis2"
                                name="table_tennis2" value="{{ old('table_tennis2', $data->table_tennis2) }}">
                            @error('table_tennis2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball2') is-invalid @enderror" id="basketball2"
                                name="basketball2" value="{{ old('basketball2', $data->basketball2) }}">
                            @error('basketball2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labokong</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football3') is-invalid @enderror" id="football3"
                                name="football3" value="{{ old('football3', $data->football3) }}">
                            @error('football3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley3') is-invalid @enderror" id="volley3"
                                name="volley3" value="{{ old('volley3', $data->volley3) }}">
                            @error('volley3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis3') is-invalid @enderror" id="tennis3"
                                name="tennis3" value="{{ old('tennis3', $data->tennis3) }}">
                            @error('tennis3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton3') is-invalid @enderror" id="badminton3"
                                name="badminton3" value="{{ old('badminton3', $data->badminton3) }}">
                            @error('badminton3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis3') is-invalid @enderror" id="table_tennis3"
                                name="table_tennis3" value="{{ old('table_tennis3', $data->table_tennis3) }}">
                            @error('table_tennis3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball3') is-invalid @enderror" id="basketball3"
                                name="basketball3" value="{{ old('basketball3', $data->basketball3) }}">
                            @error('basketball3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Donri-Donri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football4') is-invalid @enderror" id="football4"
                                name="football4" value="{{ old('football4', $data->football4) }}">
                            @error('football4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley4') is-invalid @enderror" id="volley4"
                                name="volley4" value="{{ old('volley4', $data->volley4) }}">
                            @error('volley4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis4') is-invalid @enderror" id="tennis4"
                                name="tennis4" value="{{ old('tennis4', $data->tennis4) }}">
                            @error('tennis4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton4') is-invalid @enderror" id="badminton4"
                                name="badminton4" value="{{ old('badminton4', $data->badminton4) }}">
                            @error('badminton4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis4') is-invalid @enderror" id="table_tennis4"
                                name="table_tennis4" value="{{ old('table_tennis4', $data->table_tennis4) }}">
                            @error('table_tennis4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball4') is-invalid @enderror" id="basketball4"
                                name="basketball4" value="{{ old('basketball4', $data->basketball4) }}">
                            @error('basketball4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Sering</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football5') is-invalid @enderror" id="football5"
                                name="football5" value="{{ old('football5', $data->football5) }}">
                            @error('football5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley5') is-invalid @enderror" id="volley5"
                                name="volley5" value="{{ old('volley5', $data->volley5) }}">
                            @error('volley5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis5') is-invalid @enderror" id="tennis5"
                                name="tennis5" value="{{ old('tennis5', $data->tennis5) }}">
                            @error('tennis5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton5') is-invalid @enderror" id="badminton5"
                                name="badminton5" value="{{ old('badminton5', $data->badminton5) }}">
                            @error('badminton5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis5') is-invalid @enderror" id="table_tennis5"
                                name="table_tennis5" value="{{ old('table_tennis5', $data->table_tennis5) }}">
                            @error('table_tennis5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball5') is-invalid @enderror" id="basketball5"
                                name="basketball5" value="{{ old('basketball5', $data->basketball5) }}">
                            @error('basketball5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Lalabata Riaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football6') is-invalid @enderror" id="football6"
                                name="football6" value="{{ old('football6', $data->football6) }}">
                            @error('football6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley6') is-invalid @enderror" id="volley6"
                                name="volley6" value="{{ old('volley6', $data->volley6) }}">
                            @error('volley6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis6') is-invalid @enderror" id="tennis6"
                                name="tennis6" value="{{ old('tennis6', $data->tennis6) }}">
                            @error('tennis6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton6') is-invalid @enderror" id="badminton6"
                                name="badminton6" value="{{ old('badminton6', $data->badminton6) }}">
                            @error('badminton6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis6') is-invalid @enderror" id="table_tennis6"
                                name="table_tennis6" value="{{ old('table_tennis6', $data->table_tennis6) }}">
                            @error('table_tennis6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball6') is-invalid @enderror" id="basketball6"
                                name="basketball6" value="{{ old('basketball6', $data->basketball6) }}">
                            @error('basketball6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Tottong</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football7') is-invalid @enderror" id="football7"
                                name="football7" value="{{ old('football7', $data->football7) }}">
                            @error('football7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley7') is-invalid @enderror" id="volley7"
                                name="volley7" value="{{ old('volley7', $data->volley7) }}">
                            @error('volley7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis7') is-invalid @enderror" id="tennis7"
                                name="tennis7" value="{{ old('tennis7', $data->tennis7) }}">
                            @error('tennis7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton7') is-invalid @enderror" id="badminton7"
                                name="badminton7" value="{{ old('badminton7', $data->badminton7) }}">
                            @error('badminton7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis7') is-invalid @enderror" id="table_tennis7"
                                name="table_tennis7" value="{{ old('table_tennis7', $data->table_tennis7) }}">
                            @error('table_tennis7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball7') is-invalid @enderror" id="basketball7"
                                name="basketball7" value="{{ old('basketball7', $data->basketball7) }}">
                            @error('basketball7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Leworeng</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football8') is-invalid @enderror" id="football8"
                                name="football8" value="{{ old('football8', $data->football8) }}">
                            @error('football8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley8') is-invalid @enderror" id="volley8"
                                name="volley8" value="{{ old('volley8', $data->volley8) }}">
                            @error('volley8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis8') is-invalid @enderror" id="tennis8"
                                name="tennis8" value="{{ old('tennis8', $data->tennis8) }}">
                            @error('tennis8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton8') is-invalid @enderror" id="badminton8"
                                name="badminton8" value="{{ old('badminton8', $data->badminton8) }}">
                            @error('badminton8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis8') is-invalid @enderror" id="table_tennis8"
                                name="table_tennis8" value="{{ old('table_tennis8', $data->table_tennis8) }}">
                            @error('table_tennis8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball8') is-invalid @enderror" id="basketball8"
                                name="basketball8" value="{{ old('basketball8', $data->basketball8) }}">
                            @error('basketball8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Kessing</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('football9') is-invalid @enderror" id="football9"
                                name="football9" value="{{ old('football9', $data->football9) }}">
                            @error('football9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volley9') is-invalid @enderror" id="volley9"
                                name="volley9" value="{{ old('volley9', $data->volley9) }}">
                            @error('volley9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennis9') is-invalid @enderror" id="tennis9"
                                name="tennis9" value="{{ old('tennis9', $data->tennis9) }}">
                            @error('tennis9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badminton9') is-invalid @enderror" id="badminton9"
                                name="badminton9" value="{{ old('badminton9', $data->badminton9) }}">
                            @error('badminton9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennis9') is-invalid @enderror" id="table_tennis9"
                                name="table_tennis9" value="{{ old('table_tennis9', $data->table_tennis9) }}">
                            @error('table_tennis9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketball9') is-invalid @enderror" id="basketball9"
                                name="basketball9" value="{{ old('basketball9', $data->basketball9) }}">
                            @error('basketball9')
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
                                class="form-control @error('footballt') is-invalid @enderror" id="footballt"
                                name="footballt" value="{{ old('footballt', $data->footballt) }}">
                            @error('footballt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('volleyt') is-invalid @enderror" id="volleyt"
                                name="volleyt" value="{{ old('volleyt', $data->volleyt) }}">
                            @error('volleyt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('tennist') is-invalid @enderror" id="tennist"
                                name="tennist" value="{{ old('tennist', $data->tennist) }}">
                            @error('tennist')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('badmintont') is-invalid @enderror" id="badmintont"
                                name="badmintont" value="{{ old('badmintont', $data->badmintont) }}">
                            @error('badmintont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('table_tennist') is-invalid @enderror" id="table_tennist"
                                name="table_tennist" value="{{ old('table_tennist', $data->table_tennist) }}">
                            @error('table_tennist')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('basketballt') is-invalid @enderror" id="basketballt"
                                name="basketballt" value="{{ old('basketballt', $data->basketballt) }}">
                            @error('basketballt')
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
                        <th class="tg-amwm" rowspan="2">8.1</th>
                        <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya Fasilitas
                                Olahraga Menurut Desa/Kelurahan di Kecamatan Donri-Donri, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                                Sport Facilities by Villages/Urban Villages in Donri-Donri Subdistrict, 2021</span></th>
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
                    </tr>
                    <tr>
                        <td class="tg-nrix">Desa/Kelurahan</td>
                        <td class="tg-nrix">Sepak Bola/</td>
                        <td class="tg-nrix">Bola Voli/</td>
                        <td class="tg-nrix">Tenis/</td>
                        <td class="tg-nrix">Bulu Tangkis/</td>
                        <td class="tg-nrix">Tenis Meja/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Football</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Volley Ball</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Tennis</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Badminton</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Table Tennis</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                        <td class="tg-nrix">(5)</td>
                        <td class="tg-nrix">(6)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">001. Pesse</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">002. Pising</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">003. Labokong</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">004. Donri-Donri</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">3</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">005. Sering</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">006. Lalabata Riaja</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">007. Tottong</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">008. Leworeng</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">009. Kessing</td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-nrix">14</td>
                        <td class="tg-nrix">6</td>
                        <td class="tg-nrix">2</td>
                        <td class="tg-nrix">4</td>
                        <td class="tg-nrix">7</td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.044_lilirilau.script7')

    </x-slot>
</x-tabel-entri-view>
