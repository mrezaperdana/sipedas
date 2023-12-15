@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">2.2.9</th>
                    <th colspan="2">{{ $judultabel }}, {{ $data->tahun }}</th>

                </tr>
                <tr>
                    <th>Table</th>
                    <th colspan="2">{{ $judultabelen }}, {{ $data->tahun }}
                    </th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td rowspan="2" colspan="2">Kegiatan/Activity</td>
                    <td colspan="5">Tahun/Year</td>
                </tr>

                <tr>
                    <td>{{ $data->tahun }}</td>
                </tr>
                <tr>
                    <td colspan="2">(1)</td>
                    <td>(2)</td>

                </tr>
                <tr>
                    <td colspan="2">Demonstrasi/Demonstration</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('demonstrasi') is-invalid @enderror" id="demonstrasi"
                            name="demonstrasi" value="{{ old('demonstrasi', $data->demonstrasi) }}">
                        @error('demonstrasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Aspirasi/Aspiration</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('aspirasi') is-invalid @enderror" id="aspirasi" name="aspirasi"
                            value="{{ old('aspirasi', $data->aspirasi) }}">
                        @error('aspirasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Jumlah/Total</td>
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
                <th rowspan="2">2.2.9</th>
                <th colspan="2">Jumlah Demonstrasi dan Penyampaian Aspirasi di Kabupaten Soppeng, 2018-2022</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Table</th>
                <th colspan="2">Number of Demonstrations and Delivery of Aspirations in Soppeng Regency, 2018-2022
                </th>
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
                <td colspan="2">(1)</td>
                <td>(3)</td>
                <td>(4)</td>
                <td>(5)</td>
                <td>(6)</td>
            </tr>
            <tr>
                <td colspan="2">Demonstrasi/Demonstration</td>
                <td>3</td>
                <td>3</td>
                <td>1</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Aspirasi/Aspiration</td>
                <td>4</td>
                <td>4</td>
                <td>2</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Jumlah/Total</td>
                <td>7</td>
                <td>7</td>
                <td>3</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
