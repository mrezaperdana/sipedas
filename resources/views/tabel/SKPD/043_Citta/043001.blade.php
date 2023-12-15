@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">1.2</th>
                    <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">Wilayah dan Topografi Desa/Kelurahan
                            Menurut Desa/Kelurahan di Kecamatan Citta, {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Area and
                            Topography of Villages/Urban Villages by Villages/Urban Villages in Citta Subdistrict,
                            {{ $data->tahun }}</span>
                    </th>
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
                    <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Wilayah/</span><span
                            style="font-style:italic;color:#000">Area</span></td>
                    <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Topografi/</span><span
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
                    <td class="tg-cly1">001. Kampiri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pantai1') is-invalid @enderror" id="pantai1" name="pantai1"
                            value="{{ old('pantai1', $data->pantai1) }}">
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
                    <td class="tg-cly1"><input type="text" class="form-control @error('datar1') is-invalid @enderror"
                            id="datar1" name="datar1" value="{{ old('datar1', $data->datar1) }}">
                        @error('datar1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('bukit1') is-invalid @enderror"
                            id="bukit1" name="bukit1" value="{{ old('bukit1', $data->bukit1) }}">
                        @error('bukit1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">002. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pantai2') is-invalid @enderror" id="pantai2" name="pantai2"
                            value="{{ old('pantai2', $data->pantai2) }}">
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
                    <td class="tg-cly1"><input type="text" class="form-control @error('datar2') is-invalid @enderror"
                            id="datar2" name="datar2" value="{{ old('datar2', $data->datar2) }}">
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
                    <td class="tg-cly1">003. Labae</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pantai3') is-invalid @enderror" id="pantai3" name="pantai3"
                            value="{{ old('pantai3', $data->pantai3) }}">
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
                            class="form-control @error('datar3') is-invalid @enderror" id="datar3" name="datar3"
                            value="{{ old('datar3', $data->datar3) }}">
                        @error('datar3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bukit3') is-invalid @enderror" id="bukit3" name="bukit3"
                            value="{{ old('bukit3', $data->bukit3) }}">
                        @error('bukit3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">004. Tinco</td>
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
                            class="form-control @error('datar4') is-invalid @enderror" id="datar4" name="datar4"
                            value="{{ old('datar4', $data->datar4) }}">
                        @error('datar4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bukit4') is-invalid @enderror" id="bukit4" name="bukit4"
                            value="{{ old('bukit4', $data->bukit4) }}">
                        @error('bukit4')
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
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">1.2</th>
                <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">Wilayah dan Topografi
                        Desa/Kelurahan
                        Menurut Desa/Kelurahan di Kecamatan Citta, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Area and
                        Topography of Villages/Urban Villages by Villages/Urban Villages in Citta Subdistrict,
                        {{ $data->tahun }}</span>
                </th>
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
                <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Wilayah/</span><span
                        style="font-style:italic;color:#000">Area</span></td>
                <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Topografi/</span><span
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
                <td class="tg-cly1">001. Kampiri</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">✔️</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">✔️</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">002. Citta</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">✔️</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">003. Labae</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">✔️</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">004. Tinco</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">✔️</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
