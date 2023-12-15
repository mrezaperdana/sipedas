@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">2.5.1</th>
                    <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya Penduduk yang Mengurus
                            Akte Catatan Sipil Menurut Kecamatan dan Kategori Catatan Sipil di Kabupaten Soppeng,

                            {{ $data->tahun }}</span>
                    </th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of People
                            Managing Civil Registration Certificate by Subdistrict and Category of Civil Registration in
                            Soppeng
                            Regency,
                            {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Kecamatan/</span><span
                            style="font-style:italic;color:#000">Subdistrict</span></td>
                    <td class="tg-baqh" colspan="4"><span style="font-style:normal">Kategori/</span><span
                            style="font-style:italic">Category</span></td>
                    <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Perkawinan/</span><span
                            style="font-style:italic;color:#000">Mariage</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Perceraian/</span><span
                            style="font-style:italic;color:#000">Divorce</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kelahiran/</span><span
                            style="font-style:italic;color:#000">Birth</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kematian/</span><span
                            style="font-style:italic;color:#000">Death</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                    <td class="tg-nrix">(5)</td>
                    <td class="tg-nrix">(6)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perkawinan1') is-invalid @enderror" id="perkawinan1"
                            name="perkawinan1" value="{{ old('perkawinan1', $data->perkawinan1) }}">
                        @error('perkawinan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian1') is-invalid @enderror" id="perceraian1"
                            name="perceraian1" value="{{ old('perceraian1', $data->perceraian1) }}">
                        @error('perceraian1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran1') is-invalid @enderror" id="kelahiran1"
                            name="kelahiran1" value="{{ old('kelahiran1', $data->kelahiran1) }}">
                        @error('kelahiran1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian1') is-invalid @enderror" id="kematian1"
                            name="kematian1" value="{{ old('kematian1', $data->kematian1) }}">
                        @error('kematian1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perkawinan2') is-invalid @enderror" id="perkawinan2"
                            name="perkawinan2" value="{{ old('perkawinan2', $data->perkawinan2) }}">
                        @error('perkawinan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian2') is-invalid @enderror" id="perceraian2"
                            name="perceraian2" value="{{ old('perceraian2', $data->perceraian2) }}">
                        @error('perceraian2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran2') is-invalid @enderror" id="kelahiran2"
                            name="kelahiran2" value="{{ old('kelahiran2', $data->kelahiran2) }}">
                        @error('kelahiran2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian2') is-invalid @enderror" id="kematian2"
                            name="kematian2" value="{{ old('kematian2', $data->kematian2) }}">
                        @error('kematian2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
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
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perkawinan3') is-invalid @enderror" id="perkawinan3"
                            name="perkawinan3" value="{{ old('perkawinan3', $data->perkawinan3) }}">
                        @error('perkawinan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian3') is-invalid @enderror" id="perceraian3"
                            name="perceraian3" value="{{ old('perceraian3', $data->perceraian3) }}">
                        @error('perceraian3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran3') is-invalid @enderror" id="kelahiran3"
                            name="kelahiran3" value="{{ old('kelahiran3', $data->kelahiran3) }}">
                        @error('kelahiran3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian3') is-invalid @enderror" id="kematian3"
                            name="kematian3" value="{{ old('kematian3', $data->kematian3) }}">
                        @error('kematian3')
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
                            class="form-control @error('perkawinan4') is-invalid @enderror" id="perkawinan4"
                            name="perkawinan4" value="{{ old('perkawinan4', $data->perkawinan4) }}">
                        @error('perkawinan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian4') is-invalid @enderror" id="perceraian4"
                            name="perceraian4" value="{{ old('perceraian4', $data->perceraian4) }}">
                        @error('perceraian4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran4') is-invalid @enderror" id="kelahiran4"
                            name="kelahiran4" value="{{ old('kelahiran4', $data->kelahiran4) }}">
                        @error('kelahiran4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian4') is-invalid @enderror" id="kematian4"
                            name="kematian4" value="{{ old('kematian4', $data->kematian4) }}">
                        @error('kematian4')
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
                            class="form-control @error('perkawinan5') is-invalid @enderror" id="perkawinan5"
                            name="perkawinan5" value="{{ old('perkawinan5', $data->perkawinan5) }}">
                        @error('perkawinan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian5') is-invalid @enderror" id="perceraian5"
                            name="perceraian5" value="{{ old('perceraian5', $data->perceraian5) }}">
                        @error('perceraian5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran5') is-invalid @enderror" id="kelahiran5"
                            name="kelahiran5" value="{{ old('kelahiran5', $data->kelahiran5) }}">
                        @error('kelahiran5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian5') is-invalid @enderror" id="kematian5"
                            name="kematian5" value="{{ old('kematian5', $data->kematian5) }}">
                        @error('kematian5')
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
                            class="form-control @error('perkawinan6') is-invalid @enderror" id="perkawinan6"
                            name="perkawinan6" value="{{ old('perkawinan6', $data->perkawinan6) }}">
                        @error('perkawinan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian6') is-invalid @enderror" id="perceraian6"
                            name="perceraian6" value="{{ old('perceraian6', $data->perceraian6) }}">
                        @error('perceraian6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran6') is-invalid @enderror" id="kelahiran6"
                            name="kelahiran6" value="{{ old('kelahiran6', $data->kelahiran6) }}">
                        @error('kelahiran6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian6') is-invalid @enderror" id="kematian6"
                            name="kematian6" value="{{ old('kematian6', $data->kematian6) }}">
                        @error('kematian6')
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
                            class="form-control @error('perkawinan7') is-invalid @enderror" id="perkawinan7"
                            name="perkawinan7" value="{{ old('perkawinan7', $data->perkawinan7) }}">
                        @error('perkawinan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian7') is-invalid @enderror" id="perceraian7"
                            name="perceraian7" value="{{ old('perceraian7', $data->perceraian7) }}">
                        @error('perceraian7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran7') is-invalid @enderror" id="kelahiran7"
                            name="kelahiran7" value="{{ old('kelahiran7', $data->kelahiran7) }}">
                        @error('kelahiran7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian7') is-invalid @enderror" id="kematian7"
                            name="kematian7" value="{{ old('kematian7', $data->kematian7) }}">
                        @error('kematian7')
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
                            class="form-control @error('perkawinan8') is-invalid @enderror" id="perkawinan8"
                            name="perkawinan8" value="{{ old('perkawinan8', $data->perkawinan8) }}">
                        @error('perkawinan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraian8') is-invalid @enderror" id="perceraian8"
                            name="perceraian8" value="{{ old('perceraian8', $data->perceraian8) }}">
                        @error('perceraian8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahiran8') is-invalid @enderror" id="kelahiran8"
                            name="kelahiran8" value="{{ old('kelahiran8', $data->kelahiran8) }}">
                        @error('kelahiran8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematian8') is-invalid @enderror" id="kematian8"
                            name="kematian8" value="{{ old('kematian8', $data->kematian8) }}">
                        @error('kematian8')
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
                    <td class="tg-0lax"><span style="font-style:normal">Jumlah/</span><span
                            style="font-style:italic">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perkawinant') is-invalid @enderror" id="perkawinant"
                            name="perkawinant" value="{{ old('perkawinant', $data->perkawinant) }}">
                        @error('perkawinant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('perceraiant') is-invalid @enderror" id="perceraiant"
                            name="perceraiant" value="{{ old('perceraiant', $data->perceraiant) }}">
                        @error('perceraiant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kelahirant') is-invalid @enderror" id="kelahirant"
                            name="kelahirant" value="{{ old('kelahirant', $data->kelahirant) }}">
                        @error('kelahirant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kematiant') is-invalid @enderror" id="kematiant"
                            name="kematiant" value="{{ old('kematiant', $data->kematiant) }}">
                        @error('kematiant')
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
                <th class="tg-amwm" rowspan="2">2.5.1</th>
                <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya Penduduk yang Mengurus
                        Akte Catatan Sipil Menurut Kecamatan dan Kategori Catatan Sipil di Kabupaten Soppeng,

                        {{ $data->tahun }}</span>
                </th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of People
                        Managing Civil Registration Certificate by Subdistrict and Category of Civil Registration in
                        Soppeng
                        Regency,
                        {{ $data->tahun }}</span></th>
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
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Kecamatan/</span><span
                        style="font-style:italic;color:#000">Subdistrict</span></td>
                <td class="tg-baqh" colspan="4"><span style="font-style:normal">Kategori/</span><span
                        style="font-style:italic">Category</span></td>
                <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Perkawinan/</span><span
                        style="font-style:italic;color:#000">Mariage</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Perceraian/</span><span
                        style="font-style:italic;color:#000">Divorce</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kelahiran/</span><span
                        style="font-style:italic;color:#000">Birth</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kematian/</span><span
                        style="font-style:italic;color:#000">Death</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;221 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;60 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1,444 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;134 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;1,859 </td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;322 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;78 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1,479 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;186 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;2,065 </td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;126 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;41 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;530 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;123 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;820 </td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;50 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;11 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;202 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;50 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;313 </td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;22 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;13 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;156 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;26 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;217 </td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;131 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;49 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;810 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;142 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;1,132 </td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;119 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;44 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;405 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;110 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;678 </td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;171 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;25 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;789 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">&nbsp;&nbsp;94 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;1,079 </td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal">Jumlah/</span><span
                        style="font-style:italic">Total</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;1,162 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;321 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;5,815 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;865 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;8,163 </td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
@endsection
