@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-yla0" colspan="3"><span style="font-weight:bold">Jumlah Kejadian Bencana Alam menurut
                            Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                    <td class="tg-sn55" colspan="3"><span style="font-weight:bold;font-style:italic">Number of
                            Natural
                            Disaster Events by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></td>
                </tr>
                <tr>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kecamatan/ </span><span
                            style="font-style:italic;color:#000">Subdistrict</span></td>
                    <td class="tg-nrix">Banjir</td>
                    <td class="tg-nrix">Tanah Longsor</td>
                    <td class="tg-nrix">Angin Puting Beliung</td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir1') is-invalid @enderror" id="banjir1" name="banjir1"
                            value="{{ old('banjir1', $data->banjir1) }}">
                        @error('banjir1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor1') is-invalid @enderror" id="longsor1" name="longsor1"
                            value="{{ old('longsor1', $data->longsor1) }}">
                        @error('longsor1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('angin1') is-invalid @enderror"
                            id="angin1" name="angin1" value="{{ old('angin1', $data->angin1) }}">
                        @error('angin1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir2') is-invalid @enderror" id="banjir2" name="banjir2"
                            value="{{ old('banjir2', $data->banjir2) }}">
                        @error('banjir2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor2') is-invalid @enderror" id="longsor2" name="longsor2"
                            value="{{ old('longsor2', $data->longsor2) }}">
                        @error('longsor2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('angin2') is-invalid @enderror"
                            id="angin2" name="angin2" value="{{ old('angin2', $data->angin2) }}">
                        @error('angin2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir3') is-invalid @enderror" id="banjir3" name="banjir3"
                            value="{{ old('banjir3', $data->banjir3) }}">
                        @error('banjir3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor3') is-invalid @enderror" id="longsor3" name="longsor3"
                            value="{{ old('longsor3', $data->longsor3) }}">
                        @error('longsor3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('angin3') is-invalid @enderror"
                            id="angin3" name="angin3" value="{{ old('angin3', $data->angin3) }}">
                        @error('angin3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir4') is-invalid @enderror" id="banjir4" name="banjir4"
                            value="{{ old('banjir4', $data->banjir4) }}">
                        @error('banjir4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor4') is-invalid @enderror" id="longsor4"
                            name="longsor4" value="{{ old('longsor4', $data->longsor4) }}">
                        @error('longsor4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('angin4') is-invalid @enderror" id="angin4" name="angin4"
                            value="{{ old('angin4', $data->angin4) }}">
                        @error('angin4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir5') is-invalid @enderror" id="banjir5"
                            name="banjir5" value="{{ old('banjir5', $data->banjir5) }}">
                        @error('banjir5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor5') is-invalid @enderror" id="longsor5"
                            name="longsor5" value="{{ old('longsor5', $data->longsor5) }}">
                        @error('longsor5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('angin5') is-invalid @enderror" id="angin5" name="angin5"
                            value="{{ old('angin5', $data->angin5) }}">
                        @error('angin5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir6') is-invalid @enderror" id="banjir6"
                            name="banjir6" value="{{ old('banjir6', $data->banjir6) }}">
                        @error('banjir6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor6') is-invalid @enderror" id="longsor6"
                            name="longsor6" value="{{ old('longsor6', $data->longsor6) }}">
                        @error('longsor6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('angin6') is-invalid @enderror" id="angin6" name="angin6"
                            value="{{ old('angin6', $data->angin6) }}">
                        @error('angin6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir7') is-invalid @enderror" id="banjir7"
                            name="banjir7" value="{{ old('banjir7', $data->banjir7) }}">
                        @error('banjir7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor7') is-invalid @enderror" id="longsor7"
                            name="longsor7" value="{{ old('longsor7', $data->longsor7) }}">
                        @error('longsor7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('angin7') is-invalid @enderror" id="angin7" name="angin7"
                            value="{{ old('angin7', $data->angin7) }}">
                        @error('angin7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjir8') is-invalid @enderror" id="banjir8"
                            name="banjir8" value="{{ old('banjir8', $data->banjir8) }}">
                        @error('banjir8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsor8') is-invalid @enderror" id="longsor8"
                            name="longsor8" value="{{ old('longsor8', $data->longsor8) }}">
                        @error('longsor8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('angin8') is-invalid @enderror" id="angin8" name="angin8"
                            value="{{ old('angin8', $data->angin8) }}">
                        @error('angin8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('banjirt') is-invalid @enderror" id="banjirt"
                            name="banjirt" value="{{ old('banjirt', $data->banjirt) }}">
                        @error('banjirt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('longsort') is-invalid @enderror" id="longsort"
                            name="longsort" value="{{ old('longsort', $data->longsort) }}">
                        @error('longsort')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('angint') is-invalid @enderror" id="angint" name="angint"
                            value="{{ old('angint', $data->angint) }}">
                        @error('angint')
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
                <th class="tg-yla0" colspan="3"><span style="font-weight:bold">Jumlah Kejadian Bencana Alam
                        menurut
                        Kecamatan di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                <td class="tg-sn55" colspan="3"><span style="font-weight:bold;font-style:italic">Number of Natural
                        Disaster Events by Subdistrict in Soppeng Regency, {{ $data->tahun }}</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kecamatan/ </span><span
                        style="font-style:italic;color:#000">Subdistrict</span></td>
                <td class="tg-nrix">Banjir</td>
                <td class="tg-nrix">Tanah Longsor</td>
                <td class="tg-nrix">Angin Puting Beliung</td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB"> - </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> - </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> - </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;1 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> - </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> - </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;4 </span></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;2 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;3 </span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;14 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;9 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
