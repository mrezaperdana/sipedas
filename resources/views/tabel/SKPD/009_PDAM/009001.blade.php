@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-amwm" rowspan="2">NO</th>
                    <th class="tg-amwm" rowspan="2">BULAN</th>
                    {{-- <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2021</span></th> --}}
                    <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2022</span></th>
                </tr>
                <tr>
                    {{-- <th class="tg-wa1i"><span style="font-weight:bold">PRODUKSI AIR BERSIH (M3) AIR YANG
                            DIDISTRIBUSIKAN</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">HARGA</span></th> --}}
                    <th class="tg-wa1i"><span style="font-weight:bold">PRODUKSI AIR BERSIH (M3) AIR YANG
                            DIDISTRIBUSIKAN</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">HARGA</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-7zrl">Januari</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi1') is-invalid @enderror" id="produksi1"
                            name="produksi1" value="{{ old('produksi1', $data->produksi1) }}">
                        @error('produksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text" class="form-control @error('harga1') is-invalid @enderror"
                            id="harga1" name="harga1" value="{{ old('harga1', $data->harga1) }}">
                        @error('harga1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-7zrl">Februari</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi2') is-invalid @enderror" id="produksi2"
                            name="produksi2" value="{{ old('produksi2', $data->produksi2) }}">
                        @error('produksi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text" class="form-control @error('harga2') is-invalid @enderror"
                            id="harga2" name="harga2" value="{{ old('harga2', $data->harga2) }}">
                        @error('harga2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-7zrl">Maret</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi3') is-invalid @enderror" id="produksi3"
                            name="produksi3" value="{{ old('produksi3', $data->produksi3) }}">
                        @error('produksi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text" class="form-control @error('harga3') is-invalid @enderror"
                            id="harga3" name="harga3" value="{{ old('harga3', $data->harga3) }}">
                        @error('harga3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-7zrl">April</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi4') is-invalid @enderror" id="produksi4"
                            name="produksi4" value="{{ old('produksi4', $data->produksi4) }}">
                        @error('produksi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text" class="form-control @error('harga4') is-invalid @enderror"
                            id="harga4" name="harga4" value="{{ old('harga4', $data->harga4) }}">
                        @error('harga4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-7zrl">Mei</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi5') is-invalid @enderror" id="produksi5"
                            name="produksi5" value="{{ old('produksi5', $data->produksi5) }}">
                        @error('produksi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text" class="form-control @error('harga5') is-invalid @enderror"
                            id="harga5" name="harga5" value="{{ old('harga5', $data->harga5) }}">
                        @error('harga5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-7zrl">Juni</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi6') is-invalid @enderror" id="produksi6"
                            name="produksi6" value="{{ old('produksi6', $data->produksi6) }}">
                        @error('produksi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga6') is-invalid @enderror" id="harga6" name="harga6"
                            value="{{ old('harga6', $data->harga6) }}">
                        @error('harga6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-7zrl">Juli</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi7') is-invalid @enderror" id="produksi7"
                            name="produksi7" value="{{ old('produksi7', $data->produksi7) }}">
                        @error('produksi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga7') is-invalid @enderror" id="harga7" name="harga7"
                            value="{{ old('harga7', $data->harga7) }}">
                        @error('harga7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">8</td>
                    <td class="tg-7zrl">Agustus</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi8') is-invalid @enderror" id="produksi8"
                            name="produksi8" value="{{ old('produksi8', $data->produksi8) }}">
                        @error('produksi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga8') is-invalid @enderror" id="harga8" name="harga8"
                            value="{{ old('harga8', $data->harga8) }}">
                        @error('harga8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">9</td>
                    <td class="tg-7zrl">September</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi9') is-invalid @enderror" id="produksi9"
                            name="produksi9" value="{{ old('produksi9', $data->produksi9) }}">
                        @error('produksi9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga9') is-invalid @enderror" id="harga9" name="harga9"
                            value="{{ old('harga9', $data->harga9) }}">
                        @error('harga9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">10</td>
                    <td class="tg-7zrl">Oktober</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi10') is-invalid @enderror" id="produksi10"
                            name="produksi10" value="{{ old('produksi10', $data->produksi10) }}">
                        @error('produksi10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga10') is-invalid @enderror" id="harga10"
                            name="harga10" value="{{ old('harga10', $data->harga10) }}">
                        @error('harga10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">11</td>
                    <td class="tg-7zrl">November</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi11') is-invalid @enderror" id="produksi11"
                            name="produksi11" value="{{ old('produksi11', $data->produksi11) }}">
                        @error('produksi11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga11') is-invalid @enderror" id="harga11"
                            name="harga11" value="{{ old('harga11', $data->harga11) }}">
                        @error('harga11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">12</td>
                    <td class="tg-7zrl">Desember</td>
                    {{-- <td class="tg-xj7a"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi12') is-invalid @enderror" id="produksi12"
                            name="produksi12" value="{{ old('produksi12', $data->produksi12) }}">
                        @error('produksi12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('harga12') is-invalid @enderror" id="harga12"
                            name="harga12" value="{{ old('harga12', $data->harga12) }}">
                        @error('harga12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-bobw" colspan="2"><span style="font-weight:bold">JUMLAH</span></td>
                    {{-- <td class="tg-mukt"><span style="font-weight:normal;background-color:#FF0">0</span></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">0</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksit') is-invalid @enderror" id="produksit"
                            name="produksit" value="{{ old('produksit', $data->produksit) }}">
                        @error('produksit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hargat') is-invalid @enderror" id="hargat" name="hargat"
                            value="{{ old('hargat', $data->hargat) }}">
                        @error('hargat')
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
                <th class="tg-amwm" rowspan="2">NO</th>
                <th class="tg-amwm" rowspan="2">BULAN</th>
                <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2021</span></th>
                <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2022</span></th>
            </tr>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">PRODUKSI AIR BERSIH (M3) AIR YANG
                        DIDISTRIBUSIKAN</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">HARGA</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">PRODUKSI AIR BERSIH (M3) AIR YANG
                        DIDISTRIBUSIKAN</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">HARGA</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-7zrl">Januari</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-7zrl">Februari</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-7zrl">Maret</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-7zrl">April</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-7zrl">Mei</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-7zrl">Juni</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-7zrl">Juli</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">8</td>
                <td class="tg-7zrl">Agustus</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">9</td>
                <td class="tg-7zrl">September</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">10</td>
                <td class="tg-7zrl">Oktober</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">11</td>
                <td class="tg-7zrl">November</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">12</td>
                <td class="tg-7zrl">Desember</td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-xj7a"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-bobw" colspan="2"><span style="font-weight:bold">JUMLAH</span></td>
                <td class="tg-mukt"><span style="font-weight:normal;background-color:#FF0">0</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0</span></td>
                <td class="tg-mukt"><span style="font-weight:normal;background-color:#FF0">0</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    <script>
        function sumProduksis() {
            var produksi1 = parseFloat(document.getElementById('produksi1').value) || 0;
            var produksi2 = parseFloat(document.getElementById('produksi2').value) || 0;
            var produksi3 = parseFloat(document.getElementById('produksi3').value) || 0;
            var produksi4 = parseFloat(document.getElementById('produksi4').value) || 0;
            var produksi5 = parseFloat(document.getElementById('produksi5').value) || 0;
            var produksi6 = parseFloat(document.getElementById('produksi6').value) || 0;
            var produksi7 = parseFloat(document.getElementById('produksi7').value) || 0;
            var produksi8 = parseFloat(document.getElementById('produksi8').value) || 0;
            var produksi9 = parseFloat(document.getElementById('produksi9').value) || 0;
            var produksi10 = parseFloat(document.getElementById('produksi10').value) || 0;
            var produksi11 = parseFloat(document.getElementById('produksi11').value) || 0;
            var produksi12 = parseFloat(document.getElementById('produksi12').value) || 0;
            var produksiSum = (produksi1) + (produksi2) + (produksi3) + (produksi4) +
                (
                    produksi5) + (produksi6) + (produksi7) + (produksi8) + (produksi9) +
                (
                    produksi10) + (
                    produksi11) + (produksi12);

            document.getElementById('produksit').value = produksiSum;
        }

        document.getElementById('produksi1').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi2').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi3').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi4').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi5').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi6').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi7').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi8').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi9').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi10').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi11').addEventListener('focusout', sumProduksis);
        document.getElementById('produksi12').addEventListener('focusout', sumProduksis);
    </script>
    <script>
        function sumHargas() {
            var harga1 = parseFloat(document.getElementById('harga1').value) || 0;
            var harga2 = parseFloat(document.getElementById('harga2').value) || 0;
            var harga3 = parseFloat(document.getElementById('harga3').value) || 0;
            var harga4 = parseFloat(document.getElementById('harga4').value) || 0;
            var harga5 = parseFloat(document.getElementById('harga5').value) || 0;
            var harga6 = parseFloat(document.getElementById('harga6').value) || 0;
            var harga7 = parseFloat(document.getElementById('harga7').value) || 0;
            var harga8 = parseFloat(document.getElementById('harga8').value) || 0;
            var harga9 = parseFloat(document.getElementById('harga9').value) || 0;
            var harga10 = parseFloat(document.getElementById('harga10').value) || 0;
            var harga11 = parseFloat(document.getElementById('harga11').value) || 0;
            var harga12 = parseFloat(document.getElementById('harga12').value) || 0;
            var hargaSum = (harga1) + (harga2) + (harga3) + (harga4) + (
                harga5) + (harga6) + (harga7) + (harga8) + (harga9) + (
                harga10) + (
                harga11) + (harga12);

            document.getElementById('hargat').value = hargaSum;
        }

        document.getElementById('harga1').addEventListener('focusout', sumHargas);
        document.getElementById('harga2').addEventListener('focusout', sumHargas);
        document.getElementById('harga3').addEventListener('focusout', sumHargas);
        document.getElementById('harga4').addEventListener('focusout', sumHargas);
        document.getElementById('harga5').addEventListener('focusout', sumHargas);
        document.getElementById('harga6').addEventListener('focusout', sumHargas);
        document.getElementById('harga7').addEventListener('focusout', sumHargas);
        document.getElementById('harga8').addEventListener('focusout', sumHargas);
        document.getElementById('harga9').addEventListener('focusout', sumHargas);
        document.getElementById('harga10').addEventListener('focusout', sumHargas);
        document.getElementById('harga11').addEventListener('focusout', sumHargas);
        document.getElementById('harga12').addEventListener('focusout', sumHargas);
    </script>
@endsection
