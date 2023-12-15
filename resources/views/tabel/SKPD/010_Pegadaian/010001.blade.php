@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-baqh" rowspan="2">NO</th>
                    <th class="tg-baqh" rowspan="2">KANTOR CABANG/UNIT PEGADAIAN</th>
                    {{-- <th class="tg-nrix" colspan="2">2021</th> --}}
                    <th class="tg-nrix" colspan="2">2022</th>
                </tr>
                <tr>
                    {{-- <th class="tg-nrix">NILAI OMZET (Rp)</th>
                    <th class="tg-nrix">NILAI LABA (Rp)</th> --}}
                    <th class="tg-nrix">NILAI OMZET (Rp)</th>
                    <th class="tg-nrix">NILAI LABA (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-nrix">Cabang Watansoppeng</td>
                    {{-- <td class="tg-nrix">58,367,131,405.00</td>
                    <td class="tg-nrix">2,154,691,332.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet1') is-invalid @enderror"
                            id="omzet1" name="omzet1" value="{{ old('omzet1', $data->omzet1) }}">
                        @error('omzet1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('laba1') is-invalid @enderror"
                            id="laba1" name="laba1" value="{{ old('laba1', $data->laba1) }}">
                        @error('laba1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">2</td>
                    <td class="tg-nrix">UPC Takalala</td>
                    {{-- <td class="tg-2b7s"><span style="font-weight:normal">38,543,743,050.00</span></td>
                    <td class="tg-nrix">2,379,832,997.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet2') is-invalid @enderror"
                            id="omzet2" name="omzet2" value="{{ old('omzet2', $data->omzet2) }}">
                        @error('omzet2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('laba2') is-invalid @enderror"
                            id="laba2" name="laba2" value="{{ old('laba2', $data->laba2) }}">
                        @error('laba2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">3</td>
                    <td class="tg-nrix">UPC Batu-Batu</td>
                    {{-- <td class="tg-nrix">44,114,556,080.00</td>
                    <td class="tg-nrix">2,432,973,670.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet3') is-invalid @enderror"
                            id="omzet3" name="omzet3" value="{{ old('omzet3', $data->omzet3) }}">
                        @error('omzet3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('laba3') is-invalid @enderror"
                            id="laba3" name="laba3" value="{{ old('laba3', $data->laba3) }}">
                        @error('laba3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">4</td>
                    <td class="tg-nrix">UPC Malaka Raya</td>
                    {{-- <td class="tg-nrix">27,850,743,350.00</td>
                    <td class="tg-nrix">1,613,318,602.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet4') is-invalid @enderror"
                            id="omzet4" name="omzet4" value="{{ old('omzet4', $data->omzet4) }}">
                        @error('omzet4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('laba4') is-invalid @enderror"
                            id="laba4" name="laba4" value="{{ old('laba4', $data->laba4) }}">
                        @error('laba4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">5</td>
                    <td class="tg-nrix">UPC Tajuncu</td>
                    {{-- <td class="tg-nrix">40,255,248,200.00</td>
                    <td class="tg-nrix">2,197,524,486.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet5') is-invalid @enderror"
                            id="omzet5" name="omzet5" value="{{ old('omzet5', $data->omzet5) }}">
                        @error('omzet5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('laba5') is-invalid @enderror"
                            id="laba5" name="laba5" value="{{ old('laba5', $data->laba5) }}">
                        @error('laba5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">6</td>
                    <td class="tg-nrix">UPC Panincong</td>
                    {{-- <td class="tg-nrix">18,304,245,700.00</td>
                    <td class="tg-nrix">858,485,341.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('omzet6') is-invalid @enderror" id="omzet6" name="omzet6"
                            value="{{ old('omzet6', $data->omzet6) }}">
                        @error('omzet6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('laba6') is-invalid @enderror" id="laba6" name="laba6"
                            value="{{ old('laba6', $data->laba6) }}">
                        @error('laba6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">7</td>
                    <td class="tg-nrix">UPC Lappariaja</td>
                    {{-- <td class="tg-nrix">20,629,033,130.00</td>
                    <td class="tg-nrix">804,478,872.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('omzet7') is-invalid @enderror" id="omzet7" name="omzet7"
                            value="{{ old('omzet7', $data->omzet7) }}">
                        @error('omzet7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('laba7') is-invalid @enderror" id="laba7" name="laba7"
                            value="{{ old('laba7', $data->laba7) }}">
                        @error('laba7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">8</td>
                    <td class="tg-nrix">UPC Pasar Lolloe</td>
                    {{-- <td class="tg-nrix">17,349,361,950.00</td>
                    <td class="tg-nrix">984,919,912.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('omzet8') is-invalid @enderror" id="omzet8" name="omzet8"
                            value="{{ old('omzet8', $data->omzet8) }}">
                        @error('omzet8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('laba8') is-invalid @enderror" id="laba8" name="laba8"
                            value="{{ old('laba8', $data->laba8) }}">
                        @error('laba8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix" colspan="2">JUMLAH</td>
                    {{-- <td class="tg-nrix">265,414,062,865.00</td>
                    <td class="tg-nrix">13,426,225,212.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('omzett') is-invalid @enderror" id="omzett" name="omzett"
                            value="{{ old('omzett', $data->omzett) }}">
                        @error('omzett')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('labat') is-invalid @enderror" id="labat" name="labat"
                            value="{{ old('labat', $data->labat) }}">
                        @error('labat')
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-baqh" rowspan="2">NO</th>
                <th class="tg-baqh" rowspan="2">KANTOR CABANG/UNIT PEGADAIAN</th>
                <th class="tg-nrix" colspan="2">2021</th>
                <th class="tg-nrix" colspan="2">2022</th>
            </tr>
            <tr>
                <th class="tg-nrix">NILAI OMZET (Rp)</th>
                <th class="tg-nrix">NILAI LABA (Rp)</th>
                <th class="tg-nrix">NILAI OMZET (Rp)</th>
                <th class="tg-nrix">NILAI LABA (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-nrix">Cabang Watansoppeng</td>
                <td class="tg-nrix">58,367,131,405.00</td>
                <td class="tg-nrix">2,154,691,332.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-nrix">UPC Takalala</td>
                <td class="tg-2b7s"><span style="font-weight:normal">38,543,743,050.00</span></td>
                <td class="tg-nrix">2,379,832,997.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-nrix">UPC Batu-Batu</td>
                <td class="tg-nrix">44,114,556,080.00</td>
                <td class="tg-nrix">2,432,973,670.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">4</td>
                <td class="tg-nrix">UPC Malaka Raya</td>
                <td class="tg-nrix">27,850,743,350.00</td>
                <td class="tg-nrix">1,613,318,602.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-nrix">UPC Tajuncu</td>
                <td class="tg-nrix">40,255,248,200.00</td>
                <td class="tg-nrix">2,197,524,486.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">6</td>
                <td class="tg-nrix">UPC Panincong</td>
                <td class="tg-nrix">18,304,245,700.00</td>
                <td class="tg-nrix">858,485,341.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">7</td>
                <td class="tg-nrix">UPC Lappariaja</td>
                <td class="tg-nrix">20,629,033,130.00</td>
                <td class="tg-nrix">804,478,872.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">8</td>
                <td class="tg-nrix">UPC Pasar Lolloe</td>
                <td class="tg-nrix">17,349,361,950.00</td>
                <td class="tg-nrix">984,919,912.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="2">JUMLAH</td>
                <td class="tg-nrix">265,414,062,865.00</td>
                <td class="tg-nrix">13,426,225,212.00</td>
                <td class="tg-nrix">0.00</td>
                <td class="tg-nrix">0.00</td>
            </tr>
        </tbody>
    </table>
@endif

@section('script')
    <script>
        function sumLabas() {
            var laba1 = parseFloat(document.getElementById('laba1').value) || 0;
            var laba2 = parseFloat(document.getElementById('laba2').value) || 0;
            var laba3 = parseFloat(document.getElementById('laba3').value) || 0;
            var laba4 = parseFloat(document.getElementById('laba4').value) || 0;
            var laba5 = parseFloat(document.getElementById('laba5').value) || 0;
            var laba6 = parseFloat(document.getElementById('laba6').value) || 0;
            var laba7 = parseFloat(document.getElementById('laba7').value) || 0;
            var laba8 = parseFloat(document.getElementById('laba8').value) || 0;

            var labaSum = (laba1) + (laba2) + (laba3) + (laba4) + (
                laba5) + (laba6) + (laba7) + (laba8);

            document.getElementById('labat').value = labaSum;
        }

        document.getElementById('laba1').addEventListener('focusout', sumLabas);
        document.getElementById('laba2').addEventListener('focusout', sumLabas);
        document.getElementById('laba3').addEventListener('focusout', sumLabas);
        document.getElementById('laba4').addEventListener('focusout', sumLabas);
        document.getElementById('laba5').addEventListener('focusout', sumLabas);
        document.getElementById('laba6').addEventListener('focusout', sumLabas);
        document.getElementById('laba7').addEventListener('focusout', sumLabas);
        document.getElementById('laba8').addEventListener('focusout', sumLabas);
    </script>
    <script>
        function sumOmzets() {
            var omzet1 = parseFloat(document.getElementById('omzet1').value) || 0;
            var omzet2 = parseFloat(document.getElementById('omzet2').value) || 0;
            var omzet3 = parseFloat(document.getElementById('omzet3').value) || 0;
            var omzet4 = parseFloat(document.getElementById('omzet4').value) || 0;
            var omzet5 = parseFloat(document.getElementById('omzet5').value) || 0;
            var omzet6 = parseFloat(document.getElementById('omzet6').value) || 0;
            var omzet7 = parseFloat(document.getElementById('omzet7').value) || 0;
            var omzet8 = parseFloat(document.getElementById('omzet8').value) || 0;

            var omzetSum = (omzet1) + (omzet2) + (omzet3) + (omzet4) + (
                omzet5) + (omzet6) + (omzet7) + (omzet8);

            document.getElementById('omzett').value = omzetSum;
        }

        document.getElementById('omzet1').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet2').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet3').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet4').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet5').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet6').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet7').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet8').addEventListener('focusout', sumOmzets);
    </script>
@endsection
