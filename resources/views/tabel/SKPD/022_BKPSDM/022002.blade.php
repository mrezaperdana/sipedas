@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-cly1">
                    </th>
                    <th class="tg-amwm" rowspan="2">2.3.1</th>
                    <th class="tg-yla0" colspan="2"><span style="font-weight:bold">Jumlah Pegawai Negeri Sipil Menurut
                            Jabatan dan Jenis Kelamin di Kabupaten Soppeng,
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55" colspan="2"><span style="font-weight:bold;font-style:italic">Number of Civil
                            Servants by Occupation and Sex in Soppeng Regency,
                            {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh" rowspan="2">Jabatan/</td>
                    <td class="tg-nrix" colspan="3">Jenis Kelamin / Sex</td>
                </tr>

                <tr>
                    <td class="tg-nrix">Laki-Laki/ Men</td>
                    <td class="tg-nrix">Perempuan/ Women</td>
                    <td class="tg-nrix">Jumlah/ Total</td>
                </tr>

                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">Fungsional Tertentu / Specific Functional </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl1') is-invalid @enderror" id="jabatanl1"
                            name="jabatanl1" value="{{ old('jabatanl1', $data->jabatanl1) }}">
                        @error('jabatanl1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp1') is-invalid @enderror" id="jabatanp1"
                            name="jabatanp1" value="{{ old('jabatanp1', $data->jabatanp1) }}">
                        @error('jabatanp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah1') is-invalid @enderror" id="jabatanjumlah1"
                            name="jabatanjumlah1" value="{{ old('jabatanjumlah1', $data->jabatanjumlah1) }}">
                        @error('jabatanjumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Fungsional Umum/Staf/ General Functional </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl2') is-invalid @enderror" id="jabatanl2"
                            name="jabatanl2" value="{{ old('jabatanl2', $data->jabatanl2) }}">
                        @error('jabatanl2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp2') is-invalid @enderror" id="jabatanp2"
                            name="jabatanp2" value="{{ old('jabatanp2', $data->jabatanp2) }}">
                        @error('jabatanp2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah2') is-invalid @enderror" id="jabatanjumlah2"
                            name="jabatanjumlah2" value="{{ old('jabatanjumlah2', $data->jabatanjumlah2) }}">
                        @error('jabatanjumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Eselon V / Echelon 5</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl3') is-invalid @enderror" id="jabatanl3"
                            name="jabatanl3" value="{{ old('jabatanl3', $data->jabatanl3) }}">
                        @error('jabatanl3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp3') is-invalid @enderror" id="jabatanp3"
                            name="jabatanp3" value="{{ old('jabatanp3', $data->jabatanp3) }}">
                        @error('jabatanp3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah3') is-invalid @enderror" id="jabatanjumlah3"
                            name="jabatanjumlah3" value="{{ old('jabatanjumlah3', $data->jabatanjumlah3) }}">
                        @error('jabatanjumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Eselon IV / Echelon 4 </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl4') is-invalid @enderror" id="jabatanl4"
                            name="jabatanl4" value="{{ old('jabatanl4', $data->jabatanl4) }}">
                        @error('jabatanl4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp4') is-invalid @enderror" id="jabatanp4"
                            name="jabatanp4" value="{{ old('jabatanp4', $data->jabatanp4) }}">
                        @error('jabatanp4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah4') is-invalid @enderror" id="jabatanjumlah4"
                            name="jabatanjumlah4" value="{{ old('jabatanjumlah4', $data->jabatanjumlah4) }}">
                        @error('jabatanjumlah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Eselon III / Echelon 3 </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl5') is-invalid @enderror" id="jabatanl5"
                            name="jabatanl5" value="{{ old('jabatanl5', $data->jabatanl5) }}">
                        @error('jabatanl5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp5') is-invalid @enderror" id="jabatanp5"
                            name="jabatanp5" value="{{ old('jabatanp5', $data->jabatanp5) }}">
                        @error('jabatanp5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah5') is-invalid @enderror" id="jabatanjumlah5"
                            name="jabatanjumlah5" value="{{ old('jabatanjumlah5', $data->jabatanjumlah5) }}">
                        @error('jabatanjumlah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Eselon II / Echelon 2 </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl6') is-invalid @enderror" id="jabatanl6"
                            name="jabatanl6" value="{{ old('jabatanl6', $data->jabatanl6) }}">
                        @error('jabatanl6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp6') is-invalid @enderror" id="jabatanp6"
                            name="jabatanp6" value="{{ old('jabatanp6', $data->jabatanp6) }}">
                        @error('jabatanp6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah6') is-invalid @enderror" id="jabatanjumlah6"
                            name="jabatanjumlah6" value="{{ old('jabatanjumlah6', $data->jabatanjumlah6) }}">
                        @error('jabatanjumlah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Eselon I / Echelon 1 </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanl7') is-invalid @enderror" id="jabatanl7"
                            name="jabatanl7" value="{{ old('jabatanl7', $data->jabatanl7) }}">
                        @error('jabatanl7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanp7') is-invalid @enderror" id="jabatanp7"
                            name="jabatanp7" value="{{ old('jabatanp7', $data->jabatanp7) }}">
                        @error('jabatanp7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlah7') is-invalid @enderror" id="jabatanjumlah7"
                            name="jabatanjumlah7" value="{{ old('jabatanjumlah7', $data->jabatanjumlah7) }}">
                        @error('jabatanjumlah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Jumlah/Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanlt') is-invalid @enderror" id="jabatanlt"
                            name="jabatanlt" value="{{ old('jabatanlt', $data->jabatanlt) }}">
                        @error('jabatanlt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanpt') is-invalid @enderror" id="jabatanpt"
                            name="jabatanpt" value="{{ old('jabatanpt', $data->jabatanpt) }}">
                        @error('jabatanpt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jabatanjumlaht') is-invalid @enderror" id="jabatanjumlaht"
                            name="jabatanjumlaht" value="{{ old('jabatanjumlaht', $data->jabatanjumlaht) }}">
                        @error('jabatanjumlaht')
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
                <th class="tg-cly1"></th>
                <th class="tg-amwm" rowspan="2">2.3.1</th>
                <th class="tg-yla0" colspan="2"><span style="font-weight:bold">Jumlah Pegawai Negeri Sipil Menurut
                        Jabatan dan Jenis Kelamin di Kabupaten Soppeng,
                        {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55" colspan="2"><span style="font-weight:bold;font-style:italic">Number of Civil
                        Servants by Occupation and Sex in Soppeng Regency,
                        {{ $data->tahun }}</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="4">Jabatan/</td>
                <td class="tg-nrix" colspan="3">Jenis Kelamin/</td>
            </tr>
            <tr>
                <td class="tg-lhti" colspan="3"><span style="font-style:italic">Sex</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">Laki-Laki/</td>
                <td class="tg-nrix">Perempuan/</td>
                <td class="tg-nrix">Jumlah/</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Men</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Women</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Total</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
            </tr>
            <tr>
                <td class="tg-cly1">Fungsional Tertentu / Specific Functional </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">898</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2107</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">3005</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Fungsional Umum/Staf/ General Functional </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">626</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">809</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">1435</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Eselon V / Echelon 5</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">0</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Eselon IV / Echelon 4 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">172</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">158</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">330</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Eselon III / Echelon 3 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">27</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">33</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Eselon II / Echelon 2 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-cly1">Eselon I / Echelon 1 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">0</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Jumlah/Total</td>
                <td class="tg-o3c1"><span style="background-color:#FFF">1723</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">3080</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">4803</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
