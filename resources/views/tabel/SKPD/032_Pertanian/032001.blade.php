    @if (!empty($data))
        <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post"
            enctype="multipart/form-data">
            @csrf
            {{-- tabel disini --}}
            <p>{{ $judultabel }}</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">5.1.1</th>
                        <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Luas Lahan Pertanian Menurut
                                Kecamatan dan Jenis di Kabupaten Soppeng, {{ $data->tahun }}
                            </span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Agriculture
                                Land
                                by Subdistrict and Type of Agriculture Land in Soppeng Regency, {{ $data->tahun }}
                            </span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-cly1"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                        <td class="tg-7zrl"></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">Kecamatan/</td>
                        <td class="tg-nrix">Sawah (ha)/</td>
                        <td class="tg-nrix">Bukan Sawah (ha)/</td>
                        <td class="tg-nrix">Jumlah (ha)/</td>
                    </tr>
                    <tr>
                        <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Paddy Field (ha)</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Instead of Paddy Field (ha)</span></td>
                        <td class="tg-lhti"><span style="font-style:italic">Total (ha)</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">010. Marioriwawo</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah1') is-invalid @enderror" id="sawah1" name="sawah1"
                                value="{{ old('sawah1', $data->sawah1) }}">
                            @error('sawah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah1') is-invalid @enderror" id="bukansawah1"
                                name="bukansawah1" value="{{ old('bukansawah1', $data->bukansawah1) }}">
                            @error('bukansawah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah1') is-invalid @enderror" id="jumlah1"
                                name="jumlah1" value="{{ old('jumlah1', $data->jumlah1) }}">
                            @error('jumlah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">020. Lalabata</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah2') is-invalid @enderror" id="sawah2" name="sawah2"
                                value="{{ old('sawah2', $data->sawah2) }}">
                            @error('sawah2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah2') is-invalid @enderror" id="bukansawah2"
                                name="bukansawah2" value="{{ old('bukansawah2', $data->bukansawah2) }}">
                            @error('bukansawah2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah2') is-invalid @enderror" id="jumlah2"
                                name="jumlah2" value="{{ old('jumlah2', $data->jumlah2) }}">
                            @error('jumlah2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">030. Liliriaja</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah3') is-invalid @enderror" id="sawah3" name="sawah3"
                                value="{{ old('sawah3', $data->sawah3) }}">
                            @error('sawah3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah3') is-invalid @enderror" id="bukansawah3"
                                name="bukansawah3" value="{{ old('bukansawah3', $data->bukansawah3) }}">
                            @error('bukansawah3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah3') is-invalid @enderror" id="jumlah3"
                                name="jumlah3" value="{{ old('jumlah3', $data->jumlah3) }}">
                            @error('jumlah3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">031. Ganra</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah4') is-invalid @enderror" id="sawah4"
                                name="sawah4" value="{{ old('sawah4', $data->sawah4) }}">
                            @error('sawah4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah4') is-invalid @enderror" id="bukansawah4"
                                name="bukansawah4" value="{{ old('bukansawah4', $data->bukansawah4) }}">
                            @error('bukansawah4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah4') is-invalid @enderror" id="jumlah4"
                                name="jumlah4" value="{{ old('jumlah4', $data->jumlah4) }}">
                            @error('jumlah4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">032. Citta</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah5') is-invalid @enderror" id="sawah5"
                                name="sawah5" value="{{ old('sawah5', $data->sawah5) }}">
                            @error('sawah5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah5') is-invalid @enderror" id="bukansawah5"
                                name="bukansawah5" value="{{ old('bukansawah5', $data->bukansawah5) }}">
                            @error('bukansawah5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah5') is-invalid @enderror" id="jumlah5"
                                name="jumlah5" value="{{ old('jumlah5', $data->jumlah5) }}">
                            @error('jumlah5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">040. Lilirilau</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah6') is-invalid @enderror" id="sawah6"
                                name="sawah6" value="{{ old('sawah6', $data->sawah6) }}">
                            @error('sawah6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah6') is-invalid @enderror" id="bukansawah6"
                                name="bukansawah6" value="{{ old('bukansawah6', $data->bukansawah6) }}">
                            @error('bukansawah6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah6') is-invalid @enderror" id="jumlah6"
                                name="jumlah6" value="{{ old('jumlah6', $data->jumlah6) }}">
                            @error('jumlah6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">050. Donri-Donri</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah7') is-invalid @enderror" id="sawah7"
                                name="sawah7" value="{{ old('sawah7', $data->sawah7) }}">
                            @error('sawah7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah7') is-invalid @enderror" id="bukansawah7"
                                name="bukansawah7" value="{{ old('bukansawah7', $data->bukansawah7) }}">
                            @error('bukansawah7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah7') is-invalid @enderror" id="jumlah7"
                                name="jumlah7" value="{{ old('jumlah7', $data->jumlah7) }}">
                            @error('jumlah7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-cly1">060. Marioriawa</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawah8') is-invalid @enderror" id="sawah8"
                                name="sawah8" value="{{ old('sawah8', $data->sawah8) }}">
                            @error('sawah8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawah8') is-invalid @enderror" id="bukansawah8"
                                name="bukansawah8" value="{{ old('bukansawah8', $data->bukansawah8) }}">
                            @error('bukansawah8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlah8') is-invalid @enderror" id="jumlah8"
                                name="jumlah8" value="{{ old('jumlah8', $data->jumlah8) }}">
                            @error('jumlah8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('sawaht') is-invalid @enderror" id="sawaht"
                                name="sawaht" value="{{ old('sawaht', $data->sawaht) }}">
                            @error('sawaht')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('bukansawaht') is-invalid @enderror" id="bukansawaht"
                                name="bukansawaht" value="{{ old('bukansawaht', $data->bukansawaht) }}">
                            @error('bukansawaht')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('jumlaht') is-invalid @enderror" id="jumlaht"
                                name="jumlaht" value="{{ old('jumlaht', $data->jumlaht) }}">
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
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">5.1.1</th>
                    <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Luas Lahan Pertanian Menurut
                            Kecamatan dan Jenis&nbsp;&nbsp;di Kabupaten Soppeng, {{ $data->tahun }}
                        </span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Agriculture
                            Land
                            by Subdistrict and Type of Agriculture Land in Soppeng Regency, {{ $data->tahun }}
                        </span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-cly1"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">Kecamatan/</td>
                    <td class="tg-nrix">Sawah (ha)/</td>
                    <td class="tg-nrix">Bukan Sawah (ha)/</td>
                    <td class="tg-nrix">Jumlah (ha)/</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Paddy Field (ha)</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Instead of Paddy Field (ha)</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Total (ha)</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">3 112.05 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">17 872.24 </span></td>
                    <td class="tg-mwxe">20 984.29 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">3 589.00 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">5 177.64 </span></td>
                    <td class="tg-mwxe">8 766.64 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">4 422.74 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">4 765.26 </span></td>
                    <td class="tg-mwxe">9 188.00 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">3 927.75 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">1 464.25 </span></td>
                    <td class="tg-mwxe">5 392.00 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB"> 340.36 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">3 327.34 </span></td>
                    <td class="tg-mwxe">3 667.70 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">2 121.95 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">13 502.10 </span></td>
                    <td class="tg-mwxe">15 624.05 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">4 676.20 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">16 178.80 </span></td>
                    <td class="tg-mwxe">20 855.00 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">7 051.60 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">15 711.40 </span></td>
                    <td class="tg-mwxe">22 763.00 </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-mwxe">29 241.65 </td>
                    <td class="tg-mwxe">77 999.03 </td>
                    <td class="tg-mwxe">107 240.68 </td>
                </tr>
            </tbody>
        </table>
    @endif
    @section('script')
        {{-- script disini --}}
    @endsection
