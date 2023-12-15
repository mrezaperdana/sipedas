@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">10.2.5</th>
                    <th class="tg-yla0" colspan="4"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55" colspan="4"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }}, {{ $data->tahun }}</span>
                    </th>
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
                            class="form-control @error('sambungan1') is-invalid @enderror" id="sambungan1"
                            name="sambungan1" value="{{ old('sambungan1', $data->sambungan1) }}">
                        @error('sambungan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan2') is-invalid @enderror" id="sambungan2"
                            name="sambungan2" value="{{ old('sambungan2', $data->sambungan2) }}">
                        @error('sambungan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan3') is-invalid @enderror" id="sambungan3"
                            name="sambungan3" value="{{ old('sambungan3', $data->sambungan3) }}">
                        @error('sambungan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan4') is-invalid @enderror" id="sambungan4"
                            name="sambungan4" value="{{ old('sambungan4', $data->sambungan4) }}">
                        @error('sambungan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan5') is-invalid @enderror" id="sambungan5"
                            name="sambungan5" value="{{ old('sambungan5', $data->sambungan5) }}">
                        @error('sambungan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan6') is-invalid @enderror" id="sambungan6"
                            name="sambungan6" value="{{ old('sambungan6', $data->sambungan6) }}">
                        @error('sambungan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan7') is-invalid @enderror" id="sambungan7"
                            name="sambungan7" value="{{ old('sambungan7', $data->sambungan7) }}">
                        @error('sambungan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sambungan8') is-invalid @enderror" id="sambungan8"
                            name="sambungan8" value="{{ old('sambungan8', $data->sambungan8) }}">
                        @error('sambungan8')
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
                            class="form-control @error('sambungant') is-invalid @enderror" id="sambungant"
                            name="sambungant" value="{{ old('sambungant', $data->sambungant) }}">
                        @error('sambungant')
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
                <th class="tg-amwm" rowspan="2">10.2.5</th>
                <th class="tg-yla0" colspan="4"><span style="font-weight:bold">Banyaknya Sambungan Induk Telepon
                        Menurut Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55" colspan="4"><span style="font-weight:bold;font-style:italic">Number of Main
                        Phone Connection by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></th>
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
                <td class="tg-baqh" rowspan="2">2018</td>
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
                <td class="tg-mwxe"> - </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">020. Lalabata</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;2,400 </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">030. Liliriaja</span></td>
                <td class="tg-mwxe"> - </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">031. Ganra</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;12 </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">032. Citta</span></td>
                <td class="tg-mwxe"> - </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">040. Lilirilau</span></td>
                <td class="tg-mwxe"> - </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">050. Donri-Donri</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;550 </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-zr06" colspan="2"><span style="background-color:#FFF">060. Marioriawa</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;560 </td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-baqh" colspan="2" rowspan="2"><span
                        style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-weight:normal;font-style:italic;color:#000"> Total</span></td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;3,522 </td>
                <td class="tg-lqy6" rowspan="2">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
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
    <script>
        function sumSambungans() {
            var sambunganElements = document.querySelectorAll('[id^="sambungan"]');
            var sambunganSum = 0;
            for (var i = 0; i < sambunganElements.length; i++) {
                if (sambunganElements[i].id !== "sambungant") {
                    var sambunganValue = parseFloat(sambunganElements[i].value) || 0;
                    sambunganSum += sambunganValue;
                }
            }
            document.getElementById('sambungant').value = sambunganSum;
        }

        var sambunganInputs = document.querySelectorAll('[id^="sambungan"]');
        for (var i = 0; i < sambunganInputs.length; i++) {
            sambunganInputs[i].addEventListener('focusout', sumSambungans);
        }
    </script>
@endsection
