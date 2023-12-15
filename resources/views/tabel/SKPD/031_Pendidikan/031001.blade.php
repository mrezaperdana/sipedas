@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-bobw"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.1.1</th>
                    <th class="tg-bobw" colspan="8"><span style="font-weight:bold">Jumlah Sekolah, Guru, dan Murid
                            Taman Kanak-Kanak (TK) di Bawah Kementerian Pendidikan dan Kebudayaan Menurut Kecamatan di
                            Kabupaten
                            Soppeng, {{ $data->tahun }}/{{ $data->tahun + 1 }}</span></th>
                </tr>
                <tr>
                    <th class="tg-ijet"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-ijet" colspan="8"><span style="font-weight:bold;font-style:italic">Number of
                            Schools,
                            Teachers, and Pupils in Kindergarten Under The Ministry of Education and Culture by
                            Subdistrict in
                            Soppeng Regency, {{ $data->tahun }}/{{ $data->tahun + 1 }}</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh" rowspan="3"><span style="font-weight:normal;font-style:normal">Kecamatan/
                        </span><span style="font-style:italic;color:#000">Subdistrict</span></td>
                    <td class="tg-baqh" colspan="9"><span style="font-weight:normal;font-style:normal">Taman
                            Kanak-Kanak (TK)/ </span><span style="font-style:italic;color:#000">Kindergarten</span></td>
                </tr>
                <tr>
                    <td class="tg-baqh" colspan="3"><span
                            style="font-weight:normal;font-style:normal">Sekolah/</span><span
                            style="font-style:italic;color:#000">Schools</span></td>
                    <td class="tg-baqh" colspan="3"><span
                            style="font-weight:normal;font-style:normal">Guru/</span><span
                            style="font-style:italic;color:#000">Teachers</span></td>
                    <td class="tg-baqh" colspan="3"><span
                            style="font-weight:normal;font-style:normal">Murid/</span><span
                            style="font-style:italic;color:#000">Pupils</span></td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Negeri/</span><span
                            style="font-style:italic;color:#000">Public</span></td>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Swasta/ </span><span
                            style="font-style:italic;color:#000">Private</span></td>
                    <td class="tg-8d8j">Jumlah/ Total</td>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Negeri/</span><span
                            style="font-style:italic;color:#000">Public</span></td>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Swasta/ </span><span
                            style="font-style:italic;color:#000">Private</span></td>
                    <td class="tg-8d8j">Jumlah/ Total</td>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Negeri/</span><span
                            style="font-style:italic;color:#000">Public</span></td>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Swasta/ </span><span
                            style="font-style:italic;color:#000">Private</span></td>
                    <td class="tg-8d8j">Jumlah/ Total</td>
                </tr>
                <tr>
                    <td class="tg-8d8j">(1)</td>
                    <td class="tg-8d8j">(2)</td>
                    <td class="tg-8d8j">(3)</td>
                    <td class="tg-8d8j">(4)</td>
                    <td class="tg-8d8j">(5)</td>
                    <td class="tg-8d8j">(6)</td>
                    <td class="tg-8d8j">(7)</td>
                    <td class="tg-8d8j">(8)</td>
                    <td class="tg-8d8j">(9)</td>
                    <td class="tg-8d8j">(10)</td>
                </tr>
                <tr>
                    <td class="tg-7zrl">010. Marioriwawo</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri1') is-invalid @enderror" id="sekolahnegeri1"
                            name="sekolahnegeri1" value="{{ old('sekolahnegeri1', $data->sekolahnegeri1) }}">
                        @error('sekolahnegeri1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta1') is-invalid @enderror" id="sekolahswasta1"
                            name="sekolahswasta1" value="{{ old('sekolahswasta1', $data->sekolahswasta1) }}">
                        @error('sekolahswasta1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah1') is-invalid @enderror" id="sekolahjumlah1"
                            name="sekolahjumlah1" value="{{ old('sekolahjumlah1', $data->sekolahjumlah1) }}">
                        @error('sekolahjumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri1') is-invalid @enderror" id="gurunegeri1"
                            name="gurunegeri1" value="{{ old('gurunegeri1', $data->gurunegeri1) }}">
                        @error('gurunegeri1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta1') is-invalid @enderror" id="guruswasta1"
                            name="guruswasta1" value="{{ old('guruswasta1', $data->guruswasta1) }}">
                        @error('guruswasta1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah1') is-invalid @enderror" id="gurujumlah1"
                            name="gurujumlah1" value="{{ old('gurujumlah1', $data->gurujumlah1) }}">
                        @error('gurujumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri1') is-invalid @enderror" id="muridnegeri1"
                            name="muridnegeri1" value="{{ old('muridnegeri1', $data->muridnegeri1) }}">
                        @error('muridnegeri1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta1') is-invalid @enderror" id="muridswasta1"
                            name="muridswasta1" value="{{ old('muridswasta1', $data->muridswasta1) }}">
                        @error('muridswasta1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah1') is-invalid @enderror" id="muridjumlah1"
                            name="muridjumlah1" value="{{ old('muridjumlah1', $data->muridjumlah1) }}">
                        @error('muridjumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri2') is-invalid @enderror" id="sekolahnegeri2"
                            name="sekolahnegeri2" value="{{ old('sekolahnegeri2', $data->sekolahnegeri2) }}">
                        @error('sekolahnegeri2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta2') is-invalid @enderror" id="sekolahswasta2"
                            name="sekolahswasta2" value="{{ old('sekolahswasta2', $data->sekolahswasta2) }}">
                        @error('sekolahswasta2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah2') is-invalid @enderror" id="sekolahjumlah2"
                            name="sekolahjumlah2" value="{{ old('sekolahjumlah2', $data->sekolahjumlah2) }}">
                        @error('sekolahjumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri2') is-invalid @enderror" id="gurunegeri2"
                            name="gurunegeri2" value="{{ old('gurunegeri2', $data->gurunegeri2) }}">
                        @error('gurunegeri2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta2') is-invalid @enderror" id="guruswasta2"
                            name="guruswasta2" value="{{ old('guruswasta2', $data->guruswasta2) }}">
                        @error('guruswasta2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah2') is-invalid @enderror" id="gurujumlah2"
                            name="gurujumlah2" value="{{ old('gurujumlah2', $data->gurujumlah2) }}">
                        @error('gurujumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri2') is-invalid @enderror" id="muridnegeri2"
                            name="muridnegeri2" value="{{ old('muridnegeri2', $data->muridnegeri2) }}">
                        @error('muridnegeri2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta2') is-invalid @enderror" id="muridswasta2"
                            name="muridswasta2" value="{{ old('muridswasta2', $data->muridswasta2) }}">
                        @error('muridswasta2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah2') is-invalid @enderror" id="muridjumlah2"
                            name="muridjumlah2" value="{{ old('muridjumlah2', $data->muridjumlah2) }}">
                        @error('muridjumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri3') is-invalid @enderror" id="sekolahnegeri3"
                            name="sekolahnegeri3" value="{{ old('sekolahnegeri3', $data->sekolahnegeri3) }}">
                        @error('sekolahnegeri3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta3') is-invalid @enderror" id="sekolahswasta3"
                            name="sekolahswasta3" value="{{ old('sekolahswasta3', $data->sekolahswasta3) }}">
                        @error('sekolahswasta3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah3') is-invalid @enderror" id="sekolahjumlah3"
                            name="sekolahjumlah3" value="{{ old('sekolahjumlah3', $data->sekolahjumlah3) }}">
                        @error('sekolahjumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri3') is-invalid @enderror" id="gurunegeri3"
                            name="gurunegeri3" value="{{ old('gurunegeri3', $data->gurunegeri3) }}">
                        @error('gurunegeri3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta3') is-invalid @enderror" id="guruswasta3"
                            name="guruswasta3" value="{{ old('guruswasta3', $data->guruswasta3) }}">
                        @error('guruswasta3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah3') is-invalid @enderror" id="gurujumlah3"
                            name="gurujumlah3" value="{{ old('gurujumlah3', $data->gurujumlah3) }}">
                        @error('gurujumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri3') is-invalid @enderror" id="muridnegeri3"
                            name="muridnegeri3" value="{{ old('muridnegeri3', $data->muridnegeri3) }}">
                        @error('muridnegeri3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta3') is-invalid @enderror" id="muridswasta3"
                            name="muridswasta3" value="{{ old('muridswasta3', $data->muridswasta3) }}">
                        @error('muridswasta3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah3') is-invalid @enderror" id="muridjumlah3"
                            name="muridjumlah3" value="{{ old('muridjumlah3', $data->muridjumlah3) }}">
                        @error('muridjumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri4') is-invalid @enderror" id="sekolahnegeri4"
                            name="sekolahnegeri4" value="{{ old('sekolahnegeri4', $data->sekolahnegeri4) }}">
                        @error('sekolahnegeri4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta4') is-invalid @enderror" id="sekolahswasta4"
                            name="sekolahswasta4" value="{{ old('sekolahswasta4', $data->sekolahswasta4) }}">
                        @error('sekolahswasta4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah4') is-invalid @enderror" id="sekolahjumlah4"
                            name="sekolahjumlah4" value="{{ old('sekolahjumlah4', $data->sekolahjumlah4) }}">
                        @error('sekolahjumlah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri4') is-invalid @enderror" id="gurunegeri4"
                            name="gurunegeri4" value="{{ old('gurunegeri4', $data->gurunegeri4) }}">
                        @error('gurunegeri4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta4') is-invalid @enderror" id="guruswasta4"
                            name="guruswasta4" value="{{ old('guruswasta4', $data->guruswasta4) }}">
                        @error('guruswasta4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah4') is-invalid @enderror" id="gurujumlah4"
                            name="gurujumlah4" value="{{ old('gurujumlah4', $data->gurujumlah4) }}">
                        @error('gurujumlah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri4') is-invalid @enderror" id="muridnegeri4"
                            name="muridnegeri4" value="{{ old('muridnegeri4', $data->muridnegeri4) }}">
                        @error('muridnegeri4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta4') is-invalid @enderror" id="muridswasta4"
                            name="muridswasta4" value="{{ old('muridswasta4', $data->muridswasta4) }}">
                        @error('muridswasta4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah4') is-invalid @enderror" id="muridjumlah4"
                            name="muridjumlah4" value="{{ old('muridjumlah4', $data->muridjumlah4) }}">
                        @error('muridjumlah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri5') is-invalid @enderror" id="sekolahnegeri5"
                            name="sekolahnegeri5" value="{{ old('sekolahnegeri5', $data->sekolahnegeri5) }}">
                        @error('sekolahnegeri5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta5') is-invalid @enderror" id="sekolahswasta5"
                            name="sekolahswasta5" value="{{ old('sekolahswasta5', $data->sekolahswasta5) }}">
                        @error('sekolahswasta5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah5') is-invalid @enderror" id="sekolahjumlah5"
                            name="sekolahjumlah5" value="{{ old('sekolahjumlah5', $data->sekolahjumlah5) }}">
                        @error('sekolahjumlah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri5') is-invalid @enderror" id="gurunegeri5"
                            name="gurunegeri5" value="{{ old('gurunegeri5', $data->gurunegeri5) }}">
                        @error('gurunegeri5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta5') is-invalid @enderror" id="guruswasta5"
                            name="guruswasta5" value="{{ old('guruswasta5', $data->guruswasta5) }}">
                        @error('guruswasta5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah5') is-invalid @enderror" id="gurujumlah5"
                            name="gurujumlah5" value="{{ old('gurujumlah5', $data->gurujumlah5) }}">
                        @error('gurujumlah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri5') is-invalid @enderror" id="muridnegeri5"
                            name="muridnegeri5" value="{{ old('muridnegeri5', $data->muridnegeri5) }}">
                        @error('muridnegeri5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta5') is-invalid @enderror" id="muridswasta5"
                            name="muridswasta5" value="{{ old('muridswasta5', $data->muridswasta5) }}">
                        @error('muridswasta5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah5') is-invalid @enderror" id="muridjumlah5"
                            name="muridjumlah5" value="{{ old('muridjumlah5', $data->muridjumlah5) }}">
                        @error('muridjumlah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri6') is-invalid @enderror" id="sekolahnegeri6"
                            name="sekolahnegeri6" value="{{ old('sekolahnegeri6', $data->sekolahnegeri6) }}">
                        @error('sekolahnegeri6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta6') is-invalid @enderror" id="sekolahswasta6"
                            name="sekolahswasta6" value="{{ old('sekolahswasta6', $data->sekolahswasta6) }}">
                        @error('sekolahswasta6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah6') is-invalid @enderror" id="sekolahjumlah6"
                            name="sekolahjumlah6" value="{{ old('sekolahjumlah6', $data->sekolahjumlah6) }}">
                        @error('sekolahjumlah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri6') is-invalid @enderror" id="gurunegeri6"
                            name="gurunegeri6" value="{{ old('gurunegeri6', $data->gurunegeri6) }}">
                        @error('gurunegeri6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta6') is-invalid @enderror" id="guruswasta6"
                            name="guruswasta6" value="{{ old('guruswasta6', $data->guruswasta6) }}">
                        @error('guruswasta6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah6') is-invalid @enderror" id="gurujumlah6"
                            name="gurujumlah6" value="{{ old('gurujumlah6', $data->gurujumlah6) }}">
                        @error('gurujumlah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri6') is-invalid @enderror" id="muridnegeri6"
                            name="muridnegeri6" value="{{ old('muridnegeri6', $data->muridnegeri6) }}">
                        @error('muridnegeri6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta6') is-invalid @enderror" id="muridswasta6"
                            name="muridswasta6" value="{{ old('muridswasta6', $data->muridswasta6) }}">
                        @error('muridswasta6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah6') is-invalid @enderror" id="muridjumlah6"
                            name="muridjumlah6" value="{{ old('muridjumlah6', $data->muridjumlah6) }}">
                        @error('muridjumlah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri7') is-invalid @enderror" id="sekolahnegeri7"
                            name="sekolahnegeri7" value="{{ old('sekolahnegeri7', $data->sekolahnegeri7) }}">
                        @error('sekolahnegeri7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta7') is-invalid @enderror" id="sekolahswasta7"
                            name="sekolahswasta7" value="{{ old('sekolahswasta7', $data->sekolahswasta7) }}">
                        @error('sekolahswasta7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah7') is-invalid @enderror" id="sekolahjumlah7"
                            name="sekolahjumlah7" value="{{ old('sekolahjumlah7', $data->sekolahjumlah7) }}">
                        @error('sekolahjumlah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri7') is-invalid @enderror" id="gurunegeri7"
                            name="gurunegeri7" value="{{ old('gurunegeri7', $data->gurunegeri7) }}">
                        @error('gurunegeri7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta7') is-invalid @enderror" id="guruswasta7"
                            name="guruswasta7" value="{{ old('guruswasta7', $data->guruswasta7) }}">
                        @error('guruswasta7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah7') is-invalid @enderror" id="gurujumlah7"
                            name="gurujumlah7" value="{{ old('gurujumlah7', $data->gurujumlah7) }}">
                        @error('gurujumlah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri7') is-invalid @enderror" id="muridnegeri7"
                            name="muridnegeri7" value="{{ old('muridnegeri7', $data->muridnegeri7) }}">
                        @error('muridnegeri7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta7') is-invalid @enderror" id="muridswasta7"
                            name="muridswasta7" value="{{ old('muridswasta7', $data->muridswasta7) }}">
                        @error('muridswasta7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah7') is-invalid @enderror" id="muridjumlah7"
                            name="muridjumlah7" value="{{ old('muridjumlah7', $data->muridjumlah7) }}">
                        @error('muridjumlah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegeri8') is-invalid @enderror" id="sekolahnegeri8"
                            name="sekolahnegeri8" value="{{ old('sekolahnegeri8', $data->sekolahnegeri8) }}">
                        @error('sekolahnegeri8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswasta8') is-invalid @enderror" id="sekolahswasta8"
                            name="sekolahswasta8" value="{{ old('sekolahswasta8', $data->sekolahswasta8) }}">
                        @error('sekolahswasta8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlah8') is-invalid @enderror" id="sekolahjumlah8"
                            name="sekolahjumlah8" value="{{ old('sekolahjumlah8', $data->sekolahjumlah8) }}">
                        @error('sekolahjumlah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegeri8') is-invalid @enderror" id="gurunegeri8"
                            name="gurunegeri8" value="{{ old('gurunegeri8', $data->gurunegeri8) }}">
                        @error('gurunegeri8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswasta8') is-invalid @enderror" id="guruswasta8"
                            name="guruswasta8" value="{{ old('guruswasta8', $data->guruswasta8) }}">
                        @error('guruswasta8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlah8') is-invalid @enderror" id="gurujumlah8"
                            name="gurujumlah8" value="{{ old('gurujumlah8', $data->gurujumlah8) }}">
                        @error('gurujumlah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegeri8') is-invalid @enderror" id="muridnegeri8"
                            name="muridnegeri8" value="{{ old('muridnegeri8', $data->muridnegeri8) }}">
                        @error('muridnegeri8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswasta8') is-invalid @enderror" id="muridswasta8"
                            name="muridswasta8" value="{{ old('muridswasta8', $data->muridswasta8) }}">
                        @error('muridswasta8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlah8') is-invalid @enderror" id="muridjumlah8"
                            name="muridjumlah8" value="{{ old('muridjumlah8', $data->muridjumlah8) }}">
                        @error('muridjumlah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahnegerit') is-invalid @enderror" id="sekolahnegerit"
                            name="sekolahnegerit" value="{{ old('sekolahnegerit', $data->sekolahnegerit) }}">
                        @error('sekolahnegerit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahswastat') is-invalid @enderror" id="sekolahswastat"
                            name="sekolahswastat" value="{{ old('sekolahswastat', $data->sekolahswastat) }}">
                        @error('sekolahswastat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolahjumlaht') is-invalid @enderror" id="sekolahjumlaht"
                            name="sekolahjumlaht" value="{{ old('sekolahjumlaht', $data->sekolahjumlaht) }}">
                        @error('sekolahjumlaht')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurunegerit') is-invalid @enderror" id="gurunegerit"
                            name="gurunegerit" value="{{ old('gurunegerit', $data->gurunegerit) }}">
                        @error('gurunegerit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('guruswastat') is-invalid @enderror" id="guruswastat"
                            name="guruswastat" value="{{ old('guruswastat', $data->guruswastat) }}">
                        @error('guruswastat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gurujumlaht') is-invalid @enderror" id="gurujumlaht"
                            name="gurujumlaht" value="{{ old('gurujumlaht', $data->gurujumlaht) }}">
                        @error('gurujumlaht')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridnegerit') is-invalid @enderror" id="muridnegerit"
                            name="muridnegerit" value="{{ old('muridnegerit', $data->muridnegerit) }}">
                        @error('muridnegerit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridswastat') is-invalid @enderror" id="muridswastat"
                            name="muridswastat" value="{{ old('muridswastat', $data->muridswastat) }}">
                        @error('muridswastat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('muridjumlaht') is-invalid @enderror" id="muridjumlaht"
                            name="muridjumlaht" value="{{ old('muridjumlaht', $data->muridjumlaht) }}">
                        @error('muridjumlaht')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-bobw"><span style="font-weight:bold">SIPD</span></td>
                    <td class="tg-kcps"></td>
                    <td class="tg-kcps"></td>
                    <td class="tg-te5z"></td>
                    <td class="tg-kcps"></td>
                    <td class="tg-kcps"></td>
                    <td class="tg-te5z"></td>
                    <td class="tg-kcps"></td>
                    <td class="tg-kcps"></td>
                    <td class="tg-te5z"></td>
                </tr>
            </tbody>
        </table>
        @include('tabel.catatan')
        <div class="py-3 text-right">
            <button type="submit"class="btn  btn-success ">Simpan</button>
            @if (Auth::user()->role == 1)
                <a class="btn btn-info"href="{{ route('admin.dashboard.DaftarEntri') }}"role="button">Batal</a>
            @else
                <a class="btn btn-info"href="{{ route('user.dashboard.DaftarEntri') }}"role="button">Batal</a>
            @endif
        </div>
    </form>
@else
    {{-- tabel kosongan disini --}}
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-bobw"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">4.1.1</th>
                <th class="tg-bobw" colspan="8"><span style="font-weight:bold">Jumlah Sekolah, Guru, dan Murid
                        Taman Kanak-Kanak (TK) di Bawah Kementerian Pendidikan dan Kebudayaan Menurut Kecamatan di
                        Kabupaten
                        Soppeng, 2021/2022</span></th>
            </tr>
            <tr>
                <th class="tg-ijet"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-ijet" colspan="8"><span style="font-weight:bold;font-style:italic">Number of
                        Schools,
                        Teachers, and Pupils in Kindergarten Under The Ministry of Education and Culture by Subdistrict
                        in
                        Soppeng Regency, 2021/2022</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="3"><span style="font-weight:normal;font-style:normal">Kecamatan/
                    </span><span style="font-style:italic;color:#000">Subdistrict</span></td>
                <td class="tg-baqh" colspan="9"><span style="font-weight:normal;font-style:normal">Taman
                        Kanak-Kanak (TK)/ </span><span style="font-style:italic;color:#000">Kindergarten</span></td>
            </tr>
            <tr>
                <td class="tg-baqh" colspan="3"><span
                        style="font-weight:normal;font-style:normal">Sekolah/</span><span
                        style="font-style:italic;color:#000">Schools</span></td>
                <td class="tg-baqh" colspan="3"><span
                        style="font-weight:normal;font-style:normal">Guru/</span><span
                        style="font-style:italic;color:#000">Teachers</span></td>
                <td class="tg-baqh" colspan="3"><span
                        style="font-weight:normal;font-style:normal">Murid/</span><span
                        style="font-style:italic;color:#000">Pupils</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Negeri/</span><span
                        style="font-style:italic;color:#000">Public</span></td>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Swasta/ </span><span
                        style="font-style:italic;color:#000">Private</span></td>
                <td class="tg-8d8j">Jumlah/ Total</td>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Negeri/</span><span
                        style="font-style:italic;color:#000">Public</span></td>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Swasta/ </span><span
                        style="font-style:italic;color:#000">Private</span></td>
                <td class="tg-8d8j">Jumlah/ Total</td>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Negeri/</span><span
                        style="font-style:italic;color:#000">Public</span></td>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Swasta/ </span><span
                        style="font-style:italic;color:#000">Private</span></td>
                <td class="tg-8d8j">Jumlah/ Total</td>
            </tr>
            <tr>
                <td class="tg-8d8j">(1)</td>
                <td class="tg-8d8j">(2)</td>
                <td class="tg-8d8j">(3)</td>
                <td class="tg-8d8j">(4)</td>
                <td class="tg-8d8j">(5)</td>
                <td class="tg-8d8j">(6)</td>
                <td class="tg-8d8j">(7)</td>
                <td class="tg-8d8j">(8)</td>
                <td class="tg-8d8j">(9)</td>
                <td class="tg-8d8j">(10)</td>
            </tr>
            <tr>
                <td class="tg-7zrl">010. Marioriwawo</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;3 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;17 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;20 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;17 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;35 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;52 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;190 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;338 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;528 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">020. Lalabata</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;4 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;12 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;16 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;26 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;40 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;66 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;281 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;366 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;647 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">030. Liliriaja</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;3 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;5 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;8 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;18 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;17 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;35 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;159 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;222 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;381 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">031. Ganra</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;4 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;4 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;7 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;7 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;84 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;84 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">032. Citta</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;1 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;3 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;4 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;5 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;11 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;16 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;42 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;56 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;98 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">040. Lilirilau</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;2 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;11 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;13 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;12 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;20 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;32 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;115 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;238 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;353 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">050. Donri-Donri</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;1 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;9 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;10 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;6 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;16 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;22 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;47 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;228 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;275 </td>
            </tr>
            <tr>
                <td class="tg-7zrl">060. Marioriawa</td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;1 </span></td>
                <td class="tg-widl"><span style="background-color:#FFF">&nbsp;&nbsp;4 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;5 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;4 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;9 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;13 </td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;27 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;90 </span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;117 </td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-weight:normal;font-style:normal">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-2b7s">&nbsp;&nbsp;15 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;65 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;80 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;88 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;155 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;243 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;861 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;1,622 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,483 </td>
            </tr>
            <tr>
                <td class="tg-bobw"><span style="font-weight:bold">SIPD</span></td>
                <td class="tg-kcps"></td>
                <td class="tg-kcps"></td>
                <td class="tg-te5z"></td>
                <td class="tg-kcps"></td>
                <td class="tg-kcps"></td>
                <td class="tg-te5z"></td>
                <td class="tg-kcps"></td>
                <td class="tg-kcps"></td>
                <td class="tg-te5z"></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
