@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">2.2.5</th>
                    <th class="tg-yla0" colspan="16"><span style="font-weight:bold">Jumlah Organisasi Politik dan
                            Organisasi Masyarakat menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span>
                    </th>

                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55" colspan="16"><span style="font-weight:bold;font-style:italic">Number of
                            Political Organizations and Community Organizations by Subdistrict in Soppeng Regency,
                            {{ $data->tahun }}</span></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh" rowspan="2">Kecamatan/</td>
                    <td class="tg-baqh" rowspan="2">Organisasi politik</td>
                    <td class="tg-nrix" colspan="15">Organisasi Masyarakat / Community Organization</td>
                </tr>

                <tr>
                    <td class="tg-nrix">Lembaga Swadaya Masyarakat</td>
                    <td class="tg-nrix">Yayasan</td>
                    <td class="tg-nrix" colspan="5">Lembaga</td>
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
                            class="form-control @error('organisasipolitik1') is-invalid @enderror"
                            id="organisasipolitik1" name="organisasipolitik1"
                            value="{{ old('organisasipolitik1', $data->organisasipolitik1) }}">
                        @error('organisasipolitik1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('lsm1') is-invalid @enderror"
                            id="lsm1" name="lsm1" value="{{ old('lsm1', $data->lsm1) }}">
                        @error('lsm1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan1') is-invalid @enderror" id="yayasan1" name="yayasan1"
                            value="{{ old('yayasan1', $data->yayasan1) }}">
                        @error('yayasan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga1') is-invalid @enderror" id="lembaga1" name="lembaga1"
                            value="{{ old('lembaga1', $data->lembaga1) }}">
                        @error('lembaga1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik2') is-invalid @enderror"
                            id="organisasipolitik2" name="organisasipolitik2"
                            value="{{ old('organisasipolitik2', $data->organisasipolitik2) }}">
                        @error('organisasipolitik2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('lsm2') is-invalid @enderror"
                            id="lsm2" name="lsm2" value="{{ old('lsm2', $data->lsm2) }}">
                        @error('lsm2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan2') is-invalid @enderror" id="yayasan2" name="yayasan2"
                            value="{{ old('yayasan2', $data->yayasan2) }}">
                        @error('yayasan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga2') is-invalid @enderror" id="lembaga2" name="lembaga2"
                            value="{{ old('lembaga2', $data->lembaga2) }}">
                        @error('lembaga2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik3') is-invalid @enderror"
                            id="organisasipolitik3" name="organisasipolitik3"
                            value="{{ old('organisasipolitik3', $data->organisasipolitik3) }}">
                        @error('organisasipolitik3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('lsm3') is-invalid @enderror"
                            id="lsm3" name="lsm3" value="{{ old('lsm3', $data->lsm3) }}">
                        @error('lsm3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan3') is-invalid @enderror" id="yayasan3"
                            name="yayasan3" value="{{ old('yayasan3', $data->yayasan3) }}">
                        @error('yayasan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga3') is-invalid @enderror" id="lembaga3"
                            name="lembaga3" value="{{ old('lembaga3', $data->lembaga3) }}">
                        @error('lembaga3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik4') is-invalid @enderror"
                            id="organisasipolitik4" name="organisasipolitik4"
                            value="{{ old('organisasipolitik4', $data->organisasipolitik4) }}">
                        @error('organisasipolitik4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lsm4') is-invalid @enderror" id="lsm4" name="lsm4"
                            value="{{ old('lsm4', $data->lsm4) }}">
                        @error('lsm4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan4') is-invalid @enderror" id="yayasan4"
                            name="yayasan4" value="{{ old('yayasan4', $data->yayasan4) }}">
                        @error('yayasan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga4') is-invalid @enderror" id="lembaga4"
                            name="lembaga4" value="{{ old('lembaga4', $data->lembaga4) }}">
                        @error('lembaga4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik5') is-invalid @enderror"
                            id="organisasipolitik5" name="organisasipolitik5"
                            value="{{ old('organisasipolitik5', $data->organisasipolitik5) }}">
                        @error('organisasipolitik5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lsm5') is-invalid @enderror" id="lsm5" name="lsm5"
                            value="{{ old('lsm5', $data->lsm5) }}">
                        @error('lsm5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan5') is-invalid @enderror" id="yayasan5"
                            name="yayasan5" value="{{ old('yayasan5', $data->yayasan5) }}">
                        @error('yayasan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga5') is-invalid @enderror" id="lembaga5"
                            name="lembaga5" value="{{ old('lembaga5', $data->lembaga5) }}">
                        @error('lembaga5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik6') is-invalid @enderror"
                            id="organisasipolitik6" name="organisasipolitik6"
                            value="{{ old('organisasipolitik6', $data->organisasipolitik6) }}">
                        @error('organisasipolitik6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lsm6') is-invalid @enderror" id="lsm6" name="lsm6"
                            value="{{ old('lsm6', $data->lsm6) }}">
                        @error('lsm6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan6') is-invalid @enderror" id="yayasan6"
                            name="yayasan6" value="{{ old('yayasan6', $data->yayasan6) }}">
                        @error('yayasan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga6') is-invalid @enderror" id="lembaga6"
                            name="lembaga6" value="{{ old('lembaga6', $data->lembaga6) }}">
                        @error('lembaga6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik7') is-invalid @enderror"
                            id="organisasipolitik7" name="organisasipolitik7"
                            value="{{ old('organisasipolitik7', $data->organisasipolitik7) }}">
                        @error('organisasipolitik7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lsm7') is-invalid @enderror" id="lsm7" name="lsm7"
                            value="{{ old('lsm7', $data->lsm7) }}">
                        @error('lsm7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan7') is-invalid @enderror" id="yayasan7"
                            name="yayasan7" value="{{ old('yayasan7', $data->yayasan7) }}">
                        @error('yayasan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga7') is-invalid @enderror" id="lembaga7"
                            name="lembaga7" value="{{ old('lembaga7', $data->lembaga7) }}">
                        @error('lembaga7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('organisasipolitik8') is-invalid @enderror"
                            id="organisasipolitik8" name="organisasipolitik8"
                            value="{{ old('organisasipolitik8', $data->organisasipolitik8) }}">
                        @error('organisasipolitik8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lsm8') is-invalid @enderror" id="lsm8" name="lsm8"
                            value="{{ old('lsm8', $data->lsm8) }}">
                        @error('lsm8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasan8') is-invalid @enderror" id="yayasan8"
                            name="yayasan8" value="{{ old('yayasan8', $data->yayasan8) }}">
                        @error('yayasan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembaga8') is-invalid @enderror" id="lembaga8"
                            name="lembaga8" value="{{ old('lembaga8', $data->lembaga8) }}">
                        @error('lembaga8')
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
                            class="form-control @error('organisasipolitikt') is-invalid @enderror"
                            id="organisasipolitikt" name="organisasipolitikt"
                            value="{{ old('organisasipolitikt', $data->organisasipolitikt) }}">
                        @error('organisasipolitikt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lsmt') is-invalid @enderror" id="lsmt" name="lsmt"
                            value="{{ old('lsmt', $data->lsmt) }}">
                        @error('lsmt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('yayasant') is-invalid @enderror" id="yayasant"
                            name="yayasant" value="{{ old('yayasant', $data->yayasant) }}">
                        @error('yayasant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lembagat') is-invalid @enderror" id="lembagat"
                            name="lembagat" value="{{ old('lembagat', $data->lembagat) }}">
                        @error('lembagat')
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
                <th class="tg-amwm" rowspan="2">2.2.5</th>
                <th class="tg-yla0" colspan="16"><span style="font-weight:bold">Jumlah Organisasi Politik dan
                        Organisasi Masyarakat menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55" colspan="16"><span style="font-weight:bold;font-style:italic">Number of
                        Political Organizations and Community Organizations by Subdistrict in Soppeng Regency,
                        {{ $data->tahun }}</span></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
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
                <td class="tg-baqh" rowspan="3">Kecamatan/</td>
                <td class="tg-baqh" colspan="5" rowspan="3">Organisasi politik</td>
                <td class="tg-nrix" colspan="15">Organisasi Masyarakat/</td>
            </tr>
            <tr>
                <td class="tg-lhti" colspan="15"><span style="font-style:italic">Community Organization</span></td>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="5">Lembaga Swadaya Masyarakat</td>
                <td class="tg-nrix" colspan="5">Yayasan</td>
                <td class="tg-nrix" colspan="5">Lembaga</td>
            </tr>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
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
                <td class="tg-nrix">(14)</td>
                <td class="tg-nrix">(15)</td>
                <td class="tg-nrix">(16)</td>
                <td class="tg-nrix">(17)</td>
                <td class="tg-nrix">(18)</td>
                <td class="tg-nrix">(19)</td>
                <td class="tg-nrix">(20)</td>
                <td class="tg-nrix">(21)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">1</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">6</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-mwxe">12</td>
                <td class="tg-mwxe">14</td>
                <td class="tg-mwxe">14</td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">16</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-cly1">1</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">1</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">30</td>
                <td class="tg-cly1">30</td>
                <td class="tg-mwxe">12</td>
                <td class="tg-2b7s">2</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">5</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">2</td>
                <td class="tg-cly1">2</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">1</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">1</td>
                <td class="tg-mwxe">8</td>
                <td class="tg-2b7s">1</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">1</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">7</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-2b7s">1</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">12</td>
                <td class="tg-mwxe">16</td>
                <td class="tg-mwxe">16</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">17</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">5</td>
                <td class="tg-mwxe">6</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">30</td>
                <td class="tg-mwxe">32</td>
                <td class="tg-mwxe">42</td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">0</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumOrganisasipolitiks() {
            var organisasipolitikElements = document.querySelectorAll('[id^="organisasipolitik"]');
            var organisasipolitikSum = 0;
            for (var i = 0; i < organisasipolitikElements.length; i++) {
                if (organisasipolitikElements[i].id !== "organisasipolitikt") {
                    var organisasipolitikValue = parseFloat(organisasipolitikElements[i].value) || 0;
                    organisasipolitikSum += organisasipolitikValue;
                }
            }
            document.getElementById('organisasipolitikt').value = organisasipolitikSum;
        }

        var organisasipolitikInputs = document.querySelectorAll('[id^="organisasipolitik"]');
        for (var i = 0; i < organisasipolitikInputs.length; i++) {
            organisasipolitikInputs[i].addEventListener('focusout', sumOrganisasipolitiks);
        }
    </script>
    <script>
        function sumLsms() {
            var lsmElements = document.querySelectorAll('[id^="lsm"]');
            var lsmSum = 0;
            for (var i = 0; i < lsmElements.length; i++) {
                if (lsmElements[i].id !== "lsmt") {
                    var lsmValue = parseFloat(lsmElements[i].value) || 0;
                    lsmSum += lsmValue;
                }
            }
            document.getElementById('lsmt').value = lsmSum;
        }

        var lsmInputs = document.querySelectorAll('[id^="lsm"]');
        for (var i = 0; i < lsmInputs.length; i++) {
            lsmInputs[i].addEventListener('focusout', sumLsms);
        }
    </script>
    <script>
        function sumYayasans() {
            var yayasanElements = document.querySelectorAll('[id^="yayasan"]');
            var yayasanSum = 0;
            for (var i = 0; i < yayasanElements.length; i++) {
                if (yayasanElements[i].id !== "yayasant") {
                    var yayasanValue = parseFloat(yayasanElements[i].value) || 0;
                    yayasanSum += yayasanValue;
                }
            }
            document.getElementById('yayasant').value = yayasanSum;
        }

        var yayasanInputs = document.querySelectorAll('[id^="yayasan"]');
        for (var i = 0; i < yayasanInputs.length; i++) {
            yayasanInputs[i].addEventListener('focusout', sumYayasans);
        }
    </script>
    <script>
        function sumLembagas() {
            var lembagaElements = document.querySelectorAll('[id^="lembaga"]');
            var lembagaSum = 0;
            for (var i = 0; i < lembagaElements.length; i++) {
                if (lembagaElements[i].id !== "lembagat") {
                    var lembagaValue = parseFloat(lembagaElements[i].value) || 0;
                    lembagaSum += lembagaValue;
                }
            }
            document.getElementById('lembagat').value = lembagaSum;
        }

        var lembagaInputs = document.querySelectorAll('[id^="lembaga"]');
        for (var i = 0; i < lembagaInputs.length; i++) {
            lembagaInputs[i].addEventListener('focusout', sumLembagas);
        }
    </script>
@endsection
