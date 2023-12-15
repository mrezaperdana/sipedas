@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">2.5.4</th>
                    <th class="tg-wa1i" colspan="15"><span style="font-weight:bold">Banyaknya Surat Izin Mendirikan
                            Bangunan (IMB) yang Dikeluarkan Menurut Kecamatan di Kabupaten Soppeng, 2021</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="15"><span style="font-weight:bold;font-style:italic">Number of
                            Building
                            Permit Issued by Subdistrict in Soppeng Regency, 2021</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kecamatan/</span><span
                            style="font-style:italic;color:#000">Subdistrict</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Rumah Permanen/</span><span
                            style="font-style:italic;color:#000">Permanent House</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Rumah Panggung/</span><span
                            style="font-style:italic;color:#000">Stilts House</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Rumah Toko/ </span><span
                            style="font-style:italic;color:#000">Shophouse</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Sarang Burung/</span><span
                            style="font-style:italic;color:#000">Bird Nest</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Gudang/</span><span
                            style="font-style:italic;color:#000">Storage</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Asrama/</span><span
                            style="font-style:italic;color:#000">Hostel</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Sekolah/</span><span
                            style="font-style:italic;color:#000">School</span></td>
                    <td class="tg-baqh"><span style="font-style:normal">Kampus/</span><span
                            style="font-style:italic">Campus</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kantor/</span><span
                            style="font-style:italic;color:#000">Office</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Pasar/</span><span
                            style="font-style:italic;color:#000">Market</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Tower/</span><span
                            style="font-style:italic;color:#000">Tower</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Hotel/</span><span
                            style="font-style:italic;color:#000">Hotel</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Perpustakaan/</span><span
                            style="font-style:italic;color:#000">Library</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Menara/</span><span
                            style="font-style:italic;color:#000">Tower</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Gedung/</span><span
                            style="font-style:italic;color:#000">Building</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
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
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpermanen1') is-invalid @enderror" id="rumahpermanen1"
                            name="rumahpermanen1" value="{{ old('rumahpermanen1', $data->rumahpermanen1) }}">
                        @error('rumahpermanen1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung1') is-invalid @enderror" id="rumahpanggung1"
                            name="rumahpanggung1" value="{{ old('rumahpanggung1', $data->rumahpanggung1) }}">
                        @error('rumahpanggung1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko1') is-invalid @enderror" id="rumahtoko1"
                            name="rumahtoko1" value="{{ old('rumahtoko1', $data->rumahtoko1) }}">
                        @error('rumahtoko1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung1') is-invalid @enderror" id="sarangburung1"
                            name="sarangburung1" value="{{ old('sarangburung1', $data->sarangburung1) }}">
                        @error('sarangburung1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang1') is-invalid @enderror" id="gudang1" name="gudang1"
                            value="{{ old('gudang1', $data->gudang1) }}">
                        @error('gudang1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama1') is-invalid @enderror" id="asrama1" name="asrama1"
                            value="{{ old('asrama1', $data->asrama1) }}">
                        @error('asrama1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah1') is-invalid @enderror" id="sekolah1"
                            name="sekolah1" value="{{ old('sekolah1', $data->sekolah1) }}">
                        @error('sekolah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus1') is-invalid @enderror" id="kampus1" name="kampus1"
                            value="{{ old('kampus1', $data->kampus1) }}">
                        @error('kampus1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor1') is-invalid @enderror" id="kantor1" name="kantor1"
                            value="{{ old('kantor1', $data->kantor1) }}">
                        @error('kantor1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar1') is-invalid @enderror" id="pasar1" name="pasar1"
                            value="{{ old('pasar1', $data->pasar1) }}">
                        @error('pasar1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower1') is-invalid @enderror" id="tower1" name="tower1"
                            value="{{ old('tower1', $data->tower1) }}">
                        @error('tower1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel1') is-invalid @enderror" id="hotel1" name="hotel1"
                            value="{{ old('hotel1', $data->hotel1) }}">
                        @error('hotel1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan1') is-invalid @enderror" id="perpustakaan1"
                            name="perpustakaan1" value="{{ old('perpustakaan1', $data->perpustakaan1) }}">
                        @error('perpustakaan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara1') is-invalid @enderror" id="menara1"
                            name="menara1" value="{{ old('menara1', $data->menara1) }}">
                        @error('menara1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung1') is-invalid @enderror" id="gedung1"
                            name="gedung1" value="{{ old('gedung1', $data->gedung1) }}">
                        @error('gedung1')
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
                            class="form-control @error('rumahpermanen2') is-invalid @enderror" id="rumahpermanen2"
                            name="rumahpermanen2" value="{{ old('rumahpermanen2', $data->rumahpermanen2) }}">
                        @error('rumahpermanen2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung2') is-invalid @enderror" id="rumahpanggung2"
                            name="rumahpanggung2" value="{{ old('rumahpanggung2', $data->rumahpanggung2) }}">
                        @error('rumahpanggung2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko2') is-invalid @enderror" id="rumahtoko2"
                            name="rumahtoko2" value="{{ old('rumahtoko2', $data->rumahtoko2) }}">
                        @error('rumahtoko2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung2') is-invalid @enderror" id="sarangburung2"
                            name="sarangburung2" value="{{ old('sarangburung2', $data->sarangburung2) }}">
                        @error('sarangburung2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang2') is-invalid @enderror" id="gudang2"
                            name="gudang2" value="{{ old('gudang2', $data->gudang2) }}">
                        @error('gudang2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama2') is-invalid @enderror" id="asrama2"
                            name="asrama2" value="{{ old('asrama2', $data->asrama2) }}">
                        @error('asrama2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah2') is-invalid @enderror" id="sekolah2"
                            name="sekolah2" value="{{ old('sekolah2', $data->sekolah2) }}">
                        @error('sekolah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus2') is-invalid @enderror" id="kampus2"
                            name="kampus2" value="{{ old('kampus2', $data->kampus2) }}">
                        @error('kampus2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor2') is-invalid @enderror" id="kantor2"
                            name="kantor2" value="{{ old('kantor2', $data->kantor2) }}">
                        @error('kantor2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar2') is-invalid @enderror" id="pasar2" name="pasar2"
                            value="{{ old('pasar2', $data->pasar2) }}">
                        @error('pasar2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower2') is-invalid @enderror" id="tower2" name="tower2"
                            value="{{ old('tower2', $data->tower2) }}">
                        @error('tower2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel2') is-invalid @enderror" id="hotel2" name="hotel2"
                            value="{{ old('hotel2', $data->hotel2) }}">
                        @error('hotel2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan2') is-invalid @enderror" id="perpustakaan2"
                            name="perpustakaan2" value="{{ old('perpustakaan2', $data->perpustakaan2) }}">
                        @error('perpustakaan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara2') is-invalid @enderror" id="menara2"
                            name="menara2" value="{{ old('menara2', $data->menara2) }}">
                        @error('menara2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung2') is-invalid @enderror" id="gedung2"
                            name="gedung2" value="{{ old('gedung2', $data->gedung2) }}">
                        @error('gedung2')
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
                            class="form-control @error('rumahpermanen3') is-invalid @enderror" id="rumahpermanen3"
                            name="rumahpermanen3" value="{{ old('rumahpermanen3', $data->rumahpermanen3) }}">
                        @error('rumahpermanen3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung3') is-invalid @enderror" id="rumahpanggung3"
                            name="rumahpanggung3" value="{{ old('rumahpanggung3', $data->rumahpanggung3) }}">
                        @error('rumahpanggung3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko3') is-invalid @enderror" id="rumahtoko3"
                            name="rumahtoko3" value="{{ old('rumahtoko3', $data->rumahtoko3) }}">
                        @error('rumahtoko3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung3') is-invalid @enderror" id="sarangburung3"
                            name="sarangburung3" value="{{ old('sarangburung3', $data->sarangburung3) }}">
                        @error('sarangburung3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang3') is-invalid @enderror" id="gudang3"
                            name="gudang3" value="{{ old('gudang3', $data->gudang3) }}">
                        @error('gudang3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama3') is-invalid @enderror" id="asrama3"
                            name="asrama3" value="{{ old('asrama3', $data->asrama3) }}">
                        @error('asrama3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah3') is-invalid @enderror" id="sekolah3"
                            name="sekolah3" value="{{ old('sekolah3', $data->sekolah3) }}">
                        @error('sekolah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus3') is-invalid @enderror" id="kampus3"
                            name="kampus3" value="{{ old('kampus3', $data->kampus3) }}">
                        @error('kampus3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor3') is-invalid @enderror" id="kantor3"
                            name="kantor3" value="{{ old('kantor3', $data->kantor3) }}">
                        @error('kantor3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar3') is-invalid @enderror" id="pasar3" name="pasar3"
                            value="{{ old('pasar3', $data->pasar3) }}">
                        @error('pasar3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower3') is-invalid @enderror" id="tower3" name="tower3"
                            value="{{ old('tower3', $data->tower3) }}">
                        @error('tower3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel3') is-invalid @enderror" id="hotel3" name="hotel3"
                            value="{{ old('hotel3', $data->hotel3) }}">
                        @error('hotel3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan3') is-invalid @enderror" id="perpustakaan3"
                            name="perpustakaan3" value="{{ old('perpustakaan3', $data->perpustakaan3) }}">
                        @error('perpustakaan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara3') is-invalid @enderror" id="menara3"
                            name="menara3" value="{{ old('menara3', $data->menara3) }}">
                        @error('menara3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung3') is-invalid @enderror" id="gedung3"
                            name="gedung3" value="{{ old('gedung3', $data->gedung3) }}">
                        @error('gedung3')
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
                            class="form-control @error('rumahpermanen4') is-invalid @enderror" id="rumahpermanen4"
                            name="rumahpermanen4" value="{{ old('rumahpermanen4', $data->rumahpermanen4) }}">
                        @error('rumahpermanen4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung4') is-invalid @enderror" id="rumahpanggung4"
                            name="rumahpanggung4" value="{{ old('rumahpanggung4', $data->rumahpanggung4) }}">
                        @error('rumahpanggung4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko4') is-invalid @enderror" id="rumahtoko4"
                            name="rumahtoko4" value="{{ old('rumahtoko4', $data->rumahtoko4) }}">
                        @error('rumahtoko4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung4') is-invalid @enderror" id="sarangburung4"
                            name="sarangburung4" value="{{ old('sarangburung4', $data->sarangburung4) }}">
                        @error('sarangburung4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang4') is-invalid @enderror" id="gudang4"
                            name="gudang4" value="{{ old('gudang4', $data->gudang4) }}">
                        @error('gudang4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama4') is-invalid @enderror" id="asrama4"
                            name="asrama4" value="{{ old('asrama4', $data->asrama4) }}">
                        @error('asrama4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah4') is-invalid @enderror" id="sekolah4"
                            name="sekolah4" value="{{ old('sekolah4', $data->sekolah4) }}">
                        @error('sekolah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus4') is-invalid @enderror" id="kampus4"
                            name="kampus4" value="{{ old('kampus4', $data->kampus4) }}">
                        @error('kampus4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor4') is-invalid @enderror" id="kantor4"
                            name="kantor4" value="{{ old('kantor4', $data->kantor4) }}">
                        @error('kantor4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar4') is-invalid @enderror" id="pasar4" name="pasar4"
                            value="{{ old('pasar4', $data->pasar4) }}">
                        @error('pasar4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower4') is-invalid @enderror" id="tower4" name="tower4"
                            value="{{ old('tower4', $data->tower4) }}">
                        @error('tower4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel4') is-invalid @enderror" id="hotel4" name="hotel4"
                            value="{{ old('hotel4', $data->hotel4) }}">
                        @error('hotel4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan4') is-invalid @enderror" id="perpustakaan4"
                            name="perpustakaan4" value="{{ old('perpustakaan4', $data->perpustakaan4) }}">
                        @error('perpustakaan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara4') is-invalid @enderror" id="menara4"
                            name="menara4" value="{{ old('menara4', $data->menara4) }}">
                        @error('menara4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung4') is-invalid @enderror" id="gedung4"
                            name="gedung4" value="{{ old('gedung4', $data->gedung4) }}">
                        @error('gedung4')
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
                            class="form-control @error('rumahpermanen5') is-invalid @enderror" id="rumahpermanen5"
                            name="rumahpermanen5" value="{{ old('rumahpermanen5', $data->rumahpermanen5) }}">
                        @error('rumahpermanen5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung5') is-invalid @enderror" id="rumahpanggung5"
                            name="rumahpanggung5" value="{{ old('rumahpanggung5', $data->rumahpanggung5) }}">
                        @error('rumahpanggung5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko5') is-invalid @enderror" id="rumahtoko5"
                            name="rumahtoko5" value="{{ old('rumahtoko5', $data->rumahtoko5) }}">
                        @error('rumahtoko5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung5') is-invalid @enderror" id="sarangburung5"
                            name="sarangburung5" value="{{ old('sarangburung5', $data->sarangburung5) }}">
                        @error('sarangburung5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang5') is-invalid @enderror" id="gudang5"
                            name="gudang5" value="{{ old('gudang5', $data->gudang5) }}">
                        @error('gudang5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama5') is-invalid @enderror" id="asrama5"
                            name="asrama5" value="{{ old('asrama5', $data->asrama5) }}">
                        @error('asrama5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah5') is-invalid @enderror" id="sekolah5"
                            name="sekolah5" value="{{ old('sekolah5', $data->sekolah5) }}">
                        @error('sekolah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus5') is-invalid @enderror" id="kampus5"
                            name="kampus5" value="{{ old('kampus5', $data->kampus5) }}">
                        @error('kampus5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor5') is-invalid @enderror" id="kantor5"
                            name="kantor5" value="{{ old('kantor5', $data->kantor5) }}">
                        @error('kantor5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar5') is-invalid @enderror" id="pasar5" name="pasar5"
                            value="{{ old('pasar5', $data->pasar5) }}">
                        @error('pasar5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower5') is-invalid @enderror" id="tower5" name="tower5"
                            value="{{ old('tower5', $data->tower5) }}">
                        @error('tower5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel5') is-invalid @enderror" id="hotel5" name="hotel5"
                            value="{{ old('hotel5', $data->hotel5) }}">
                        @error('hotel5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan5') is-invalid @enderror" id="perpustakaan5"
                            name="perpustakaan5" value="{{ old('perpustakaan5', $data->perpustakaan5) }}">
                        @error('perpustakaan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara5') is-invalid @enderror" id="menara5"
                            name="menara5" value="{{ old('menara5', $data->menara5) }}">
                        @error('menara5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung5') is-invalid @enderror" id="gedung5"
                            name="gedung5" value="{{ old('gedung5', $data->gedung5) }}">
                        @error('gedung5')
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
                            class="form-control @error('rumahpermanen6') is-invalid @enderror" id="rumahpermanen6"
                            name="rumahpermanen6" value="{{ old('rumahpermanen6', $data->rumahpermanen6) }}">
                        @error('rumahpermanen6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung6') is-invalid @enderror" id="rumahpanggung6"
                            name="rumahpanggung6" value="{{ old('rumahpanggung6', $data->rumahpanggung6) }}">
                        @error('rumahpanggung6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko6') is-invalid @enderror" id="rumahtoko6"
                            name="rumahtoko6" value="{{ old('rumahtoko6', $data->rumahtoko6) }}">
                        @error('rumahtoko6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung6') is-invalid @enderror" id="sarangburung6"
                            name="sarangburung6" value="{{ old('sarangburung6', $data->sarangburung6) }}">
                        @error('sarangburung6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang6') is-invalid @enderror" id="gudang6"
                            name="gudang6" value="{{ old('gudang6', $data->gudang6) }}">
                        @error('gudang6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama6') is-invalid @enderror" id="asrama6"
                            name="asrama6" value="{{ old('asrama6', $data->asrama6) }}">
                        @error('asrama6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah6') is-invalid @enderror" id="sekolah6"
                            name="sekolah6" value="{{ old('sekolah6', $data->sekolah6) }}">
                        @error('sekolah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus6') is-invalid @enderror" id="kampus6"
                            name="kampus6" value="{{ old('kampus6', $data->kampus6) }}">
                        @error('kampus6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor6') is-invalid @enderror" id="kantor6"
                            name="kantor6" value="{{ old('kantor6', $data->kantor6) }}">
                        @error('kantor6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar6') is-invalid @enderror" id="pasar6" name="pasar6"
                            value="{{ old('pasar6', $data->pasar6) }}">
                        @error('pasar6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower6') is-invalid @enderror" id="tower6" name="tower6"
                            value="{{ old('tower6', $data->tower6) }}">
                        @error('tower6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel6') is-invalid @enderror" id="hotel6" name="hotel6"
                            value="{{ old('hotel6', $data->hotel6) }}">
                        @error('hotel6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan6') is-invalid @enderror" id="perpustakaan6"
                            name="perpustakaan6" value="{{ old('perpustakaan6', $data->perpustakaan6) }}">
                        @error('perpustakaan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara6') is-invalid @enderror" id="menara6"
                            name="menara6" value="{{ old('menara6', $data->menara6) }}">
                        @error('menara6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung6') is-invalid @enderror" id="gedung6"
                            name="gedung6" value="{{ old('gedung6', $data->gedung6) }}">
                        @error('gedung6')
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
                            class="form-control @error('rumahpermanen7') is-invalid @enderror" id="rumahpermanen7"
                            name="rumahpermanen7" value="{{ old('rumahpermanen7', $data->rumahpermanen7) }}">
                        @error('rumahpermanen7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung7') is-invalid @enderror" id="rumahpanggung7"
                            name="rumahpanggung7" value="{{ old('rumahpanggung7', $data->rumahpanggung7) }}">
                        @error('rumahpanggung7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko7') is-invalid @enderror" id="rumahtoko7"
                            name="rumahtoko7" value="{{ old('rumahtoko7', $data->rumahtoko7) }}">
                        @error('rumahtoko7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung7') is-invalid @enderror" id="sarangburung7"
                            name="sarangburung7" value="{{ old('sarangburung7', $data->sarangburung7) }}">
                        @error('sarangburung7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang7') is-invalid @enderror" id="gudang7"
                            name="gudang7" value="{{ old('gudang7', $data->gudang7) }}">
                        @error('gudang7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama7') is-invalid @enderror" id="asrama7"
                            name="asrama7" value="{{ old('asrama7', $data->asrama7) }}">
                        @error('asrama7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah7') is-invalid @enderror" id="sekolah7"
                            name="sekolah7" value="{{ old('sekolah7', $data->sekolah7) }}">
                        @error('sekolah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus7') is-invalid @enderror" id="kampus7"
                            name="kampus7" value="{{ old('kampus7', $data->kampus7) }}">
                        @error('kampus7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor7') is-invalid @enderror" id="kantor7"
                            name="kantor7" value="{{ old('kantor7', $data->kantor7) }}">
                        @error('kantor7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar7') is-invalid @enderror" id="pasar7"
                            name="pasar7" value="{{ old('pasar7', $data->pasar7) }}">
                        @error('pasar7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower7') is-invalid @enderror" id="tower7"
                            name="tower7" value="{{ old('tower7', $data->tower7) }}">
                        @error('tower7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel7') is-invalid @enderror" id="hotel7"
                            name="hotel7" value="{{ old('hotel7', $data->hotel7) }}">
                        @error('hotel7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan7') is-invalid @enderror" id="perpustakaan7"
                            name="perpustakaan7" value="{{ old('perpustakaan7', $data->perpustakaan7) }}">
                        @error('perpustakaan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara7') is-invalid @enderror" id="menara7"
                            name="menara7" value="{{ old('menara7', $data->menara7) }}">
                        @error('menara7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung7') is-invalid @enderror" id="gedung7"
                            name="gedung7" value="{{ old('gedung7', $data->gedung7) }}">
                        @error('gedung7')
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
                            class="form-control @error('rumahpermanen8') is-invalid @enderror" id="rumahpermanen8"
                            name="rumahpermanen8" value="{{ old('rumahpermanen8', $data->rumahpermanen8) }}">
                        @error('rumahpermanen8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggung8') is-invalid @enderror" id="rumahpanggung8"
                            name="rumahpanggung8" value="{{ old('rumahpanggung8', $data->rumahpanggung8) }}">
                        @error('rumahpanggung8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtoko8') is-invalid @enderror" id="rumahtoko8"
                            name="rumahtoko8" value="{{ old('rumahtoko8', $data->rumahtoko8) }}">
                        @error('rumahtoko8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburung8') is-invalid @enderror" id="sarangburung8"
                            name="sarangburung8" value="{{ old('sarangburung8', $data->sarangburung8) }}">
                        @error('sarangburung8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudang8') is-invalid @enderror" id="gudang8"
                            name="gudang8" value="{{ old('gudang8', $data->gudang8) }}">
                        @error('gudang8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asrama8') is-invalid @enderror" id="asrama8"
                            name="asrama8" value="{{ old('asrama8', $data->asrama8) }}">
                        @error('asrama8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolah8') is-invalid @enderror" id="sekolah8"
                            name="sekolah8" value="{{ old('sekolah8', $data->sekolah8) }}">
                        @error('sekolah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampus8') is-invalid @enderror" id="kampus8"
                            name="kampus8" value="{{ old('kampus8', $data->kampus8) }}">
                        @error('kampus8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantor8') is-invalid @enderror" id="kantor8"
                            name="kantor8" value="{{ old('kantor8', $data->kantor8) }}">
                        @error('kantor8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasar8') is-invalid @enderror" id="pasar8"
                            name="pasar8" value="{{ old('pasar8', $data->pasar8) }}">
                        @error('pasar8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tower8') is-invalid @enderror" id="tower8"
                            name="tower8" value="{{ old('tower8', $data->tower8) }}">
                        @error('tower8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotel8') is-invalid @enderror" id="hotel8"
                            name="hotel8" value="{{ old('hotel8', $data->hotel8) }}">
                        @error('hotel8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaan8') is-invalid @enderror" id="perpustakaan8"
                            name="perpustakaan8" value="{{ old('perpustakaan8', $data->perpustakaan8) }}">
                        @error('perpustakaan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara8') is-invalid @enderror" id="menara8"
                            name="menara8" value="{{ old('menara8', $data->menara8) }}">
                        @error('menara8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedung8') is-invalid @enderror" id="gedung8"
                            name="gedung8" value="{{ old('gedung8', $data->gedung8) }}">
                        @error('gedung8')
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
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpermanent') is-invalid @enderror" id="rumahpermanent"
                            name="rumahpermanent" value="{{ old('rumahpermanent', $data->rumahpermanent) }}">
                        @error('rumahpermanent')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahpanggungt') is-invalid @enderror" id="rumahpanggungt"
                            name="rumahpanggungt" value="{{ old('rumahpanggungt', $data->rumahpanggungt) }}">
                        @error('rumahpanggungt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('rumahtokot') is-invalid @enderror" id="rumahtokot"
                            name="rumahtokot" value="{{ old('rumahtokot', $data->rumahtokot) }}">
                        @error('rumahtokot')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sarangburungt') is-invalid @enderror" id="sarangburungt"
                            name="sarangburungt" value="{{ old('sarangburungt', $data->sarangburungt) }}">
                        @error('sarangburungt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gudangt') is-invalid @enderror" id="gudangt"
                            name="gudangt" value="{{ old('gudangt', $data->gudangt) }}">
                        @error('gudangt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('asramat') is-invalid @enderror" id="asramat"
                            name="asramat" value="{{ old('asramat', $data->asramat) }}">
                        @error('asramat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sekolaht') is-invalid @enderror" id="sekolaht"
                            name="sekolaht" value="{{ old('sekolaht', $data->sekolaht) }}">
                        @error('sekolaht')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kampust') is-invalid @enderror" id="kampust"
                            name="kampust" value="{{ old('kampust', $data->kampust) }}">
                        @error('kampust')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kantort') is-invalid @enderror" id="kantort"
                            name="kantort" value="{{ old('kantort', $data->kantort) }}">
                        @error('kantort')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pasart') is-invalid @enderror" id="pasart"
                            name="pasart" value="{{ old('pasart', $data->pasart) }}">
                        @error('pasart')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('towert') is-invalid @enderror" id="towert"
                            name="towert" value="{{ old('towert', $data->towert) }}">
                        @error('towert')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hotelt') is-invalid @enderror" id="hotelt"
                            name="hotelt" value="{{ old('hotelt', $data->hotelt) }}">
                        @error('hotelt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perpustakaant') is-invalid @enderror" id="perpustakaant"
                            name="perpustakaant" value="{{ old('perpustakaant', $data->perpustakaant) }}">
                        @error('perpustakaant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menarat') is-invalid @enderror" id="menarat"
                            name="menarat" value="{{ old('menarat', $data->menarat) }}">
                        @error('menarat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gedungt') is-invalid @enderror" id="gedungt"
                            name="gedungt" value="{{ old('gedungt', $data->gedungt) }}">
                        @error('gedungt')
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
                <th class="tg-amwm" rowspan="2">2.5.4</th>
                <th class="tg-wa1i" colspan="15"><span style="font-weight:bold">Banyaknya Surat Izin Mendirikan
                        Bangunan (IMB) yang Dikeluarkan Menurut Kecamatan di Kabupaten Soppeng, 2021</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="15"><span style="font-weight:bold;font-style:italic">Number of
                        Building
                        Permit Issued by Subdistrict in Soppeng Regency, 2021</span></th>
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
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kecamatan/</span><span
                        style="font-style:italic;color:#000">Subdistrict</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Rumah Permanen/</span><span
                        style="font-style:italic;color:#000">Permanent House</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Rumah Panggung/</span><span
                        style="font-style:italic;color:#000">Stilts House</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Rumah Toko/ </span><span
                        style="font-style:italic;color:#000">Shophouse</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Sarang Burung/</span><span
                        style="font-style:italic;color:#000">Bird Nest</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Gudang/</span><span
                        style="font-style:italic;color:#000">Storage</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Asrama/</span><span
                        style="font-style:italic;color:#000">Hostel</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Sekolah/</span><span
                        style="font-style:italic;color:#000">School</span></td>
                <td class="tg-baqh"><span style="font-style:normal">Kampus/</span><span
                        style="font-style:italic">Campus</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kantor/</span><span
                        style="font-style:italic;color:#000">Office</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Pasar/</span><span
                        style="font-style:italic;color:#000">Market</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Tower/</span><span
                        style="font-style:italic;color:#000">Tower</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Hotel/</span><span
                        style="font-style:italic;color:#000">Hotel</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Perpustakaan/</span><span
                        style="font-style:italic;color:#000">Library</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Menara/</span><span
                        style="font-style:italic;color:#000">Tower</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Gedung/</span><span
                        style="font-style:italic;color:#000">Building</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
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
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">9</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe">14</td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">301</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-mwxe">315</td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-mwxe">13</td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-mwxe">5</td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe">1</td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">11</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-mwxe">19</td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-mwxe">9</td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe">16</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">345</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">25</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">7</td>
                <td class="tg-mwxe">392</td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
@endsection
