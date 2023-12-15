<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">2.1</th>
                        <th class="tg-yla0"><span style="font-weight:bold">{{ $judultabel }}, {{ $data->tahun }}</span>
                        </th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                                {{ $data->tahun }}</span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-nrix">Nama Instansi dan Kantor Pemerintah</td>
                        <td class="tg-nrix" colspan="2">Banyaknya Pegawai</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Name of Agency and Government Office</span>
                        </td>
                        <td class="tg-lhti" colspan="2"><span style="font-style:italic">Number of Employee</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix" colspan="2">(2)</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Kantor Camat /</span><span
                                style="font-style:italic;color:#000">SubdistrictVillage Office</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah1') is-invalid @enderror" id="jumlah1"
                                name="jumlah1" value="{{ old('jumlah1', $data->jumlah1) }}">
                            @error('jumlah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Kantor
                                Desa/Kelurahan/</span><span style="font-style:italic;color:#000">Villages/Urban Villages
                                Office</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah2') is-invalid @enderror" id="jumlah2"
                                name="jumlah2" value="{{ old('jumlah2', $data->jumlah2) }}">
                            @error('jumlah2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">UPTD Dinas Pendidikan (Tidak
                                Termasuk
                                Guru)/</span><span style="font-style:italic;color:#000">Education Office (Exclude
                                teacher)</span>
                        </td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah3') is-invalid @enderror" id="jumlah3"
                                name="jumlah3" value="{{ old('jumlah3', $data->jumlah3) }}">
                            @error('jumlah3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Puskesmas/</span><span
                                style="font-style:italic;color:#000">Public Health Center</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah4') is-invalid @enderror" id="jumlah4"
                                name="jumlah4" value="{{ old('jumlah4', $data->jumlah4) }}">
                            @error('jumlah4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">Penyuluh DP3APPKB</td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah5') is-invalid @enderror" id="jumlah5"
                                name="jumlah5" value="{{ old('jumlah5', $data->jumlah5) }}">
                            @error('jumlah5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Kantor Urusan Agama
                                (KUA)/</span><span style="font-style:italic;color:#000">Religious Affairs Office</span>
                        </td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah6') is-invalid @enderror" id="jumlah6"
                                name="jumlah6" value="{{ old('jumlah6', $data->jumlah6) }}">
                            @error('jumlah6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">Penyuluh Pertanian (Termasuk PPL)/Agriculture Conselor Agency (Include
                            Conselor)</td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah7') is-invalid @enderror" id="jumlah7"
                                name="jumlah7" value="{{ old('jumlah7', $data->jumlah7) }}">
                            @error('jumlah7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">UPTD Dinas Pertanian
                                /</span><span style="font-style:italic;color:#000">Agriculture Office</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah8') is-invalid @enderror" id="jumlah8"
                                name="jumlah8" value="{{ old('jumlah8', $data->jumlah8) }}">
                            @error('jumlah8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Koramil/</span><span
                                style="font-style:italic;color:#000">Rayon Military Command</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah9') is-invalid @enderror" id="jumlah9"
                                name="jumlah9" value="{{ old('jumlah9', $data->jumlah9) }}">
                            @error('jumlah9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Polsek/</span><span
                                style="font-style:italic;color:#000">Police Sector</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah10') is-invalid @enderror" id="jumlah10"
                                name="jumlah10" value="{{ old('jumlah10', $data->jumlah10) }}">
                            @error('jumlah10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">PT. PLN/</span><span
                                style="font-style:italic;color:#000">State Electricity Company</span><span
                                style="font-style:normal;color:#000"> </span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah11') is-invalid @enderror" id="jumlah11"
                                name="jumlah11" value="{{ old('jumlah11', $data->jumlah11) }}">
                            @error('jumlah11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">PT. Pos Indonesia/</span><span
                                style="font-style:italic;color:#000">Indonesian Post Station</span></td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah12') is-invalid @enderror" id="jumlah12"
                                name="jumlah12" value="{{ old('jumlah12', $data->jumlah12) }}">
                            @error('jumlah12')
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
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">2.1</th>
                        <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Pegawai Instansi dan Kantor
                                Pemerintah di
                                Kecamatan Ganra, 2021</span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Employee of
                                Agency and
                                Government Office&nbsp;&nbsp;in Ganra Subdistrict, 2021</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">Nama Instansi dan Kantor Pemerintah</td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-nrix">Banyaknya Pegawai</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Name of Agency and Government
                                Office</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-lhti"><span style="font-style:italic">Number of Employee</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-nrix">(2)</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Kantor Camat /</span><span
                                style="font-style:italic;color:#000">SubdistrictVillage Office</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">21</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Kantor
                                Desa/Kelurahan/</span><span style="font-style:italic;color:#000">Villages/Urban
                                Villages Office</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">UPTD Dinas Pendidikan (Tidak
                                Termasuk
                                Guru)/</span><span style="font-style:italic;color:#000">Education Office (Exclude
                                teacher)</span>
                        </td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Puskesmas/</span><span
                                style="font-style:italic;color:#000">Public Health Center</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">26</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">Penyuluh DP3APPKB</td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Kantor Urusan Agama
                                (KUA)/</span><span style="font-style:italic;color:#000">Religious Affairs Office</span>
                        </td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">Penyuluh Pertanian (Termasuk PPL)/Agriculture Conselor Agency (Include
                            Conselor)</td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">UPTD Dinas Pertanian
                                /</span><span style="font-style:italic;color:#000">Agriculture Office</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Koramil/</span><span
                                style="font-style:italic;color:#000">Rayon Military Command</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Polsek/</span><span
                                style="font-style:italic;color:#000">Police Sector</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">PT. PLN/</span><span
                                style="font-style:italic;color:#000">State Electricity Company</span><span
                                style="font-style:normal;color:#000"> </span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-36ug"></td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">PT. Pos Indonesia/</span><span
                                style="font-style:italic;color:#000">Indonesian Post Station</span></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-5si3"></td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">

    </x-slot>
</x-tabel-entri-view>
