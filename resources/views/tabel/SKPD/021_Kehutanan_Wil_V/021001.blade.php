@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-0lax" rowspan="2"></th>
                    <th class="tg-wa1i" colspan="11"><span style="font-weight:bold">Luas Kawasan Hutan dan Perairan
                            menurut Kecamatan di Kabupaten Soppeng (ha) {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="11"><span style="font-weight:bold;font-style:italic">Extent of Forest
                            Area, Inland Water, Coastal, and Marine Ecosystem by Subdistricts in Soppeng Regency (ha),
                            {{ $data->tahun }}
                        </span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh">Kecamatan</td>
                    <td class="tg-nrix">Hutan Lindung</td>
                    <td class="tg-nrix">Hutan Produksi</td>
                    <td class="tg-nrix">Hutan Produksi Terbatas</td>
                    <td class="tg-nrix">Kawasan Konservasi</td>
                </tr>

                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                    <td class="tg-nrix">(5)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung1') is-invalid @enderror" id="hutanlindung1"
                            name="hutanlindung1" value="{{ old('hutanlindung1', $data->hutanlindung1) }}">
                        @error('hutanlindung1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi1') is-invalid @enderror" id="hutanproduksi1"
                            name="hutanproduksi1" value="{{ old('hutanproduksi1', $data->hutanproduksi1) }}">
                        @error('hutanproduksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas1') is-invalid @enderror" id="hutanterbatas1"
                            name="hutanterbatas1" value="{{ old('hutanterbatas1', $data->hutanterbatas1) }}">
                        @error('hutanterbatas1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi1') is-invalid @enderror" id="hutankonservasi1"
                            name="hutankonservasi1" value="{{ old('hutankonservasi1', $data->hutankonservasi1) }}">
                        @error('hutankonservasi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung2') is-invalid @enderror" id="hutanlindung2"
                            name="hutanlindung2" value="{{ old('hutanlindung2', $data->hutanlindung2) }}">
                        @error('hutanlindung2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi2') is-invalid @enderror" id="hutanproduksi2"
                            name="hutanproduksi2" value="{{ old('hutanproduksi2', $data->hutanproduksi2) }}">
                        @error('hutanproduksi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas2') is-invalid @enderror" id="hutanterbatas2"
                            name="hutanterbatas2" value="{{ old('hutanterbatas2', $data->hutanterbatas2) }}">
                        @error('hutanterbatas2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi2') is-invalid @enderror" id="hutankonservasi2"
                            name="hutankonservasi2" value="{{ old('hutankonservasi2', $data->hutankonservasi2) }}">
                        @error('hutankonservasi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung3') is-invalid @enderror" id="hutanlindung3"
                            name="hutanlindung3" value="{{ old('hutanlindung3', $data->hutanlindung3) }}">
                        @error('hutanlindung3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi3') is-invalid @enderror" id="hutanproduksi3"
                            name="hutanproduksi3" value="{{ old('hutanproduksi3', $data->hutanproduksi3) }}">
                        @error('hutanproduksi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas3') is-invalid @enderror" id="hutanterbatas3"
                            name="hutanterbatas3" value="{{ old('hutanterbatas3', $data->hutanterbatas3) }}">
                        @error('hutanterbatas3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi3') is-invalid @enderror"
                            id="hutankonservasi3" name="hutankonservasi3"
                            value="{{ old('hutankonservasi3', $data->hutankonservasi3) }}">
                        @error('hutankonservasi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung4') is-invalid @enderror" id="hutanlindung4"
                            name="hutanlindung4" value="{{ old('hutanlindung4', $data->hutanlindung4) }}">
                        @error('hutanlindung4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi4') is-invalid @enderror" id="hutanproduksi4"
                            name="hutanproduksi4" value="{{ old('hutanproduksi4', $data->hutanproduksi4) }}">
                        @error('hutanproduksi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas4') is-invalid @enderror" id="hutanterbatas4"
                            name="hutanterbatas4" value="{{ old('hutanterbatas4', $data->hutanterbatas4) }}">
                        @error('hutanterbatas4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi4') is-invalid @enderror"
                            id="hutankonservasi4" name="hutankonservasi4"
                            value="{{ old('hutankonservasi4', $data->hutankonservasi4) }}">
                        @error('hutankonservasi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung5') is-invalid @enderror" id="hutanlindung5"
                            name="hutanlindung5" value="{{ old('hutanlindung5', $data->hutanlindung5) }}">
                        @error('hutanlindung5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi5') is-invalid @enderror" id="hutanproduksi5"
                            name="hutanproduksi5" value="{{ old('hutanproduksi5', $data->hutanproduksi5) }}">
                        @error('hutanproduksi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas5') is-invalid @enderror" id="hutanterbatas5"
                            name="hutanterbatas5" value="{{ old('hutanterbatas5', $data->hutanterbatas5) }}">
                        @error('hutanterbatas5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi5') is-invalid @enderror"
                            id="hutankonservasi5" name="hutankonservasi5"
                            value="{{ old('hutankonservasi5', $data->hutankonservasi5) }}">
                        @error('hutankonservasi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung6') is-invalid @enderror" id="hutanlindung6"
                            name="hutanlindung6" value="{{ old('hutanlindung6', $data->hutanlindung6) }}">
                        @error('hutanlindung6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi6') is-invalid @enderror" id="hutanproduksi6"
                            name="hutanproduksi6" value="{{ old('hutanproduksi6', $data->hutanproduksi6) }}">
                        @error('hutanproduksi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas6') is-invalid @enderror" id="hutanterbatas6"
                            name="hutanterbatas6" value="{{ old('hutanterbatas6', $data->hutanterbatas6) }}">
                        @error('hutanterbatas6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi6') is-invalid @enderror"
                            id="hutankonservasi6" name="hutankonservasi6"
                            value="{{ old('hutankonservasi6', $data->hutankonservasi6) }}">
                        @error('hutankonservasi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung7') is-invalid @enderror" id="hutanlindung7"
                            name="hutanlindung7" value="{{ old('hutanlindung7', $data->hutanlindung7) }}">
                        @error('hutanlindung7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi7') is-invalid @enderror" id="hutanproduksi7"
                            name="hutanproduksi7" value="{{ old('hutanproduksi7', $data->hutanproduksi7) }}">
                        @error('hutanproduksi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas7') is-invalid @enderror" id="hutanterbatas7"
                            name="hutanterbatas7" value="{{ old('hutanterbatas7', $data->hutanterbatas7) }}">
                        @error('hutanterbatas7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi7') is-invalid @enderror"
                            id="hutankonservasi7" name="hutankonservasi7"
                            value="{{ old('hutankonservasi7', $data->hutankonservasi7) }}">
                        @error('hutankonservasi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanlindung8') is-invalid @enderror" id="hutanlindung8"
                            name="hutanlindung8" value="{{ old('hutanlindung8', $data->hutanlindung8) }}">
                        @error('hutanlindung8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksi8') is-invalid @enderror" id="hutanproduksi8"
                            name="hutanproduksi8" value="{{ old('hutanproduksi8', $data->hutanproduksi8) }}">
                        @error('hutanproduksi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatas8') is-invalid @enderror" id="hutanterbatas8"
                            name="hutanterbatas8" value="{{ old('hutanterbatas8', $data->hutanterbatas8) }}">
                        @error('hutanterbatas8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasi8') is-invalid @enderror"
                            id="hutankonservasi8" name="hutankonservasi8"
                            value="{{ old('hutankonservasi8', $data->hutankonservasi8) }}">
                        @error('hutankonservasi8')
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
                            class="form-control @error('hutanlindungt') is-invalid @enderror" id="hutanlindungt"
                            name="hutanlindungt" value="{{ old('hutanlindungt', $data->hutanlindungt) }}">
                        @error('hutanlindungt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanproduksit') is-invalid @enderror" id="hutanproduksit"
                            name="hutanproduksit" value="{{ old('hutanproduksit', $data->hutanproduksit) }}">
                        @error('hutanproduksit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutanterbatast') is-invalid @enderror" id="hutanterbatast"
                            name="hutanterbatast" value="{{ old('hutanterbatast', $data->hutanterbatast) }}">
                        @error('hutanterbatast')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hutankonservasit') is-invalid @enderror"
                            id="hutankonservasit" name="hutankonservasit"
                            value="{{ old('hutankonservasit', $data->hutankonservasit) }}">
                        @error('hutankonservasit')
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
@endif
@section('script')
    {{-- script disini --}}
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-0lax" rowspan="2"></th>
                <th class="tg-wa1i" colspan="11"><span style="font-weight:bold">Luas Kawasan Hutan dan Perairan
                        menurut Kecamatan di Kabupaten Soppeng (ha) {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="11"><span style="font-weight:bold;font-style:italic">Extent of Forest
                        Area, Inland Water, Coastal, and Marine Ecosystem by Subdistricts in Soppeng Regency (ha),
                        {{ $data->tahun }}
                    </span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="2">Kecamatan</td>
                <td class="tg-nrix" colspan="3">Hutan Lindung</td>
                <td class="tg-nrix" colspan="3">Hutan Produksi</td>
                <td class="tg-nrix" colspan="3">Hutan Produksi Terbatas</td>
                <td class="tg-nrix" colspan="3">Kawasan Konservasi</td>
            </tr>
            <tr>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
                <td class="tg-nrix">(7)</td>
                <td class="tg-nrix">(8)</td>
                <td class="tg-nrix">(9)</td>
                <td class="tg-nrix">(10)</td>
                <td class="tg-nrix">(11)</td>
                <td class="tg-nrix">(12)</td>
                <td class="tg-nrix">(13)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-2b7s">472.36</td>
                <td class="tg-2b7s">472.36</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">112.69</td>
                <td class="tg-2b7s">112.69</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">255.52</td>
                <td class="tg-2b7s">255.52</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-2b7s">18695.31</td>
                <td class="tg-2b7s">18695.31</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">15.86</td>
                <td class="tg-2b7s">15.86</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">2747.15</td>
                <td class="tg-2b7s">2747.15</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-2b7s">10.59</td>
                <td class="tg-2b7s">10.59</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-2b7s">41.36</td>
                <td class="tg-2b7s">41.36</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-2b7s">4,661.95</td>
                <td class="tg-2b7s">4661.95</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">2105.18</td>
                <td class="tg-2b7s">2105.18</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">2095.41</td>
                <td class="tg-2b7s">2,095.41</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-2b7s">4,263.80</td>
                <td class="tg-2b7s">4263.80</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">3538.17</td>
                <td class="tg-2b7s">3538.17</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">2218.49</td>
                <td class="tg-2b7s">2,218.49</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
                <td class="tg-2b7s">1404.67</td>
                <td class="tg-2b7s">1404.67</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">...</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;28,145.37 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;28,145.37 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;5,643.35 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;5,643.35 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;4,442.45 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;4,442.45 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;4,407.34 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;4,407.34 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </tbody>
    </table>
@endsection
