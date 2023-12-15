@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-c3ow" rowspan="2">No.</th>
                    <th class="tg-c3ow" rowspan="2">Komoditas</th>
                    <th class="tg-pb0m" colspan="2"><span style="font-weight:normal">Produksi</span></th>
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
                    {{-- <td class="tg-jkyp"><span style="font-weight:normal">121</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksitembakau') is-invalid @enderror" id="produksitembakau"
                            name="produksitembakau" value="{{ old('produksitembakau', $data->produksitembakau) }}">
                        @error('produksitembakau')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j"><span style="font-weight:normal">2</span></td>
                    <td class="tg-8d8j"><span style="font-weight:normal">Kapas</span></td>
                    {{-- <td class="tg-2b7s"><span style="font-weight:normal">11.29</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksikapas') is-invalid @enderror" id="produksikapas"
                            name="produksikapas" value="{{ old('produksikapas', $data->produksikapas) }}">
                        @error('produksikapas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j" colspan="2"><span style="font-weight:normal">Jumlah</span></td>
                    {{-- <td class="tg-2b7s"><span style="font-weight:normal">132.29</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksitotal') is-invalid @enderror" id="produksitotal"
                            name="produksitotal" value="{{ old('produksitotal', $data->produksitotal) }}">
                        @error('produksitotal')
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
                <th class="tg-pb0m" colspan="2"><span style="font-weight:normal">Produksi</span></th>
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
                <td class="tg-jkyp"><span style="font-weight:normal">121</span></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j"><span style="font-weight:normal">2</span></td>
                <td class="tg-8d8j"><span style="font-weight:normal">Kapas</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">11.29</span></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j" colspan="2"><span style="font-weight:normal">Jumlah</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">132.29</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0</span></td>
            </tr>
        </tbody>

    </table>

@endif
@section('script')
    <script>
        function sumproduksitotals() {
            var produksitembakau = parseFloat(document.getElementById('produksitembakau').value) || 0;
            var produksikapas = parseFloat(document.getElementById('produksikapas').value) || 0;


            var produksitotalSum = (produksitembakau) + (produksikapas);

            document.getElementById('produksitotal').value = produksitotalSum;
        }

        document.getElementById('produksitembakau').addEventListener('focusout', sumproduksitotals);
        document.getElementById('produksikapas').addEventListener('focusout', sumproduksitotals);
    </script>
@endsection
