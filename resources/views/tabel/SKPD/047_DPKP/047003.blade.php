@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.19</th>
                    <th class="tg-wa1i"><span style="font-weight:bold">Banyaknya Rumah Permanen, Rumah Sehat dan Rumah
                            Tidak
                            Sehat Menurut Desa/Kelurahan di Kecamatan Donri-donri, 2021</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Number of Permanent, Healthy
                            and
                            Non-Healthy House by Villages/Urban Villages in Donri-donri Subdistrict, 2021</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-nrix">Desa/Kelurahan</td>
                    <td class="tg-nrix">Rumah Layak huni</td>
                    <td class="tg-nrix">Rumah&nbsp;&nbsp;Tidak Layak huni</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Healthy House</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Non-Healthy House</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-8d8j">(2)</td>
                    <td class="tg-8d8j">(3)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">001. Pesse</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('layak1') is-invalid @enderror"
                            id="layak1" name="layak1" value="{{ old('layak1', $data->layak1) }}">
                        @error('layak1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak1') is-invalid @enderror" id="taklayak1"
                            name="taklayak1" value="{{ old('taklayak1', $data->taklayak1) }}">
                        @error('taklayak1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">002. Pising</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('layak2') is-invalid @enderror"
                            id="layak2" name="layak2" value="{{ old('layak2', $data->layak2) }}">
                        @error('layak2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak2') is-invalid @enderror" id="taklayak2"
                            name="taklayak2" value="{{ old('taklayak2', $data->taklayak2) }}">
                        @error('taklayak2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">003. Labokong</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('layak3') is-invalid @enderror"
                            id="layak3" name="layak3" value="{{ old('layak3', $data->layak3) }}">
                        @error('layak3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak3') is-invalid @enderror" id="taklayak3"
                            name="taklayak3" value="{{ old('taklayak3', $data->taklayak3) }}">
                        @error('taklayak3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">004. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('layak4') is-invalid @enderror"
                            id="layak4" name="layak4" value="{{ old('layak4', $data->layak4) }}">
                        @error('layak4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak4') is-invalid @enderror" id="taklayak4"
                            name="taklayak4" value="{{ old('taklayak4', $data->taklayak4) }}">
                        @error('taklayak4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">005. Sering</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('layak5') is-invalid @enderror"
                            id="layak5" name="layak5" value="{{ old('layak5', $data->layak5) }}">
                        @error('layak5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak5') is-invalid @enderror" id="taklayak5"
                            name="taklayak5" value="{{ old('taklayak5', $data->taklayak5) }}">
                        @error('taklayak5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">006. Lalabata Riaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('layak6') is-invalid @enderror" id="layak6" name="layak6"
                            value="{{ old('layak6', $data->layak6) }}">
                        @error('layak6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak6') is-invalid @enderror" id="taklayak6"
                            name="taklayak6" value="{{ old('taklayak6', $data->taklayak6) }}">
                        @error('taklayak6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">007. Tottong</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('layak7') is-invalid @enderror" id="layak7" name="layak7"
                            value="{{ old('layak7', $data->layak7) }}">
                        @error('layak7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak7') is-invalid @enderror" id="taklayak7"
                            name="taklayak7" value="{{ old('taklayak7', $data->taklayak7) }}">
                        @error('taklayak7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">008. Leworeng</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('layak8') is-invalid @enderror" id="layak8" name="layak8"
                            value="{{ old('layak8', $data->layak8) }}">
                        @error('layak8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak8') is-invalid @enderror" id="taklayak8"
                            name="taklayak8" value="{{ old('taklayak8', $data->taklayak8) }}">
                        @error('taklayak8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">009. Kessing</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('layak9') is-invalid @enderror" id="layak9" name="layak9"
                            value="{{ old('layak9', $data->layak9) }}">
                        @error('layak9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayak9') is-invalid @enderror" id="taklayak9"
                            name="taklayak9" value="{{ old('taklayak9', $data->taklayak9) }}">
                        @error('taklayak9')
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
                            class="form-control @error('layakt') is-invalid @enderror" id="layakt" name="layakt"
                            value="{{ old('layakt', $data->layakt) }}">
                        @error('layakt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('taklayakt') is-invalid @enderror" id="taklayakt"
                            name="taklayakt" value="{{ old('taklayakt', $data->taklayakt) }}">
                        @error('taklayakt')
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
                <th class="tg-amwm" rowspan="2">4.19</th>
                <th class="tg-wa1i"><span style="font-weight:bold">Banyaknya Rumah Permanen, Rumah Sehat dan Rumah
                        Tidak
                        Sehat Menurut Desa/Kelurahan di Kecamatan Donri-donri, 2021</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Number of Permanent, Healthy and
                        Non-Healthy House by Villages/Urban Villages in Donri-donri Subdistrict, 2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Desa/Kelurahan</td>
                <td class="tg-nrix">Rumah Layak huni</td>
                <td class="tg-nrix">Rumah&nbsp;&nbsp;Tidak Layak huni</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Healthy House</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Non-Healthy House</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-8d8j">(2)</td>
                <td class="tg-8d8j">(3)</td>
            </tr>
            <tr>
                <td class="tg-cly1">001. Pesse</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">002. Pising</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">003. Labokong</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">004. Donri-Donri</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">005. Sering</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">006. Lalabata Riaja</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">007. Tottong</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">008. Leworeng</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-cly1">009. Kessing</td>
                <td class="tg-5si3"></td>
                <td class="tg-5si3"></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.047_dpkp.script')
@endsection
