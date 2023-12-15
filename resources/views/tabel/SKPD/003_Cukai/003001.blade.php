@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-7zrl">No.</th>
                    <th class="tg-7zrl">Bulan</th>

                    {{-- <th class="tg-7zrl">Cukai HT 2021</th> --}}
                    <th class="tg-7zrl">Cukai HT {{ $data->tahun }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-7zrl">Januari</td>
                    {{-- <td class="tg-7zrl">1,014,273,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht1') is-invalid @enderror"
                            id="ht1" name="ht1" value="{{ old('ht1', $data->ht1) }}">
                        @error('ht1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-7zrl">Februari</td>
                    {{-- <td class="tg-2b7s">2,262,240,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht2') is-invalid @enderror"
                            id="ht2" name="ht2" value="{{ old('ht2', $data->ht2) }}">
                        @error('ht2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-7zrl">Maret</td>
                    {{-- <td class="tg-2b7s">3,975,345,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht3') is-invalid @enderror"
                            id="ht3" name="ht3" value="{{ old('ht3', $data->ht3) }}">
                        @error('ht3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-7zrl">April</td>
                    {{-- <td class="tg-2b7s">2,226,345,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht4') is-invalid @enderror"
                            id="ht4" name="ht4" value="{{ old('ht4', $data->ht4) }}">
                        @error('ht4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-7zrl">Mei</td>
                    {{-- <td class="tg-2b7s">2,946,819,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht5') is-invalid @enderror"
                            id="ht5" name="ht5" value="{{ old('ht5', $data->ht5) }}">
                        @error('ht5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-7zrl">Juni</td>
                    {{-- <td class="tg-2b7s">2,723,424,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht6') is-invalid @enderror"
                            id="ht6" name="ht6" value="{{ old('ht6', $data->ht6) }}">
                        @error('ht6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-7zrl">Juli</td>
                    {{-- <td class="tg-2b7s">2,596,716,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht7') is-invalid @enderror"
                            id="ht7" name="ht7" value="{{ old('ht7', $data->ht7) }}">
                        @error('ht7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">8</td>
                    <td class="tg-7zrl">Agustus</td>
                    {{-- <td class="tg-2b7s">2,731,785,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht8') is-invalid @enderror"
                            id="ht8" name="ht8" value="{{ old('ht8', $data->ht8) }}">
                        @error('ht8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">9</td>
                    <td class="tg-7zrl">September</td>
                    {{-- <td class="tg-2b7s">2,077,230,000.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht9') is-invalid @enderror"
                            id="ht9" name="ht9" value="{{ old('ht9', $data->ht9) }}">
                        @error('ht9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">10</td>
                    <td class="tg-7zrl">Oktober</td>
                    {{-- <td class="tg-2b7s">2,369,926,500.00</td> --}}
                    <td class="tg-cly1"><input type="text" class="form-control @error('ht10') is-invalid @enderror"
                            id="ht10" name="ht10" value="{{ old('ht10', $data->ht10) }}">
                        @error('ht10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">11</td>
                    <td class="tg-7zrl">November</td>
                    {{-- <td class="tg-2b7s">3,145,992,000.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ht11') is-invalid @enderror" id="ht11" name="ht11"
                            value="{{ old('ht11', $data->ht11) }}">
                        @error('ht11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                </tr>
                <tr>
                    <td class="tg-8d8j">12</td>
                    <td class="tg-7zrl">Desember</td>
                    {{-- <td class="tg-2b7s">4,938,927,000.00</td> --}}
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ht12') is-invalid @enderror" id="ht12" name="ht12"
                            value="{{ old('ht12', $data->ht12) }}">
                        @error('ht12')
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-7zrl">No.</th>
                <th class="tg-7zrl">Bulan</th>
                <th class="tg-7zrl">Cukai HT 2020</th>
                <th class="tg-7zrl">Cukai HT 2021</th>
                <th class="tg-7zrl">Cukai HT 2022</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-7zrl">Januari</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-7zrl">Februari</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-7zrl">Maret</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-7zrl">April</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-7zrl">Mei</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-7zrl">Juni</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-7zrl">Juli</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">8</td>
                <td class="tg-7zrl">Agustus</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">9</td>
                <td class="tg-7zrl">September</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">10</td>
                <td class="tg-7zrl">Oktober</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">11</td>
                <td class="tg-7zrl">November</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
            <tr>
                <td class="tg-8d8j">12</td>
                <td class="tg-7zrl">Desember</td>
                <td class="tg-2b7s"></td>
                <td class="tg-2b7s"></td>

            </tr>
        </tbody>
    </table>

@endif
