@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">Banyaknya Tenaga Medis di RSUD La
                            Temmamala Kabupaten Soppeng, {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Number of
                            Paramedics in La Temmamala Hospital of Soppeng Regency, {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-nrix">Tenaga Medis/Paramedics

                    </td>
                    <td class="tg-baqh">{{ $data->tahun }}</td>

                </tr>

                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>

                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Spesialis/</span><span
                            style="font-style:italic;color:#000">Specialist Doctor</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis1') is-invalid @enderror" id="tenagamedis1"
                            name="tenagamedis1" value="{{ old('tenagamedis1', $data->tenagamedis1) }}">
                        @error('tenagamedis1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Spesialis Gigi/</span><span
                            style="font-style:italic;color:#000">Dental Specialist Doctor</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis2') is-invalid @enderror" id="tenagamedis2"
                            name="tenagamedis2" value="{{ old('tenagamedis2', $data->tenagamedis2) }}">
                        @error('tenagamedis2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Umum/</span><span
                            style="font-style:italic;color:#000">General Practitioners</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis3') is-invalid @enderror" id="tenagamedis3"
                            name="tenagamedis3" value="{{ old('tenagamedis3', $data->tenagamedis3) }}">
                        @error('tenagamedis3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Gigi/</span><span
                            style="font-style:italic;color:#000">Dentist</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis4') is-invalid @enderror" id="tenagamedis4"
                            name="tenagamedis4" value="{{ old('tenagamedis4', $data->tenagamedis4) }}">
                        @error('tenagamedis4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Bidan/</span><span
                            style="font-style:italic;color:#000">Midwife</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis5') is-invalid @enderror" id="tenagamedis5"
                            name="tenagamedis5" value="{{ old('tenagamedis5', $data->tenagamedis5) }}">
                        @error('tenagamedis5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Perawat/</span><span
                            style="font-style:italic;color:#000">Nurse</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis6') is-invalid @enderror" id="tenagamedis6"
                            name="tenagamedis6" value="{{ old('tenagamedis6', $data->tenagamedis6) }}">
                        @error('tenagamedis6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Perawat Gigi/</span><span
                            style="font-style:italic;color:#000">Dental Nurse</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis7') is-invalid @enderror" id="tenagamedis7"
                            name="tenagamedis7" value="{{ old('tenagamedis7', $data->tenagamedis7) }}">
                        @error('tenagamedis7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Tenaga Teknis
                            Kefarmasian/</span><span style="font-style:italic;color:#000">Pharmacist</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis8') is-invalid @enderror" id="tenagamedis8"
                            name="tenagamedis8" value="{{ old('tenagamedis8', $data->tenagamedis8) }}">
                        @error('tenagamedis8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Apoterker/</span><span
                            style="font-style:italic;color:#000">Druggist</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis9') is-invalid @enderror" id="tenagamedis9"
                            name="tenagamedis9" value="{{ old('tenagamedis9', $data->tenagamedis9) }}">
                        @error('tenagamedis9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Kesehatan Masyarakat/</span><span
                            style="font-style:italic;color:#000">Public Health</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis10') is-invalid @enderror" id="tenagamedis10"
                            name="tenagamedis10" value="{{ old('tenagamedis10', $data->tenagamedis10) }}">
                        @error('tenagamedis10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Kesehatan Lingkungan/ </span><span
                            style="font-style:italic;color:#000">Environmental Health</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis11') is-invalid @enderror" id="tenagamedis11"
                            name="tenagamedis11" value="{{ old('tenagamedis11', $data->tenagamedis11) }}">
                        @error('tenagamedis11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Fisiotrapi/</span><span
                            style="font-style:italic;color:#000">Physiotheraphist</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tenagamedis12') is-invalid @enderror" id="tenagamedis12"
                            name="tenagamedis12" value="{{ old('tenagamedis12', $data->tenagamedis12) }}">
                        @error('tenagamedis12')
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
                            class="form-control @error('tenagamedist') is-invalid @enderror" id="tenagamedist"
                            name="tenagamedist" value="{{ old('tenagamedist', $data->tenagamedist) }}">
                        @error('tenagamedist')
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
                <th class="tg-amwm" rowspan="2">4.2.13</th>
                <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya Tenaga Medis di RSUD La
                        Temmamala Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                        Paramedics in La Temmamala Hospital of Soppeng Regency, {{ $data->tahun }}</span></th>
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
            </tr>
            <tr>
                <td class="tg-nrix">Tenaga Medis/</td>
                <td class="tg-baqh" rowspan="2">{{ $data->tahun }}</td>
                <td class="tg-baqh" rowspan="2">2018</td>
                <td class="tg-baqh" rowspan="2">2019</td>
                <td class="tg-baqh" rowspan="2">2020</td>
                <td class="tg-baqh" rowspan="2">2021</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Paramedics</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Spesialis/</span><span
                        style="font-style:italic;color:#000">Specialist Doctor</span></td>
                <td class="tg-mwxe">21</td>
                <td class="tg-mwxe">22</td>
                <td class="tg-mwxe">21</td>
                <td class="tg-mwxe">27</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">26</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Spesialis Gigi/</span><span
                        style="font-style:italic;color:#000">Dental Specialist Doctor</span></td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Umum/</span><span
                        style="font-style:italic;color:#000">General Practitioners</span></td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">17</td>
                <td class="tg-mwxe">11</td>
                <td class="tg-mwxe">11</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">8</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Dokter Gigi/</span><span
                        style="font-style:italic;color:#000">Dentist</span></td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Bidan/</span><span
                        style="font-style:italic;color:#000">Midwife</span></td>
                <td class="tg-mwxe">23</td>
                <td class="tg-mwxe">106</td>
                <td class="tg-mwxe">27</td>
                <td class="tg-mwxe">27</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">27</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Perawat/</span><span
                        style="font-style:italic;color:#000">Nurse</span></td>
                <td class="tg-mwxe">103</td>
                <td class="tg-mwxe">295</td>
                <td class="tg-mwxe">123</td>
                <td class="tg-mwxe">125</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">121</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Perawat Gigi/</span><span
                        style="font-style:italic;color:#000">Dental Nurse</span></td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Tenaga Teknis Kefarmasian/</span><span
                        style="font-style:italic;color:#000">Pharmacist</span></td>
                <td class="tg-mwxe">5</td>
                <td class="tg-mwxe">11</td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">8</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">8</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Apoterker/</span><span
                        style="font-style:italic;color:#000">Druggist</span></td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">32</td>
                <td class="tg-mwxe">10</td>
                <td class="tg-mwxe">12</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">11</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Kesehatan Masyarakat/</span><span
                        style="font-style:italic;color:#000">Public Health</span></td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">4</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Kesehatan Lingkungan/ </span><span
                        style="font-style:italic;color:#000">Environmental Health</span></td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">5</td>
                <td class="tg-mwxe">6</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Fisiotrapi/</span><span
                        style="font-style:italic;color:#000">Physiotheraphist</span></td>
                <td class="tg-mwxe">5</td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">7</td>
                <td class="tg-mwxe">7</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">183</td>
                <td class="tg-mwxe">502</td>
                <td class="tg-mwxe">219</td>
                <td class="tg-mwxe">233</td>
                <td class="tg-mwxe">223</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}

    @include('tabel.skpd.036_RSUD.script1')
@endsection
