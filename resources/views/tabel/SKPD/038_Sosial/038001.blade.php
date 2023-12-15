@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">Tabel</span></td>
                    <th class="tg-amwm" rowspan="2">4.3.7</th>
                    <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}
                        </span>
                    </th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="4"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                            {{ $data->tahun }}
                        </span></th>
                </tr>
            </thead>
            <tbody>
                <tr>

                </tr>
                <tr>
                    <td class="tg-nrix">Kecamatan/</td>
                    <td class="tg-nrix" colspan="2">Jumlah Keluarga Penerima Manfaat (KPM)/ Number of Beneficiary
                        Family </td>
                    <td class="tg-nrix" colspan="2">Jumlah Anggaran (rupiah)/Budget Amount (rupiahs)</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-lhti" colspan="2"><span style="font-style:italic">{{ $data->tahun }}
                        </span></td>
                    <td class="tg-lhti" colspan="2"><span style="font-style:italic">{{ $data->tahun }}
                        </span></td>
                </tr>
                <tr>
                    <td class="tg-cly1"></td>
                    <td class="tg-nrix">Rencana</td>
                    <td class="tg-nrix">Realisasi</td>
                    <td class="tg-nrix">Rencana</td>
                    <td class="tg-nrix">Realisasi</td>

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
                            class="form-control @error('penerimarencana1') is-invalid @enderror" id="penerimarencana1"
                            name="penerimarencana1" value="{{ old('penerimarencana1', $data->penerimarencana1) }}">
                        @error('penerimarencana1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi1') is-invalid @enderror"
                            id="penerimarealisasi1" name="penerimarealisasi1"
                            value="{{ old('penerimarealisasi1', $data->penerimarealisasi1) }}">
                        @error('penerimarealisasi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana1') is-invalid @enderror" id="anggaranrencana1"
                            name="anggaranrencana1" value="{{ old('anggaranrencana1', $data->anggaranrencana1) }}">
                        @error('anggaranrencana1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi1') is-invalid @enderror"
                            id="anggaranrealisasi1" name="anggaranrealisasi1"
                            value="{{ old('anggaranrealisasi1', $data->anggaranrealisasi1) }}">
                        @error('anggaranrealisasi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana2') is-invalid @enderror" id="penerimarencana2"
                            name="penerimarencana2" value="{{ old('penerimarencana2', $data->penerimarencana2) }}">
                        @error('penerimarencana2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi2') is-invalid @enderror"
                            id="penerimarealisasi2" name="penerimarealisasi2"
                            value="{{ old('penerimarealisasi2', $data->penerimarealisasi2) }}">
                        @error('penerimarealisasi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana2') is-invalid @enderror" id="anggaranrencana2"
                            name="anggaranrencana2" value="{{ old('anggaranrencana2', $data->anggaranrencana2) }}">
                        @error('anggaranrencana2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi2') is-invalid @enderror"
                            id="anggaranrealisasi2" name="anggaranrealisasi2"
                            value="{{ old('anggaranrealisasi2', $data->anggaranrealisasi2) }}">
                        @error('anggaranrealisasi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana3') is-invalid @enderror" id="penerimarencana3"
                            name="penerimarencana3" value="{{ old('penerimarencana3', $data->penerimarencana3) }}">
                        @error('penerimarencana3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi3') is-invalid @enderror"
                            id="penerimarealisasi3" name="penerimarealisasi3"
                            value="{{ old('penerimarealisasi3', $data->penerimarealisasi3) }}">
                        @error('penerimarealisasi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana3') is-invalid @enderror"
                            id="anggaranrencana3" name="anggaranrencana3"
                            value="{{ old('anggaranrencana3', $data->anggaranrencana3) }}">
                        @error('anggaranrencana3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi3') is-invalid @enderror"
                            id="anggaranrealisasi3" name="anggaranrealisasi3"
                            value="{{ old('anggaranrealisasi3', $data->anggaranrealisasi3) }}">
                        @error('anggaranrealisasi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana4') is-invalid @enderror"
                            id="penerimarencana4" name="penerimarencana4"
                            value="{{ old('penerimarencana4', $data->penerimarencana4) }}">
                        @error('penerimarencana4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi4') is-invalid @enderror"
                            id="penerimarealisasi4" name="penerimarealisasi4"
                            value="{{ old('penerimarealisasi4', $data->penerimarealisasi4) }}">
                        @error('penerimarealisasi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana4') is-invalid @enderror"
                            id="anggaranrencana4" name="anggaranrencana4"
                            value="{{ old('anggaranrencana4', $data->anggaranrencana4) }}">
                        @error('anggaranrencana4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi4') is-invalid @enderror"
                            id="anggaranrealisasi4" name="anggaranrealisasi4"
                            value="{{ old('anggaranrealisasi4', $data->anggaranrealisasi4) }}">
                        @error('anggaranrealisasi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana5') is-invalid @enderror"
                            id="penerimarencana5" name="penerimarencana5"
                            value="{{ old('penerimarencana5', $data->penerimarencana5) }}">
                        @error('penerimarencana5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi5') is-invalid @enderror"
                            id="penerimarealisasi5" name="penerimarealisasi5"
                            value="{{ old('penerimarealisasi5', $data->penerimarealisasi5) }}">
                        @error('penerimarealisasi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana5') is-invalid @enderror"
                            id="anggaranrencana5" name="anggaranrencana5"
                            value="{{ old('anggaranrencana5', $data->anggaranrencana5) }}">
                        @error('anggaranrencana5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi5') is-invalid @enderror"
                            id="anggaranrealisasi5" name="anggaranrealisasi5"
                            value="{{ old('anggaranrealisasi5', $data->anggaranrealisasi5) }}">
                        @error('anggaranrealisasi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana6') is-invalid @enderror"
                            id="penerimarencana6" name="penerimarencana6"
                            value="{{ old('penerimarencana6', $data->penerimarencana6) }}">
                        @error('penerimarencana6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi6') is-invalid @enderror"
                            id="penerimarealisasi6" name="penerimarealisasi6"
                            value="{{ old('penerimarealisasi6', $data->penerimarealisasi6) }}">
                        @error('penerimarealisasi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana6') is-invalid @enderror"
                            id="anggaranrencana6" name="anggaranrencana6"
                            value="{{ old('anggaranrencana6', $data->anggaranrencana6) }}">
                        @error('anggaranrencana6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi6') is-invalid @enderror"
                            id="anggaranrealisasi6" name="anggaranrealisasi6"
                            value="{{ old('anggaranrealisasi6', $data->anggaranrealisasi6) }}">
                        @error('anggaranrealisasi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana7') is-invalid @enderror"
                            id="penerimarencana7" name="penerimarencana7"
                            value="{{ old('penerimarencana7', $data->penerimarencana7) }}">
                        @error('penerimarencana7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi7') is-invalid @enderror"
                            id="penerimarealisasi7" name="penerimarealisasi7"
                            value="{{ old('penerimarealisasi7', $data->penerimarealisasi7) }}">
                        @error('penerimarealisasi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana7') is-invalid @enderror"
                            id="anggaranrencana7" name="anggaranrencana7"
                            value="{{ old('anggaranrencana7', $data->anggaranrencana7) }}">
                        @error('anggaranrencana7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi7') is-invalid @enderror"
                            id="anggaranrealisasi7" name="anggaranrealisasi7"
                            value="{{ old('anggaranrealisasi7', $data->anggaranrealisasi7) }}">
                        @error('anggaranrealisasi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencana8') is-invalid @enderror"
                            id="penerimarencana8" name="penerimarencana8"
                            value="{{ old('penerimarencana8', $data->penerimarencana8) }}">
                        @error('penerimarencana8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasi8') is-invalid @enderror"
                            id="penerimarealisasi8" name="penerimarealisasi8"
                            value="{{ old('penerimarealisasi8', $data->penerimarealisasi8) }}">
                        @error('penerimarealisasi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencana8') is-invalid @enderror"
                            id="anggaranrencana8" name="anggaranrencana8"
                            value="{{ old('anggaranrencana8', $data->anggaranrencana8) }}">
                        @error('anggaranrencana8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasi8') is-invalid @enderror"
                            id="anggaranrealisasi8" name="anggaranrealisasi8"
                            value="{{ old('anggaranrealisasi8', $data->anggaranrealisasi8) }}">
                        @error('anggaranrealisasi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah</span><span
                            style="font-style:italic;color:#000">/Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarencanat') is-invalid @enderror"
                            id="penerimarencanat" name="penerimarencanat"
                            value="{{ old('penerimarencanat', $data->penerimarencanat) }}">
                        @error('penerimarencanat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('penerimarealisasit') is-invalid @enderror"
                            id="penerimarealisasit" name="penerimarealisasit"
                            value="{{ old('penerimarealisasit', $data->penerimarealisasit) }}">
                        @error('penerimarealisasit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrencanat') is-invalid @enderror"
                            id="anggaranrencanat" name="anggaranrencanat"
                            value="{{ old('anggaranrencanat', $data->anggaranrencanat) }}">
                        @error('anggaranrencanat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('anggaranrealisasit') is-invalid @enderror"
                            id="anggaranrealisasit" name="anggaranrealisasit"
                            value="{{ old('anggaranrealisasit', $data->anggaranrealisasit) }}">
                        @error('anggaranrealisasit')
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
                <th class="tg-amwm" rowspan="2">4.3.7</th>
                <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Jumlah Keluarga Penerima Manfaat
                        (KPM) dan Anggaran Bantuan Sosial Pangan Menurut Kecamatan di Kabupaten Soppeng,
                        {{ $data->tahun }}
                    </span>
                </th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of
                        Beneficiary Family and Food Social Assistance Budget by Subdistrict in Soppeng Regency,
                        {{ $data->tahun }}
                    </span></th>
                <th class="tg-xxp7"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
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
                <td class="tg-wa1i"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Kecamatan/</td>
                <td class="tg-nrix" colspan="4">Jumlah Keluarga Penerima Manfaat (KPM)<br> Number of Beneficiary
                    Family </td>
                <td class="tg-nrix" colspan="4">Jumlah Anggaran (rupiah)/Budget Amount (rupiahs)</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                <td class="tg-lhti" colspan="2"><span style="font-style:italic">{{ $data->tahun }}
                    </span></td>
                <td class="tg-lhti" colspan="2"><span style="font-style:italic">{{ $data->tahun }}
                    </span></td>
                <td class="tg-lhti" colspan="2"><span style="font-style:italic">{{ $data->tahun }}
                    </span></td>
                <td class="tg-lhti" colspan="2"><span style="font-style:italic">{{ $data->tahun }}
                    </span></td>
            </tr>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-nrix">Rencana</td>
                <td class="tg-nrix">Realisasi</td>
                <td class="tg-nrix">Rencana</td>
                <td class="tg-nrix">Realisasi</td>
                <td class="tg-nrix">Rencana</td>
                <td class="tg-nrix">Realisasi</td>
                <td class="tg-nrix">Rencana</td>
                <td class="tg-nrix">Realisasi</td>
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
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-nrix">&nbsp;&nbsp;4 645 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;3 608 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;3 616 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;3 461 </span></td>
                <td class="tg-nrix"> 929 000 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 721 600 000 </span></td>
                <td class="tg-nrix"> 723 200 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 692 200 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-nrix">&nbsp;&nbsp;2 703 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 170 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;2 429 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 305 </span></td>
                <td class="tg-nrix"> 540 600 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 434 000 000 </span></td>
                <td class="tg-nrix"> 485 800 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 461 000 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-nrix">&nbsp;&nbsp;2 555 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 065 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;2 284 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 166 </span></td>
                <td class="tg-nrix"> 511 000 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 413 000 000 </span></td>
                <td class="tg-nrix"> 456 800 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 433 200 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-nrix">&nbsp;&nbsp;&nbsp;812 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;&nbsp;634 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;&nbsp;895 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;&nbsp;858 </span></td>
                <td class="tg-nrix"> 162 400 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 126 800 000 </span></td>
                <td class="tg-nrix"> 179 000 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 171 600 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-nrix">&nbsp;&nbsp;&nbsp;691 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;&nbsp;538 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;&nbsp;550 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;&nbsp;523 </span></td>
                <td class="tg-nrix"> 138 200 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 107 600 000 </span></td>
                <td class="tg-nrix"> 110 000 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 104 600 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-nrix">&nbsp;&nbsp;3 361 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 770 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;2 703 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 568 </span></td>
                <td class="tg-nrix"> 672 200 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 554 000 000 </span></td>
                <td class="tg-nrix"> 540 600 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 513 600 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-nrix">&nbsp;&nbsp;2 528 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 094 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;2 069 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1 965 </span></td>
                <td class="tg-nrix"> 505 600 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 418 800 000 </span></td>
                <td class="tg-nrix"> 413 800 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 393 000 000 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-nrix">&nbsp;&nbsp;3 579 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 814 </span></td>
                <td class="tg-nrix">&nbsp;&nbsp;2 642 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 504 </span></td>
                <td class="tg-nrix"> 715 800 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 562 800 000 </span></td>
                <td class="tg-nrix"> 528 400 000 </td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> 500 800 000 </span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah</span><span
                        style="font-style:italic;color:#000">/Total</span></td>
                <td class="tg-nrix">&nbsp;&nbsp;20 874 </td>
                <td class="tg-nrix">&nbsp;&nbsp;16 693 </td>
                <td class="tg-nrix">&nbsp;&nbsp;17 188 </td>
                <td class="tg-nrix">&nbsp;&nbsp;16 350 </td>
                <td class="tg-nrix">4 174 800 000 </td>
                <td class="tg-nrix">3 338 600 000 </td>
                <td class="tg-nrix">3 437 600 000 </td>
                <td class="tg-nrix">3 270 000 000 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.038_Sosial.script_038001')
@endsection
