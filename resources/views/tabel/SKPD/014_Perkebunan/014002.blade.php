@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-c3ow" rowspan="2">No.</th>
                    <th class="tg-c3ow" rowspan="2">Komoditas</th>
                    <th class="tg-pb0m" colspan="2"><span style="font-weight:normal">Harga (Rp)</span></th>
                </tr>
                <tr>
                    {{-- <th class="tg-pb0m"><span style="font-weight:normal">2021</span></th> --}}
                    <th class="tg-2b7s"><span style="font-weight:normal">2022</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-pb0m"><span style="font-weight:normal">1</span></td>
                    <td class="tg-pb0m"><span style="font-weight:normal">Tembakau</span></td>
                    {{-- <td class="tg-za14"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hargatembakau') is-invalid @enderror" id="hargatembakau"
                            name="hargatembakau" value="{{ old('hargatembakau', $data->hargatembakau) }}">
                        @error('hargatembakau')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j"><span style="font-weight:normal">2</span></td>
                    <td class="tg-8d8j"><span style="font-weight:normal">Kapas</span></td>
                    {{-- <td class="tg-7zrl"></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hargakapas') is-invalid @enderror" id="hargakapas"
                            name="hargakapas" value="{{ old('hargakapas', $data->hargakapas) }}">
                        @error('hargakapas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j" colspan="2"><span style="font-weight:normal">Jumlah</span></td>
                    {{-- <td class="tg-2b7s"><span style="font-weight:normal">0.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hargatotal') is-invalid @enderror" id="hargatotal"
                            name="hargatotal" value="{{ old('hargatotal', $data->hargatotal) }}">
                        @error('hargatotal')
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
                <th class="tg-c3ow" rowspan="2">No.</th>
                <th class="tg-c3ow" rowspan="2">Komoditas</th>
                <th class="tg-pb0m" colspan="2"><span style="font-weight:normal">Harga (Rp)</span></th>
            </tr>
            <tr>
                <th class="tg-pb0m"><span style="font-weight:normal">2021</span></th>
                <th class="tg-2b7s"><span style="font-weight:normal">2022</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-pb0m"><span style="font-weight:normal">1</span></td>
                <td class="tg-pb0m"><span style="font-weight:normal">Tembakau</span></td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j"><span style="font-weight:normal">2</span></td>
                <td class="tg-8d8j"><span style="font-weight:normal">Kapas</span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j" colspan="2"><span style="font-weight:normal">Jumlah</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0.00</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0.00</span></td>
            </tr>
        </tbody>

    </table>
@endif
@section('script')
    <script>
        function sumhargatotals() {
            var hargatembakau = parseFloat(document.getElementById('hargatembakau').value) || 0;
            var hargakapas = parseFloat(document.getElementById('hargakapas').value) || 0;


            var hargatotalSum = (hargatembakau) + (hargakapas);

            document.getElementById('hargatotal').value = hargatotalSum;
        }

        document.getElementById('hargatembakau').addEventListener('focusout', sumhargatotals);
        document.getElementById('hargakapas').addEventListener('focusout', sumhargatotals);
    </script>
@endsection
