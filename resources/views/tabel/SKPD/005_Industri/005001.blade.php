@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-baqh" rowspan="2">No</th>
                    <th class="tg-baqh" rowspan="2">Klasifikasi Industri</th>
                    {{-- <th class="tg-8d8j" colspan="2">2021</th> --}}
                    <th class="tg-8d8j" colspan="2">{{ $data->tahun }}</th>
                </tr>
                <tr>
                    {{-- <th class="tg-8d8j">Jumlah Usaha</th>
                    <th class="tg-8d8j">Nilai Usaha</th> --}}
                    <th class="tg-8d8j">Jumlah Usaha</th>
                    <th class="tg-8d8j">Nilai Usaha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-cly1">Industri Makanan dan Minuman </td>
                    {{-- <td class="tg-2b7s">415.00</td>
                    <td class="tg-2b7s">66,816,735.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ju1') is-invalid @enderror"
                            id="ju1" name="ju1" value="{{ old('ju1', $data->ju1) }}">
                        @error('ju1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nu1') is-invalid @enderror"
                            id="nu1" name="nu1" value="{{ old('nu1', $data->nu1) }}">
                        @error('nu1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-cly1">Pengolahan Tembakau</td>
                    {{-- <td class="tg-2b7s">84.00</td>
                    <td class="tg-2b7s">35,966,090.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ju2') is-invalid @enderror"
                            id="ju2" name="ju2" value="{{ old('ju2', $data->ju2) }}">
                        @error('ju2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nu2') is-invalid @enderror"
                            id="nu2" name="nu2" value="{{ old('nu2', $data->nu2) }}">
                        @error('nu2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-cly1">Industri Tekstil dan Pakaian Jadi</td>
                    {{-- <td class="tg-2b7s">141.00</td>
                    <td class="tg-2b7s">9,671,488.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ju3') is-invalid @enderror"
                            id="ju3" name="ju3" value="{{ old('ju3', $data->ju3) }}">
                        @error('ju3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nu3') is-invalid @enderror"
                            id="nu3" name="nu3" value="{{ old('nu3', $data->nu3) }}">
                        @error('nu3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-cly1">Industri Kulit, Barang dari Kulit dan Alas Kaki </td>
                    {{-- <td class="tg-2b7s">0.00</td>
                    <td class="tg-2b7s">0.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ju4') is-invalid @enderror"
                            id="ju4" name="ju4" value="{{ old('ju4', $data->ju4) }}">
                        @error('ju4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nu4') is-invalid @enderror"
                            id="nu4" name="nu4" value="{{ old('nu4', $data->nu4) }}">
                        @error('nu4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-cly1">Industri Kayu, Barang dari Kayu dan Gabus dan Barang Anyaman dari Bambu,
                        Rotan
                        dan
                        Sejenisnya </td>
                    {{-- <td class="tg-2b7s">17.00</td>
                    <td class="tg-2b7s">3,181,400.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ju5') is-invalid @enderror"
                            id="ju5" name="ju5" value="{{ old('ju5', $data->ju5) }}">
                        @error('ju5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nu5') is-invalid @enderror"
                            id="nu5" name="nu5" value="{{ old('nu5', $data->nu5) }}">
                        @error('nu5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-cly1">Industri Kertas dan Barang dari Kertas, Percetakan dan Reproduksi Media
                        Rekaman
                    </td>
                    {{-- <td class="tg-2b7s">7.00</td>
                    <td class="tg-2b7s">613,614.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ju6') is-invalid @enderror"
                            id="ju6" name="ju6" value="{{ old('ju6', $data->ju6) }}">
                        @error('ju6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nu6') is-invalid @enderror" id="nu6" name="nu6"
                            value="{{ old('nu6', $data->nu6) }}">
                        @error('nu6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-cly1">Industri Kimia, Farmasi dan Obat Tradisional</td>
                    {{-- <td class="tg-2b7s">15.00</td>
                    <td class="tg-2b7s">3,182,550.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ju7') is-invalid @enderror" id="ju7" name="ju7"
                            value="{{ old('ju7', $data->ju7) }}">
                        @error('ju7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nu7') is-invalid @enderror" id="nu7" name="nu7"
                            value="{{ old('nu7', $data->nu7) }}">
                        @error('nu7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">8</td>
                    <td class="tg-cly1">Industri Barang Galian bukan Logam</td>
                    {{-- <td class="tg-2b7s">10.00</td>
                    <td class="tg-2b7s">20,997,970.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ju8') is-invalid @enderror" id="ju8" name="ju8"
                            value="{{ old('ju8', $data->ju8) }}">
                        @error('ju8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nu8') is-invalid @enderror" id="nu8" name="nu8"
                            value="{{ old('nu8', $data->nu8) }}">
                        @error('nu8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">9</td>
                    <td class="tg-cly1">Industri Barang dari Logam, Komputer, Barang Elektronik, Optik dan Peralatan
                        Listrik
                    </td>
                    {{-- <td class="tg-2b7s">23.00</td>
                    <td class="tg-2b7s">11,240,584.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ju9') is-invalid @enderror" id="ju9" name="ju9"
                            value="{{ old('ju9', $data->ju9) }}">
                        @error('ju9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nu9') is-invalid @enderror" id="nu9" name="nu9"
                            value="{{ old('nu9', $data->nu9) }}">
                        @error('nu9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">10</td>
                    <td class="tg-cly1">Industri Furnitur</td>
                    {{-- <td class="tg-2b7s">75.00</td>
                    <td class="tg-2b7s">27,969,125.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ju10') is-invalid @enderror" id="ju10" name="ju10"
                            value="{{ old('ju10', $data->ju10) }}">
                        @error('ju10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nu10') is-invalid @enderror" id="nu10" name="nu10"
                            value="{{ old('nu10', $data->nu10) }}">
                        @error('nu10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">11</td>
                    <td class="tg-cly1">Industri pengolahan lainnya, jasa reparasi dan pemasangan mesin dan
                        peralatan
                    </td>
                    {{-- <td class="tg-2b7s">63.00</td>
                    <td class="tg-2b7s">15,237,665.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ju11') is-invalid @enderror" id="ju11" name="ju11"
                            value="{{ old('ju11', $data->ju11) }}">
                        @error('ju11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nu11') is-invalid @enderror" id="nu11" name="nu11"
                            value="{{ old('nu11', $data->nu11) }}">
                        @error('nu11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-7zrl"></td>
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
                <th class="tg-baqh" rowspan="2">Klasifikasi Industri</th>
                <th class="tg-8d8j" colspan="2">2021</th>
                <th class="tg-8d8j" colspan="2">2022</th>
            </tr>
            <tr>
                <th class="tg-8d8j">Jumlah Usaha</th>
                <th class="tg-8d8j">Nilai Usaha</th>
                <th class="tg-8d8j">Jumlah Usaha</th>
                <th class="tg-8d8j">Nilai Usaha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-cly1">Industri Makanan dan Minuman </td>
                <td class="tg-2b7s">415.00</td>
                <td class="tg-2b7s">66,816,735.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-cly1">Pengolahan Tembakau</td>
                <td class="tg-2b7s">84.00</td>
                <td class="tg-2b7s">35,966,090.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-cly1">Industri Tekstil dan Pakaian Jadi</td>
                <td class="tg-2b7s">141.00</td>
                <td class="tg-2b7s">9,671,488.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-cly1">Industri Kulit, Barang dari Kulit dan Alas Kaki </td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-cly1">Industri Kayu, Barang dari Kayu dan Gabus dan Barang Anyaman dari Bambu,
                    Rotan
                    dan
                    Sejenisnya </td>
                <td class="tg-2b7s">17.00</td>
                <td class="tg-2b7s">3,181,400.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-cly1">Industri Kertas dan Barang dari Kertas, Percetakan dan Reproduksi Media
                    Rekaman
                </td>
                <td class="tg-2b7s">7.00</td>
                <td class="tg-2b7s">613,614.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-cly1">Industri Kimia, Farmasi dan Obat Tradisional</td>
                <td class="tg-2b7s">15.00</td>
                <td class="tg-2b7s">3,182,550.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">8</td>
                <td class="tg-cly1">Industri Barang Galian bukan Logam</td>
                <td class="tg-2b7s">10.00</td>
                <td class="tg-2b7s">20,997,970.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">9</td>
                <td class="tg-cly1">Industri Barang dari Logam, Komputer, Barang Elektronik, Optik dan Peralatan
                    Listrik
                </td>
                <td class="tg-2b7s">23.00</td>
                <td class="tg-2b7s">11,240,584.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">10</td>
                <td class="tg-cly1">Industri Furnitur</td>
                <td class="tg-2b7s">75.00</td>
                <td class="tg-2b7s">27,969,125.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">11</td>
                <td class="tg-cly1">Industri pengolahan lainnya, jasa reparasi dan pemasangan mesin dan
                    peralatan
                </td>
                <td class="tg-2b7s">63.00</td>
                <td class="tg-2b7s">15,237,665.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>
@endif
