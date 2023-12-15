@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-amwm" rowspan="2">NO</th>
                    <th class="tg-amwm" rowspan="2">JENIS</th>
                    {{-- <th class="tg-8d8j" colspan="2"><span style="font-weight:normal">2021</span></th> --}}
                    <th class="tg-8d8j" colspan="2"><span style="font-weight:normal">{{ $data->tahun }}</span>
                    </th>
                </tr>
                <tr>
                    {{-- <th class="tg-wa1i"><span style="font-weight:bold">TARGET</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">REALISASI</span></th> --}}
                    <th class="tg-wa1i"><span style="font-weight:bold">TARGET</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">REALISASI</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-nrix">1</td>
                    <td class="tg-cly1">Kerikil</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target1') is-invalid @enderror" id="target1" name="target1"
                            value="{{ old('target1', $data->target1) }}">
                        @error('target1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi1') is-invalid @enderror" id="realisasi1"
                            name="realisasi1" value="{{ old('realisasi1', $data->realisasi1) }}">
                        @error('realisasi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">2</td>
                    <td class="tg-cly1">Pasir</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">41,183,910.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target2') is-invalid @enderror" id="target2" name="target2"
                            value="{{ old('target2', $data->target2) }}">
                        @error('target2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi2') is-invalid @enderror" id="realisasi2"
                            name="realisasi2" value="{{ old('realisasi2', $data->realisasi2) }}">
                        @error('realisasi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">3</td>
                    <td class="tg-cly1">Tanah Timbunan</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">8,293,500.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target3') is-invalid @enderror" id="target3" name="target3"
                            value="{{ old('target3', $data->target3) }}">
                        @error('target3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi3') is-invalid @enderror" id="realisasi3"
                            name="realisasi3" value="{{ old('realisasi3', $data->realisasi3) }}">
                        @error('realisasi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">4</td>
                    <td class="tg-cly1">Batu Bata</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">27,740,235.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target4') is-invalid @enderror" id="target4" name="target4"
                            value="{{ old('target4', $data->target4) }}">
                        @error('target4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi4') is-invalid @enderror" id="realisasi4"
                            name="realisasi4" value="{{ old('realisasi4', $data->realisasi4) }}">
                        @error('realisasi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">5</td>
                    <td class="tg-cly1">Batu Pecah</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">20,480,050.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target5') is-invalid @enderror" id="target5" name="target5"
                            value="{{ old('target5', $data->target5) }}">
                        @error('target5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi5') is-invalid @enderror" id="realisasi5"
                            name="realisasi5" value="{{ old('realisasi5', $data->realisasi5) }}">
                        @error('realisasi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">6</td>
                    <td class="tg-cly1">Sirtu</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">6,679,906.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target6') is-invalid @enderror" id="target6" name="target6"
                            value="{{ old('target6', $data->target6) }}">
                        @error('target6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi6') is-invalid @enderror" id="realisasi6"
                            name="realisasi6" value="{{ old('realisasi6', $data->realisasi6) }}">
                        @error('realisasi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">7</td>
                    <td class="tg-cly1">Batu Gunung</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">56,831,637.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target7') is-invalid @enderror" id="target7"
                            name="target7" value="{{ old('target7', $data->target7) }}">
                        @error('target7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi7') is-invalid @enderror" id="realisasi7"
                            name="realisasi7" value="{{ old('realisasi7', $data->realisasi7) }}">
                        @error('realisasi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">8</td>
                    <td class="tg-cly1">Batu Kali</td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">3,973,250.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target8') is-invalid @enderror" id="target8"
                            name="target8" value="{{ old('target8', $data->target8) }}">
                        @error('target8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi8') is-invalid @enderror" id="realisasi8"
                            name="realisasi8" value="{{ old('realisasi8', $data->realisasi8) }}">
                        @error('realisasi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-nrix">9</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya') is-invalid @enderror" id="lainnya"
                            name="lainnya" value="{{ old('lainnya', $data->lainnya) }}">
                        @error('lainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('target9') is-invalid @enderror" id="target9"
                            name="target9" value="{{ old('target9', $data->target9) }}">
                        @error('target9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasi9') is-invalid @enderror" id="realisasi9"
                            name="realisasi9" value="{{ old('realisasi9', $data->realisasi9) }}">
                        @error('realisasi9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-wa1i" colspan="2"><span style="font-weight:bold">JUMLAH</span></td>
                    {{-- <td class="tg-7zrl"></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">165,182,488.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('targett') is-invalid @enderror" id="targett"
                            name="targett" value="{{ old('targett', $data->targett) }}">
                        @error('targett')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('realisasit') is-invalid @enderror" id="realisasit"
                            name="realisasit" value="{{ old('realisasit', $data->realisasit) }}">
                        @error('realisasit')
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
                <th class="tg-amwm" rowspan="2">JENIS</th>
                <th class="tg-8d8j" colspan="2"><span style="font-weight:normal">Tahun t-1</span></th>
                <th class="tg-8d8j" colspan="2"><span style="font-weight:normal">Tahun Berjalan</span></th>

            </tr>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">TARGET</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">REALISASI</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">TARGET</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">REALISASI</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-cly1">Kerikil</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-cly1">Pasir</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-cly1">Tanah Timbunan</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">4</td>
                <td class="tg-cly1">Batu Bata</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-cly1">Batu Pecah</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">6</td>
                <td class="tg-cly1">Sirtu</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">7</td>
                <td class="tg-cly1">Batu Gunung</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">8</td>
                <td class="tg-cly1">Batu Kali</td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">9</td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">10</td>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-wa1i" colspan="2"><span style="font-weight:bold">JUMLAH</span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"><span style="font-weight:normal"></span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-2b7s"></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    <script>
        function sumTargets() {
            var target1 = parseFloat(document.getElementById('target1').value) || 0;
            var target2 = parseFloat(document.getElementById('target2').value) || 0;
            var target3 = parseFloat(document.getElementById('target3').value) || 0;
            var target4 = parseFloat(document.getElementById('target4').value) || 0;
            var target5 = parseFloat(document.getElementById('target5').value) || 0;
            var target6 = parseFloat(document.getElementById('target6').value) || 0;
            var target7 = parseFloat(document.getElementById('target7').value) || 0;
            var target8 = parseFloat(document.getElementById('target8').value) || 0;
            var target9 = parseFloat(document.getElementById('target9').value) || 0;

            var targetSum = parseFloat(target1) + parseFloat(target2) + parseFloat(target3) + parseFloat(target4) +
                parseFloat(
                    target5) + parseFloat(target6) + parseFloat(target7) + parseFloat(target8) + parseFloat(target9);

            document.getElementById('targett').value = targetSum;
        }

        document.getElementById('target1').addEventListener('focusout', sumTargets);
        document.getElementById('target2').addEventListener('focusout', sumTargets);
        document.getElementById('target3').addEventListener('focusout', sumTargets);
        document.getElementById('target4').addEventListener('focusout', sumTargets);
        document.getElementById('target5').addEventListener('focusout', sumTargets);
        document.getElementById('target6').addEventListener('focusout', sumTargets);
        document.getElementById('target7').addEventListener('focusout', sumTargets);
        document.getElementById('target8').addEventListener('focusout', sumTargets);
        document.getElementById('target9').addEventListener('focusout', sumTargets);



        function sumRealisasis() {
            var realisasi1 = parseFloat(document.getElementById('realisasi1').value) || 0;
            var realisasi2 = parseFloat(document.getElementById('realisasi2').value) || 0;
            var realisasi3 = parseFloat(document.getElementById('realisasi3').value) || 0;
            var realisasi4 = parseFloat(document.getElementById('realisasi4').value) || 0;
            var realisasi5 = parseFloat(document.getElementById('realisasi5').value) || 0;
            var realisasi6 = parseFloat(document.getElementById('realisasi6').value) || 0;
            var realisasi7 = parseFloat(document.getElementById('realisasi7').value) || 0;
            var realisasi8 = parseFloat(document.getElementById('realisasi8').value) || 0;
            var realisasi9 = parseFloat(document.getElementById('realisasi9').value) || 0;

            var realisasiSum = parseFloat(realisasi1) + parseFloat(realisasi2) + parseFloat(realisasi3) + parseFloat(
                    realisasi4) +
                parseFloat(
                    realisasi5) + parseFloat(realisasi6) + parseFloat(realisasi7) + parseFloat(realisasi8) + parseFloat(
                    realisasi9);

            document.getElementById('realisasit').value = realisasiSum;
        }

        document.getElementById('realisasi1').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi2').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi3').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi4').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi5').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi6').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi7').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi8').addEventListener('focusout', sumRealisasis);
        document.getElementById('realisasi9').addEventListener('focusout', sumRealisasis);
    </script>
@endsection
