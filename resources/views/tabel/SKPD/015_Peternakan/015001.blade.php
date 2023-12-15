@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-7zrl">No</th>
                    <th class="tg-7zrl">Komoditas</th>
                    <th class="tg-7zrl">Satuan</th>
                    {{-- <th class="tg-8d8j">2021</th> --}}
                    <th class="tg-8d8j">{{ $data->tahun }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-7zrl">Sapi Potong</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi1') is-invalid @enderror" id="produksi1"
                            name="produksi1" value="{{ old('produksi1', $data->produksi1) }}">
                        @error('produksi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-7zrl">Sapi Perah</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi2') is-invalid @enderror" id="produksi2"
                            name="produksi2" value="{{ old('produksi2', $data->produksi2) }}">
                        @error('produksi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-7zrl">Kerbau</td>
                    <td class="tg-7zrl">Kg</td>
                    < <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi3') is-invalid @enderror" id="produksi3"
                            name="produksi3" value="{{ old('produksi3', $data->produksi3) }}">
                        @error('produksi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-7zrl">Kambing</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi4') is-invalid @enderror" id="produksi4"
                            name="produksi4" value="{{ old('produksi4', $data->produksi4) }}">
                        @error('produksi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-7zrl">Domba</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi5') is-invalid @enderror" id="produksi5"
                            name="produksi5" value="{{ old('produksi5', $data->produksi5) }}">
                        @error('produksi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-7zrl">Babi</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi6') is-invalid @enderror" id="produksi6"
                            name="produksi6" value="{{ old('produksi6', $data->produksi6) }}">
                        @error('produksi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-7zrl">Kuda</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi7') is-invalid @enderror" id="produksi7"
                            name="produksi7" value="{{ old('produksi7', $data->produksi7) }}">
                        @error('produksi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                <tr>
                    <td class="tg-8d8j">8</td>
                    <td class="tg-7zrl">Ayam Buras</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi8') is-invalid @enderror" id="produksi8"
                            name="produksi8" value="{{ old('produksi8', $data->produksi8) }}">
                        @error('produksi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">9</td>
                    <td class="tg-7zrl">Ayam Ras Pedaging</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi9') is-invalid @enderror" id="produksi9"
                            name="produksi9" value="{{ old('produksi9', $data->produksi9) }}">
                        @error('produksi9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">10</td>
                    <td class="tg-7zrl">Ayam ras petelur</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi10') is-invalid @enderror" id="produksi10"
                            name="produksi10" value="{{ old('produksi10', $data->produksi10) }}">
                        @error('produksi10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">11</td>
                    <td class="tg-7zrl">Itik</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi11') is-invalid @enderror" id="produksi11"
                            name="produksi11" value="{{ old('produksi11', $data->produksi11) }}">
                        @error('produksi11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">12</td>
                    <td class="tg-7zrl">Kelinci</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi12') is-invalid @enderror" id="produksi12"
                            name="produksi12" value="{{ old('produksi12', $data->produksi12) }}">
                        @error('produksi12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">13</td>
                    <td class="tg-7zrl">Burung puyuh</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi13') is-invalid @enderror" id="produksi13"
                            name="produksi13" value="{{ old('produksi13', $data->produksi13) }}">
                        @error('produksi13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">14</td>
                    <td class="tg-7zrl">Merpati</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi14') is-invalid @enderror" id="produksi14"
                            name="produksi14" value="{{ old('produksi14', $data->produksi14) }}">
                        @error('produksi14')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">15</td>
                    <td class="tg-7zrl">Telur Ayam buras</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi15') is-invalid @enderror" id="produksi15"
                            name="produksi15" value="{{ old('produksi15', $data->produksi15) }}">
                        @error('produksi15')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">16</td>
                    <td class="tg-7zrl">Telur Ayam Ras Petelur</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi16') is-invalid @enderror" id="produksi16"
                            name="produksi16" value="{{ old('produksi16', $data->produksi16) }}">
                        @error('produksi16')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">17</td>
                    <td class="tg-7zrl">Telur Itik</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi17') is-invalid @enderror" id="produksi17"
                            name="produksi17" value="{{ old('produksi17', $data->produksi17) }}">
                        @error('produksi17')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">18</td>
                    <td class="tg-7zrl">Telur burung puyuh</td>
                    <td class="tg-7zrl">Kg</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi18') is-invalid @enderror" id="produksi18"
                            name="produksi18" value="{{ old('produksi18', $data->produksi18) }}">
                        @error('produksi18')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">19</td>
                    <td class="tg-7zrl">Tulang sapi</td>
                    <td class="tg-7zrl">Kg</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi19') is-invalid @enderror" id="produksi19"
                            name="produksi19" value="{{ old('produksi19', $data->produksi19) }}">
                        @error('produksi19')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">20</td>
                    <td class="tg-7zrl">Kulit sapi</td>
                    <td class="tg-7zrl">Lembar</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi20') is-invalid @enderror" id="produksi20"
                            name="produksi20" value="{{ old('produksi20', $data->produksi20) }}">
                        @error('produksi20')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">21</td>
                    <td class="tg-7zrl">Kulit Kambing</td>
                    <td class="tg-7zrl">Lembar</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi21') is-invalid @enderror" id="produksi21"
                            name="produksi21" value="{{ old('produksi21', $data->produksi21) }}">
                        @error('produksi21')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">22</td>
                    <td class="tg-7zrl">Kelinci</td>
                    <td class="tg-7zrl">Hewan</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('produksi22') is-invalid @enderror" id="produksi22"
                            name="produksi22" value="{{ old('produksi22', $data->produksi22) }}">
                        @error('produksi22')
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
                <th class="tg-7zrl">No</th>
                <th class="tg-7zrl">Komoditas</th>
                <th class="tg-7zrl">Satuan</th>
                <th class="tg-8d8j">2021</th>
                <th class="tg-8d8j">{{ $data->tahun }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-7zrl">Sapi Potong</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">679,052.44</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-7zrl">Sapi Perah</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-7zrl">Kerbau</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-7zrl">Kambing</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">78,885.40</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-7zrl">Domba</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-7zrl">Babi</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-7zrl">Kuda</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">33,750.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">8</td>
                <td class="tg-7zrl">Ayam Buras</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">252,468.37</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">9</td>
                <td class="tg-7zrl">Ayam Ras Pedaging</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">449,475.60</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">10</td>
                <td class="tg-7zrl">Ayam ras petelur</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">21,960.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">11</td>
                <td class="tg-7zrl">Itik</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">31,134.96</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">12</td>
                <td class="tg-7zrl">Kelinci</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">412.34</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">13</td>
                <td class="tg-7zrl">Burung puyuh</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">52.03</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">14</td>
                <td class="tg-7zrl">Merpati</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">0.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">15</td>
                <td class="tg-7zrl">Telur Ayam buras</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">2,266,365.26</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">16</td>
                <td class="tg-7zrl">Telur Ayam Ras Petelur</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">7,794,973.17</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">17</td>
                <td class="tg-7zrl">Telur Itik</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">1,432,547.66</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">18</td>
                <td class="tg-7zrl">Telur burung puyuh</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">4,644.63</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">19</td>
                <td class="tg-7zrl">Tulang sapi</td>
                <td class="tg-7zrl">Kg</td>
                <td class="tg-2b7s">69,780.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">20</td>
                <td class="tg-7zrl">Kulit sapi</td>
                <td class="tg-7zrl">Lembar</td>
                <td class="tg-2b7s">4,652.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">21</td>
                <td class="tg-7zrl">Kulit Kambing</td>
                <td class="tg-7zrl">Lembar</td>
                <td class="tg-2b7s">6,236.00</td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-8d8j">22</td>
                <td class="tg-7zrl">Kelinci</td>
                <td class="tg-7zrl">Hewan</td>
                <td class="tg-2b7s">18.08</td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>

    </table>

@endif
