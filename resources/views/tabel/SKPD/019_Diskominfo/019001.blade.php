@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">11.2.7</th>
                    <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Jumlah Kelompok Informasi Masyarakat
                            menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                            Community Information Groups by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-baqh" colspan="2" rowspan="2"><span
                            style="font-style:normal;color:#000">Kecamatan/</span><span
                            style="font-style:italic;color:#000">Subdistrict</span></td>
                    <td class="tg-baqh" rowspan="2">{{ $data->tahun }}</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td class="tg-nrix" colspan="2">(1)</td>
                    <td class="tg-nrix">(2)</td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">010. Marioriwawo</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompok1') is-invalid @enderror" id="kelompok1"
                            name="kelompok1" value="{{ old('kelompok1', $data->kelompok1) }}">
                        @error('kelompok1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompok2') is-invalid @enderror" id="kelompok2"
                            name="kelompok2" value="{{ old('kelompok2', $data->kelompok2) }}">
                        @error('kelompok2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompok3') is-invalid @enderror" id="kelompok3"
                            name="kelompok3" value="{{ old('kelompok3', $data->kelompok3) }}">
                        @error('kelompok3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompok4') is-invalid @enderror" id="kelompok4"
                            name="kelompok4" value="{{ old('kelompok4', $data->kelompok4) }}">
                        @error('kelompok4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompok5') is-invalid @enderror" id="kelompok5"
                            name="kelompok5" value="{{ old('kelompok5', $data->kelompok5) }}">
                        @error('kelompok5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompok6') is-invalid @enderror" id="kelompok6"
                            name="kelompok6" value="{{ old('kelompok6', $data->kelompok6) }}">
                        @error('kelompok6')
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
                            class="form-control @error('kelompok7') is-invalid @enderror" id="kelompok7"
                            name="kelompok7" value="{{ old('kelompok7', $data->kelompok7) }}">
                        @error('kelompok7')
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
                            class="form-control @error('kelompok8') is-invalid @enderror" id="kelompok8"
                            name="kelompok8" value="{{ old('kelompok8', $data->kelompok8) }}">
                        @error('kelompok8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh" colspan="2" rowspan="2"><span
                            style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">
                            Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelompokt') is-invalid @enderror" id="kelompokt"
                            name="kelompokt" value="{{ old('kelompokt', $data->kelompokt) }}">
                        @error('kelompokt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
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
                <th class="tg-amwm" rowspan="2">11.2.7</th>
                <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Jumlah Kelompok Informasi
                        Masyarakat
                        menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                        Community Information Groups by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh" colspan="2" rowspan="2"><span
                        style="font-style:normal;color:#000">Kecamatan/</span><br><span
                        style="font-style:italic;color:#000">Subdistrict</span></td>
                <td class="tg-baqh" rowspan="2">{{ $data->tahun }}</td>
                <td class="tg-baqh" rowspan="2">2019</td>
                <td class="tg-baqh" rowspan="2">2020</td>
                <td class="tg-baqh" rowspan="2">2021</td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="2">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">010. Marioriwawo</span></td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">&nbsp;&nbsp;8 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;8 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;8 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">&nbsp;&nbsp;7 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;7 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;7 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">&nbsp;&nbsp;8 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;8 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;8 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">&nbsp;&nbsp;4 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;4 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;4 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">&nbsp;&nbsp;3 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;3 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;3 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                <td class="tg-mwxe">12</td>
                <td class="tg-mwxe">&nbsp;&nbsp;12 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;12 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;12 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span></td>
                <td class="tg-mwxe">9</td>
                <td class="tg-mwxe">&nbsp;&nbsp;9 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;9 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;9 </span></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span></td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">&nbsp;&nbsp;3 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;3 </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;7 </span></td>
            </tr>
            <tr>
                <td class="tg-baqh" colspan="2" rowspan="2"><span
                        style="font-style:normal;color:#000">Jumlah/</span><span style="font-style:italic;color:#000">
                        Total</span></td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;48 </td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;54 </td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;54 </td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;58 </td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumKelompoks() {
            var kelompokElements = document.querySelectorAll('[id^="kelompok"]');
            var kelompokSum = 0;
            for (var i = 0; i < kelompokElements.length; i++) {
                if (kelompokElements[i].id !== "kelompokt") {
                    var kelompokValue = parseFloat(kelompokElements[i].value) || 0;
                    kelompokSum += kelompokValue;
                }
            }
            document.getElementById('kelompokt').value = kelompokSum;
        }

        var kelompokInputs = document.querySelectorAll('[id^="kelompok"]');
        for (var i = 0; i < kelompokInputs.length; i++) {
            kelompokInputs[i].addEventListener('focusout', sumKelompoks);
        }
    </script>
@endsection
