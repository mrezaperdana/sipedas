@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.2.14</th>
                    <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Pasien Rawat Jalan dan Rawat Inap Menurut
                            Kelompok Pasien di RSUD La Temmamala Kabupaten Soppeng, 2021</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Outpatient and
                            Inpatient by Patient Group in La Temmamala Hospital of Soppeng Regency, 2021</span></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-nowrap">
                    <td class="tg-nrix">Kelompok Pasien/ Patient Group</td>
                    <td class="tg-nrix">Rawat Jalan/ Outpatient</td>
                    <td class="tg-nrix">Rawat Inap/ Inpatient</td>
                </tr>

                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien Umum/</span><span
                            style="font-style:italic;color:#000">General Patient</span></td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('outpatient1') is-invalid @enderror" id="outpatient1"
                            name="outpatient1" value="{{ old('outpatient1', $data->outpatient1) }}">
                        @error('outpatient1')
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
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien ASKES/BPJS/JKN
                            KIS/</span><span style="font-style:italic;color:#000">Patient ASKES/BPJS/JKN KIS</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('outpatient2') is-invalid @enderror" id="outpatient2"
                            name="outpatient2" value="{{ old('outpatient2', $data->outpatient2) }}">
                        @error('outpatient2')
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
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien JAMKESMAS/</span><span
                            style="font-style:italic;color:#000">Patient JAMKESMAS</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('outpatient3') is-invalid @enderror" id="outpatient3"
                            name="outpatient3" value="{{ old('outpatient3', $data->outpatient3) }}">
                        @error('outpatient3')
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
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien Gratis/</span><span
                            style="font-style:italic;color:#000">Free Patient</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('outpatient4') is-invalid @enderror" id="outpatient4"
                            name="outpatient4" value="{{ old('outpatient4', $data->outpatient4) }}">
                        @error('outpatient4')
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
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('outpatientt') is-invalid @enderror" id="outpatientt"
                            name="outpatientt" value="{{ old('outpatientt', $data->outpatientt) }}">
                        @error('outpatientt')
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
                <th class="tg-amwm" rowspan="2">4.2.14</th>
                <th class="tg-yla0"><span style="font-weight:bold">Banyaknya Pasien Rawat Jalan dan Rawat Inap Menurut
                        Kelompok Pasien di RSUD La Temmamala Kabupaten Soppeng, 2021</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Number of Outpatient and
                        Inpatient by Patient Group in La Temmamala Hospital of Soppeng Regency, 2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-nrix">Kelompok Pasien/</td>
                <td class="tg-nrix">Rawat Jalan/</td>
                <td class="tg-nrix">Rawat Inap/</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Patient Group</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Outpatient</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Inpatient</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien Umum/</span><span
                        style="font-style:italic;color:#000">General Patient</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;10,510 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;809 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien ASKES/BPJS/JKN KIS/</span><span
                        style="font-style:italic;color:#000">Patient ASKES/BPJS/JKN KIS</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;47,882 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;3,721 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien JAMKESMAS/</span><span
                        style="font-style:italic;color:#000">Patient JAMKESMAS</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;18,465 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2,004 </span></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Pasien Gratis/</span><span
                        style="font-style:italic;color:#000">Free Patient</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;11,477 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1,401 </span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;88,334 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;7,935 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.036_RSUD.script2')
@endsection
