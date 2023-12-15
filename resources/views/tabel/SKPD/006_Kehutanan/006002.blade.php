@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-c3ow" rowspan="2">Bulan</th>
                    <th class="tg-pb0m" colspan="2"><span style="font-weight:normal">Produksi</span></th>
                </tr>
                <tr>
                    {{-- <th class="tg-jkyp"><span style="font-weight:normal">2021</span></th> --}}
                    <th class="tg-jkyp"><span style="font-weight:normal">2022</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Januari</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">7210</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p1') is-invalid @enderror"
                            id="p1" name="p1" value="{{ old('p1', $data->p1) }}">
                        @error('p1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Februari</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">29059</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p2') is-invalid @enderror"
                            id="p2" name="p2" value="{{ old('p2', $data->p2) }}">
                        @error('p2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Maret</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">20200</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p3') is-invalid @enderror"
                            id="p3" name="p3" value="{{ old('p3', $data->p3) }}">
                        @error('p3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">April</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">74899</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p4') is-invalid @enderror"
                            id="p4" name="p4" value="{{ old('p4', $data->p4) }}">
                        @error('p4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Mei</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">65726</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p5') is-invalid @enderror"
                            id="p5" name="p5" value="{{ old('p5', $data->p5) }}">
                        @error('p5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Juni</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">63475</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p6') is-invalid @enderror"
                            id="p6" name="p6" value="{{ old('p6', $data->p6) }}">
                        @error('p6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Juli</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">41155</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p7') is-invalid @enderror"
                            id="p7" name="p7" value="{{ old('p7', $data->p7) }}">
                        @error('p7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Agustus</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">52306</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p8') is-invalid @enderror"
                            id="p8" name="p8" value="{{ old('p8', $data->p8) }}">
                        @error('p8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">September</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">77842</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p9') is-invalid @enderror"
                            id="p9" name="p9" value="{{ old('p9', $data->p9) }}">
                        @error('p9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Oktober</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">91076</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('p10') is-invalid @enderror"
                            id="p10" name="p10" value="{{ old('p10', $data->p10) }}">
                        @error('p10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">November</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">5150</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('p11') is-invalid @enderror" id="p11" name="p11"
                            value="{{ old('p11', $data->p11) }}">
                        @error('p11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Desember</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">0</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('p12') is-invalid @enderror" id="p12" name="p12"
                            value="{{ old('p12', $data->p12) }}">
                        @error('p12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-za14"><span style="font-weight:normal">Jumlah</span></td>
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">528098</span></td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('pt') is-invalid @enderror"
                            id="pt" name="pt" value="{{ old('pt', $data->pt) }}">
                        @error('pt')
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
                <th class="tg-c3ow" rowspan="2">Bulan</th>
                <th class="tg-pb0m" colspan="2"><span style="font-weight:normal">Produksi</span></th>
            </tr>
            <tr>
                <th class="tg-jkyp"><span style="font-weight:normal">2021</span></th>
                <th class="tg-jkyp"><span style="font-weight:normal">2022</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Januari</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Februari</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Maret</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">April</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Mei</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Juni</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Juli</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Agustus</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">September</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Oktober</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">November</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Desember</span></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-za14"><span style="font-weight:normal">Jumlah</span></td>
                <td class="tg-jkyp"><span style="font-weight:normal">0</span></td>
                <td class="tg-jkyp"><span style="font-weight:normal">0</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    <script>
        function sumHs() {
            var h1 = parseFloat(document.getElementById('h1').value) || 0;
            var h2 = parseFloat(document.getElementById('h2').value) || 0;
            var h3 = parseFloat(document.getElementById('h3').value) || 0;
            var h4 = parseFloat(document.getElementById('h4').value) || 0;
            var h5 = parseFloat(document.getElementById('h5').value) || 0;
            var h6 = parseFloat(document.getElementById('h6').value) || 0;
            var h7 = parseFloat(document.getElementById('h7').value) || 0;
            var h8 = parseFloat(document.getElementById('h8').value) || 0;
            var h9 = parseFloat(document.getElementById('h9').value) || 0;
            var h10 = parseFloat(document.getElementById('h10').value) || 0;
            var h11 = parseFloat(document.getElementById('h11').value) || 0;
            var h12 = parseFloat(document.getElementById('h12').value) || 0;
            var hSum = (h1) + (h2) + (h3) + (h4) + (
                h5) + (h6) + (h7) + (h8) + (h9) + (
                h10) + (
                h11) + (h12);

            document.getElementById('ht').value = hSum;
        }

        document.getElementById('h1').addEventListener('focusout', sumHs);
        document.getElementById('h2').addEventListener('focusout', sumHs);
        document.getElementById('h3').addEventListener('focusout', sumHs);
        document.getElementById('h4').addEventListener('focusout', sumHs);
        document.getElementById('h5').addEventListener('focusout', sumHs);
        document.getElementById('h6').addEventListener('focusout', sumHs);
        document.getElementById('h7').addEventListener('focusout', sumHs);
        document.getElementById('h8').addEventListener('focusout', sumHs);
        document.getElementById('h9').addEventListener('focusout', sumHs);
        document.getElementById('h10').addEventListener('focusout', sumHs);
        document.getElementById('h11').addEventListener('focusout', sumHs);
        document.getElementById('h12').addEventListener('focusout', sumHs);
    </script>
@endsection
