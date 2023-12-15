@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">2.2.1</th>
                    <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">
                            {{ $judultabelen }}, {{ $data->tahun }}</span>
                    </th>
                </tr>
                <tr>
                    <th class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Partai
                            Politik/</span><span style="font-style:italic;color:#000">Political Party</span></th>
                    <th class="tg-nrix" colspan="3">Jenis Kelamin/Sex</th>
                </tr>
                <tr>
                    <th class="tg-nrix">Laki-Laki/Men</th>
                    <th class="tg-nrix">Perempuan/Women</th>
                    <th class="tg-nrix">Jumlah/Total</th>
                </tr>
                <tr>
                    <th class="tg-nrix">(1)</th>
                    <th class="tg-nrix">(2)</th>
                    <th class="tg-nrix">(3)</th>
                    <th class="tg-nrix">(4)</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-7zrl">Gerindra</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki1') is-invalid @enderror" id="lakilaki1"
                            name="lakilaki1" value="{{ old('lakilaki1', $data->lakilaki1) }}">
                        @error('lakilaki1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan1') is-invalid @enderror" id="perempuan1"
                            name="perempuan1" value="{{ old('perempuan1', $data->perempuan1) }}">
                        @error('perempuan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control2 @error('jumlah1') is-invalid @enderror" id="jumlah1" name="jumlah1"
                            value="{{ old('jumlah1', $data->jumlah1) }}">
                        @error('jumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">Golkar</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki2') is-invalid @enderror" id="lakilaki2"
                            name="lakilaki2" value="{{ old('lakilaki2', $data->lakilaki2) }}">
                        @error('lakilaki2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan2') is-invalid @enderror" id="perempuan2"
                            name="perempuan2" value="{{ old('perempuan2', $data->perempuan2) }}">
                        @error('perempuan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlah2') is-invalid @enderror" id="jumlah2" name="jumlah2"
                            value="{{ old('jumlah2', $data->jumlah2) }}">
                        @error('jumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">PDI-P</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki3') is-invalid @enderror" id="lakilaki3"
                            name="lakilaki3" value="{{ old('lakilaki3', $data->lakilaki3) }}">
                        @error('lakilaki3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan3') is-invalid @enderror" id="perempuan3"
                            name="perempuan3" value="{{ old('perempuan3', $data->perempuan3) }}">
                        @error('perempuan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlah3') is-invalid @enderror" id="jumlah3" name="jumlah3"
                            value="{{ old('jumlah3', $data->jumlah3) }}">
                        @error('jumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">PPP</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki4') is-invalid @enderror" id="lakilaki4"
                            name="lakilaki4" value="{{ old('lakilaki4', $data->lakilaki4) }}">
                        @error('lakilaki4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan4') is-invalid @enderror" id="perempuan4"
                            name="perempuan4" value="{{ old('perempuan4', $data->perempuan4) }}">
                        @error('perempuan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-7zrl">Demokrat</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki5') is-invalid @enderror" id="lakilaki5"
                            name="lakilaki5" value="{{ old('lakilaki5', $data->lakilaki5) }}">
                        @error('lakilaki5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan5') is-invalid @enderror" id="perempuan5"
                            name="perempuan5" value="{{ old('perempuan5', $data->perempuan5) }}">
                        @error('perempuan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-7zrl">PAN</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki6') is-invalid @enderror" id="lakilaki6"
                            name="lakilaki6" value="{{ old('lakilaki6', $data->lakilaki6) }}">
                        @error('lakilaki6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan6') is-invalid @enderror" id="perempuan6"
                            name="perempuan6" value="{{ old('perempuan6', $data->perempuan6) }}">
                        @error('perempuan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-7zrl">PKS</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki7') is-invalid @enderror" id="lakilaki7"
                            name="lakilaki7" value="{{ old('lakilaki7', $data->lakilaki7) }}">
                        @error('lakilaki7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan7') is-invalid @enderror" id="perempuan7"
                            name="perempuan7" value="{{ old('perempuan7', $data->perempuan7) }}">
                        @error('perempuan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-7zrl">PKB</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki8') is-invalid @enderror" id="lakilaki8"
                            name="lakilaki8" value="{{ old('lakilaki8', $data->lakilaki8) }}">
                        @error('lakilaki8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan8') is-invalid @enderror" id="perempuan8"
                            name="perempuan8" value="{{ old('perempuan8', $data->perempuan8) }}">
                        @error('perempuan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-7zrl">PBB</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki9') is-invalid @enderror" id="lakilaki9"
                            name="lakilaki9" value="{{ old('lakilaki9', $data->lakilaki9) }}">
                        @error('lakilaki9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan9') is-invalid @enderror" id="perempuan9"
                            name="perempuan9" value="{{ old('perempuan9', $data->perempuan9) }}">
                        @error('perempuan9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-7zrl">Nasdem</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki10') is-invalid @enderror" id="lakilaki10"
                            name="lakilaki10" value="{{ old('lakilaki10', $data->lakilaki10) }}">
                        @error('lakilaki10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan10') is-invalid @enderror" id="perempuan10"
                            name="perempuan10" value="{{ old('perempuan10', $data->perempuan10) }}">
                        @error('perempuan10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('var') is-invalid @enderror" id="var" name="lainnyavar"
                            value="{{ old('lainnyavar', $data->lainnyavar) }}">
                        @error('lainnyavar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilaki11') is-invalid @enderror" id="lakilaki11"
                            name="lakilaki11" value="{{ old('lakilaki11', $data->lakilaki11) }}">
                        @error('lakilaki11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuan11') is-invalid @enderror" id="perempuan11"
                            name="perempuan11" value="{{ old('perempuan11', $data->perempuan11) }}">
                        @error('perempuan11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-f4yw"><span style="background-color:#FFF">Jumlah/Total</span></td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lakilakit') is-invalid @enderror" id="lakilakit"
                            name="lakilakit" value="{{ old('lakilakit', $data->lakilakit) }}">
                        @error('lakilakit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perempuant') is-invalid @enderror" id="perempuant"
                            name="perempuant" value="{{ old('perempuant', $data->perempuant) }}">
                        @error('perempuant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlaht') is-invalid @enderror" id="jumlaht"
                            name="jumlaht" value="{{ old('jumlaht', $data->jumlaht) }}">
                        @error('jumlaht')
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
    {{-- tabel kosongan disini --}}
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-wa1i"><span style="font-weight:bold">Tabel</span></td>
                <td class="tg-amwm" rowspan="2">2.2.1</td>
                <td class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Anggota DPRD Menurut
                        Partai Politik dan Jenis Kelamin di Kabupaten Soppeng, {{ $data->tahun }}</span></td>
            </tr>
            <tr>
                <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                <td class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                        Regional
                        Parliaments Members by Poltical Party and Sex in Soppeng Regency, {{ $data->tahun }}</span>
                </td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Partai
                        Politik/</span><span style="font-style:italic;color:#000">Political Party</span></td>
                <td class="tg-nrix" colspan="3">Jenis Kelamin/Sex</td>
            </tr>
            <tr>
                <td class="tg-nrix">Laki-Laki/Men</td>
                <td class="tg-nrix">Perempuan/Women</td>
                <td class="tg-nrix">Jumlah/Total</td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
            </tr>
            <tr>
                <td class="tg-7zrl">Gerindra</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">3</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">Golkar</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">8</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">12</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">PDI-P</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">5</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">PPP</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">Demokrat</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">3</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">PAN</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">PKS</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">PKB</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">PBB</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">0</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">Nasdem</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">5</span></td>
            </tr>
            <tr>
                <td class="tg-f4yw"><span style="background-color:#FFF">Jumlah/Total</span></td>
                <td class="tg-nrix">23</td>
                <td class="tg-nrix">7</td>
                <td class="tg-nrix">30</td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.027_DPRD.script1')
@endsection
