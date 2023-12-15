@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">2.4.1</th>
                    <th class="tg-yla0"><span style="font-weight:bold">Perbandingan Realisasi Penerimaan dan Pengeluaran
                            Pemerintah di Kabupaten Soppeng (Rupiah), {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Comparison of Actual Government
                            Revenues and Expenditurers in Soppeng Regency (Rupiahs), {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-cly1"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">Tahun / Years</td>
                    <td class="tg-nrix">Penerimaan / Revenues</td>
                    <td class="tg-nrix">Pengeluaran / Expenditures</td>
                </tr>

                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                </tr>
                <tr>
                    <td class="tg-nrix">{{ $data->tahun }}</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimaan') is-invalid @enderror" id="penerimaan"
                            name="penerimaan" value="{{ old('penerimaan', $data->penerimaan) }}">
                        @error('penerimaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengeluaran') is-invalid @enderror" id="pengeluaran"
                            name="pengeluaran" value="{{ old('pengeluaran', $data->pengeluaran) }}">
                        @error('pengeluaran')
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
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">2.4.1</th>
                <th class="tg-yla0"><span style="font-weight:bold">Perbandingan Realisasi Penerimaan dan Pengeluaran
                        Pemerintah di Kabupaten Soppeng (Rupiah), {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55"><span style="font-weight:bold;font-style:italic">Comparison of Actual Government
                        Revenues and Expenditurers in Soppeng Regency (Rupiahs), {{ $data->tahun }}</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Tahun /</td>
                <td class="tg-nrix">Penerimaan /</td>
                <td class="tg-nrix">Pengeluaran /</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Years</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Revenues</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Expenditures</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
            </tr>
            <tr>
                <td class="tg-nrix">{{ $data->tahun }}</td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;817,856,582,025 </span></td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;751,476,161,605 </span></td>
            </tr>
            <tr>
                <td class="tg-nrix">2015</td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;912,814,997,983 </span></td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;850,297,715,044 </span></td>
            </tr>
            <tr>
                <td class="tg-nrix">2016</td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;1,236,893,800,959 </span></td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;1,002,459,449,170 </span></td>
            </tr>
            <tr>
                <td class="tg-nrix">2017</td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;1,155,718,382,299 </span></td>
                <td class="tg-f4yw"><span style="background-color:#FFF">&nbsp;&nbsp;1,141,423,783,213 </span></td>
            </tr>
            <tr>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">&nbsp;&nbsp;1,156,095,496,077 </td>
                <td class="tg-nrix">&nbsp;&nbsp;1,152,398,350,007 </td>
            </tr>
            <tr>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">&nbsp;&nbsp;1,215,328,628,941 </td>
                <td class="tg-nrix">&nbsp;&nbsp;1,189,972,761,947 </td>
            </tr>
            <tr>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">&nbsp;&nbsp;1,202,470,518,866 </td>
                <td class="tg-nrix">&nbsp;&nbsp;1,251,860,939,170 </td>
            </tr>
            <tr>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">&nbsp;&nbsp;1,211,846,653,202 </td>
                <td class="tg-nrix">&nbsp;&nbsp;1,895,366,790,876 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
