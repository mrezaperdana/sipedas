@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">10.2.10</th>
                    <th>Banyaknya Menara Base Tranceiver Station (BTS) menurut Kecamatan di Kabupaten
                        Soppeng,
                        2018-2022</th>
                </tr>
                <tr>
                    <th>Table</th>
                    <th>Number of BTS Tower by Subdistrict in Soppeng Regency, 2018-2022</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="2" rowspan="2">Kecamatan/<br>Subdistrict</td>

                    <td rowspan="2">2022</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="2">(1)</td>
                    <td>(2)</td>
                </tr>
                <tr>
                    <td colspan="2">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara1') is-invalid @enderror" id="menara1" name="menara1"
                            value="{{ old('menara1', $data->menara1) }}">
                        @error('menara1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara2') is-invalid @enderror" id="menara2" name="menara2"
                            value="{{ old('menara2', $data->menara2) }}">
                        @error('menara2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara3') is-invalid @enderror" id="menara3" name="menara3"
                            value="{{ old('menara3', $data->menara3) }}">
                        @error('menara3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara4') is-invalid @enderror" id="menara4" name="menara4"
                            value="{{ old('menara4', $data->menara4) }}">
                        @error('menara4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara5') is-invalid @enderror" id="menara5" name="menara5"
                            value="{{ old('menara5', $data->menara5) }}">
                        @error('menara5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara6') is-invalid @enderror" id="menara6" name="menara6"
                            value="{{ old('menara6', $data->menara6) }}">
                        @error('menara6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara7') is-invalid @enderror" id="menara7" name="menara7"
                            value="{{ old('menara7', $data->menara7) }}">
                        @error('menara7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menara8') is-invalid @enderror" id="menara8" name="menara8"
                            value="{{ old('menara8', $data->menara8) }}">
                        @error('menara8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2">Jumlah/ Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('menarat') is-invalid @enderror" id="menarat" name="menarat"
                            value="{{ old('menarat', $data->menarat) }}">
                        @error('menarat')
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
                <th rowspan="2">10.2.10</th>
                <th>Banyaknya Menara Base Tranceiver Station (BTS) menurut Kecamatan di Kabupaten
                    Soppeng,
                    2018-2022</th>
            </tr>
            <tr>
                <th>Table</th>
                <th>Number of BTS Tower by Subdistrict in Soppeng Regency, 2018-2022</th>
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
                <td rowspan="2">2021</td>
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
                <td>(6)</td>
            </tr>
            <tr>
                <td colspan="2">010. Marioriwawo</td>
                <td>7</td>
                <td>&nbsp;&nbsp;18 </td>
                <td>&nbsp;&nbsp;18 </td>
                <td>&nbsp;&nbsp;19 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">020. Lalabata</td>
                <td>19</td>
                <td>&nbsp;&nbsp;23 </td>
                <td>&nbsp;&nbsp;23 </td>
                <td>&nbsp;&nbsp;23 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">030. Liliriaja</td>
                <td>4</td>
                <td>&nbsp;&nbsp;15 </td>
                <td>&nbsp;&nbsp;15 </td>
                <td>&nbsp;&nbsp;18 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">031. Ganra</td>
                <td>2</td>
                <td>&nbsp;&nbsp;6 </td>
                <td>&nbsp;&nbsp;6 </td>
                <td>&nbsp;&nbsp;7 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">032. Citta</td>
                <td>2</td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">040. Lilirilau</td>
                <td>6</td>
                <td>&nbsp;&nbsp;12 </td>
                <td>&nbsp;&nbsp;12 </td>
                <td>&nbsp;&nbsp;13 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">050. Donri-Donri</td>
                <td>4</td>
                <td>&nbsp;&nbsp;6 </td>
                <td>&nbsp;&nbsp;6 </td>
                <td>&nbsp;&nbsp;6 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">060. Marioriawa</td>
                <td>6</td>
                <td>&nbsp;&nbsp;9 </td>
                <td>&nbsp;&nbsp;9 </td>
                <td>&nbsp;&nbsp;10 </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">Jumlah/ Total</td>
                <td rowspan="2">&nbsp;&nbsp;50 </td>
                <td rowspan="2">&nbsp;&nbsp;91 </td>
                <td rowspan="2">&nbsp;&nbsp;91 </td>
                <td rowspan="2">&nbsp;&nbsp;98 </td>
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
        function sumMenaras() {
            var menaraElements = document.querySelectorAll('[id^="menara"]');
            var menaraSum = 0;
            for (var i = 0; i < menaraElements.length; i++) {
                if (menaraElements[i].id !== "menarat") {
                    var menaraValue = parseFloat(menaraElements[i].value) || 0;
                    menaraSum += menaraValue;
                }
            }
            document.getElementById('menarat').value = menaraSum;
        }

        var menaraInputs = document.querySelectorAll('[id^="menara"]');
        for (var i = 0; i < menaraInputs.length; i++) {
            menaraInputs[i].addEventListener('focusout', sumMenaras);
        }
    </script>
@endsection
