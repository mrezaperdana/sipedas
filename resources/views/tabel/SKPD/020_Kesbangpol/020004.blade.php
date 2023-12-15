@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">3.3.5</th>
                    <th>Jumlah Kunjungan dan Tinggal Orang Asing di Kabupaten soppeng, 2018-2022</th>
                </tr>
                <tr>
                    <th>Table</th>
                    <th>Number of Visits and Stay of Foreigners in Soppeng Regency, 2018-2022</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2" colspan="2">Kegiatan/Activity</td>
                    <td colspan="2">Tahun/Year</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $data->tahun }}</td>
                </tr>
                <tr>
                    <td colspan="2">(1)</td>
                    <td colspan="2">(2)</td>
                </tr>
                <tr>
                    <td colspan="2">Kunjungan/Visit</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kunjungan') is-invalid @enderror" id="kunjungan"
                            name="kunjungan" value="{{ old('kunjungan', $data->kunjungan) }}">
                        @error('kunjungan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Pekerja/Tinggal/Lainnya/ Worker/Stay/Others</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pekerja') is-invalid @enderror" id="pekerja" name="pekerja"
                            value="{{ old('pekerja', $data->pekerja) }}">
                        @error('pekerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> Jumlah/Total</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('total') is-invalid @enderror"
                            id="total" name="total" value="{{ old('total', $data->total) }}">
                        @error('total')
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
    {{-- tabel kosongan disini --}}
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tabel</th>
                <th rowspan="2">3.3.5</th>
                <th>Jumlah Kunjungan dan Tinggal Orang Asing di Kabupaten soppeng, 2018-2022</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Table</th>
                <th>Number of Visits and Stay of Foreigners in Soppeng Regency, 2018-2022</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">Kegiatan/Activity</td>
                <td colspan="5">Tahun/</td>
            </tr>
            <tr>
                <td colspan="5">Year</td>
            </tr>
            <tr>
                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
            </tr>
            <tr>
                <td>(1)</td>
                <td>(3)</td>
                <td>(4)</td>
                <td>(5)</td>
                <td>(6)</td>
            </tr>
            <tr>
                <td>Kunjungan/Visit</td>
                <td>80</td>
                <td>80</td>
                <td>-</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerja/Tinggal/Lainnya/ Worker/Stay/Others</td>
                <td>1</td>
                <td>2</td>
                <td>1</td>
                <td></td>
            </tr>
            <tr>
                <td>Jumlah/Total</td>
                <td>81</td>
                <td>82</td>
                <td>1</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
