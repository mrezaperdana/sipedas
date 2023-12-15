@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">9.2</span></th>
                    <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                    <td class="tg-wa1i"></td>
                    <td class="tg-xxp7" colspan="2"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                            {{ $data->tahun }}</span></td>
                </tr>

                <tr>
                    <td class="tg-nrix">Desa/Kelurahan</td>
                    <td class="tg-nrix"><span style="font-weight:normal">Kantor Pos/Post Office</span></td>
                    <td class="tg-nrix"><span style="font-weight:normal">Pelanggan Telepon/Phone Customer</span></td>
                    <td class="tg-nrix"><span style="font-weight:normal">POTS Bundling Internet</span></td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                    <td class="tg-lhti"><span style="font-weight:normal;font-style:italic"></span></td>
                    <td class="tg-lhti"><span style="font-weight:normal;font-style:italic"></span></td>
                    <td class="tg-lhti"></td>
                </tr>
                <tr>
                    <td class="tg-nrix"><span style="font-weight:normal">(1)</span></td>
                    <td class="tg-nrix"><span style="font-weight:normal">(2)</span></td>
                    <td class="tg-nrix"><span style="font-weight:normal">(3)</span></td>
                    <td class="tg-nrix"><span style="font-weight:normal">(4)</span></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-cly1">001. Kampiri</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('pos1') is-invalid @enderror"
                            id="pos1" name="pos1" value="{{ old('pos1', $data->pos1) }}">
                        @error('pos1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon1') is-invalid @enderror" id="telepon1" name="telepon1"
                            value="{{ old('telepon1', $data->telepon1) }}">
                        @error('telepon1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet1') is-invalid @enderror" id="internet1"
                            name="internet1" value="{{ old('internet1', $data->internet1) }}">
                        @error('internet1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">002. Citta</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('pos2') is-invalid @enderror"
                            id="pos2" name="pos2" value="{{ old('pos2', $data->pos2) }}">
                        @error('pos2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon2') is-invalid @enderror" id="telepon2" name="telepon2"
                            value="{{ old('telepon2', $data->telepon2) }}">
                        @error('telepon2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet2') is-invalid @enderror" id="internet2"
                            name="internet2" value="{{ old('internet2', $data->internet2) }}">
                        @error('internet2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">003. Labae</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('pos3') is-invalid @enderror"
                            id="pos3" name="pos3" value="{{ old('pos3', $data->pos3) }}">
                        @error('pos3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon3') is-invalid @enderror" id="telepon3" name="telepon3"
                            value="{{ old('telepon3', $data->telepon3) }}">
                        @error('telepon3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet3') is-invalid @enderror" id="internet3"
                            name="internet3" value="{{ old('internet3', $data->internet3) }}">
                        @error('internet3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">004. Tinco</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos4') is-invalid @enderror" id="pos4" name="pos4"
                            value="{{ old('pos4', $data->pos4) }}">
                        @error('pos4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon4') is-invalid @enderror" id="telepon4"
                            name="telepon4" value="{{ old('telepon4', $data->telepon4) }}">
                        @error('telepon4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet4') is-invalid @enderror" id="internet4"
                            name="internet4" value="{{ old('internet4', $data->internet4) }}">
                        @error('internet4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-weight:normal;font-style:italic;color:#000">Total</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('post') is-invalid @enderror" id="post" name="post"
                            value="{{ old('post', $data->post) }}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepont') is-invalid @enderror" id="telepont"
                            name="telepont" value="{{ old('telepont', $data->telepont) }}">
                        @error('telepont')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internett') is-invalid @enderror" id="internett"
                            name="internett" value="{{ old('internett', $data->internett) }}">
                        @error('internett')
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
                <th class="tg-wa1i"><span style="font-weight:bold">9.2</span></th>
                <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Fasilitas Komunikasi dan
                        Informasi Menurut Desa/Kelurahan di Kecamatan Citta, 2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                <td class="tg-wa1i"></td>
                <td class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                        Communication and Information Facilities by Villages/Urban Villages in Citta Subdistrict,
                        2021</span></td>
            </tr>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Desa/Kelurahan</td>
                <td class="tg-nrix"><span style="font-weight:normal">Kantor Pos/</span></td>
                <td class="tg-nrix"><span style="font-weight:normal">Pelanggan Telepon/</span></td>
                <td class="tg-nrix"><span style="font-weight:normal">POTS Bundling Internet</span></td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                <td class="tg-lhti"><span style="font-weight:normal;font-style:italic">Post Office</span></td>
                <td class="tg-lhti"><span style="font-weight:normal;font-style:italic">Phone Customer</span></td>
                <td class="tg-lhti"></td>
            </tr>
            <tr>
                <td class="tg-nrix"><span style="font-weight:normal">(1)</span></td>
                <td class="tg-nrix"><span style="font-weight:normal">(2)</span></td>
                <td class="tg-nrix"><span style="font-weight:normal">(3)</span></td>
                <td class="tg-nrix"><span style="font-weight:normal">(4)</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">001. Kampiri</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">002. Citta</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">003. Labae</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">004. Tinco</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-weight:normal;font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.048_telkom_cangadi.script')
@endsection
