@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-baqh" rowspan="2">No</th>
                    <th class="tg-baqh" rowspan="2">Bulan</th>
                    {{-- <th class="tg-nrix" colspan="3">2021</th> --}}
                    <th class="tg-8d8j" colspan="3">{{ $data->tahun }}</th>
                </tr>
                <tr>
                    {{-- <th class="tg-nrix">Jumlah Pelanggan </th>
                    <th class="tg-nrix">Jumlah kWh terjual </th>
                    <th class="tg-nrix">Nilai Penjualan </th> --}}
                    <th class="tg-nrix">Jumlah Pelanggan </th>
                    <th class="tg-nrix">Jumlah kWh terjual </th>
                    <th class="tg-nrix">Nilai Penjualan </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-cly1">Januari </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan1') is-invalid @enderror" id="pelanggan1"
                            name="pelanggan1" value="{{ old('pelanggan1', $data->pelanggan1) }}">
                        @error('pelanggan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual1') is-invalid @enderror" id="kwhterjual1"
                            name="kwhterjual1" value="{{ old('kwhterjual1', $data->kwhterjual1) }}">
                        @error('kwhterjual1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nilai1') is-invalid @enderror"
                            id="nilai1" name="nilai1" value="{{ old('nilai1', $data->nilai1) }}">
                        @error('nilai1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">2</td>
                    <td class="tg-cly1">Februari</td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    {{-- <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan2') is-invalid @enderror" id="pelanggan2"
                            name="pelanggan2" value="{{ old('pelanggan2', $data->pelanggan2) }}">
                        @error('pelanggan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual2') is-invalid @enderror" id="kwhterjual2"
                            name="kwhterjual2" value="{{ old('kwhterjual2', $data->kwhterjual2) }}">
                        @error('kwhterjual2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nilai2') is-invalid @enderror"
                            id="nilai2" name="nilai2" value="{{ old('nilai2', $data->nilai2) }}">
                        @error('nilai2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">3</td>
                    <td class="tg-cly1">Maret</td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan3') is-invalid @enderror" id="pelanggan3"
                            name="pelanggan3" value="{{ old('pelanggan3', $data->pelanggan3) }}">
                        @error('pelanggan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual3') is-invalid @enderror" id="kwhterjual3"
                            name="kwhterjual3" value="{{ old('kwhterjual3', $data->kwhterjual3) }}">
                        @error('kwhterjual3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nilai3') is-invalid @enderror"
                            id="nilai3" name="nilai3" value="{{ old('nilai3', $data->nilai3) }}">
                        @error('nilai3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">4</td>
                    <td class="tg-cly1">April </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    {{-- <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan4') is-invalid @enderror" id="pelanggan4"
                            name="pelanggan4" value="{{ old('pelanggan4', $data->pelanggan4) }}">
                        @error('pelanggan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual4') is-invalid @enderror" id="kwhterjual4"
                            name="kwhterjual4" value="{{ old('kwhterjual4', $data->kwhterjual4) }}">
                        @error('kwhterjual4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai4') is-invalid @enderror" id="nilai4" name="nilai4"
                            value="{{ old('nilai4', $data->nilai4) }}">
                        @error('nilai4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">5</td>
                    <td class="tg-cly1">Mei </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan5') is-invalid @enderror" id="pelanggan5"
                            name="pelanggan5" value="{{ old('pelanggan5', $data->pelanggan5) }}">
                        @error('pelanggan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual5') is-invalid @enderror" id="kwhterjual5"
                            name="kwhterjual5" value="{{ old('kwhterjual5', $data->kwhterjual5) }}">
                        @error('kwhterjual5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai5') is-invalid @enderror" id="nilai5" name="nilai5"
                            value="{{ old('nilai5', $data->nilai5) }}">
                        @error('nilai5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">6</td>
                    <td class="tg-cly1">Juni </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan6') is-invalid @enderror" id="pelanggan6"
                            name="pelanggan6" value="{{ old('pelanggan6', $data->pelanggan6) }}">
                        @error('pelanggan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual6') is-invalid @enderror" id="kwhterjual6"
                            name="kwhterjual6" value="{{ old('kwhterjual6', $data->kwhterjual6) }}">
                        @error('kwhterjual6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai6') is-invalid @enderror" id="nilai6" name="nilai6"
                            value="{{ old('nilai6', $data->nilai6) }}">
                        @error('nilai6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">7</td>
                    <td class="tg-cly1">Juli </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan7') is-invalid @enderror" id="pelanggan7"
                            name="pelanggan7" value="{{ old('pelanggan7', $data->pelanggan7) }}">
                        @error('pelanggan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual7') is-invalid @enderror" id="kwhterjual7"
                            name="kwhterjual7" value="{{ old('kwhterjual7', $data->kwhterjual7) }}">
                        @error('kwhterjual7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai7') is-invalid @enderror" id="nilai7" name="nilai7"
                            value="{{ old('nilai7', $data->nilai7) }}">
                        @error('nilai7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">8</td>
                    <td class="tg-cly1">Agustus </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan8') is-invalid @enderror" id="pelanggan8"
                            name="pelanggan8" value="{{ old('pelanggan8', $data->pelanggan8) }}">
                        @error('pelanggan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual8') is-invalid @enderror" id="kwhterjual8"
                            name="kwhterjual8" value="{{ old('kwhterjual8', $data->kwhterjual8) }}">
                        @error('kwhterjual8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai8') is-invalid @enderror" id="nilai8" name="nilai8"
                            value="{{ old('nilai8', $data->nilai8) }}">
                        @error('nilai8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">9</td>
                    <td class="tg-cly1">September </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan9') is-invalid @enderror" id="pelanggan9"
                            name="pelanggan9" value="{{ old('pelanggan9', $data->pelanggan9) }}">
                        @error('pelanggan9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual9') is-invalid @enderror" id="kwhterjual9"
                            name="kwhterjual9" value="{{ old('kwhterjual9', $data->kwhterjual9) }}">
                        @error('kwhterjual9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai9') is-invalid @enderror" id="nilai9" name="nilai9"
                            value="{{ old('nilai9', $data->nilai9) }}">
                        @error('nilai9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">10</td>
                    <td class="tg-cly1">Oktober </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan10') is-invalid @enderror" id="pelanggan10"
                            name="pelanggan10" value="{{ old('pelanggan10', $data->pelanggan10) }}">
                        @error('pelanggan10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual10') is-invalid @enderror" id="kwhterjual10"
                            name="kwhterjual10" value="{{ old('kwhterjual10', $data->kwhterjual10) }}">
                        @error('kwhterjual10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai10') is-invalid @enderror" id="nilai10"
                            name="nilai10" value="{{ old('nilai10', $data->nilai10) }}">
                        @error('nilai10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">11</td>
                    <td class="tg-cly1">November</td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan11') is-invalid @enderror" id="pelanggan11"
                            name="pelanggan11" value="{{ old('pelanggan11', $data->pelanggan11) }}">
                        @error('pelanggan11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual11') is-invalid @enderror" id="kwhterjual11"
                            name="kwhterjual11" value="{{ old('kwhterjual11', $data->kwhterjual11) }}">
                        @error('kwhterjual11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai11') is-invalid @enderror" id="nilai11"
                            name="nilai11" value="{{ old('nilai11', $data->nilai11) }}">
                        @error('nilai11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">12</td>
                    <td class="tg-cly1">Desember </td>
                    {{-- <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td>
                    <td class="tg-cly1"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan12') is-invalid @enderror" id="pelanggan12"
                            name="pelanggan12" value="{{ old('pelanggan12', $data->pelanggan12) }}">
                        @error('pelanggan12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kwhterjual12') is-invalid @enderror" id="kwhterjual12"
                            name="kwhterjual12" value="{{ old('kwhterjual12', $data->kwhterjual12) }}">
                        @error('kwhterjual12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai12') is-invalid @enderror" id="nilai12"
                            name="nilai12" value="{{ old('nilai12', $data->nilai12) }}">
                        @error('nilai12')
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
                <th class="tg-baqh" rowspan="2">No</th>
                <th class="tg-baqh" rowspan="2">Bulan</th>
                <th class="tg-nrix" colspan="3">2021</th>
                <th class="tg-8d8j" colspan="3">2022</th>
            </tr>
            <tr>
                <th class="tg-nrix">Jumlah Pelanggan </th>
                <th class="tg-nrix">Jumlah kWh terjual </th>
                <th class="tg-nrix">Nilai Penjualan </th>
                <th class="tg-nrix">Jumlah Pelanggan </th>
                <th class="tg-nrix">Jumlah kWh terjual </th>
                <th class="tg-nrix">Nilai Penjualan </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-cly1">Januari </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-cly1">Februari</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-cly1">Maret</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">4</td>
                <td class="tg-cly1">April </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-cly1">Mei </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">6</td>
                <td class="tg-cly1">Juni </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">7</td>
                <td class="tg-cly1">Juli </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">8</td>
                <td class="tg-cly1">Agustus </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">9</td>
                <td class="tg-cly1">September </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">10</td>
                <td class="tg-cly1">Oktober </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">11</td>
                <td class="tg-cly1">November</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">12</td>
                <td class="tg-cly1">Desember </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>

@endif
