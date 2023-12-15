@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th class="tg-ub45">No</span></th>
                    <th class="tg-lzbn">Jenis Angkutan Penumpang</span></th>
                    <th class="tg-lzbn">Variabel</span></th>
                    <th class="tg-lzbn">Satuan</span></th>
                    {{-- <th class="tg-lzbn">2021</span></th> --}}
                    <th class="tg-lzbn">{{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-7zrl">Mobil Penumpang Umum</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel1') is-invalid @enderror" id="apvariabel1"
                            name="apvariabel1" value="{{ old('apvariabel1', $data->apvariabel1) }}">
                        @error('apvariabel1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan1') is-invalid @enderror" id="apsatuan1"
                            name="apsatuan1" value="{{ old('apsatuan1', $data->apsatuan1) }}">
                        @error('apsatuan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('apisi1') is-invalid @enderror"
                            id="apisi1" name="apisi1" value="{{ old('apisi1', $data->apisi1) }}">
                        @error('apisi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-7zrl">Bus</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel2') is-invalid @enderror" id="apvariabel2"
                            name="apvariabel2" value="{{ old('apvariabel2', $data->apvariabel2) }}">
                        @error('apvariabel2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan2') is-invalid @enderror" id="apsatuan2"
                            name="apsatuan2" value="{{ old('apsatuan2', $data->apsatuan2) }}">
                        @error('apsatuan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('apisi2') is-invalid @enderror"
                            id="apisi2" name="apisi2" value="{{ old('apisi2', $data->apisi2) }}">
                        @error('apisi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-7zrl">Becak</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel3') is-invalid @enderror" id="apvariabel3"
                            name="apvariabel3" value="{{ old('apvariabel3', $data->apvariabel3) }}">
                        @error('apvariabel3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan3') is-invalid @enderror" id="apsatuan3"
                            name="apsatuan3" value="{{ old('apsatuan3', $data->apsatuan3) }}">
                        @error('apsatuan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('apisi3') is-invalid @enderror"
                            id="apisi3" name="apisi3" value="{{ old('apisi3', $data->apisi3) }}">
                        @error('apisi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-7zrl">Delman/ Bendi</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel4') is-invalid @enderror" id="apvariabel4"
                            name="apvariabel4" value="{{ old('apvariabel4', $data->apvariabel4) }}">
                        @error('apvariabel4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan4') is-invalid @enderror" id="apsatuan4"
                            name="apsatuan4" value="{{ old('apsatuan4', $data->apsatuan4) }}">
                        @error('apsatuan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apisi4') is-invalid @enderror" id="apisi4" name="apisi4"
                            value="{{ old('apisi4', $data->apisi4) }}">
                        @error('apisi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-7zrl">Lainnya 8.2 (1) Ojek Motor</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel5') is-invalid @enderror" id="apvariabel5"
                            name="apvariabel5" value="{{ old('apvariabel5', $data->apvariabel5) }}">
                        @error('apvariabel5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan5') is-invalid @enderror" id="apsatuan5"
                            name="apsatuan5" value="{{ old('apsatuan5', $data->apsatuan5) }}">
                        @error('apsatuan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apisi5') is-invalid @enderror" id="apisi5" name="apisi5"
                            value="{{ old('apisi5', $data->apisi5) }}">
                        @error('apisi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-7zrl">Lainnya 8.2 (2) Becak Motor</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel6') is-invalid @enderror" id="apvariabel6"
                            name="apvariabel6" value="{{ old('apvariabel6', $data->apvariabel6) }}">
                        @error('apvariabel6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan6') is-invalid @enderror" id="apsatuan6"
                            name="apsatuan6" value="{{ old('apsatuan6', $data->apsatuan6) }}">
                        @error('apsatuan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apisi6') is-invalid @enderror" id="apisi6" name="apisi6"
                            value="{{ old('apisi6', $data->apisi6) }}">
                        @error('apisi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-7zrl">Ojek Motor</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel7') is-invalid @enderror" id="apvariabel7"
                            name="apvariabel7" value="{{ old('apvariabel7', $data->apvariabel7) }}">
                        @error('apvariabel7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan7') is-invalid @enderror" id="apsatuan7"
                            name="apsatuan7" value="{{ old('apsatuan7', $data->apsatuan7) }}">
                        @error('apsatuan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apisi7') is-invalid @enderror" id="apisi7" name="apisi7"
                            value="{{ old('apisi7', $data->apisi7) }}">
                        @error('apisi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">8</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jenisangkutpenumpanglainnya') is-invalid @enderror"
                            id="jenisangkutpenumpanglainnya" name="jenisangkutpenumpanglainnya"
                            value="{{ old('jenisangkutpenumpanglainnya', $data->jenisangkutpenumpanglainnya) }}">
                        @error('jenisangkutpenumpanglainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apvariabel8') is-invalid @enderror" id="apvariabel8"
                            name="apvariabel8" value="{{ old('apvariabel8', $data->apvariabel8) }}">
                        @error('apvariabel8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apsatuan8') is-invalid @enderror" id="apsatuan8"
                            name="apsatuan8" value="{{ old('apsatuan8', $data->apsatuan8) }}">
                        @error('apsatuan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('apisi8') is-invalid @enderror" id="apisi8" name="apisi8"
                            value="{{ old('apisi8', $data->apisi8) }}">
                        @error('apisi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <thead class="thead-light">
                    <tr>
                        <th class="tg-ub45">No</span></th>
                        <th class="tg-lzbn">Jenis Angkutan Barang</span></th>
                        <th class="tg-lzbn">Variabel</span></th>
                        <th class="tg-lzbn">Satuan</span></th>
                        {{-- <th class="tg-lzbn">2021</span></th> --}}
                        <th class="tg-lzbn">{{ $data->tahun }}</span></th>
                    </tr>
                </thead>

                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-7zrl">Truk</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel1') is-invalid @enderror" id="abvariabel1"
                            name="abvariabel1" value="{{ old('abvariabel1', $data->abvariabel1) }}">
                        @error('abvariabel1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan1') is-invalid @enderror" id="absatuan1"
                            name="absatuan1" value="{{ old('absatuan1', $data->absatuan1) }}">
                        @error('absatuan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi1') is-invalid @enderror" id="abisi1" name="abisi1"
                            value="{{ old('abisi1', $data->abisi1) }}">
                        @error('abisi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-7zrl">Gerobak barang</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel2') is-invalid @enderror" id="abvariabel2"
                            name="abvariabel2" value="{{ old('abvariabel2', $data->abvariabel2) }}">
                        @error('abvariabel2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan2') is-invalid @enderror" id="absatuan2"
                            name="absatuan2" value="{{ old('absatuan2', $data->absatuan2) }}">
                        @error('absatuan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi2') is-invalid @enderror" id="abisi2" name="abisi2"
                            value="{{ old('abisi2', $data->abisi2) }}">
                        @error('abisi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-7zrl">Output Jasa Angkutan Pipa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel3') is-invalid @enderror" id="abvariabel3"
                            name="abvariabel3" value="{{ old('abvariabel3', $data->abvariabel3) }}">
                        @error('abvariabel3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan3') is-invalid @enderror" id="absatuan3"
                            name="absatuan3" value="{{ old('absatuan3', $data->absatuan3) }}">
                        @error('absatuan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi3') is-invalid @enderror" id="abisi3" name="abisi3"
                            value="{{ old('abisi3', $data->abisi3) }}">
                        @error('abisi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-7zrl">Pick UP</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel4') is-invalid @enderror" id="abvariabel4"
                            name="abvariabel4" value="{{ old('abvariabel4', $data->abvariabel4) }}">
                        @error('abvariabel4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan4') is-invalid @enderror" id="absatuan4"
                            name="absatuan4" value="{{ old('absatuan4', $data->absatuan4) }}">
                        @error('absatuan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi4') is-invalid @enderror" id="abisi4" name="abisi4"
                            value="{{ old('abisi4', $data->abisi4) }}">
                        @error('abisi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-7zrl">Kuda beban</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel5') is-invalid @enderror" id="abvariabel5"
                            name="abvariabel5" value="{{ old('abvariabel5', $data->abvariabel5) }}">
                        @error('abvariabel5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan5') is-invalid @enderror" id="absatuan5"
                            name="absatuan5" value="{{ old('absatuan5', $data->absatuan5) }}">
                        @error('absatuan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi5') is-invalid @enderror" id="abisi5" name="abisi5"
                            value="{{ old('abisi5', $data->abisi5) }}">
                        @error('abisi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-7zrl">Ojek Motor pengangkut gabah</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel6') is-invalid @enderror" id="abvariabel6"
                            name="abvariabel6" value="{{ old('abvariabel6', $data->abvariabel6) }}">
                        @error('abvariabel6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan6') is-invalid @enderror" id="absatuan6"
                            name="absatuan6" value="{{ old('absatuan6', $data->absatuan6) }}">
                        @error('absatuan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi6') is-invalid @enderror" id="abisi6" name="abisi6"
                            value="{{ old('abisi6', $data->abisi6) }}">
                        @error('abisi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jenisangkutbaranglainnya') is-invalid @enderror"
                            id="jenisangkutbaranglainnya" name="jenisangkutbaranglainnya"
                            value="{{ old('jenisangkutbaranglainnya', $data->jenisangkutbaranglainnya) }}">
                        @error('jenisangkutbaranglainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abvariabel7') is-invalid @enderror" id="abvariabel7"
                            name="abvariabel7" value="{{ old('abvariabel7', $data->abvariabel7) }}">
                        @error('abvariabel7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('absatuan7') is-invalid @enderror" id="absatuan7"
                            name="absatuan7" value="{{ old('absatuan7', $data->absatuan7) }}">
                        @error('absatuan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('abisi7') is-invalid @enderror" id="abisi7" name="abisi7"
                            value="{{ old('abisi7', $data->abisi7) }}">
                        @error('abisi7')
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
                <th class="tg-ub45"><span style="background-color:#E2EFD9">No</span></th>
                <th class="tg-lzbn"><span style="background-color:#E2EFD9">Jenis Angkutan Penumpang</span></th>
                <th class="tg-lzbn"><span style="background-color:#E2EFD9">Variabel</span></th>
                <th class="tg-lzbn"><span style="background-color:#E2EFD9">Satuan</span></th>
                <th class="tg-lzbn"><span style="background-color:#E2EFD9">2021</span></th>
                <th class="tg-lzbn"><span style="background-color:#E2EFD9">2022</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-7zrl">Mobil Penumpang Umum</td>
                <td class="tg-7zrl">Jumlah Armada</td>
                <td class="tg-7zrl">Unit</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-7zrl">Bus</td>
                <td class="tg-7zrl">Jumlah Armada</td>
                <td class="tg-7zrl">Unit</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-7zrl">Becak</td>
                <td class="tg-7zrl">Jumlah Armada</td>
                <td class="tg-7zrl">Unit</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-7zrl">Delman/ Bendi</td>
                <td class="tg-7zrl">Jumlah Armada</td>
                <td class="tg-7zrl">Unit</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-7zrl">Lainnya 8.2 (1) Ojek Motor</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-7zrl">Lainnya 8.2 (2) Becak Motor</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-7zrl">Ojek Motor</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">8</td>
                <td class="tg-7zrl">Lainnya…..........</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-ub45"><span style="background-color:#E2EFD9">No.</span></td>
                <td class="tg-lzbn"><span style="background-color:#E2EFD9">Jenis Angkutan Barang</span></td>
                <td class="tg-lzbn"><span style="background-color:#E2EFD9">Variabel</span></td>
                <td class="tg-lzbn"><span style="background-color:#E2EFD9">Satuan</span></td>
                <td class="tg-lzbn"><span style="background-color:#E2EFD9">2021</span></td>
                <td class="tg-lzbn"><span style="background-color:#E2EFD9">2022</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-7zrl">Truk</td>
                <td class="tg-7zrl">Jumlah Armada</td>
                <td class="tg-7zrl">Unit</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-7zrl">Gerobak barang</td>
                <td class="tg-7zrl">Jumlah Armada</td>
                <td class="tg-7zrl">Unit</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-7zrl">Output Jasa Angkutan Pipa</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-7zrl">Pick UP</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-7zrl">Kuda beban</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-7zrl">Ojek Motor pengangkut gabah</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-7zrl">Lainnya…............</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
