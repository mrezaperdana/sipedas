@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-baqh" rowspan="2">No.</th>
                    <th class="tg-baqh" rowspan="2">Keterangan</th>
                    <th class="tg-baqh" rowspan="2">Wujud/Indikator</th>
                    <th class="tg-baqh" rowspan="2">Satuan Produksi</th>
                    <th class="tg-nrix" colspan="4">{{ $data->tahun }}</th>
                </tr>
                <tr>
                    {{-- <th class="tg-8d8j">2021</th>
                    <th class="tg-8d8j">Nilai</th> --}}
                    <th class="tg-8d8j">Jumlah</th>
                    <th class="tg-8d8j">Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-2b7s">1</td>
                    <td class="tg-7zrl">Gedung</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indikator1') is-invalid @enderror" id="indikator1"
                            name="indikator1" value="{{ old('indikator1', $data->indikator1) }}">
                        @error('indikator1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('satuan1') is-invalid @enderror" id="satuan1" name="satuan1"
                            value="{{ old('satuan1', $data->satuan1) }}">
                        @error('satuan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlah1') is-invalid @enderror" id="jumlah1" name="jumlah1"
                            value="{{ old('jumlah1', $data->jumlah1) }}">
                        @error('jumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nilai1') is-invalid @enderror"
                            id="nilai1" name="nilai1" value="{{ old('nilai1', $data->nilai1) }}">
                        @error('nilai1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-2b7s">2</td>
                    <td class="tg-7zrl">Khusus</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indikator2') is-invalid @enderror" id="indikator2"
                            name="indikator2" value="{{ old('indikator2', $data->indikator2) }}">
                        @error('indikator2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('satuan2') is-invalid @enderror" id="satuan2" name="satuan2"
                            value="{{ old('satuan2', $data->satuan2) }}">
                        @error('satuan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlah2') is-invalid @enderror" id="jumlah2" name="jumlah2"
                            value="{{ old('jumlah2', $data->jumlah2) }}">
                        @error('jumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('nilai2') is-invalid @enderror"
                            id="nilai2" name="nilai2" value="{{ old('nilai2', $data->nilai2) }}">
                        @error('nilai2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-2b7s">3</td>
                    <td class="tg-7zrl">Bangunan Sipil</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indikator3') is-invalid @enderror" id="indikator3"
                            name="indikator3" value="{{ old('indikator3', $data->indikator3) }}">
                        @error('indikator3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('satuan3') is-invalid @enderror" id="satuan3" name="satuan3"
                            value="{{ old('satuan3', $data->satuan3) }}">
                        @error('satuan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlah3') is-invalid @enderror" id="jumlah3" name="jumlah3"
                            value="{{ old('jumlah3', $data->jumlah3) }}">
                        @error('jumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilai3') is-invalid @enderror" id="nilai3" name="nilai3"
                            value="{{ old('nilai3', $data->nilai3) }}">
                        @error('nilai3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-2b7s">4</td>
                    <td class="tg-cly1"><input type="text" step="0.01"
                            class="form-control @error('lainnya') is-invalid @enderror" id="lainnya"
                            name="lainnya" value="{{ old('lainnya', $data->lainnya) }}">
                        @error('lainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indikatorlainnya') is-invalid @enderror"
                            id="indikatorlainnya" name="indikatorlainnya"
                            value="{{ old('indikatorlainnya', $data->indikatorlainnya) }}">
                        @error('indikatorlainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('satuanlainnya') is-invalid @enderror" id="satuanlainnya"
                            name="satuanlainnya" value="{{ old('satuanlainnya', $data->satuanlainnya) }}">
                        @error('satuanlainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahlainnya') is-invalid @enderror" id="jumlahlainnya"
                            name="jumlahlainnya" value="{{ old('jumlahlainnya', $data->jumlahlainnya) }}">
                        @error('jumlahlainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilailainnya') is-invalid @enderror" id="nilailainnya"
                            name="nilailainnya" value="{{ old('nilailainnya', $data->nilailainnya) }}">
                        @error('nilailainnya')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j" colspan="4">Jumlah</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlaht') is-invalid @enderror" id="jumlaht"
                            name="jumlaht" value="{{ old('jumlaht', $data->jumlaht) }}">
                        @error('jumlaht')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('nilait') is-invalid @enderror" id="nilait" name="nilait"
                            value="{{ old('nilait', $data->nilait) }}">
                        @error('nilait')
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
                <th class="tg-baqh" rowspan="2">No.</th>
                <th class="tg-baqh" rowspan="2">Keterangan</th>
                <th class="tg-baqh" rowspan="2">Wujud/Indikator</th>
                <th class="tg-baqh" rowspan="2">Satuan Produksi</th>
                <th class="tg-nrix" colspan="4">Tahun dan Nilai</th>
            </tr>
            <tr>
                <th class="tg-8d8j">2021</th>
                <th class="tg-8d8j">Nilai</th>
                <th class="tg-8d8j">2022</th>
                <th class="tg-8d8j">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-2b7s">1</td>
                <td class="tg-7zrl">Gedung</td>
                <td class="tg-7zrl">Jumlah Proyek</td>
                <td class="tg-7zrl">Proyek</td>
                <td class="tg-2b7s">105</td>
                <td class="tg-2b7s">&nbsp;&nbsp;113,773,276,539.00 </td>
                <td class="tg-7zrl">noinput</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-2b7s">2</td>
                <td class="tg-7zrl">Khusus</td>
                <td class="tg-7zrl">Jumlah Proyek</td>
                <td class="tg-7zrl">Proyek</td>
                <td class="tg-2b7s"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-2b7s">3</td>
                <td class="tg-7zrl">Bangunan Sipil</td>
                <td class="tg-7zrl">Jumlah Proyek</td>
                <td class="tg-7zrl">Proyek</td>
                <td class="tg-2b7s">52</td>
                <td class="tg-2b7s">&nbsp;&nbsp;47,385,348,786.00 </td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-2b7s">4</td>
                <td class="tg-7zrl">Lainnya</td>
                <td class="tg-7zrl">Jumlah Proyek</td>
                <td class="tg-7zrl">Proyek</td>
                <td class="tg-2b7s"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j" colspan="4">Jumlah</td>
                <td class="tg-2b7s">157</td>
                <td class="tg-2b7s">161,158,625,325.00</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    <script>
        function sumjumlahs() {
            var jumlah1 = parseFloat(document.getElementById('jumlah1').value) || 0;
            var jumlah2 = parseFloat(document.getElementById('jumlah2').value) || 0;
            var jumlah3 = parseFloat(document.getElementById('jumlah3').value) || 0;
            var jumlahlainnya = parseFloat(document.getElementById('jumlahlainnya').value) || 0;

            var jumlahSum = (jumlah1) + (jumlah2) + (jumlah3) + (
                jumlahlainnya);

            document.getElementById('jumlaht').value = jumlahSum;
        }

        document.getElementById('jumlah1').addEventListener('focusout', sumjumlahs);
        document.getElementById('jumlah2').addEventListener('focusout', sumjumlahs);
        document.getElementById('jumlah3').addEventListener('focusout', sumjumlahs);
        document.getElementById('jumlahlainnya').addEventListener('focusout', sumjumlahs);
    </script>

    <script>
        function sumnilais() {
            var nilai1 = parseFloat(document.getElementById('nilai1').value) || 0;
            var nilai2 = parseFloat(document.getElementById('nilai2').value) || 0;
            var nilai3 = parseFloat(document.getElementById('nilai3').value) || 0;
            var nilailainnya = parseFloat(document.getElementById('nilailainnya').value) || 0;

            var nilaiSum = (nilai1) + (nilai2) + (nilai3) + (
                nilailainnya);

            document.getElementById('nilait').value = nilaiSum;
        }

        document.getElementById('nilai1').addEventListener('focusout', sumnilais);
        document.getElementById('nilai2').addEventListener('focusout', sumnilais);
        document.getElementById('nilai3').addEventListener('focusout', sumnilais);
        document.getElementById('nilailainnya').addEventListener('focusout', sumnilais);
    </script>
@endsection
