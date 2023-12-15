@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-amwm" rowspan="2">NO</th>
                    <th class="tg-amwm" rowspan="2">KOMODITAS</th>
                    <th class="tg-amwm" rowspan="2">WUJUD</th>
                    <th class="tg-wa1i" colspan="6"><span style="font-weight:bold">PRODUKSI PERIKANAN
                            2020-2022</span>
                    </th>
                </tr>
                <tr>
                    {{-- <th class="tg-wa1i"><span style="font-weight:bold">2020 (Ton)</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">NILAI 2020 (000)</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">2021 (Ton)</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">NILAI 2021 (000)</span></th> --}}

                    <th class="tg-wa1i"><span style="font-weight:bold">2022 (Ton)</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">NILAI 2022 (000)</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">A</span></td>
                    <td class="tg-yla0"><span style="font-weight:bold">IKAN BUDIDAYA KOLAM</span></td>
                    <td class="tg-yla0"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-7zrl">IKAN MAS</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('awujud1') is-invalid @enderror" id="awujud1" name="awujud1"
                            value="{{ old('awujud1', $data->awujud1) }}">
                        @error('awujud1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('aproduksi1') is-invalid @enderror" id="aproduksi1"
                            name="aproduksi1" value="{{ old('aproduksi1', $data->aproduksi1) }}">
                        @error('aproduksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anilai1') is-invalid @enderror" id="anilai1" name="anilai1"
                            value="{{ old('anilai1', $data->anilai1) }}">
                        @error('anilai1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">2</td>
                    <td class="tg-7zrl">IKAN NILA</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('awujud2') is-invalid @enderror" id="awujud2" name="awujud2"
                            value="{{ old('awujud2', $data->awujud2) }}">
                        @error('awujud2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('aproduksi2') is-invalid @enderror" id="aproduksi2"
                            name="aproduksi2" value="{{ old('aproduksi2', $data->aproduksi2) }}">
                        @error('aproduksi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anilai2') is-invalid @enderror" id="anilai2" name="anilai2"
                            value="{{ old('anilai2', $data->anilai2) }}">
                        @error('anilai2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">3</td>
                    <td class="tg-7zrl">IKAN LELE</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('awujud3') is-invalid @enderror" id="awujud3" name="awujud3"
                            value="{{ old('awujud3', $data->awujud3) }}">
                        @error('awujud3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('aproduksi3') is-invalid @enderror" id="aproduksi3"
                            name="aproduksi3" value="{{ old('aproduksi3', $data->aproduksi3) }}">
                        @error('aproduksi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anilai3') is-invalid @enderror" id="anilai3" name="anilai3"
                            value="{{ old('anilai3', $data->anilai3) }}">
                        @error('anilai3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahproduksia') is-invalid @enderror" id="jumlahproduksia"
                            name="jumlahproduksia" value="{{ old('jumlahproduksia', $data->jumlahproduksia) }}">
                        @error('jumlahproduksia')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahnilaia') is-invalid @enderror" id="jumlahnilaia"
                            name="jumlahnilaia" value="{{ old('jumlahnilaia', $data->jumlahnilaia) }}">
                        @error('jumlahnilaia')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">B</span></td>
                    <td class="tg-yla0"><span style="font-weight:bold">IKAN BUDIDAYA SAWAH (MINAPADI)</span></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>

                </tr>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-7zrl">IKAN MAS</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bwujud1') is-invalid @enderror" id="bwujud1"
                            name="bwujud1" value="{{ old('bwujud1', $data->bwujud1) }}">
                        @error('bwujud1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bproduksi1') is-invalid @enderror" id="bproduksi1"
                            name="bproduksi1" value="{{ old('bproduksi1', $data->bproduksi1) }}">
                        @error('bproduksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bnilai1') is-invalid @enderror" id="bnilai1"
                            name="bnilai1" value="{{ old('bnilai1', $data->bnilai1) }}">
                        @error('bnilai1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahproduksib') is-invalid @enderror" id="jumlahproduksib"
                            name="jumlahproduksib" value="{{ old('jumlahproduksib', $data->jumlahproduksib) }}">
                        @error('jumlahproduksib')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahnilaib') is-invalid @enderror" id="jumlahnilaib"
                            name="jumlahnilaib" value="{{ old('jumlahnilaib', $data->jumlahnilaib) }}">
                        @error('jumlahnilaib')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">C</span></td>
                    <td class="tg-yla0"><span style="font-weight:bold">IKAN BUDIDAYA KERAMBA (KJA)</span></td>
                    {{-- <td class="tg-wa1i"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-7zrl">IKAN NILA</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cwujud1') is-invalid @enderror" id="cwujud1"
                            name="cwujud1" value="{{ old('cwujud1', $data->cwujud1) }}">
                        @error('cwujud1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cproduksi1') is-invalid @enderror" id="cproduksi1"
                            name="cproduksi1" value="{{ old('cproduksi1', $data->cproduksi1) }}">
                        @error('cproduksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cnilai1') is-invalid @enderror" id="cnilai1"
                            name="cnilai1" value="{{ old('cnilai1', $data->cnilai1) }}">
                        @error('cnilai1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahproduksic') is-invalid @enderror" id="jumlahproduksic"
                            name="jumlahproduksic" value="{{ old('jumlahproduksic', $data->jumlahproduksic) }}">
                        @error('jumlahproduksic')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahnilaic') is-invalid @enderror" id="jumlahnilaic"
                            name="jumlahnilaic" value="{{ old('jumlahnilaic', $data->jumlahnilaic) }}">
                        @error('jumlahnilaic')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">D</span></td>
                    <td class="tg-yla0"><span style="font-weight:bold">IKAN PERAIRAN UMUM DARATAN</span></td>
                    {{-- <td class="tg-wa1i"></td>
                    <td class="tg-wa1i"></td>
                    <td class="tg-wa1i"></td>
                    <td class="tg-wa1i"></td>
                    <td class="tg-wa1i"></td> --}}
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-7zrl">IKAN MAS</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud1') is-invalid @enderror" id="dwujud1"
                            name="dwujud1" value="{{ old('dwujud1', $data->dwujud1) }}">
                        @error('dwujud1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi1') is-invalid @enderror" id="dproduksi1"
                            name="dproduksi1" value="{{ old('dproduksi1', $data->dproduksi1) }}">
                        @error('dproduksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai1') is-invalid @enderror" id="dnilai1"
                            name="dnilai1" value="{{ old('dnilai1', $data->dnilai1) }}">
                        @error('dnilai1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">2</td>
                    <td class="tg-7zrl">IKAN NILA</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud2') is-invalid @enderror" id="dwujud2"
                            name="dwujud2" value="{{ old('dwujud2', $data->dwujud2) }}">
                        @error('dwujud2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi2') is-invalid @enderror" id="dproduksi2"
                            name="dproduksi2" value="{{ old('dproduksi2', $data->dproduksi2) }}">
                        @error('dproduksi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai2') is-invalid @enderror" id="dnilai2"
                            name="dnilai2" value="{{ old('dnilai2', $data->dnilai2) }}">
                        @error('dnilai2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">3</td>
                    <td class="tg-7zrl">IKAN LELE</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud3') is-invalid @enderror" id="dwujud3"
                            name="dwujud3" value="{{ old('dwujud3', $data->dwujud3) }}">
                        @error('dwujud3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi3') is-invalid @enderror" id="dproduksi3"
                            name="dproduksi3" value="{{ old('dproduksi3', $data->dproduksi3) }}">
                        @error('dproduksi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai3') is-invalid @enderror" id="dnilai3"
                            name="dnilai3" value="{{ old('dnilai3', $data->dnilai3) }}">
                        @error('dnilai3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">4</td>
                    <td class="tg-7zrl">BAWAL TAWAR</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud4') is-invalid @enderror" id="dwujud4"
                            name="dwujud4" value="{{ old('dwujud4', $data->dwujud4) }}">
                        @error('dwujud4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi4') is-invalid @enderror" id="dproduksi4"
                            name="dproduksi4" value="{{ old('dproduksi4', $data->dproduksi4) }}">
                        @error('dproduksi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai4') is-invalid @enderror" id="dnilai4"
                            name="dnilai4" value="{{ old('dnilai4', $data->dnilai4) }}">
                        @error('dnilai4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">5</td>
                    <td class="tg-7zrl">BETOK</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud5') is-invalid @enderror" id="dwujud5"
                            name="dwujud5" value="{{ old('dwujud5', $data->dwujud5) }}">
                        @error('dwujud5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi5') is-invalid @enderror" id="dproduksi5"
                            name="dproduksi5" value="{{ old('dproduksi5', $data->dproduksi5) }}">
                        @error('dproduksi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai5') is-invalid @enderror" id="dnilai5"
                            name="dnilai5" value="{{ old('dnilai5', $data->dnilai5) }}">
                        @error('dnilai5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">6</td>
                    <td class="tg-7zrl">BELUT</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud6') is-invalid @enderror" id="dwujud6"
                            name="dwujud6" value="{{ old('dwujud6', $data->dwujud6) }}">
                        @error('dwujud6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi6') is-invalid @enderror" id="dproduksi6"
                            name="dproduksi6" value="{{ old('dproduksi6', $data->dproduksi6) }}">
                        @error('dproduksi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai6') is-invalid @enderror" id="dnilai6"
                            name="dnilai6" value="{{ old('dnilai6', $data->dnilai6) }}">
                        @error('dnilai6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">7</td>
                    <td class="tg-7zrl">SEPAT SIAM</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud7') is-invalid @enderror" id="dwujud7"
                            name="dwujud7" value="{{ old('dwujud7', $data->dwujud7) }}">
                        @error('dwujud7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi7') is-invalid @enderror" id="dproduksi7"
                            name="dproduksi7" value="{{ old('dproduksi7', $data->dproduksi7) }}">
                        @error('dproduksi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai7') is-invalid @enderror" id="dnilai7"
                            name="dnilai7" value="{{ old('dnilai7', $data->dnilai7) }}">
                        @error('dnilai7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">8</td>
                    <td class="tg-7zrl">GABUS</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud8') is-invalid @enderror" id="dwujud8"
                            name="dwujud8" value="{{ old('dwujud8', $data->dwujud8) }}">
                        @error('dwujud8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi8') is-invalid @enderror" id="dproduksi8"
                            name="dproduksi8" value="{{ old('dproduksi8', $data->dproduksi8) }}">
                        @error('dproduksi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai8') is-invalid @enderror" id="dnilai8"
                            name="dnilai8" value="{{ old('dnilai8', $data->dnilai8) }}">
                        @error('dnilai8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">9</td>
                    <td class="tg-7zrl">NILEM</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud9') is-invalid @enderror" id="dwujud9"
                            name="dwujud9" value="{{ old('dwujud9', $data->dwujud9) }}">
                        @error('dwujud9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi9') is-invalid @enderror" id="dproduksi9"
                            name="dproduksi9" value="{{ old('dproduksi9', $data->dproduksi9) }}">
                        @error('dproduksi9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai9') is-invalid @enderror" id="dnilai9"
                            name="dnilai9" value="{{ old('dnilai9', $data->dnilai9) }}">
                        @error('dnilai9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">10</td>
                    <td class="tg-7zrl">TAWES</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud10') is-invalid @enderror" id="dwujud10"
                            name="dwujud10" value="{{ old('dwujud10', $data->dwujud10) }}">
                        @error('dwujud10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi10') is-invalid @enderror" id="dproduksi10"
                            name="dproduksi10" value="{{ old('dproduksi10', $data->dproduksi10) }}">
                        @error('dproduksi10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai10') is-invalid @enderror" id="dnilai10"
                            name="dnilai10" value="{{ old('dnilai10', $data->dnilai10) }}">
                        @error('dnilai10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">11</td>
                    <td class="tg-7zrl">BETUTU</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud11') is-invalid @enderror" id="dwujud11"
                            name="dwujud11" value="{{ old('dwujud11', $data->dwujud11) }}">
                        @error('dwujud11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi11') is-invalid @enderror" id="dproduksi11"
                            name="dproduksi11" value="{{ old('dproduksi11', $data->dproduksi11) }}">
                        @error('dproduksi11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai11') is-invalid @enderror" id="dnilai11"
                            name="dnilai11" value="{{ old('dnilai11', $data->dnilai11) }}">
                        @error('dnilai11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">12</td>
                    <td class="tg-cly1">ALAME</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud12') is-invalid @enderror" id="dwujud12"
                            name="dwujud12" value="{{ old('dwujud12', $data->dwujud12) }}">
                        @error('dwujud12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi12') is-invalid @enderror" id="dproduksi12"
                            name="dproduksi12" value="{{ old('dproduksi12', $data->dproduksi12) }}">
                        @error('dproduksi12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai12') is-invalid @enderror" id="dnilai12"
                            name="dnilai12" value="{{ old('dnilai12', $data->dnilai12) }}">
                        @error('dnilai12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">13</td>
                    <td class="tg-cly1">PATIN</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud13') is-invalid @enderror" id="dwujud13"
                            name="dwujud13" value="{{ old('dwujud13', $data->dwujud13) }}">
                        @error('dwujud13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi13') is-invalid @enderror" id="dproduksi13"
                            name="dproduksi13" value="{{ old('dproduksi13', $data->dproduksi13) }}">
                        @error('dproduksi13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai13') is-invalid @enderror" id="dnilai13"
                            name="dnilai13" value="{{ old('dnilai13', $data->dnilai13) }}">
                        @error('dnilai13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">14</td>
                    <td class="tg-cly1">SIDAT</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dwujud14') is-invalid @enderror" id="dwujud14"
                            name="dwujud14" value="{{ old('dwujud14', $data->dwujud14) }}">
                        @error('dwujud14')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dproduksi14') is-invalid @enderror" id="dproduksi14"
                            name="dproduksi14" value="{{ old('dproduksi14', $data->dproduksi14) }}">
                        @error('dproduksi14')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dnilai14') is-invalid @enderror" id="dnilai14"
                            name="dnilai14" value="{{ old('dnilai14', $data->dnilai14) }}">
                        @error('dnilai14')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahproduksid') is-invalid @enderror" id="jumlahproduksid"
                            name="jumlahproduksid" value="{{ old('jumlahproduksid', $data->jumlahproduksid) }}">
                        @error('jumlahproduksid')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahnilaid') is-invalid @enderror" id="jumlahnilaid"
                            name="jumlahnilaid" value="{{ old('jumlahnilaid', $data->jumlahnilaid) }}">
                        @error('jumlahnilaid')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-amwm" rowspan="2">NO</th>
                <th class="tg-amwm" rowspan="2">KOMODITAS</th>
                <th class="tg-amwm" rowspan="2">WUJUD</th>
                <th class="tg-wa1i" colspan="6"><span style="font-weight:bold">PRODUKSI PERIKANAN
                        2020-2022</span>
                </th>
            </tr>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">2020 (Ton)</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">NILAI 2020 (000)</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">2021 (Ton)</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">NILAI 2021 (000)</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">2022 (Ton)</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">NILAI 2022 (000)</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-wa1i"><span style="font-weight:bold">A</span></td>
                <td class="tg-yla0"><span style="font-weight:bold">IKAN BUDIDAYA KOLAM</span></td>
                <td class="tg-yla0"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-7zrl">IKAN MAS</td>
                <td class="tg-8d8j">IKAN HIDUP</td>
                <td class="tg-mwxe">74.22</td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,226,630 </td>
                <td class="tg-mwxe">76.53</td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,295,750 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-7zrl">IKAN NILA</td>
                <td class="tg-8d8j">IKAN HIDUP</td>
                <td class="tg-2b7s">&nbsp;&nbsp;84.86 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,121,575 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;90.59 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,717,700 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-7zrl">IKAN LELE</td>
                <td class="tg-8d8j">IKAN HIDUP</td>
                <td class="tg-2b7s">&nbsp;&nbsp;135.96 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,719,240 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;133.19 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;2,663,840 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>

            </tr>
            <tr>
                <td class="tg-wa1i"><span style="font-weight:bold">B</span></td>
                <td class="tg-yla0"><span style="font-weight:bold">IKAN BUDIDAYA SAWAH (MINAPADI)</span></td>
                <td class="tg-wa1i"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-7zrl">IKAN MAS</td>
                <td class="tg-8d8j">IKAN HIDUP</td>
                <td class="tg-mwxe">129.39</td>
                <td class="tg-2b7s">&nbsp;&nbsp;3,881,610 </td>
                <td class="tg-mwxe">135.35</td>
                <td class="tg-2b7s">&nbsp;&nbsp;4,060,470 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>

            </tr>
            <tr>
                <td class="tg-wa1i"><span style="font-weight:bold">C</span></td>
                <td class="tg-yla0"><span style="font-weight:bold">IKAN BUDIDAYA KERAMBA (KJA)</span></td>
                <td class="tg-wa1i"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-7zrl">IKAN NILA</td>
                <td class="tg-8d8j">IKAN HIDUP</td>
                <td class="tg-cly1">1.39</td>
                <td class="tg-2b7s">&nbsp;&nbsp;34,750 </td>
                <td class="tg-cly1">0.95</td>
                <td class="tg-2b7s">&nbsp;&nbsp;28,500 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>

            </tr>
            <tr>
                <td class="tg-wa1i"><span style="font-weight:bold">D</span></td>
                <td class="tg-yla0"><span style="font-weight:bold">IKAN PERAIRAN UMUM DARATAN</span></td>
                <td class="tg-wa1i"></td>
                <td class="tg-wa1i"></td>
                <td class="tg-wa1i"></td>
                <td class="tg-wa1i"></td>
                <td class="tg-wa1i"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-7zrl">IKAN MAS</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;2.60 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;78,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;24.70 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;741,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-7zrl">IKAN NILA</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;991.20 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;24,780,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;1,176.90 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;29,422,500 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-7zrl">IKAN LELE</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-cly1"></td>
                <td class="tg-2b7s">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">4</td>
                <td class="tg-7zrl">BAWAL TAWAR</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-8d8j">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-cly1"></td>
                <td class="tg-8d8j">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-7zrl">BETOK</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;21.10 </td>
                <td class="tg-cly1">&nbsp;&nbsp;316,500 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;9.90 </td>
                <td class="tg-cly1">&nbsp;&nbsp;148,500 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">6</td>
                <td class="tg-7zrl">BELUT</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-8d8j">&nbsp;&nbsp;6.40 </td>
                <td class="tg-cly1">&nbsp;&nbsp;128,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;1.50 </td>
                <td class="tg-cly1">&nbsp;&nbsp;30,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">7</td>
                <td class="tg-7zrl">SEPAT SIAM</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;61.60 </td>
                <td class="tg-cly1">&nbsp;&nbsp;924,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;47.20 </td>
                <td class="tg-cly1">&nbsp;&nbsp;708,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">8</td>
                <td class="tg-7zrl">GABUS</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;56.30 </td>
                <td class="tg-cly1">&nbsp;&nbsp;1,689,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;44.40 </td>
                <td class="tg-cly1">&nbsp;&nbsp;1,332,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">9</td>
                <td class="tg-7zrl">NILEM</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-8d8j">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-cly1"></td>
                <td class="tg-2b7s">&nbsp;&nbsp;26.10 </td>
                <td class="tg-cly1">&nbsp;&nbsp;391,500 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">10</td>
                <td class="tg-7zrl">TAWES</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;1,299.80 </td>
                <td class="tg-cly1">&nbsp;&nbsp;19,497,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;1,032.80 </td>
                <td class="tg-cly1">&nbsp;&nbsp;15,492,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">11</td>
                <td class="tg-7zrl">BETUTU</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;65.10 </td>
                <td class="tg-cly1">&nbsp;&nbsp;976,500 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;76.40 </td>
                <td class="tg-cly1">&nbsp;&nbsp;1,146,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">12</td>
                <td class="tg-cly1">ALAME</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-2b7s">&nbsp;&nbsp;12.90 </td>
                <td class="tg-cly1">&nbsp;&nbsp;258,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;9.90 </td>
                <td class="tg-cly1">&nbsp;&nbsp;198,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">13</td>
                <td class="tg-cly1">PATIN</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-8d8j">&nbsp;&nbsp;429.80 </td>
                <td class="tg-cly1">&nbsp;&nbsp;8,596,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;533.30 </td>
                <td class="tg-cly1">&nbsp;&nbsp;10,666,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">14</td>
                <td class="tg-cly1">SIDAT</td>
                <td class="tg-8d8j">IKAN SEGAR</td>
                <td class="tg-8d8j">&nbsp;&nbsp;11.10 </td>
                <td class="tg-cly1">&nbsp;&nbsp;888,000 </td>
                <td class="tg-2b7s">&nbsp;&nbsp;6.00 </td>
                <td class="tg-cly1">&nbsp;&nbsp;480,000 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-wa1i" colspan="3"><span style="font-weight:bold">JUMLAH</span></td>
                <td class="tg-kex3"><span style="font-weight:bold">&nbsp;&nbsp;2,957.90 </span></td>
                <td class="tg-cly1"></td>
                <td class="tg-kex3"><span style="font-weight:bold">&nbsp;&nbsp;2,989.10 </span></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>
@endif

@section('script')
    <script>
        function sumJumlahnilais() {
            var anilai1 = parseFloat(document.getElementById('anilai1').value) || 0;
            var anilai2 = parseFloat(document.getElementById('anilai2').value) || 0;
            var anilai3 = parseFloat(document.getElementById('anilai3').value) || 0;
            var bnilai1 = parseFloat(document.getElementById('bnilai1').value) || 0;
            var cnilai1 = parseFloat(document.getElementById('cnilai1').value) || 0;
            var dnilai1 = parseFloat(document.getElementById('dnilai1').value) || 0;
            var dnilai2 = parseFloat(document.getElementById('dnilai2').value) || 0;
            var dnilai3 = parseFloat(document.getElementById('dnilai3').value) || 0;
            var dnilai4 = parseFloat(document.getElementById('dnilai4').value) || 0;
            var dnilai5 = parseFloat(document.getElementById('dnilai5').value) || 0;
            var dnilai6 = parseFloat(document.getElementById('dnilai6').value) || 0;
            var dnilai7 = parseFloat(document.getElementById('dnilai7').value) || 0;
            var dnilai8 = parseFloat(document.getElementById('dnilai8').value) || 0;
            var dnilai9 = parseFloat(document.getElementById('dnilai9').value) || 0;
            var dnilai10 = parseFloat(document.getElementById('dnilai10').value) || 0;
            var dnilai11 = parseFloat(document.getElementById('dnilai11').value) || 0;
            var dnilai12 = parseFloat(document.getElementById('dnilai12').value) || 0;
            var dnilai13 = parseFloat(document.getElementById('dnilai13').value) || 0;
            var dnilai14 = parseFloat(document.getElementById('dnilai14').value) || 0;



            var jumlahnilaiSuma = (anilai1) + (anilai2) + (anilai3);

            var jumlahnilaiSumb = (bnilai1);

            var jumlahnilaiSumc = (cnilai1);

            var jumlahnilaiSumd = (dnilai1) + (dnilai2) + (dnilai3) + (dnilai4) + (
                dnilai5) + (dnilai6) + (dnilai7) + (dnilai8) + (dnilai9) + (
                dnilai10) + (dnilai11) + (dnilai12) + (dnilai13) + (dnilai14);

            document.getElementById('jumlahnilaia').value = jumlahnilaiSuma;
            document.getElementById('jumlahnilaib').value = jumlahnilaiSumb;
            document.getElementById('jumlahnilaic').value = jumlahnilaiSumc;
            document.getElementById('jumlahnilaid').value = jumlahnilaiSumd;



        }

        var variables = ['anilai1', 'anilai2', 'anilai3', 'bnilai1', 'cnilai1', 'dnilai1', 'dnilai2', 'dnilai3',
            'dnilai4',
            'dnilai5', 'dnilai6', 'dnilai7', 'dnilai8', 'dnilai9', 'dnilai10', 'dnilai11', 'dnilai12', 'dnilai13',
            'dnilai14'
        ];

        variables.forEach(function(variable) {
            document.getElementById(variable).addEventListener('focusout', sumJumlahnilais);
        });
    </script>

    <script>
        function sumJumlahproduksis() {
            var aproduksi1 = parseFloat(document.getElementById('aproduksi1').value) || 0;
            var aproduksi2 = parseFloat(document.getElementById('aproduksi2').value) || 0;
            var aproduksi3 = parseFloat(document.getElementById('aproduksi3').value) || 0;
            var bproduksi1 = parseFloat(document.getElementById('bproduksi1').value) || 0;
            var cproduksi1 = parseFloat(document.getElementById('cproduksi1').value) || 0;
            var dproduksi1 = parseFloat(document.getElementById('dproduksi1').value) || 0;
            var dproduksi2 = parseFloat(document.getElementById('dproduksi2').value) || 0;
            var dproduksi3 = parseFloat(document.getElementById('dproduksi3').value) || 0;
            var dproduksi4 = parseFloat(document.getElementById('dproduksi4').value) || 0;
            var dproduksi5 = parseFloat(document.getElementById('dproduksi5').value) || 0;
            var dproduksi6 = parseFloat(document.getElementById('dproduksi6').value) || 0;
            var dproduksi7 = parseFloat(document.getElementById('dproduksi7').value) || 0;
            var dproduksi8 = parseFloat(document.getElementById('dproduksi8').value) || 0;
            var dproduksi9 = parseFloat(document.getElementById('dproduksi9').value) || 0;
            var dproduksi10 = parseFloat(document.getElementById('dproduksi10').value) || 0;
            var dproduksi11 = parseFloat(document.getElementById('dproduksi11').value) || 0;
            var dproduksi12 = parseFloat(document.getElementById('dproduksi12').value) || 0;
            var dproduksi13 = parseFloat(document.getElementById('dproduksi13').value) || 0;
            var dproduksi14 = parseFloat(document.getElementById('dproduksi14').value) || 0;

            var jumlahproduksiSuma = (aproduksi1) + (aproduksi2) + (aproduksi3);

            var jumlahproduksiSumb = (bproduksi1);

            var jumlahproduksiSumc = (cproduksi1);

            var jumlahproduksiSumd = (dproduksi1) + (dproduksi2) + (dproduksi3) + (
                dproduksi4) + (
                dproduksi5) + (dproduksi6) + (dproduksi7) + (dproduksi8) + (
                dproduksi9) + (
                dproduksi10) + (dproduksi11) + (dproduksi12) + (dproduksi13) + (
                dproduksi14);

            document.getElementById('jumlahproduksia').value = jumlahproduksiSuma;
            document.getElementById('jumlahproduksib').value = jumlahproduksiSumb;
            document.getElementById('jumlahproduksic').value = jumlahproduksiSumc;
            document.getElementById('jumlahproduksid').value = jumlahproduksiSumd;
        }

        var variables = ['aproduksi1', 'aproduksi2', 'aproduksi3', 'bproduksi1', 'cproduksi1', 'dproduksi1',
            'dproduksi2',
            'dproduksi3', 'dproduksi4',
            'dproduksi5', 'dproduksi6', 'dproduksi7', 'dproduksi8', 'dproduksi9', 'dproduksi10', 'dproduksi11',
            'dproduksi12', 'dproduksi13',
            'dproduksi14'
        ];

        variables.forEach(function(variable) {
            document.getElementById(variable).addEventListener('focusout', sumJumlahproduksis);
        });
    </script>
@endsection
