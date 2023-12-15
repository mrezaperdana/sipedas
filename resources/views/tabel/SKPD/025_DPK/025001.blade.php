<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">4.1.24</th>
                        <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Anggota Perpustakaan
                                Menurut Bulan dan Jenis Kelamin di Kabupaten Soppeng, {{ $data->tahun }}
                            </span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                                Library
                                Members by Month and Sex in Soppeng Regency, {{ $data->tahun }}
                            </span></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal">Bulan/</span><span
                                style="font-style:italic">Month</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Laki-Laki/</span><span
                                style="font-style:italic;color:#000">Men</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Perempuan/</span><span
                                style="font-style:italic;color:#000"> Women</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000"> Total</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Januari/</span><span
                                style="font-style:italic;color:#000">January</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal1') is-invalid @enderror" id="anggotal1"
                                name="anggotal1" value="{{ old('anggotal1', $data->anggotal1) }}">
                            @error('anggotal1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap1') is-invalid @enderror" id="anggotap1"
                                name="anggotap1" value="{{ old('anggotap1', $data->anggotap1) }}">
                            @error('anggotap1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah1') is-invalid @enderror" id="anggotajumlah1"
                                name="anggotajumlah1" value="{{ old('anggotajumlah1', $data->anggotajumlah1) }}">
                            @error('anggotajumlah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Februari/</span><span
                                style="font-style:italic;color:#000">February</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal2') is-invalid @enderror" id="anggotal2"
                                name="anggotal2" value="{{ old('anggotal2', $data->anggotal2) }}">
                            @error('anggotal2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap2') is-invalid @enderror" id="anggotap2"
                                name="anggotap2" value="{{ old('anggotap2', $data->anggotap2) }}">
                            @error('anggotap2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah2') is-invalid @enderror" id="anggotajumlah2"
                                name="anggotajumlah2" value="{{ old('anggotajumlah2', $data->anggotajumlah2) }}">
                            @error('anggotajumlah2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Maret/</span><span
                                style="font-style:italic;color:#000">March</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal3') is-invalid @enderror" id="anggotal3"
                                name="anggotal3" value="{{ old('anggotal3', $data->anggotal3) }}">
                            @error('anggotal3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap3') is-invalid @enderror" id="anggotap3"
                                name="anggotap3" value="{{ old('anggotap3', $data->anggotap3) }}">
                            @error('anggotap3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah3') is-invalid @enderror" id="anggotajumlah3"
                                name="anggotajumlah3" value="{{ old('anggotajumlah3', $data->anggotajumlah3) }}">
                            @error('anggotajumlah3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">April/</span><span
                                style="font-style:italic;color:#000">April</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal4') is-invalid @enderror" id="anggotal4"
                                name="anggotal4" value="{{ old('anggotal4', $data->anggotal4) }}">
                            @error('anggotal4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap4') is-invalid @enderror" id="anggotap4"
                                name="anggotap4" value="{{ old('anggotap4', $data->anggotap4) }}">
                            @error('anggotap4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah4') is-invalid @enderror"
                                id="anggotajumlah4" name="anggotajumlah4"
                                value="{{ old('anggotajumlah4', $data->anggotajumlah4) }}">
                            @error('anggotajumlah4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Mei/</span><span
                                style="font-style:italic;color:#000">May</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal5') is-invalid @enderror" id="anggotal5"
                                name="anggotal5" value="{{ old('anggotal5', $data->anggotal5) }}">
                            @error('anggotal5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap5') is-invalid @enderror" id="anggotap5"
                                name="anggotap5" value="{{ old('anggotap5', $data->anggotap5) }}">
                            @error('anggotap5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah5') is-invalid @enderror"
                                id="anggotajumlah5" name="anggotajumlah5"
                                value="{{ old('anggotajumlah5', $data->anggotajumlah5) }}">
                            @error('anggotajumlah5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Juni/</span><span
                                style="font-style:italic;color:#000">June</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal6') is-invalid @enderror" id="anggotal6"
                                name="anggotal6" value="{{ old('anggotal6', $data->anggotal6) }}">
                            @error('anggotal6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap6') is-invalid @enderror" id="anggotap6"
                                name="anggotap6" value="{{ old('anggotap6', $data->anggotap6) }}">
                            @error('anggotap6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah6') is-invalid @enderror"
                                id="anggotajumlah6" name="anggotajumlah6"
                                value="{{ old('anggotajumlah6', $data->anggotajumlah6) }}">
                            @error('anggotajumlah6')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Juli/</span><span
                                style="font-style:italic;color:#000">July</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal7') is-invalid @enderror" id="anggotal7"
                                name="anggotal7" value="{{ old('anggotal7', $data->anggotal7) }}">
                            @error('anggotal7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap7') is-invalid @enderror" id="anggotap7"
                                name="anggotap7" value="{{ old('anggotap7', $data->anggotap7) }}">
                            @error('anggotap7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah7') is-invalid @enderror"
                                id="anggotajumlah7" name="anggotajumlah7"
                                value="{{ old('anggotajumlah7', $data->anggotajumlah7) }}">
                            @error('anggotajumlah7')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Agustus/</span><span
                                style="font-style:italic;color:#000">August</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal8') is-invalid @enderror" id="anggotal8"
                                name="anggotal8" value="{{ old('anggotal8', $data->anggotal8) }}">
                            @error('anggotal8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap8') is-invalid @enderror" id="anggotap8"
                                name="anggotap8" value="{{ old('anggotap8', $data->anggotap8) }}">
                            @error('anggotap8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah8') is-invalid @enderror"
                                id="anggotajumlah8" name="anggotajumlah8"
                                value="{{ old('anggotajumlah8', $data->anggotajumlah8) }}">
                            @error('anggotajumlah8')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">September/</span><span
                                style="font-style:italic;color:#000">September</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal9') is-invalid @enderror" id="anggotal9"
                                name="anggotal9" value="{{ old('anggotal9', $data->anggotal9) }}">
                            @error('anggotal9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap9') is-invalid @enderror" id="anggotap9"
                                name="anggotap9" value="{{ old('anggotap9', $data->anggotap9) }}">
                            @error('anggotap9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah9') is-invalid @enderror"
                                id="anggotajumlah9" name="anggotajumlah9"
                                value="{{ old('anggotajumlah9', $data->anggotajumlah9) }}">
                            @error('anggotajumlah9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Oktober/</span><span
                                style="font-style:italic;color:#000">October</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal10') is-invalid @enderror" id="anggotal10"
                                name="anggotal10" value="{{ old('anggotal10', $data->anggotal10) }}">
                            @error('anggotal10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap10') is-invalid @enderror" id="anggotap10"
                                name="anggotap10" value="{{ old('anggotap10', $data->anggotap10) }}">
                            @error('anggotap10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah10') is-invalid @enderror"
                                id="anggotajumlah10" name="anggotajumlah10"
                                value="{{ old('anggotajumlah10', $data->anggotajumlah10) }}">
                            @error('anggotajumlah10')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">November/</span><span
                                style="font-style:italic;color:#000">November</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal11') is-invalid @enderror" id="anggotal11"
                                name="anggotal11" value="{{ old('anggotal11', $data->anggotal11) }}">
                            @error('anggotal11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap11') is-invalid @enderror" id="anggotap11"
                                name="anggotap11" value="{{ old('anggotap11', $data->anggotap11) }}">
                            @error('anggotap11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah11') is-invalid @enderror"
                                id="anggotajumlah11" name="anggotajumlah11"
                                value="{{ old('anggotajumlah11', $data->anggotajumlah11) }}">
                            @error('anggotajumlah11')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Desember/</span><span
                                style="font-style:italic;color:#000">December</span></td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotal12') is-invalid @enderror" id="anggotal12"
                                name="anggotal12" value="{{ old('anggotal12', $data->anggotal12) }}">
                            @error('anggotal12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotap12') is-invalid @enderror" id="anggotap12"
                                name="anggotap12" value="{{ old('anggotap12', $data->anggotap12) }}">
                            @error('anggotap12')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlah12') is-invalid @enderror"
                                id="anggotajumlah12" name="anggotajumlah12"
                                value="{{ old('anggotajumlah12', $data->anggotajumlah12) }}">
                            @error('anggotajumlah12')
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
                                class="form-control @error('anggotalt') is-invalid @enderror" id="anggotalt"
                                name="anggotalt" value="{{ old('anggotalt', $data->anggotalt) }}">
                            @error('anggotalt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotapt') is-invalid @enderror" id="anggotapt"
                                name="anggotapt" value="{{ old('anggotapt', $data->anggotapt) }}">
                            @error('anggotapt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('anggotajumlaht') is-invalid @enderror"
                                id="anggotajumlaht" name="anggotajumlaht"
                                value="{{ old('anggotajumlaht', $data->anggotajumlaht) }}">
                            @error('anggotajumlaht')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @else
        <x-slot name="tabel2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                        <th class="tg-amwm" rowspan="2">4.1.24</th>
                        <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Anggota
                                Perpustakaan
                                Menurut Bulan dan Jenis Kelamin di Kabupaten Soppeng, {{ $data->tahun }}
                            </span></th>
                    </tr>
                    <tr>
                        <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                        <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                                Library
                                Members by Month and Sex in Soppeng Regency, {{ $data->tahun }}
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
                        <td class="tg-baqh"><span style="font-style:normal">Bulan/</span><span
                                style="font-style:italic">Month</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Laki-Laki/</span><span
                                style="font-style:italic;color:#000">Men</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Perempuan/</span><span
                                style="font-style:italic;color:#000"> Women</span></td>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000"> Total</span></td>
                    </tr>
                    <tr>
                        <td class="tg-nrix">(1)</td>
                        <td class="tg-nrix">(2)</td>
                        <td class="tg-nrix">(3)</td>
                        <td class="tg-nrix">(4)</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Januari/</span><span
                                style="font-style:italic;color:#000">January</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-mwxe">2</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Februari/</span><span
                                style="font-style:italic;color:#000">February</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-mwxe">5</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Maret/</span><span
                                style="font-style:italic;color:#000">March</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">16</span></td>
                        <td class="tg-mwxe">22</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">April/</span><span
                                style="font-style:italic;color:#000">April</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">9</span></td>
                        <td class="tg-mwxe">16</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Mei/</span><span
                                style="font-style:italic;color:#000">May</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">12</span></td>
                        <td class="tg-mwxe">16</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Juni/</span><span
                                style="font-style:italic;color:#000">June</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">9</span></td>
                        <td class="tg-mwxe">11</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Juli/</span><span
                                style="font-style:italic;color:#000">July</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-mwxe">6</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Agustus/</span><span
                                style="font-style:italic;color:#000">August</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                        <td class="tg-mwxe">6</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">September/</span><span
                                style="font-style:italic;color:#000">September</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                        <td class="tg-mwxe">17</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Oktober/</span><span
                                style="font-style:italic;color:#000">October</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                        <td class="tg-mwxe">9</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">November/</span><span
                                style="font-style:italic;color:#000">November</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                        <td class="tg-mwxe">6</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax"><span style="font-style:normal;color:#000">Desember/</span><span
                                style="font-style:italic;color:#000">December</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                        <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                        <td class="tg-mwxe">7</td>
                    </tr>
                    <tr>
                        <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                                style="font-style:italic;color:#000">Total</span></td>
                        <td class="tg-mwxe">&nbsp;&nbsp;35 </td>
                        <td class="tg-mwxe">&nbsp;&nbsp;88 </td>
                        <td class="tg-mwxe">&nbsp;&nbsp;123 </td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.025_dpk.script1')
    </x-slot>
</x-tabel-entri-view>
