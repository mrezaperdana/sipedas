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
                    <td class="tg-cly1">001. Pajalesang</td>
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
                    <td class="tg-cly1">002. Cabenge</td>
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
                    <td class="tg-cly1">003. Paroto</td>
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
                    <td class="tg-cly1">004. Palangiseng</td>
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
                    <td class="tg-cly1">005. Tetewatu</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos5') is-invalid @enderror" id="pos5" name="pos5"
                            value="{{ old('pos5', $data->pos5) }}">
                        @error('pos5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon5') is-invalid @enderror" id="telepon5"
                            name="telepon5" value="{{ old('telepon5', $data->telepon5) }}">
                        @error('telepon5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet5') is-invalid @enderror" id="internet5"
                            name="internet5" value="{{ old('internet5', $data->internet5) }}">
                        @error('internet5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">006. Abbanuange</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos6') is-invalid @enderror" id="pos6" name="pos6"
                            value="{{ old('pos6', $data->pos6) }}">
                        @error('pos6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon6') is-invalid @enderror" id="telepon6"
                            name="telepon6" value="{{ old('telepon6', $data->telepon6) }}">
                        @error('telepon6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet6') is-invalid @enderror" id="internet6"
                            name="internet6" value="{{ old('internet6', $data->internet6) }}">
                        @error('internet6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">007. Parenring</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos7') is-invalid @enderror" id="pos7" name="pos7"
                            value="{{ old('pos7', $data->pos7) }}">
                        @error('pos7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon7') is-invalid @enderror" id="telepon7"
                            name="telepon7" value="{{ old('telepon7', $data->telepon7) }}">
                        @error('telepon7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet7') is-invalid @enderror" id="internet7"
                            name="internet7" value="{{ old('internet7', $data->internet7) }}">
                        @error('internet7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">008. Ujung</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos8') is-invalid @enderror" id="pos8" name="pos8"
                            value="{{ old('pos8', $data->pos8) }}">
                        @error('pos8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon8') is-invalid @enderror" id="telepon8"
                            name="telepon8" value="{{ old('telepon8', $data->telepon8) }}">
                        @error('telepon8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet8') is-invalid @enderror" id="internet8"
                            name="internet8" value="{{ old('internet8', $data->internet8) }}">
                        @error('internet8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">009. Masing</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos9') is-invalid @enderror" id="pos9" name="pos9"
                            value="{{ old('pos9', $data->pos9) }}">
                        @error('pos9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon9') is-invalid @enderror" id="telepon9"
                            name="telepon9" value="{{ old('telepon9', $data->telepon9) }}">
                        @error('telepon9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet9') is-invalid @enderror" id="internet9"
                            name="internet9" value="{{ old('internet9', $data->internet9) }}">
                        @error('internet9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Baringeng</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos10') is-invalid @enderror" id="pos10" name="pos10"
                            value="{{ old('pos10', $data->pos10) }}">
                        @error('pos10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon10') is-invalid @enderror" id="telepon10"
                            name="telepon10" value="{{ old('telepon10', $data->telepon10) }}">
                        @error('telepon10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet10') is-invalid @enderror" id="internet10"
                            name="internet10" value="{{ old('internet10', $data->internet10) }}">
                        @error('internet10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">011. Kebo</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos11') is-invalid @enderror" id="pos11" name="pos11"
                            value="{{ old('pos11', $data->pos11) }}">
                        @error('pos11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon11') is-invalid @enderror" id="telepon11"
                            name="telepon11" value="{{ old('telepon11', $data->telepon11) }}">
                        @error('telepon11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet11') is-invalid @enderror" id="internet11"
                            name="internet11" value="{{ old('internet11', $data->internet11) }}">
                        @error('internet11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">012. Macanre</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pos12') is-invalid @enderror" id="pos12" name="pos12"
                            value="{{ old('pos12', $data->pos12) }}">
                        @error('pos12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('telepon12') is-invalid @enderror" id="telepon12"
                            name="telepon12" value="{{ old('telepon12', $data->telepon12) }}">
                        @error('telepon12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('internet12') is-invalid @enderror" id="internet12"
                            name="internet12" value="{{ old('internet12', $data->internet12) }}">
                        @error('internet12')
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
    <<p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">9.2</span></th>
                    <th class="tg-wa1i" colspan="2"><span style="font-weight:bold">Banyaknya Fasilitas Komunikasi
                            dan
                            Informasi Menurut Desa/Kelurahan di Kecamatan Lilirilau, 2021</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                    <td class="tg-wa1i"></td>
                    <td class="tg-xxp7" colspan="2"><span style="font-weight:bold;font-style:italic">Number of
                            Communication and Information Facilities by Villages/Urban Villages in Lilirilau
                            Subdistrict,
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
                    <td class="tg-cly1">001. Pajalesang</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">002. Cabenge</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">003. Paroto</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">004. Palangiseng</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">005. Tetewatu</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">006. Abbanuange</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">007. Parenring</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">008. Ujung</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">009. Masing</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Baringeng</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">011. Kebo</td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                    <td class="tg-5si3"></td>
                </tr>
                <tr>
                    <td class="tg-cly1">012. Macanre</td>
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
