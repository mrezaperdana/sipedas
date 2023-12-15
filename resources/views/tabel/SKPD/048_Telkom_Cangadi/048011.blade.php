@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-bobw" colspan="5"><span style="font-weight:bold">PSB POTS/ SPEEDY</span></th>
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
                            class="form-control @error('speedy1') is-invalid @enderror" id="speedy1" name="speedy1"
                            value="{{ old('speedy1', $data->speedy1) }}">
                        @error('speedy1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Februari</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy2') is-invalid @enderror" id="speedy2" name="speedy2"
                            value="{{ old('speedy2', $data->speedy2) }}">
                        @error('speedy2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Maret</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy3') is-invalid @enderror" id="speedy3" name="speedy3"
                            value="{{ old('speedy3', $data->speedy3) }}">
                        @error('speedy3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">April</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy4') is-invalid @enderror" id="speedy4" name="speedy4"
                            value="{{ old('speedy4', $data->speedy4) }}">
                        @error('speedy4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Mei</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy5') is-invalid @enderror" id="speedy5" name="speedy5"
                            value="{{ old('speedy5', $data->speedy5) }}">
                        @error('speedy5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Juni</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy6') is-invalid @enderror" id="speedy6" name="speedy6"
                            value="{{ old('speedy6', $data->speedy6) }}">
                        @error('speedy6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Juli</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy7') is-invalid @enderror" id="speedy7" name="speedy7"
                            value="{{ old('speedy7', $data->speedy7) }}">
                        @error('speedy7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Agustus</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy8') is-invalid @enderror" id="speedy8" name="speedy8"
                            value="{{ old('speedy8', $data->speedy8) }}">
                        @error('speedy8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">September</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy9') is-invalid @enderror" id="speedy9" name="speedy9"
                            value="{{ old('speedy9', $data->speedy9) }}">
                        @error('speedy9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Oktober</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy10') is-invalid @enderror" id="speedy10" name="speedy10"
                            value="{{ old('speedy10', $data->speedy10) }}">
                        @error('speedy10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">November</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy11') is-invalid @enderror" id="speedy11"
                            name="speedy11" value="{{ old('speedy11', $data->speedy11) }}">
                        @error('speedy11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl"><span style="font-weight:normal">Desember</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedy12') is-invalid @enderror" id="speedy12"
                            name="speedy12" value="{{ old('speedy12', $data->speedy12) }}">
                        @error('speedy12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-bobw"><span style="font-weight:bold">Jumlah</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('speedyt') is-invalid @enderror" id="speedyt"
                            name="speedyt" value="{{ old('speedyt', $data->speedyt) }}">
                        @error('speedyt')
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
                <th class="tg-bobw" colspan="5"><span style="font-weight:bold">PSB POTS/ SPEEDY</span></th>
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
        function sumSpeedys() {
            var speedyElements = document.querySelectorAll('[id^="speedy"]');
            var speedySum = 0;
            for (var i = 0; i < speedyElements.length; i++) {
                if (speedyElements[i].id !== "speedyt") {
                    var speedyValue = parseFloat(speedyElements[i].value) || 0;
                    speedySum += speedyValue;
                }
            }
            document.getElementById('speedyt').value = speedySum;
        }

        var speedyInputs = document.querySelectorAll('[id^="speedy"]');
        for (var i = 0; i < speedyInputs.length; i++) {
            speedyInputs[i].addEventListener('focusout', sumSpeedys);
        }
    </script>
@endsection
