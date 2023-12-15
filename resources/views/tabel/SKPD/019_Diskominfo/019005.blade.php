@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">10.2.11</th>
                    <th>Banyaknya Website menurut Kecamatan di Kabupaten <br>Soppeng, 2018-2022</th>
                </tr>
                <tr>
                    <th>Table</th>
                    <th>Number of Website by Subdistrict in Soppeng Regency, 2018-2022</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="2">Kecamatan/<br>Subdistrict</td>
                    <td>2018</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="2">(1)</td>
                    <td>(2)</td>
                </tr>
                <tr>
                    <td colspan="2">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('website2') is-invalid @enderror"
                            id="website2" name="website2" value="{{ old('website2', $data->website2) }}">
                        @error('website2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website2') is-invalid @enderror" id="website2" name="website2"
                            value="{{ old('website2', $data->website2) }}">
                        @error('website2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website3') is-invalid @enderror" id="website3" name="website3"
                            value="{{ old('website3', $data->website3) }}">
                        @error('website3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website4') is-invalid @enderror" id="website4" name="website4"
                            value="{{ old('website4', $data->website4) }}">
                        @error('website4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website5') is-invalid @enderror" id="website5" name="website5"
                            value="{{ old('website5', $data->website5) }}">
                        @error('website5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website6') is-invalid @enderror" id="website6" name="website6"
                            value="{{ old('website6', $data->website6) }}">
                        @error('website6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website7') is-invalid @enderror" id="website7" name="website7"
                            value="{{ old('website7', $data->website7) }}">
                        @error('website7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('website8') is-invalid @enderror" id="website8" name="website8"
                            value="{{ old('website8', $data->website8) }}">
                        @error('website8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2">Jumlah/ Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('websitet') is-invalid @enderror" id="websitet" name="websitet"
                            value="{{ old('websitet', $data->websitet) }}">
                        @error('websitet')
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
                <th rowspan="2">10.2.11</th>
                <th colspan="5">Banyaknya Website menurut Kecamatan di Kabupaten <br>Soppeng, 2018-2022</th>
            </tr>
            <tr>
                <th>Table</th>
                <th colspan="4">Number of Website by Subdistrict in Soppeng Regency, 2018-2022</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">Kecamatan/<br>Subdistrict</td>
                <td rowspan="2">2018</td>
                <td rowspan="2">2019</td>
                <td rowspan="2">2020</td>
                <td rowspan="2">2022</td>
                <td rowspan="2">2022</td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td colspan="2">(1)</td>
                <td>(2)</td>
                <td>(3)</td>
                <td>(4)</td>
                <td>(5)</td>
                <td>(5)</td>
            </tr>
            <tr>
                <td colspan="2">010. Marioriwawo</td>
                <td>2</td>
                <td>&nbsp;&nbsp;7 </td>
                <td>&nbsp;&nbsp;7 </td>
                <td>&nbsp;&nbsp;7 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">020. Lalabata</td>
                <td>50</td>
                <td>&nbsp;&nbsp;60 </td>
                <td>&nbsp;&nbsp;57 </td>
                <td>&nbsp;&nbsp;55 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">030. Liliriaja</td>
                <td>2</td>
                <td>&nbsp;&nbsp;7 </td>
                <td>&nbsp;&nbsp;7 </td>
                <td>&nbsp;&nbsp;7 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">031. Ganra</td>
                <td>1</td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;3 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">032. Citta</td>
                <td>2</td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;3 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">040. Lilirilau</td>
                <td>1</td>
                <td>&nbsp;&nbsp;9 </td>
                <td>&nbsp;&nbsp;9 </td>
                <td>&nbsp;&nbsp;9 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">050. Donri-Donri</td>
                <td>2</td>
                <td>&nbsp;&nbsp;4 </td>
                <td>&nbsp;&nbsp;4 </td>
                <td>&nbsp;&nbsp;4 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">060. Marioriawa</td>
                <td>2</td>
                <td>&nbsp;&nbsp;9 </td>
                <td>&nbsp;&nbsp;9 </td>
                <td>&nbsp;&nbsp;9 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">Jumlah/ Total</td>
                <td rowspan="2">&nbsp;&nbsp;62 </td>
                <td rowspan="2">&nbsp;&nbsp;102 </td>
                <td rowspan="2">&nbsp;&nbsp;99 </td>
                <td rowspan="2">&nbsp;&nbsp;97 </td>
                <td rowspan="2">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumWebsites() {
            var websiteElements = document.querySelectorAll('[id^="website"]');
            var websiteSum = 0;
            for (var i = 0; i < websiteElements.length; i++) {
                if (websiteElements[i].id !== "websitet") {
                    var websiteValue = parseFloat(websiteElements[i].value) || 0;
                    websiteSum += websiteValue;
                }
            }
            document.getElementById('websitet').value = websiteSum;
        }

        var websiteInputs = document.querySelectorAll('[id^="website"]');
        for (var i = 0; i < websiteInputs.length; i++) {
            websiteInputs[i].addEventListener('focusout', sumWebsites);
        }
    </script>
@endsection
