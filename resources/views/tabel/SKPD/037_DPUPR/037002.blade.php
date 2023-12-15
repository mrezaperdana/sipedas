@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">10.1.1</th>
                    <th class="tg-yla0" colspan="3"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-sn55" colspan="3"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }}, {{ $data->tahun }}</span>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jenis Jalan/ </span><span
                            style="font-style:italic;color:#000">Type of Road</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Negara/ </span><span
                            style="font-style:italic;color:#000">State</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Provinsi/ </span><span
                            style="font-style:italic;color:#000">Province</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Kabupaten/ </span><span
                            style="font-style:italic;color:#000">Regency</span></td>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/ </span><span
                            style="font-style:italic;color:#000">Total</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                    <td class="tg-nrix">(5)</td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Beton/</span><span
                            style="font-style:italic;color:#000">Concrete</span></td>

                    <td class="tg-cly1"><input type="text" class="form-control @error('state1') is-invalid @enderror"
                            id="state1" name="state1" value="{{ old('state1', $data->state1) }}">
                        @error('state1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('province1') is-invalid @enderror" id="province1"
                            name="province1" value="{{ old('province1', $data->province1) }}">
                        @error('province1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('regency1') is-invalid @enderror" id="regency1" name="regency1"
                            value="{{ old('regency1', $data->regency1) }}">
                        @error('regency1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('total1') is-invalid @enderror"
                            id="total1" name="total1" value="{{ old('total1', $data->total1) }}">
                        @error('total1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Aspal/</span><span
                            style="font-style:italic;color:#000">Asphalt</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('state2') is-invalid @enderror"
                            id="state2" name="state2" value="{{ old('state2', $data->state2) }}">
                        @error('state2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('province2') is-invalid @enderror" id="province2"
                            name="province2" value="{{ old('province2', $data->province2) }}">
                        @error('province2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('regency2') is-invalid @enderror" id="regency2" name="regency2"
                            value="{{ old('regency2', $data->regency2) }}">
                        @error('regency2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('total2') is-invalid @enderror"
                            id="total2" name="total2" value="{{ old('total2', $data->total2) }}">
                        @error('total2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Kerikil/</span><span
                            style="font-style:italic;color:#000">Gravel</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('state3') is-invalid @enderror" id="state3" name="state3"
                            value="{{ old('state3', $data->state3) }}">
                        @error('state3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('province3') is-invalid @enderror" id="province3"
                            name="province3" value="{{ old('province3', $data->province3) }}">
                        @error('province3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('regency3') is-invalid @enderror" id="regency3"
                            name="regency3" value="{{ old('regency3', $data->regency3) }}">
                        @error('regency3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total3') is-invalid @enderror" id="total3" name="total3"
                            value="{{ old('total3', $data->total3) }}">
                        @error('total3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Tanah/</span><span
                            style="font-style:italic;color:#000">Land</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('state4') is-invalid @enderror" id="state4" name="state4"
                            value="{{ old('state4', $data->state4) }}">
                        @error('state4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('province4') is-invalid @enderror" id="province4"
                            name="province4" value="{{ old('province4', $data->province4) }}">
                        @error('province4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('regency4') is-invalid @enderror" id="regency4"
                            name="regency4" value="{{ old('regency4', $data->regency4) }}">
                        @error('regency4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total4') is-invalid @enderror" id="total4" name="total4"
                            value="{{ old('total4', $data->total4) }}">
                        @error('total4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Lainnya/</span><span
                            style="font-style:italic;color:#000">Others</span></td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('state5') is-invalid @enderror" id="state5" name="state5"
                            value="{{ old('state5', $data->state5) }}">
                        @error('state5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('province5') is-invalid @enderror" id="province5"
                            name="province5" value="{{ old('province5', $data->province5) }}">
                        @error('province5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('regency5') is-invalid @enderror" id="regency5"
                            name="regency5" value="{{ old('regency5', $data->regency5) }}">
                        @error('regency5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total5') is-invalid @enderror" id="total5" name="total5"
                            value="{{ old('total5', $data->total5) }}">
                        @error('total5')
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
                            class="form-control @error('statet') is-invalid @enderror" id="statet" name="statet"
                            value="{{ old('statet', $data->statet) }}">
                        @error('statet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('provincet') is-invalid @enderror" id="provincet"
                            name="provincet" value="{{ old('provincet', $data->provincet) }}">
                        @error('provincet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('regencyt') is-invalid @enderror" id="regencyt"
                            name="regencyt" value="{{ old('regencyt', $data->regencyt) }}">
                        @error('regencyt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('totalt') is-invalid @enderror" id="totalt" name="totalt"
                            value="{{ old('totalt', $data->totalt) }}">
                        @error('totalt')
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
                <th class="tg-amwm" rowspan="2">10.1.1</th>
                <th class="tg-yla0" colspan="3"><span style="font-weight:bold">Panjang Jalan Negara, Provinsi dan
                        Kabupaten Menurut Jenis Permukaan Jalan di Kabupaten Soppeng (km), 2021</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55" colspan="3"><span style="font-weight:bold;font-style:italic">Length of State,
                        Province anf Regency Road&nbsp;&nbsp;by Type of Road Surface&nbsp;&nbsp;in Soppeng Regency (km),
                        2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jenis Jalan/ </span><span
                        style="font-style:italic;color:#000">Type of Road</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Negara/ </span><span
                        style="font-style:italic;color:#000">State</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Provinsi/ </span><span
                        style="font-style:italic;color:#000">Province</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Kabupaten/ </span><span
                        style="font-style:italic;color:#000">Regency</span></td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/ </span><span
                        style="font-style:italic;color:#000">Total</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Beton/</span><span
                        style="font-style:italic;color:#000">Concrete</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;202.776 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;202.776 </td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Aspal/</span><span
                        style="font-style:italic;color:#000">Asphalt</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;147.316 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;394.600 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;541.916 </td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Kerikil/</span><span
                        style="font-style:italic;color:#000">Gravel</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;.0 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;255.057 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;255.057 </td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Tanah/</span><span
                        style="font-style:italic;color:#000">Land</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;12.200 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;46.448 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;58.648 </td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-style:normal;color:#000">Lainnya/</span><span
                        style="font-style:italic;color:#000">Others</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;.0 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">&nbsp;&nbsp;-&nbsp;&nbsp;.0 </span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;.0 </td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</td>
                <td class="tg-mwxe">&nbsp;&nbsp;159.516 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;898.881 </td>
                <td class="tg-mwxe">&nbsp;&nbsp;1,058.397 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.037_DPUPR.script')
@endsection
