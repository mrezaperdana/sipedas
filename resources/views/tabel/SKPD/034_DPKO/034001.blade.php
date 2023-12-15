@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-l6sh"></th>
                    <th class="tg-j6zm"><span style="font-weight:bold">Isi disini</span></th>
                    <th class="tg-7zrl"></th>
                    <th class="tg-7zrl"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">Tabel</span></td>
                    <td class="tg-amwm" rowspan="2">2.2.7</td>
                    <td class="tg-wa1i" colspan="2"><span style="font-weight:bold">Jumlah Organisasi Kepemudaan
                            menurut Kecamatan dan Jenis Organisasi di Kabupaten Soppeng, {{ $data->tahun }}</span></td>
                </tr>
                <tr>
                    <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                    <td class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of Youth
                            Organizations by Subdistrict and Type of Organization in Soppeng Regency,
                            {{ $data->tahun }}</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">Kecamatan/</td>
                    <td class="tg-nrix">Olahraga/</td>
                    <td class="tg-nrix">Ekonomi/</td>
                    <td class="tg-nrix">Sosial/</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Sports</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Economics</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Social</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga1') is-invalid @enderror" id="olahraga1"
                            name="olahraga1" value="{{ old('olahraga1', $data->olahraga1) }}">
                        @error('olahraga1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi1') is-invalid @enderror" id="ekonomi1" name="ekonomi1"
                            value="{{ old('ekonomi1', $data->ekonomi1) }}">
                        @error('ekonomi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial1') is-invalid @enderror" id="sosial1" name="sosial1"
                            value="{{ old('sosial1', $data->sosial1) }}">
                        @error('sosial1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga2') is-invalid @enderror" id="olahraga2"
                            name="olahraga2" value="{{ old('olahraga2', $data->olahraga2) }}">
                        @error('olahraga2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi2') is-invalid @enderror" id="ekonomi2" name="ekonomi2"
                            value="{{ old('ekonomi2', $data->ekonomi2) }}">
                        @error('ekonomi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial2') is-invalid @enderror" id="sosial2" name="sosial2"
                            value="{{ old('sosial2', $data->sosial2) }}">
                        @error('sosial2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga3') is-invalid @enderror" id="olahraga3"
                            name="olahraga3" value="{{ old('olahraga3', $data->olahraga3) }}">
                        @error('olahraga3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi3') is-invalid @enderror" id="ekonomi3" name="ekonomi3"
                            value="{{ old('ekonomi3', $data->ekonomi3) }}">
                        @error('ekonomi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial3') is-invalid @enderror" id="sosial3" name="sosial3"
                            value="{{ old('sosial3', $data->sosial3) }}">
                        @error('sosial3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga4') is-invalid @enderror" id="olahraga4"
                            name="olahraga4" value="{{ old('olahraga4', $data->olahraga4) }}">
                        @error('olahraga4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi4') is-invalid @enderror" id="ekonomi4"
                            name="ekonomi4" value="{{ old('ekonomi4', $data->ekonomi4) }}">
                        @error('ekonomi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial4') is-invalid @enderror" id="sosial4"
                            name="sosial4" value="{{ old('sosial4', $data->sosial4) }}">
                        @error('sosial4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga5') is-invalid @enderror" id="olahraga5"
                            name="olahraga5" value="{{ old('olahraga5', $data->olahraga5) }}">
                        @error('olahraga5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi5') is-invalid @enderror" id="ekonomi5"
                            name="ekonomi5" value="{{ old('ekonomi5', $data->ekonomi5) }}">
                        @error('ekonomi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial5') is-invalid @enderror" id="sosial5"
                            name="sosial5" value="{{ old('sosial5', $data->sosial5) }}">
                        @error('sosial5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga6') is-invalid @enderror" id="olahraga6"
                            name="olahraga6" value="{{ old('olahraga6', $data->olahraga6) }}">
                        @error('olahraga6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi6') is-invalid @enderror" id="ekonomi6"
                            name="ekonomi6" value="{{ old('ekonomi6', $data->ekonomi6) }}">
                        @error('ekonomi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial6') is-invalid @enderror" id="sosial6"
                            name="sosial6" value="{{ old('sosial6', $data->sosial6) }}">
                        @error('sosial6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga7') is-invalid @enderror" id="olahraga7"
                            name="olahraga7" value="{{ old('olahraga7', $data->olahraga7) }}">
                        @error('olahraga7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi7') is-invalid @enderror" id="ekonomi7"
                            name="ekonomi7" value="{{ old('ekonomi7', $data->ekonomi7) }}">
                        @error('ekonomi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial7') is-invalid @enderror" id="sosial7"
                            name="sosial7" value="{{ old('sosial7', $data->sosial7) }}">
                        @error('sosial7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('olahraga8') is-invalid @enderror" id="olahraga8"
                            name="olahraga8" value="{{ old('olahraga8', $data->olahraga8) }}">
                        @error('olahraga8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomi8') is-invalid @enderror" id="ekonomi8"
                            name="ekonomi8" value="{{ old('ekonomi8', $data->ekonomi8) }}">
                        @error('ekonomi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosial8') is-invalid @enderror" id="sosial8"
                            name="sosial8" value="{{ old('sosial8', $data->sosial8) }}">
                        @error('sosial8')
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
                            class="form-control @error('olahragat') is-invalid @enderror" id="olahragat"
                            name="olahragat" value="{{ old('olahragat', $data->olahragat) }}">
                        @error('olahragat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ekonomit') is-invalid @enderror" id="ekonomit"
                            name="ekonomit" value="{{ old('ekonomit', $data->ekonomit) }}">
                        @error('ekonomit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sosialt') is-invalid @enderror" id="sosialt"
                            name="sosialt" value="{{ old('sosialt', $data->sosialt) }}">
                        @error('sosialt')
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
@endif
@section('script')
    {{-- script disini --}}
@endsection
