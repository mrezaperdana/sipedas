@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-amwm" rowspan="2">NO</th>
                    <th class="tg-amwm" rowspan="2">URAIAN</th>
                    {{-- <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2021</span></th> --}}
                    <th class="tg-bobw" colspan="2"><span style="font-weight:bold">{{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    {{-- <th class="tg-bobw"><span style="font-weight:bold">JUMLAH USAHA</span></th>
                    <th class="tg-bobw"><span style="font-weight:bold">OMZET (RUPIAH)</span></th> --}}
                    <th class="tg-bobw"><span style="font-weight:bold">JUMLAH USAHA</span></th>
                    <th class="tg-bobw"><span style="font-weight:bold">OMZET (RUPIAH)</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-bobw"><span style="font-weight:bold">Pasar</span></td>
                    {{-- <td class="tg-bobw"><span style="font-weight:bold">18</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">197,534,892,979</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahusaha1') is-invalid @enderror" id="jumlahusaha1"
                            name="jumlahusaha1" value="{{ old('jumlahusaha1', $data->jumlahusaha1) }}">
                        @error('jumlahusaha1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet1') is-invalid @enderror"
                            id="omzet1" name="omzet1" value="{{ old('omzet1', $data->omzet1) }}">
                        @error('omzet1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-bobw"><span style="font-weight:bold">Toko</span></td>
                    {{-- <td class="tg-bobw"><span style="font-weight:bold">501</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">60,592,484,780</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahusaha2') is-invalid @enderror" id="jumlahusaha2"
                            name="jumlahusaha2" value="{{ old('jumlahusaha2', $data->jumlahusaha2) }}">
                        @error('jumlahusaha2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet2') is-invalid @enderror"
                            id="omzet2" name="omzet2" value="{{ old('omzet2', $data->omzet2) }}">
                        @error('omzet2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-bobw"><span style="font-weight:bold">Kios/Warung</span></td>
                    {{-- <td class="tg-bobw"><span style="font-weight:bold">508</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">6,347,260,000</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahusaha3') is-invalid @enderror" id="jumlahusaha3"
                            name="jumlahusaha3" value="{{ old('jumlahusaha3', $data->jumlahusaha3) }}">
                        @error('jumlahusaha3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet3') is-invalid @enderror"
                            id="omzet3" name="omzet3" value="{{ old('omzet3', $data->omzet3) }}">
                        @error('omzet3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-bobw"><span style="font-weight:bold">Minimarket</span></td>
                    {{-- <td class="tg-bobw"><span style="font-weight:bold">23</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">123,271,397,625</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahusaha4') is-invalid @enderror" id="jumlahusaha4"
                            name="jumlahusaha4" value="{{ old('jumlahusaha4', $data->jumlahusaha4) }}">
                        @error('jumlahusaha4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet4') is-invalid @enderror"
                            id="omzet4" name="omzet4" value="{{ old('omzet4', $data->omzet4) }}">
                        @error('omzet4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya') is-invalid @enderror" id="lainnya" name="lainnya"
                            value="{{ old('lainnya', $data->lainnya) }}">
                        @error('lainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    {{-- <td class="tg-bobw"></td>
                    <td class="tg-bobw"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahusaha5') is-invalid @enderror" id="jumlahusaha5"
                            name="jumlahusaha5" value="{{ old('jumlahusaha5', $data->jumlahusaha5) }}">
                        @error('jumlahusaha5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('omzet5') is-invalid @enderror" id="omzet5" name="omzet5"
                            value="{{ old('omzet5', $data->omzet5) }}">
                        @error('omzet5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td class="tg-bobw" colspan="2"><span style="font-weight:bold">JUMLAH</span></td>
                    {{-- <td class="tg-bobw"><span style="font-weight:bold">1050</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">387,746,035,384</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahusahat') is-invalid @enderror" id="jumlahusahat"
                            name="jumlahusahat" value="{{ old('jumlahusahat', $data->jumlahusahat) }}">
                        @error('jumlahusahat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('omzett') is-invalid @enderror" id="omzett" name="omzett"
                            value="{{ old('omzett', $data->omzett) }}">
                        @error('omzett')
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
                <th class="tg-amwm" rowspan="2">URAIAN</th>
                <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2021</span></th>
                <th class="tg-bobw" colspan="2"><span style="font-weight:bold">2022</span></th>
            </tr>
            <tr>
                <th class="tg-bobw"><span style="font-weight:bold">JUMLAH USAHA</span></th>
                <th class="tg-bobw"><span style="font-weight:bold">OMZET (RUPIAH)</span></th>
                <th class="tg-bobw"><span style="font-weight:bold">JUMLAH USAHA</span></th>
                <th class="tg-bobw"><span style="font-weight:bold">OMZET (RUPIAH)</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-bobw"><span style="font-weight:bold">Pasar</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">18</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">197,534,892,979</span></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-bobw"><span style="font-weight:bold">Toko</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">501</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">60,592,484,780</span></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-bobw"><span style="font-weight:bold">Kios/Warung</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">508</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">6,347,260,000</span></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-bobw"><span style="font-weight:bold">Minimarket</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">23</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">123,271,397,625</span></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
                <td class="tg-bobw"></td>
            </tr>

            <tr>
                <td class="tg-bobw" colspan="2"><span style="font-weight:bold">JUMLAH</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">1050</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">387,746,035,384</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">0</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">0</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    <script>
        function sumOmzets() {
            var omzet1 = parseFloat(document.getElementById('omzet1').value) || 0;
            var omzet2 = parseFloat(document.getElementById('omzet2').value) || 0;
            var omzet3 = parseFloat(document.getElementById('omzet3').value) || 0;
            var omzet4 = parseFloat(document.getElementById('omzet4').value) || 0;
            var omzet5 = parseFloat(document.getElementById('omzet5').value) || 0;


            var omzetSum = (omzet1) + (omzet2) + (omzet3) + (omzet4) + (
                omzet5);

            document.getElementById('omzett').value = omzetSum;
        }

        document.getElementById('omzet1').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet2').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet3').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet4').addEventListener('focusout', sumOmzets);
        document.getElementById('omzet5').addEventListener('focusout', sumOmzets);
    </script>
    <script>
        function sumJumlahusahas() {
            var jumlahusaha1 = parseFloat(document.getElementById('jumlahusaha1').value) || 0;
            var jumlahusaha2 = parseFloat(document.getElementById('jumlahusaha2').value) || 0;
            var jumlahusaha3 = parseFloat(document.getElementById('jumlahusaha3').value) || 0;
            var jumlahusaha4 = parseFloat(document.getElementById('jumlahusaha4').value) || 0;
            var jumlahusaha5 = parseFloat(document.getElementById('jumlahusaha5').value) || 0;

            var jumlahusahaSum = (jumlahusaha1) + (jumlahusaha2) + (jumlahusaha3) + (
                jumlahusaha4) + (
                jumlahusaha5);

            document.getElementById('jumlahusahat').value = jumlahusahaSum;
        }

        document.getElementById('jumlahusaha1').addEventListener('focusout', sumJumlahusahas);
        document.getElementById('jumlahusaha2').addEventListener('focusout', sumJumlahusahas);
        document.getElementById('jumlahusaha3').addEventListener('focusout', sumJumlahusahas);
        document.getElementById('jumlahusaha4').addEventListener('focusout', sumJumlahusahas);
        document.getElementById('jumlahusaha5').addEventListener('focusout', sumJumlahusahas);
    </script>
@endsection
