@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">6.1.1</th>
                    <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Jumlah Pengusaha Tambang dan Luas
                            Tambang Menurut Kecamatan dan Jenis Bahan Tambang di Kabupaten Soppeng, {{ $data->tahun }}
                        </span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of Mining
                            and Mining Area by Subdistrict and Types of Mining in Soppeng Regency, {{ $data->tahun }}
                        </span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-nrix">Kecamatan/</td>
                    <td class="tg-nrix">Jenis Bahan Tambang/</td>
                    <td class="tg-nrix">Jumlah Pengusaha/</td>
                    <td class="tg-nrix">Luas Tambang (Ha)/</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Type of Minerals</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Number of Businessman</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Mine Area (Ha)</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Bara/</span><span
                            style="font-style:italic;color:#000">Coal</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha1') is-invalid @enderror" id="pengusaha1"
                            name="pengusaha1" value="{{ old('pengusaha1', $data->pengusaha1) }}">
                        @error('pengusaha1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('luas1') is-invalid @enderror"
                            id="luas1" name="luas1" value="{{ old('luas1', $data->luas1) }}">
                        @error('luas1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Gunung/</span><span
                            style="font-style:italic;color:#000">Mountain Rock</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha2') is-invalid @enderror" id="pengusaha2"
                            name="pengusaha2" value="{{ old('pengusaha2', $data->pengusaha2) }}">
                        @error('pengusaha2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('luas2') is-invalid @enderror"
                            id="luas2" name="luas2" value="{{ old('luas2', $data->luas2) }}">
                        @error('luas2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Kali/</span><span
                            style="font-style:italic;color:#000">River Rock</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha3') is-invalid @enderror" id="pengusaha3"
                            name="pengusaha3" value="{{ old('pengusaha3', $data->pengusaha3) }}">
                        @error('pengusaha3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('luas3') is-invalid @enderror"
                            id="luas3" name="luas3" value="{{ old('luas3', $data->luas3) }}">
                        @error('luas3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-zr06"><span style="background-color:#FFF">-</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha4') is-invalid @enderror" id="pengusaha4"
                            name="pengusaha4" value="{{ old('pengusaha4', $data->pengusaha4) }}">
                        @error('pengusaha4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('luas4') is-invalid @enderror"
                            id="luas4" name="luas4" value="{{ old('luas4', $data->luas4) }}">
                        @error('luas4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Kali dan Pasir/</span><span
                            style="font-style:italic;color:#000">River Rock and Sand</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha5') is-invalid @enderror" id="pengusaha5"
                            name="pengusaha5" value="{{ old('pengusaha5', $data->pengusaha5) }}">
                        @error('pengusaha5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('luas5') is-invalid @enderror" id="luas5" name="luas5"
                            value="{{ old('luas5', $data->luas5) }}">
                        @error('luas5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Pasir/</span><span
                            style="font-style:italic;color:#000">Sand</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha6') is-invalid @enderror" id="pengusaha6"
                            name="pengusaha6" value="{{ old('pengusaha6', $data->pengusaha6) }}">
                        @error('pengusaha6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('luas6') is-invalid @enderror" id="luas6" name="luas6"
                            value="{{ old('luas6', $data->luas6) }}">
                        @error('luas6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Gunung dan Tanah
                            Urug/</span><span style="font-style:italic;color:#000">Mountain Rock and Buried Land</span>
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha7') is-invalid @enderror" id="pengusaha7"
                            name="pengusaha7" value="{{ old('pengusaha7', $data->pengusaha7) }}">
                        @error('pengusaha7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('luas7') is-invalid @enderror" id="luas7" name="luas7"
                            value="{{ old('luas7', $data->luas7) }}">
                        @error('luas7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Gunung dan Tanah
                            Urug/</span><span style="font-style:italic;color:#000">Mountain Rock and Buried Land</span>
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusaha8') is-invalid @enderror" id="pengusaha8"
                            name="pengusaha8" value="{{ old('pengusaha8', $data->pengusaha8) }}">
                        @error('pengusaha8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('luas8') is-invalid @enderror" id="luas8" name="luas8"
                            value="{{ old('luas8', $data->luas8) }}">
                        @error('luas8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-lhti" colspan="2"><span style="font-style:italic">Jumlah/Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pengusahat') is-invalid @enderror" id="pengusahat"
                            name="pengusahat" value="{{ old('pengusahat', $data->pengusahat) }}">
                        @error('pengusahat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('luast') is-invalid @enderror" id="luast" name="luast"
                            value="{{ old('luast', $data->luast) }}">
                        @error('luast')
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
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">6.1.1</th>
                <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Jumlah Pengusaha Tambang dan Luas
                        Tambang Menurut Kecamatan dan Jenis Bahan Tambang di Kabupaten Soppeng, {{ $data->tahun }}
                    </span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of Mining
                        and Mining Area by Subdistrict and Types of Mining in Soppeng Regency, {{ $data->tahun }}
                    </span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Kecamatan/</td>
                <td class="tg-nrix">Jenis Bahan Tambang/</td>
                <td class="tg-nrix">Jumlah Pengusaha/</td>
                <td class="tg-nrix">Luas Tambang (Ha)/</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Type of Minerals</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Number of Businessman</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Mine Area (Ha)</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Bara/</span><span
                        style="font-style:italic;color:#000">Coal</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Gunung/</span><span
                        style="font-style:italic;color:#000">Mountain Rock</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Kali/</span><span
                        style="font-style:italic;color:#000">River Rock</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-zr06"><span style="background-color:#FFF">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Kali dan Pasir/</span><span
                        style="font-style:italic;color:#000">River Rock and Sand</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Pasir/</span><span
                        style="font-style:italic;color:#000">Sand</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Gunung dan Tanah Urug/</span><span
                        style="font-style:italic;color:#000">Mountain Rock and Buried Land</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-ktyi"><span style="font-style:normal;color:#000">Batu Gunung dan Tanah Urug/</span><span
                        style="font-style:italic;color:#000">Mountain Rock and Buried Land</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-lhti" colspan="2"><span style="font-style:italic">Jumlah/Total</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">0</span></td>
                <td class="tg-o3c1"><span style="background-color:#FFF">0</span></td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.037_DPUPR.script1')
@endsection
