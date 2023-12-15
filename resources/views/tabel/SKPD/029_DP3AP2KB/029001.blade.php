@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-2g1l"><span style="font-weight:bold;background-color:#FFF">Tabel</span></th>
                    <th class="tg-9hzb" rowspan="2">2.2.8</th>
                    <th class="tg-2g1l" colspan="5"><span style="font-weight:bold;background-color:#FFF">Banyaknya
                            Organisasi Perempuan menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="5"><span style="font-weight:bold;font-style:italic">Number of Women
                            Organization by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-nrix" colspan="2">Kecamatan/Subdistrict</td>
                    <td class="tg-baqh">{{ $data->tahun }}</td>
                </tr>
                <tr>
                    <td class="tg-nrix" colspan="2">(1)</td>
                    <td class="tg-nrix">(2)</td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">010. Marioriwawo</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi1') is-invalid @enderror" id="organisasi1"
                            name="organisasi1" value="{{ old('organisasi1', $data->organisasi1) }}">
                        @error('organisasi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi2') is-invalid @enderror" id="organisasi2"
                            name="organisasi2" value="{{ old('organisasi2', $data->organisasi2) }}">
                        @error('organisasi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi3') is-invalid @enderror" id="organisasi3"
                            name="organisasi3" value="{{ old('organisasi3', $data->organisasi3) }}">
                        @error('organisasi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi4') is-invalid @enderror" id="organisasi4"
                            name="organisasi4" value="{{ old('organisasi4', $data->organisasi4) }}">
                        @error('organisasi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi5') is-invalid @enderror" id="organisasi5"
                            name="organisasi5" value="{{ old('organisasi5', $data->organisasi5) }}">
                        @error('organisasi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi6') is-invalid @enderror" id="organisasi6"
                            name="organisasi6" value="{{ old('organisasi6', $data->organisasi6) }}">
                        @error('organisasi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span>
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi7') is-invalid @enderror" id="organisasi7"
                            name="organisasi7" value="{{ old('organisasi7', $data->organisasi7) }}">
                        @error('organisasi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span>
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasi8') is-invalid @enderror" id="organisasi8"
                            name="organisasi8" value="{{ old('organisasi8', $data->organisasi8) }}">
                        @error('organisasi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7yig" colspan="2"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasit') is-invalid @enderror" id="organisasit"
                            name="organisasit" value="{{ old('organisasit', $data->organisasit) }}">
                        @error('organisasit')
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
                <th class="tg-2g1l"><span style="font-weight:bold;background-color:#FFF">Tabel</span></th>
                <th class="tg-9hzb" rowspan="2">2.2.8</th>
                <th class="tg-2g1l" colspan="5"><span style="font-weight:bold;background-color:#FFF">Banyaknya
                        Organisasi Perempuan menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="5"><span style="font-weight:bold;font-style:italic">Number of Women
                        Organization by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></th>
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
                <td class="tg-nrix" colspan="2">Kecamatan/</td>
                <td class="tg-baqh" rowspan="2">{{ $data->tahun }}</td>
                <td class="tg-baqh" rowspan="2">2018</td>
                <td class="tg-baqh" rowspan="2">2019</td>
                <td class="tg-baqh" rowspan="2">2020</td>
                <td class="tg-baqh" rowspan="2">2021</td>
            </tr>
            <tr>
                <td class="tg-lhti" colspan="2"><span style="font-style:italic">Subdistrict</span></td>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="2">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">010. Marioriwawo</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-zr06"><span style="background-color:#FFF">-</span></td>
                <td class="tg-zr06"></td>
                <td class="tg-cly1"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">25</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">20</span></td>
                <td class="tg-mwxe">23</td>
                <td class="tg-mwxe">24</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">22</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">-</span></td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7yig" colspan="2"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">25</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">20</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">23</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">24</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">24</span></td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
@endsection
