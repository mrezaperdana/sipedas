@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-7zrl"></th>
                    <th class="tg-amwm" rowspan="2">4.5.14</th>
                    <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">{{ $judultabel }}
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="4"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }} in {{ $data->tahun }}</span>
                    </th>
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
                <th class="tg-7zrl"></th>
                <th class="tg-amwm" rowspan="2">4.5.14</th>
                <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya penerima bingkisan
                        keluarga / ahli waris veteran thn 2021</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">The number of
                        family gift recipient/veteran heirs in 2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-wa1i"><span style="font-weight:bold">Tabel</span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Kecamatan/</td>
                <td class="tg-nrix" colspan="5">Jumlah</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                <td class="tg-lhti" colspan="5"><span style="font-style:italic">Total</span></td>
            </tr>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix" colspan="5">(2)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 3 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 16 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 4 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 1 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 1 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 5 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 33 </span></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah</span><span
                        style="font-style:italic;color:#000">/Total</span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-cly1"></td>
                <td class="tg-nrix"> 63 </td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.038_Sosial.script_jumlah')
@endsection
