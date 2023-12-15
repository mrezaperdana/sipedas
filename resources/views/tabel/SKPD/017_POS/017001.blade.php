@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-bobw"><span style="font-weight:bold">Uraian</span></th>
                    {{-- <th class="tg-bobw"><span style="font-weight:bold">2021</span></th> --}}
                    <th class="tg-kex3"><span style="font-weight:bold">{{ $data->tahun }}
                        </span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-cly1">Jumlah Pengiriman</td>
                    {{-- <td class="tg-mwxe"><span style="font-weight:normal">34,747.00</span></td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jumlahpengiriman') is-invalid @enderror" id="jumlahpengiriman"
                            name="jumlahpengiriman" value="{{ old('jumlahpengiriman', $data->jumlahpengiriman) }}">
                        @error('jumlahpengiriman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <table class="table table-bordered">
                    <tr>
                        <td class="tg-cly1">Nilai Pengiriman</td>
                        {{-- <td class="tg-mwxe"><span style="font-weight:normal">390,310,328.00</span></td> --}}
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('nilaipengiriman') is-invalid @enderror" id="nilaipengiriman"
                                name="nilaipengiriman" value="{{ old('nilaipengiriman', $data->nilaipengiriman) }}">
                            @error('nilaipengiriman')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">Jumlah Penerimaan</td>
                        {{-- <td class="tg-mwxe"><span style="font-weight:normal">24,873.00</span></td> --}}
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlahpenerimaan') is-invalid @enderror"
                                id="jumlahpenerimaan" name="jumlahpenerimaan"
                                value="{{ old('jumlahpenerimaan', $data->jumlahpenerimaan) }}">
                            @error('jumlahpenerimaan')
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
                <th class="tg-bobw"><span style="font-weight:bold">Uraian</span></th>
                <th class="tg-bobw"><span style="font-weight:bold">2021</span></th>
                <th class="tg-kex3"><span style="font-weight:bold">2022</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1">Jumlah Pengiriman</td>
                <td class="tg-mwxe"><span style="font-weight:normal">34,747.00</span></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-cly1">Nilai Pengiriman</td>
                <td class="tg-mwxe"><span style="font-weight:normal">390,310,328.00</span></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-cly1">Jumlah Penerimaan</td>
                <td class="tg-mwxe"><span style="font-weight:normal">24,873.00</span></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>
@endif
