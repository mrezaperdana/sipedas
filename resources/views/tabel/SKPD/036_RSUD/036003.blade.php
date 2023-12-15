@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.2.15</th>
                    <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Pasien Rawat Jalan dan
                            Rawat Inap Menurut Jenis Penyakit di RSUD La Temmamala Kabupaten Soppeng, 2021</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                            Newoutpatient1 and Inpatient by Type of Disease in La Temmamala Hospital of Soppeng
                            Regency,
                            2021</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-nowrap">
                    <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Jenis
                            Penyakit/</span><span style="font-style:italic;color:#000">Type of Disease</span></td>
                    <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Rawat
                            Jalan/</span><span style="font-style:italic;color:#000">Newoutpatient1</span></td>
                    <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Rawat
                            Inap/</span><span style="font-style:italic;color:#000">Inpatient</span></td>
                </tr>
                <tr class="text-nowrap">
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kunjungan Baru/</span><span
                            style="font-style:italic;color:#000">New Visits</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah Kunjungan/</span><span
                            style="font-style:italic;color:#000"> Number of Visits</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Demam Berdarah/</span><span
                            style="font-style:italic;color:#000">Dengue Fever</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient1') is-invalid @enderror" id="newoutpatient1"
                            name="newoutpatient1" value="{{ old('newoutpatient1', $data->newoutpatient1) }}">
                        @error('newoutpatient1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient1') is-invalid @enderror" id="totaloutpatient1"
                            name="totaloutpatient1" value="{{ old('totaloutpatient1', $data->totaloutpatient1) }}">
                        @error('totaloutpatient1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient1') is-invalid @enderror" id="inpatient1"
                            name="inpatient1" value="{{ old('inpatient1', $data->inpatient1) }}">
                        @error('inpatient1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Diare/</span><span
                            style="font-style:italic;color:#000">Diarrhea</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient2') is-invalid @enderror" id="newoutpatient2"
                            name="newoutpatient2" value="{{ old('newoutpatient2', $data->newoutpatient2) }}">
                        @error('newoutpatient2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient2') is-invalid @enderror" id="totaloutpatient2"
                            name="totaloutpatient2" value="{{ old('totaloutpatient2', $data->totaloutpatient2) }}">
                        @error('totaloutpatient2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient2') is-invalid @enderror" id="inpatient2"
                            name="inpatient2" value="{{ old('inpatient2', $data->inpatient2) }}">
                        @error('inpatient2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Tipes/</span><span
                            style="font-style:italic;color:#000">Typhoid</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient3') is-invalid @enderror" id="newoutpatient3"
                            name="newoutpatient3" value="{{ old('newoutpatient3', $data->newoutpatient3) }}">
                        @error('newoutpatient3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient3') is-invalid @enderror" id="totaloutpatient3"
                            name="totaloutpatient3" value="{{ old('totaloutpatient3', $data->totaloutpatient3) }}">
                        @error('totaloutpatient3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient3') is-invalid @enderror" id="inpatient3"
                            name="inpatient3" value="{{ old('inpatient3', $data->inpatient3) }}">
                        @error('inpatient3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Tuberkulosis/</span><span
                            style="font-style:italic;color:#000">Tuberculosis</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient4') is-invalid @enderror" id="newoutpatient4"
                            name="newoutpatient4" value="{{ old('newoutpatient4', $data->newoutpatient4) }}">
                        @error('newoutpatient4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient4') is-invalid @enderror"
                            id="totaloutpatient4" name="totaloutpatient4"
                            value="{{ old('totaloutpatient4', $data->totaloutpatient4) }}">
                        @error('totaloutpatient4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient4') is-invalid @enderror" id="inpatient4"
                            name="inpatient4" value="{{ old('inpatient4', $data->inpatient4) }}">
                        @error('inpatient4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Tetanus/</span><span
                            style="font-style:italic;color:#000">Tetanus</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient5') is-invalid @enderror" id="newoutpatient5"
                            name="newoutpatient5" value="{{ old('newoutpatient5', $data->newoutpatient5) }}">
                        @error('newoutpatient5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient5') is-invalid @enderror"
                            id="totaloutpatient5" name="totaloutpatient5"
                            value="{{ old('totaloutpatient5', $data->totaloutpatient5) }}">
                        @error('totaloutpatient5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient5') is-invalid @enderror" id="inpatient5"
                            name="inpatient5" value="{{ old('inpatient5', $data->inpatient5) }}">
                        @error('inpatient5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Malaria/</span><span
                            style="font-style:italic;color:#000">Malaria</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient6') is-invalid @enderror" id="newoutpatient6"
                            name="newoutpatient6" value="{{ old('newoutpatient6', $data->newoutpatient6) }}">
                        @error('newoutpatient6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient6') is-invalid @enderror"
                            id="totaloutpatient6" name="totaloutpatient6"
                            value="{{ old('totaloutpatient6', $data->totaloutpatient6) }}">
                        @error('totaloutpatient6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient6') is-invalid @enderror" id="inpatient6"
                            name="inpatient6" value="{{ old('inpatient6', $data->inpatient6) }}">
                        @error('inpatient6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">Lainnya </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('newoutpatient7') is-invalid @enderror" id="newoutpatient7"
                            name="newoutpatient7" value="{{ old('newoutpatient7', $data->newoutpatient7) }}">
                        @error('newoutpatient7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatient7') is-invalid @enderror"
                            id="totaloutpatient7" name="totaloutpatient7"
                            value="{{ old('totaloutpatient7', $data->totaloutpatient7) }}">
                        @error('totaloutpatient7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatient7') is-invalid @enderror" id="inpatient7"
                            name="inpatient7" value="{{ old('inpatient7', $data->inpatient7) }}">
                        @error('inpatient7')
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
                            class="form-control @error('newoutpatientt') is-invalid @enderror" id="newoutpatientt"
                            name="newoutpatientt" value="{{ old('newoutpatientt', $data->newoutpatientt) }}">
                        @error('newoutpatientt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totaloutpatientt') is-invalid @enderror"
                            id="totaloutpatientt" name="totaloutpatientt"
                            value="{{ old('totaloutpatientt', $data->totaloutpatientt) }}">
                        @error('totaloutpatientt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inpatientt') is-invalid @enderror" id="inpatientt"
                            name="inpatientt" value="{{ old('inpatientt', $data->inpatientt) }}">
                        @error('inpatientt')
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
                <th class="tg-amwm" rowspan="2">4.2.15</th>
                <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Pasien Rawat Jalan dan
                        Rawat Inap Menurut Jenis Penyakit di RSUD La Temmamala Kabupaten Soppeng, 2021</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                        Newoutpatient1 and Inpatient by Type of Disease in La Temmamala Hospital of Soppeng Regency,
                        2021</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Jenis
                        Penyakit/</span><span style="font-style:italic;color:#000">Type of Disease</span></td>
                <td class="tg-baqh" colspan="2"><span style="font-style:normal;color:#000">Rawat
                        Jalan/</span><span style="font-style:italic;color:#000">Newoutpatient1</span></td>
                <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Rawat
                        Inap/</span><span style="font-style:italic;color:#000">Inpatient</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kunjungan Baru/</span><span
                        style="font-style:italic;color:#000">New Visits</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah Kunjungan/</span><span
                        style="font-style:italic;color:#000"> Number of Visits</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Demam Berdarah/</span><span
                        style="font-style:italic;color:#000">Dengue Fever</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;21 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;65 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;36 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Diare/</span><span
                        style="font-style:italic;color:#000">Diarrhea</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;52 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;208 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;42 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Tipes/</span><span
                        style="font-style:italic;color:#000">Typhoid</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;15 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;44 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;26 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Tuberkulosis/</span><span
                        style="font-style:italic;color:#000">Tuberculosis</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;128 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2,713 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;41 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Tetanus/</span><span
                        style="font-style:italic;color:#000">Tetanus</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;3 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;24 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;4 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Malaria/</span><span
                        style="font-style:italic;color:#000">Malaria</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">Lainnya </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;5,272 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;65,440 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;5,045 </span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;5,492 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;68,495 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;5,195 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.036_RSUD.script3')
@endsection
