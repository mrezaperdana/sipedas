@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-bobw"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.5.15</th>
                    <th class="tg-bobw" colspan="4"><span style="font-weight:bold">Banyaknya Pekerja Sosial Menurut
                            Kecamatan di Kabupaten Soppeng, 2017-2021</span></th>
                </tr>
                <tr>
                    <th class="tg-ijet"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-ijet" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                            Social Worker by Subdistrict in Soppeng Regency, 2017-2021</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-nrix">Kecamatan/</td>
                    <td class="tg-nrix" colspan="2">Jumlah</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-lhti" colspan="2"><span style="font-style:italic">Total</span></td>
                </tr>

                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix" colspan="2">(2)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah1') is-invalid @enderror" id="jumlah1" name="jumlah1"
                            value="{{ old('jumlah1', $data->jumlah1) }}">
                        @error('jumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah2') is-invalid @enderror" id="jumlah2" name="jumlah2"
                            value="{{ old('jumlah2', $data->jumlah2) }}">
                        @error('jumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah3') is-invalid @enderror" id="jumlah3" name="jumlah3"
                            value="{{ old('jumlah3', $data->jumlah3) }}">
                        @error('jumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah4') is-invalid @enderror" id="jumlah4" name="jumlah4"
                            value="{{ old('jumlah4', $data->jumlah4) }}">
                        @error('jumlah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah5') is-invalid @enderror" id="jumlah5" name="jumlah5"
                            value="{{ old('jumlah5', $data->jumlah5) }}">
                        @error('jumlah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah6') is-invalid @enderror" id="jumlah6" name="jumlah6"
                            value="{{ old('jumlah6', $data->jumlah6) }}">
                        @error('jumlah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah7') is-invalid @enderror" id="jumlah7" name="jumlah7"
                            value="{{ old('jumlah7', $data->jumlah7) }}">
                        @error('jumlah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlah8') is-invalid @enderror" id="jumlah8" name="jumlah8"
                            value="{{ old('jumlah8', $data->jumlah8) }}">
                        @error('jumlah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah</span><span
                            style="font-style:italic;color:#000">/Total</span></td>
                    <td class="tg-cly1" colspan="2"><input type="text"
                            class="form-control @error('jumlaht') is-invalid @enderror" id="jumlaht" name="jumlaht"
                            value="{{ old('jumlaht', $data->jumlaht) }}">
                        @error('jumlaht')
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
                <th class="tg-bobw"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">4.5.15</th>
                <th class="tg-bobw" colspan="4"><span style="font-weight:bold">Banyaknya Pekerja Sosial Menurut
                        Kecamatan di Kabupaten Soppeng, 2017-2021</span></th>
            </tr>
            <tr>
                <th class="tg-ijet"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-ijet" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                        Social Worker by Subdistrict in Soppeng Regency, 2017-2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">Kecamatan/</td>
                <td class="tg-amwm" rowspan="2">2017</td>
                <td class="tg-amwm" rowspan="2">2018</td>
                <td class="tg-amwm" rowspan="2">2019</td>
                <td class="tg-amwm" rowspan="2">2020</td>
                <td class="tg-amwm" rowspan="2">2021</td>
            </tr>
            <tr>
                <td class="tg-0w3w"><span style="font-style:italic">Subdistrict</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">(1)</td>
                <td class="tg-8d8j">(2)</td>
                <td class="tg-8d8j">(3)</td>
                <td class="tg-8d8j">(4)</td>
                <td class="tg-8d8j">(5)</td>
                <td class="tg-8d8j">(6)</td>
            </tr>
            <tr>
                <td class="tg-7zrl">010. Marioriwawo</td>
                <td class="tg-2b7s">2</td>
                <td class="tg-2b7s">2</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 8 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">020. Lalabata</td>
                <td class="tg-2b7s">13</td>
                <td class="tg-2b7s">14</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">14</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 14 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 30 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">030. Liliriaja</td>
                <td class="tg-2b7s">6</td>
                <td class="tg-2b7s">6</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 6 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 5 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">031. Ganra</td>
                <td class="tg-2b7s">2</td>
                <td class="tg-2b7s">2</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">032. Citta</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">040. Lilirilau</td>
                <td class="tg-2b7s">13</td>
                <td class="tg-2b7s">13</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">13</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 13 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 6 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">050. Donri-Donri</td>
                <td class="tg-2b7s">15</td>
                <td class="tg-2b7s">15</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">15</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 15 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 6 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">060. Marioriawa</td>
                <td class="tg-2b7s">15</td>
                <td class="tg-2b7s">15</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">15</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 15 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 6 </span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">Jumlah/Total</td>
                <td class="tg-2b7s">66</td>
                <td class="tg-2b7s">67</td>
                <td class="tg-2b7s">67</td>
                <td class="tg-2b7s"> 67 </td>
                <td class="tg-2b7s"> 65 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.038_Sosial.script_jumlah')
@endsection
