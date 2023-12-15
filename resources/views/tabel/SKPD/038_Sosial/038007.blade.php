@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-0lax" rowspan="2"></th>
                    <th class="tg-cly1" colspan="4">{{ $judultabel }}, {{ $data->tahun }}</th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="4"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                            {{ $data->tahun }}</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-nrix">Desa/Kelurahan</td>
                    <td class="tg-nrix">Tuna Netra/</td>
                    <td class="tg-nrix">Tuna Rungu/</td>
                    <td class="tg-nrix">Tuna Grahita/</td>
                    <td class="tg-nrix">Tuna Daksa/</td>
                    <td class="tg-nrix">Tuna Ganda/</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Blind</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Deaf</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Mentally Disabled</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Disabled</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Multiple Disability</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                    <td class="tg-nrix">(5)</td>
                    <td class="tg-nrix">(6)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">001. Kampiri</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('blind1') is-invalid @enderror"
                            id="blind1" name="blind1" value="{{ old('blind1', $data->blind1) }}">
                        @error('blind1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('deaf1') is-invalid @enderror"
                            id="deaf1" name="deaf1" value="{{ old('deaf1', $data->deaf1) }}">
                        @error('deaf1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled1') is-invalid @enderror"
                            id="mentally_disabled1" name="mentally_disabled1"
                            value="{{ old('mentally_disabled1', $data->mentally_disabled1) }}">
                        @error('mentally_disabled1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled1') is-invalid @enderror" id="disabled1"
                            name="disabled1" value="{{ old('disabled1', $data->disabled1) }}">
                        @error('disabled1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability1') is-invalid @enderror"
                            id="multiple_dissability1" name="multiple_dissability1"
                            value="{{ old('multiple_dissability1', $data->multiple_dissability1) }}">
                        @error('multiple_dissability1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">002. Citta</td>

                    <td class="tg-cly1"><input type="text" class="form-control @error('blind2') is-invalid @enderror"
                            id="blind2" name="blind2" value="{{ old('blind2', $data->blind2) }}">
                        @error('blind2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('deaf2') is-invalid @enderror"
                            id="deaf2" name="deaf2" value="{{ old('deaf2', $data->deaf2) }}">
                        @error('deaf2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled2') is-invalid @enderror"
                            id="mentally_disabled2" name="mentally_disabled2"
                            value="{{ old('mentally_disabled2', $data->mentally_disabled2) }}">
                        @error('mentally_disabled2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled2') is-invalid @enderror" id="disabled2"
                            name="disabled2" value="{{ old('disabled2', $data->disabled2) }}">
                        @error('disabled2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability2') is-invalid @enderror"
                            id="multiple_dissability2" name="multiple_dissability2"
                            value="{{ old('multiple_dissability2', $data->multiple_dissability2) }}">
                        @error('multiple_dissability2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">003. Labae</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind3') is-invalid @enderror" id="blind3" name="blind3"
                            value="{{ old('blind3', $data->blind3) }}">
                        @error('blind3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf3') is-invalid @enderror" id="deaf3" name="deaf3"
                            value="{{ old('deaf3', $data->deaf3) }}">
                        @error('deaf3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled3') is-invalid @enderror"
                            id="mentally_disabled3" name="mentally_disabled3"
                            value="{{ old('mentally_disabled3', $data->mentally_disabled3) }}">
                        @error('mentally_disabled3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled3') is-invalid @enderror" id="disabled3"
                            name="disabled3" value="{{ old('disabled3', $data->disabled3) }}">
                        @error('disabled3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability3') is-invalid @enderror"
                            id="multiple_dissability3" name="multiple_dissability3"
                            value="{{ old('multiple_dissability3', $data->multiple_dissability3) }}">
                        @error('multiple_dissability3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">004. Tinco</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind4') is-invalid @enderror" id="blind4" name="blind4"
                            value="{{ old('blind4', $data->blind4) }}">
                        @error('blind4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf4') is-invalid @enderror" id="deaf4" name="deaf4"
                            value="{{ old('deaf4', $data->deaf4) }}">
                        @error('deaf4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled4') is-invalid @enderror"
                            id="mentally_disabled4" name="mentally_disabled4"
                            value="{{ old('mentally_disabled4', $data->mentally_disabled4) }}">
                        @error('mentally_disabled4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled4') is-invalid @enderror" id="disabled4"
                            name="disabled4" value="{{ old('disabled4', $data->disabled4) }}">
                        @error('disabled4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability4') is-invalid @enderror"
                            id="multiple_dissability4" name="multiple_dissability4"
                            value="{{ old('multiple_dissability4', $data->multiple_dissability4) }}">
                        @error('multiple_dissability4')
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
                            class="form-control @error('blindt') is-invalid @enderror" id="blindt" name="blindt"
                            value="{{ old('blindt', $data->blindt) }}">
                        @error('blindt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaft') is-invalid @enderror" id="deaft" name="deaft"
                            value="{{ old('deaft', $data->deaft) }}">
                        @error('deaft')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabledt') is-invalid @enderror"
                            id="mentally_disabledt" name="mentally_disabledt"
                            value="{{ old('mentally_disabledt', $data->mentally_disabledt) }}">
                        @error('mentally_disabledt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabledt') is-invalid @enderror" id="disabledt"
                            name="disabledt" value="{{ old('disabledt', $data->disabledt) }}">
                        @error('disabledt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissabilityt') is-invalid @enderror"
                            id="multiple_dissabilityt" name="multiple_dissabilityt"
                            value="{{ old('multiple_dissabilityt', $data->multiple_dissabilityt) }}">
                        @error('multiple_dissabilityt')
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
                <th class="tg-0lax" rowspan="2"></th>
                <th class="tg-cly1" colspan="4">Banyaknya Penyandang Cacat Menurut Desa/Kelurahan dan Jenis Cacat
                    di
                    Kecamatan Citta, 2021</th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of People
                        with Disabilities by Villages/Urban Villages and Type of Disability in Citta Subdistrict,
                        2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Desa/Kelurahan</td>
                <td class="tg-nrix">Tuna Netra/</td>
                <td class="tg-nrix">Tuna Rungu/</td>
                <td class="tg-nrix">Tuna Grahita/</td>
                <td class="tg-nrix">Tuna Daksa/</td>
                <td class="tg-nrix">Tuna Ganda/</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Blind</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Deaf</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Mentally Disabled</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Disabled</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Multiple Disability</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(t)</td>
                <td class="tg-nrix">(6)</td>
            </tr>
            <tr>
                <td class="tg-cly1">001. Kampiri</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">002. Citta</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">003. Labae</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">004. Tinco</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">1t</td>
                <td class="tg-mwxe">2</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.038_Sosial.script')
@endsection
