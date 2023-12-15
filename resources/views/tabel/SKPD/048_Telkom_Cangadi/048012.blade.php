@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-bobw" colspan="5"><span style="font-weight:bold">PSB POTS/ INDIHOME</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-bobw"><span style="font-weight:bold">Bulan</span></td>

                    <td class="tg-bobw"><span style="font-weight:bold">{{ $data->tahun }}</span></td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Januari</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome1') is-invalid @enderror" id="indihome1"
                            name="indihome1" value="{{ old('indihome1', $data->indihome1) }}">
                        @error('indihome1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Februari</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome2') is-invalid @enderror" id="indihome2"
                            name="indihome2" value="{{ old('indihome2', $data->indihome2) }}">
                        @error('indihome2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Maret</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome3') is-invalid @enderror" id="indihome3"
                            name="indihome3" value="{{ old('indihome3', $data->indihome3) }}">
                        @error('indihome3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">April</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome4') is-invalid @enderror" id="indihome4"
                            name="indihome4" value="{{ old('indihome4', $data->indihome4) }}">
                        @error('indihome4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Mei</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome5') is-invalid @enderror" id="indihome5"
                            name="indihome5" value="{{ old('indihome5', $data->indihome5) }}">
                        @error('indihome5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Juni</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome6') is-invalid @enderror" id="indihome6"
                            name="indihome6" value="{{ old('indihome6', $data->indihome6) }}">
                        @error('indihome6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Juli</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome7') is-invalid @enderror" id="indihome7"
                            name="indihome7" value="{{ old('indihome7', $data->indihome7) }}">
                        @error('indihome7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Agustus</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome8') is-invalid @enderror" id="indihome8"
                            name="indihome8" value="{{ old('indihome8', $data->indihome8) }}">
                        @error('indihome8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">September</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome9') is-invalid @enderror" id="indihome9"
                            name="indihome9" value="{{ old('indihome9', $data->indihome9) }}">
                        @error('indihome9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Oktober</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome10') is-invalid @enderror" id="indihome10"
                            name="indihome10" value="{{ old('indihome10', $data->indihome10) }}">
                        @error('indihome10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">November</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome11') is-invalid @enderror" id="indihome11"
                            name="indihome11" value="{{ old('indihome11', $data->indihome11) }}">
                        @error('indihome11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Desember</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihome12') is-invalid @enderror" id="indihome12"
                            name="indihome12" value="{{ old('indihome12', $data->indihome12) }}">
                        @error('indihome12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-bobw"><span style="font-weight:bold">Jumlah</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('indihomet') is-invalid @enderror" id="indihomet"
                            name="indihomet" value="{{ old('indihomet', $data->indihomet) }}">
                        @error('indihomet')
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
                <th class="tg-bobw" colspan="5"><span style="font-weight:bold">PSB POTS/ INDIHOME</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-bobw"><span style="font-weight:bold">Bulan</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">2018</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">2019</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">2020</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">2021</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Januari</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Februari</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Maret</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">April</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Mei</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Juni</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Juli</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Agustus</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">September</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Oktober</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">November</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-7zrl"><span style="font-weight:normal">Desember</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-bobw"><span style="font-weight:bold">Jumlah</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">0</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">0</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumIndihomes() {
            var indihomeElements = document.querySelectorAll('[id^="indihome"]');
            var indihomeSum = 0;
            for (var i = 0; i < indihomeElements.length; i++) {
                if (indihomeElements[i].id !== "indihomet") {
                    var indihomeValue = parseFloat(indihomeElements[i].value) || 0;
                    indihomeSum += indihomeValue;
                }
            }
            document.getElementById('indihomet').value = indihomeSum;
        }

        var indihomeInputs = document.querySelectorAll('[id^="indihome"]');
        for (var i = 0; i < indihomeInputs.length; i++) {
            indihomeInputs[i].addEventListener('focusout', sumIndihomes);
        }
    </script>
@endsection
