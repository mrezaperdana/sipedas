@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-baqh" rowspan="2">Tabel 7.1</th>
                    <th class="tg-baqh" colspan="4" rowspan="2">Jumlah Rumah Makan/Restoran Menurut Kecamatan di
                        Kabupaten Soppeng, {{ $data->tahun }}</th>
                </tr>
                <tr>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-bobw"><span style="font-weight:bold">Kecamatan</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">{{ $data->tahun }}</span></td>
                </tr>
                <tr>
                    <td class="tg-7zrl">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('restoran1') is-invalid @enderror" id="restoran1"
                            name="restoran1" value="{{ old('restoran1', $data->restoran1) }}">
                        @error('restoran1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah2') is-invalid @enderror"
                            id="ubah2" name="ubah2" value="{{ old('ubah2', $data->ubah2) }}">
                        @error('ubah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah3') is-invalid @enderror"
                            id="ubah3" name="ubah3" value="{{ old('ubah3', $data->ubah3) }}">
                        @error('ubah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">031. Ganra</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah4') is-invalid @enderror"
                            id="ubah4" name="ubah4" value="{{ old('ubah4', $data->ubah4) }}">
                        @error('ubah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">032. Citta</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah5') is-invalid @enderror"
                            id="ubah5" name="ubah5" value="{{ old('ubah5', $data->ubah5) }}">
                        @error('ubah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah6') is-invalid @enderror"
                            id="ubah6" name="ubah6" value="{{ old('ubah6', $data->ubah6) }}">
                        @error('ubah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah7') is-invalid @enderror"
                            id="ubah7" name="ubah7" value="{{ old('ubah7', $data->ubah7) }}">
                        @error('ubah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubah8') is-invalid @enderror"
                            id="ubah8" name="ubah8" value="{{ old('ubah8', $data->ubah8) }}">
                        @error('ubah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">7312. Soppeng</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('ubaht') is-invalid @enderror"
                            id="ubaht" name="ubaht" value="{{ old('ubaht', $data->ubaht) }}">
                        @error('ubaht')
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
