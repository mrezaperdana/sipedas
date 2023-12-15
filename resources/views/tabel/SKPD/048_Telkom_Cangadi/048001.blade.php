@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">10.2.6</th>
                    <th class="tg-yla0" colspan="4"><span style="font-weight:bold">
                            {{ $judultabel }}, {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55" colspan="4"><span style="font-weight:bold;font-style:italic">
                            {{ $judultabelen }}, {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-baqh" colspan="2" rowspan="2"><span
                            style="font-style:normal;color:#000">Kecamatan/Subdistrict</span><br><span>
                    <td class="tg-baqh" rowspan="2">{{ $data->tahun }}</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td class="tg-nrix" colspan="2">(1)</td>
                    <td class="tg-nrix">(2)</td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">010. Marioriwawo</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan1') is-invalid @enderror" id="pelanggan1"
                            name="pelanggan1" value="{{ old('pelanggan1', $data->pelanggan1) }}">
                        @error('pelanggan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan2') is-invalid @enderror" id="pelanggan2"
                            name="pelanggan2" value="{{ old('pelanggan2', $data->pelanggan2) }}">
                        @error('pelanggan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan3') is-invalid @enderror" id="pelanggan3"
                            name="pelanggan3" value="{{ old('pelanggan3', $data->pelanggan3) }}">
                        @error('pelanggan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan4') is-invalid @enderror" id="pelanggan4"
                            name="pelanggan4" value="{{ old('pelanggan4', $data->pelanggan4) }}">
                        @error('pelanggan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan5') is-invalid @enderror" id="pelanggan5"
                            name="pelanggan5" value="{{ old('pelanggan5', $data->pelanggan5) }}">
                        @error('pelanggan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan6') is-invalid @enderror" id="pelanggan6"
                            name="pelanggan6" value="{{ old('pelanggan6', $data->pelanggan6) }}">
                        @error('pelanggan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan7') is-invalid @enderror" id="pelanggan7"
                            name="pelanggan7" value="{{ old('pelanggan7', $data->pelanggan7) }}">
                        @error('pelanggan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggan8') is-invalid @enderror" id="pelanggan8"
                            name="pelanggan8" value="{{ old('pelanggan8', $data->pelanggan8) }}">
                        @error('pelanggan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh" colspan="2" rowspan="2"><span
                            style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-weight:normal;font-style:italic;color:#000"> Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pelanggant') is-invalid @enderror" id="pelanggant"
                            name="pelanggant" value="{{ old('pelanggant', $data->pelanggant) }}">
                        @error('pelanggant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
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
                <th class="tg-amwm" rowspan="2">10.2.6</th>
                <th class="tg-yla0" colspan="4"><span style="font-weight:bold">Banyaknya Pelanggan Induk Telepon
                        Menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55" colspan="4"><span style="font-weight:bold;font-style:italic">Number of Phone
                        Customer by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></th>
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
                <td class="tg-baqh" colspan="2" rowspan="2"><span
                        style="font-style:normal;color:#000">Kecamatan/</span><br><span
                        style="font-weight:normal;font-style:italic;color:#000">Subdistrict</span></td>
                <td class="tg-baqh" rowspan="2">{{ $data->tahun }}</td>
                <td class="tg-baqh" rowspan="2">2019</td>
                <td class="tg-baqh" rowspan="2">2020</td>
                <td class="tg-baqh" rowspan="2">2021</td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="2">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">010. Marioriwawo</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;194 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;479 </td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;259 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;176 </td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;9 </td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;188 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;204 </td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;125 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;260 </td>
                <td class="tg-5si3"></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-baqh" colspan="2" rowspan="2"><span
                        style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-weight:normal;font-style:italic;color:#000"> Total</span></td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;766 </td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;1,128 </td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.048_telkom_cangadi.script')
    <script>
        function sumPelanggans() {
            var pelangganElements = document.querySelectorAll('[id^="pelanggan"]');
            var pelangganSum = 0;
            for (var i = 0; i < pelangganElements.length; i++) {
                if (pelangganElements[i].id !== "pelanggant") {
                    var pelangganValue = parseFloat(pelangganElements[i].value) || 0;
                    pelangganSum += pelangganValue;
                }
            }
            document.getElementById('pelanggant').value = pelangganSum;
        }

        var pelangganInputs = document.querySelectorAll('[id^="pelanggan"]');
        for (var i = 0; i < pelangganInputs.length; i++) {
            pelangganInputs[i].addEventListener('focusout', sumPelanggans);
        }
    </script>
@endsection
