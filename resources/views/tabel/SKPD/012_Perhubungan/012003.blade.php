@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th class="tg-8d8j">NO</th>
                    <th class="tg-8d8j">BULAN</th>
                    <th class="tg-8d8j">JUMLAH KENDARAAN BERMOTOR YANG TELAH DIREGISTRASI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-8d8j">1</td>
                    <td class="tg-7zrl">JANUARI</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah1') is-invalid @enderror" id=" jumlah1" name=" jumlah1"
                            value="{{ old(' jumlah1', $data->jumlah1) }}">
                        @error(' jumlah1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">2</td>
                    <td class="tg-7zrl">FEBRUARI</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah2') is-invalid @enderror" id=" jumlah2" name=" jumlah2"
                            value="{{ old(' jumlah2', $data->jumlah2) }}">
                        @error(' jumlah2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">3</td>
                    <td class="tg-7zrl">MARET</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah3') is-invalid @enderror" id=" jumlah3" name=" jumlah3"
                            value="{{ old(' jumlah3', $data->jumlah3) }}">
                        @error(' jumlah3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">4</td>
                    <td class="tg-7zrl">APRIL</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah4') is-invalid @enderror" id=" jumlah4" name=" jumlah4"
                            value="{{ old(' jumlah4', $data->jumlah4) }}">
                        @error(' jumlah4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">5</td>
                    <td class="tg-7zrl">MEI</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah5') is-invalid @enderror" id=" jumlah5" name=" jumlah5"
                            value="{{ old(' jumlah5', $data->jumlah5) }}">
                        @error(' jumlah5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">6</td>
                    <td class="tg-7zrl">JUNI</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah6') is-invalid @enderror" id=" jumlah6" name=" jumlah6"
                            value="{{ old(' jumlah6', $data->jumlah6) }}">
                        @error(' jumlah6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">7</td>
                    <td class="tg-7zrl">JULI</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah7') is-invalid @enderror" id=" jumlah7" name=" jumlah7"
                            value="{{ old(' jumlah7', $data->jumlah7) }}">
                        @error(' jumlah7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">8</td>
                    <td class="tg-7zrl">AGUSTUS</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah8') is-invalid @enderror" id=" jumlah8" name=" jumlah8"
                            value="{{ old(' jumlah8', $data->jumlah8) }}">
                        @error(' jumlah8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">9</td>
                    <td class="tg-7zrl">SEPTEMBER</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah9') is-invalid @enderror" id=" jumlah9" name=" jumlah9"
                            value="{{ old(' jumlah9', $data->jumlah9) }}">
                        @error(' jumlah9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">10</td>
                    <td class="tg-7zrl">OKTOBER</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah10') is-invalid @enderror" id=" jumlah10"
                            name=" jumlah10" value="{{ old(' jumlah10', $data->jumlah10) }}">
                        @error(' jumlah10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">11</td>
                    <td class="tg-7zrl">NOVEMBER</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah11') is-invalid @enderror" id=" jumlah11"
                            name=" jumlah11" value="{{ old(' jumlah11', $data->jumlah11) }}">
                        @error(' jumlah11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">12</td>
                    <td class="tg-7zrl">DESEMBER</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error(' jumlah12') is-invalid @enderror" id=" jumlah12"
                            name=" jumlah12" value="{{ old(' jumlah12', $data->jumlah12) }}">
                        @error(' jumlah12')
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
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-8d8j">NO</th>
                <th class="tg-8d8j">BULAN</th>
                <th class="tg-8d8j">JUMLAH KENDARAAN BERMOTOR YANG TELAH DIREGISTRASI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-8d8j">1</td>
                <td class="tg-7zrl">JANUARI</td>
                <td class="tg-m5pc"><span style="font-weight:bold;background-color:#D7F3CB">58.733</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">2</td>
                <td class="tg-7zrl">FEBRUARI</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">58.025</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">3</td>
                <td class="tg-7zrl">MARET</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">59.336</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">4</td>
                <td class="tg-7zrl">APRIL</td>
                <td class="tg-m5pc"><span style="font-weight:bold;background-color:#D7F3CB">59.569</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">5</td>
                <td class="tg-7zrl">MEI</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">58.967</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">6</td>
                <td class="tg-7zrl">JUNI</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">60.316</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">7</td>
                <td class="tg-7zrl">JULI</td>
                <td class="tg-m5pc"><span style="font-weight:bold;background-color:#D7F3CB">80.702</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">8</td>
                <td class="tg-7zrl">AGUSTUS</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">61.073</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">9</td>
                <td class="tg-7zrl">SEPTEMBER</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">61.475</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">10</td>
                <td class="tg-7zrl">OKTOBER</td>
                <td class="tg-m5pc"><span style="font-weight:bold;background-color:#D7F3CB">61900</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">11</td>
                <td class="tg-7zrl">NOVEMBER</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">62.136</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">12</td>
                <td class="tg-7zrl">DESEMBER</td>
                <td class="tg-0smn"><span style="background-color:#D7F3CB">62.136</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
