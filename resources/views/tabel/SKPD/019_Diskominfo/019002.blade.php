@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">11.2.8</th>
                    <th colspan="2">Jumlah Pengelola TV Kabel menurut Kecamatan di Kabupaten Soppeng, 2018-2021</th>
                </tr>
                <tr>
                    <th>Table</th>
                    <th colspan="2">Number of Cable TV Management by Subdistrict in Soppeng Regency, 2018-2021</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="2" rowspan="2">Kecamatan/<br>Subdistrict</td>
                    <td colspan="2">2020</td>
                </tr>
                <tr>
                    <td>BELUM BERIZIN</td>
                    <td>BERIZIN</td>
                </tr>
                <tr>
                    <td colspan="2">(1)</td>
                    <td>(4)</td>
                    <td>(5)</td>
                </tr>
                <tr>
                    <td colspan="2">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('belum1') is-invalid @enderror"
                            id="belum1" name="belum1" value="{{ old('belum1', $data->belum1) }}">
                        @error('belum1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin1') is-invalid @enderror" id="berizin1" name="berizin1"
                            value="{{ old('berizin1', $data->berizin1) }}">
                        @error('berizin1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('belum2') is-invalid @enderror"
                            id="belum2" name="belum2" value="{{ old('belum2', $data->belum2) }}">
                        @error('belum2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin2') is-invalid @enderror" id="berizin2" name="berizin2"
                            value="{{ old('berizin2', $data->berizin2) }}">
                        @error('berizin2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('belum3') is-invalid @enderror"
                            id="belum3" name="belum3" value="{{ old('belum3', $data->belum3) }}">
                        @error('belum3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin3') is-invalid @enderror" id="berizin3" name="berizin3"
                            value="{{ old('berizin3', $data->berizin3) }}">
                        @error('berizin3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">031. Ganra</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('belum4') is-invalid @enderror"
                            id="belum4" name="belum4" value="{{ old('belum4', $data->belum4) }}">
                        @error('belum4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin4') is-invalid @enderror" id="berizin4" name="berizin4"
                            value="{{ old('berizin4', $data->berizin4) }}">
                        @error('berizin4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">032. Citta</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('belum5') is-invalid @enderror"
                            id="belum5" name="belum5" value="{{ old('belum5', $data->belum5) }}">
                        @error('belum5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin5') is-invalid @enderror" id="berizin5" name="berizin5"
                            value="{{ old('berizin5', $data->berizin5) }}">
                        @error('berizin5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('belum6') is-invalid @enderror" id="belum6" name="belum6"
                            value="{{ old('belum6', $data->belum6) }}">
                        @error('belum6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin6') is-invalid @enderror" id="berizin6" name="berizin6"
                            value="{{ old('berizin6', $data->berizin6) }}">
                        @error('berizin6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('belum7') is-invalid @enderror" id="belum7" name="belum7"
                            value="{{ old('belum7', $data->belum7) }}">
                        @error('belum7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin7') is-invalid @enderror" id="berizin7"
                            name="berizin7" value="{{ old('berizin7', $data->berizin7) }}">
                        @error('berizin7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('belum8') is-invalid @enderror" id="belum8" name="belum8"
                            value="{{ old('belum8', $data->belum8) }}">
                        @error('belum8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizin8') is-invalid @enderror" id="berizin8"
                            name="berizin8" value="{{ old('berizin8', $data->berizin8) }}">
                        @error('berizin8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2">Jumlah/ Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('belumt') is-invalid @enderror" id="belumt" name="belumt"
                            value="{{ old('belumt', $data->belumt) }}">
                        @error('belumt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('berizint') is-invalid @enderror" id="berizint"
                            name="berizint" value="{{ old('berizint', $data->berizint) }}">
                        @error('berizint')
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
                <th>Tabel</th>
                <th rowspan="2">11.2.8</th>
                <th colspan="2">Jumlah Pengelola TV Kabel menurut Kecamatan di Kabupaten Soppeng, 2018-2021</th>
            </tr>
            <tr>
                <th>Table</th>
                <th colspan="2">Number of Cable TV Management by Subdistrict in Soppeng Regency, 2018-2021</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">Kecamatan/<br>Subdistrict</td>
                <td colspan="2">2020</td>
            </tr>
            <tr>
                <td>BELUM BERIZIN</td>
                <td>BERIZIN</td>
            </tr>
            <tr>
                <td colspan="2">(1)</td>
                <td>(4)</td>
                <td>(5)</td>
            </tr>
            <tr>
                <td colspan="2">010. Marioriwawo</td>
                <td>&nbsp;&nbsp;14 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2">020. Lalabata</td>
                <td>&nbsp;&nbsp;3 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2">030. Liliriaja</td>
                <td>&nbsp;&nbsp;5 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2">031. Ganra</td>
                <td>&nbsp;&nbsp;2 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2">032. Citta</td>
                <td>&nbsp;&nbsp;2 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2">040. Lilirilau</td>
                <td>&nbsp;&nbsp;4 </td>
                <td>1</td>
            </tr>
            <tr>
                <td colspan="2">050. Donri-Donri</td>
                <td>&nbsp;&nbsp;8 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2">060. Marioriawa</td>
                <td>&nbsp;&nbsp;5 </td>
                <td>0</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">Jumlah/ Total</td>
                <td rowspan="2">&nbsp;&nbsp;43 </td>
                <td rowspan="2">&nbsp;&nbsp;1 </td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumBerizins() {
            var berizinElements = document.querySelectorAll('[id^="berizin"]');
            var berizinSum = 0;
            for (var i = 0; i < berizinElements.length; i++) {
                if (berizinElements[i].id !== "berizint") {
                    var berizinValue = parseFloat(berizinElements[i].value) || 0;
                    berizinSum += berizinValue;
                }
            }
            document.getElementById('berizint').value = berizinSum;
        }

        var berizinInputs = document.querySelectorAll('[id^="berizin"]');
        for (var i = 0; i < berizinInputs.length; i++) {
            berizinInputs[i].addEventListener('focusout', sumBerizins);
        }
    </script>
    <script>
        function sumBelums() {
            var belumElements = document.querySelectorAll('[id^="belum"]');
            var belumSum = 0;
            for (var i = 0; i < belumElements.length; i++) {
                if (belumElements[i].id !== "belumt") {
                    var belumValue = parseFloat(belumElements[i].value) || 0;
                    belumSum += belumValue;
                }
            }
            document.getElementById('belumt').value = belumSum;
        }

        var belumInputs = document.querySelectorAll('[id^="belum"]');
        for (var i = 0; i < belumInputs.length; i++) {
            belumInputs[i].addEventListener('focusout', sumBelums);
        }
    </script>
@endsection
