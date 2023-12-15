@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th class="tg-jq85" colspan="6">III.
                        POLITIK</span></th>
                </tr>
                <tr>
                    <th class="tg-jq85" colspan="6">A. DEWAN
                        PERWAKILAN RAKYAT DAERAH (DPRD)</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-c3ow" rowspan="13">1</td>
                    <td class="tg-0thz" colspan="5"><span style="font-weight:bold">Jumlah anggota DPRD menurut asal
                            partai politik dan jenis kelamin tahun
                            {{ $data->tahun }}:</span></td>
                </tr>
                <tr>
                    <td class="tg-fll5"><span style="font-weight:bold">No</span></td>
                    <td class="tg-fll5"><span style="font-weight:bold">Asal Partai Politik</span></td>
                    <td class="tg-fll5"><span style="font-weight:bold">Laki-laki</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">Perempuan</span></td>
                    <td class="tg-bobw"><span style="font-weight:bold">Total</span></td>
                </tr>
                <tr>
                    <td class="tg-pb0m">1</td>
                    <td class="tg-za14">Gerindra</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('men1') is-invalid @enderror"
                            id="men1" name="men1" value="{{ old('men1', $data->men1) }}">
                        @error('men1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('women1') is-invalid @enderror"
                            id="women1" name="women1" value="{{ old('women1', $data->women1) }}">
                        @error('women1')
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
                    <td class="tg-pb0m">2</td>
                    <td class="tg-obg7">Golkar</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('men2') is-invalid @enderror"
                            id="men2" name="men2" value="{{ old('men2', $data->men2) }}">
                        @error('men2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('women2') is-invalid @enderror"
                            id="women2" name="women2" value="{{ old('women2', $data->women2) }}">
                        @error('women2')
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
                    <td class="tg-pb0m">3</td>
                    <td class="tg-za14">PDI-P</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('men3') is-invalid @enderror"
                            id="men3" name="men3" value="{{ old('men3', $data->men3) }}">
                        @error('men3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('women3') is-invalid @enderror"
                            id="women3" name="women3" value="{{ old('women3', $data->women3) }}">
                        @error('women3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('total3') is-invalid @enderror"
                            id="total3" name="total3" value="{{ old('total3', $data->total3) }}">
                        @error('total3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-pb0m">4</td>
                    <td class="tg-obg7">PPP</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('men4') is-invalid @enderror"
                            id="men4" name="men4" value="{{ old('men4', $data->men4) }}">
                        @error('men4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women4') is-invalid @enderror" id="women4" name="women4"
                            value="{{ old('women4', $data->women4) }}">
                        @error('women4')
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
                    <td class="tg-pb0m">5</td>
                    <td class="tg-obg7">Demokrat</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('men5') is-invalid @enderror" id="men5" name="men5"
                            value="{{ old('men5', $data->men5) }}">
                        @error('men5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women5') is-invalid @enderror" id="women5" name="women5"
                            value="{{ old('women5', $data->women5) }}">
                        @error('women5')
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
                    <td class="tg-pb0m">6</td>
                    <td class="tg-obg7">PAN</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('men6') is-invalid @enderror" id="men6" name="men6"
                            value="{{ old('men6', $data->men6) }}">
                        @error('men6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women6') is-invalid @enderror" id="women6" name="women6"
                            value="{{ old('women6', $data->women6) }}">
                        @error('women6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total6') is-invalid @enderror" id="total6" name="total6"
                            value="{{ old('total6', $data->total6) }}">
                        @error('total6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-pb0m">7</td>
                    <td class="tg-za14">PKS</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('men7') is-invalid @enderror" id="men7" name="men7"
                            value="{{ old('men7', $data->men7) }}">
                        @error('men7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women7') is-invalid @enderror" id="women7" name="women7"
                            value="{{ old('women7', $data->women7) }}">
                        @error('women7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total7') is-invalid @enderror" id="total7" name="total7"
                            value="{{ old('total7', $data->total7) }}">
                        @error('total7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-pb0m">8</td>
                    <td class="tg-za14">PKB</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('men8') is-invalid @enderror" id="men8" name="men8"
                            value="{{ old('men8', $data->men8) }}">
                        @error('men8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women8') is-invalid @enderror" id="women8" name="women8"
                            value="{{ old('women8', $data->women8) }}">
                        @error('women8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total8') is-invalid @enderror" id="total8" name="total8"
                            value="{{ old('total8', $data->total8) }}">
                        @error('total8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-pb0m">9</td>
                    <td class="tg-za14">PBB</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('men9') is-invalid @enderror" id="men9" name="men9"
                            value="{{ old('men9', $data->men9) }}">
                        @error('men9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women9') is-invalid @enderror" id="women9" name="women9"
                            value="{{ old('women9', $data->women9) }}">
                        @error('women9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total9') is-invalid @enderror" id="total9" name="total9"
                            value="{{ old('total9', $data->total9) }}">
                        @error('total9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-pb0m">10</td>
                    <td class="tg-za14">Nasdem</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('men10') is-invalid @enderror" id="men10" name="men10"
                            value="{{ old('men10', $data->men10) }}">
                        @error('men10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('women10') is-invalid @enderror" id="women10"
                            name="women10" value="{{ old('women10', $data->women10) }}">
                        @error('women10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total10') is-invalid @enderror" id="total10"
                            name="total10" value="{{ old('total10', $data->total10) }}">
                        @error('total10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-pb0m" colspan="2">Jumlah</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ment') is-invalid @enderror" id="ment" name="ment"
                            value="{{ old('ment', $data->ment) }}">
                        @error('ment')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('woment') is-invalid @enderror" id="woment" name="woment"
                            value="{{ old('woment', $data->woment) }}">
                        @error('woment')
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
                <tr>
                    <td class="tg-q2a3" rowspan="3">2</td>
                    <td class="tg-hlym" colspan="2"><span style="font-weight:bold">Jumlah Peraturan Daerah (Perda)
                            yang
                            dihasilkan DPRD</span></td>
                    <td class="tg-wys7" colspan="3"><span style="font-weight:bold">{{ $data->tahun }}</span>
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl" colspan="2">a. Jumlah Peraturan Daerah</td>
                    <td class="tg-2b7s" colspan="3"><input type="text"
                            class="form-control @error('perda') is-invalid @enderror" id="perda" name="perda"
                            value="{{ old('perda', $data->perda) }}">
                        @error('perda')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl" colspan="2">b. Jumlah Peraturan Daerah Inisiatif (Prakarsa) DPRD</td>
                    <td class="tg-2b7s" colspan="3"><input type="text"
                            class="form-control @error('prakarsa') is-invalid @enderror" id="prakarsa"
                            name="prakarsa" value="{{ old('prakarsa', $data->prakarsa) }}">
                        @error('prakarsa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
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
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-jq85" colspan="6"><span style="font-weight:bold;background-color:#F3F3F3">III.
                        POLITIK</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-jq85" colspan="6"><span style="font-weight:bold;background-color:#F3F3F3">A. DEWAN
                        PERWAKILAN RAKYAT DAERAH (DPRD)</span></td>
            </tr>
            <tr>
                <td class="tg-c3ow" rowspan="13">1</td>
                <td class="tg-0thz" colspan="5"><span style="font-weight:bold">Jumlah anggota DPRD menurut asal
                        partai politik dan jenis kelamin tahun 2021:</span></td>
            </tr>
            <tr>
                <td class="tg-fll5"><span style="font-weight:bold">No</span></td>
                <td class="tg-fll5"><span style="font-weight:bold">Asal Partai Politik</span></td>
                <td class="tg-fll5"><span style="font-weight:bold">Laki-laki</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">Perempuan</span></td>
                <td class="tg-bobw"><span style="font-weight:bold">Total</span></td>
            </tr>
            <tr>
                <td class="tg-pb0m">1</td>
                <td class="tg-za14">Gerindra</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">2</td>
                <td class="tg-obg7">Golkar</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">3</td>
                <td class="tg-za14">PDI-P</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">4</td>
                <td class="tg-obg7">PPP</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">5</td>
                <td class="tg-obg7">Demokrat</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">6</td>
                <td class="tg-obg7">PAN</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">7</td>
                <td class="tg-za14">PKS</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">8</td>
                <td class="tg-za14">PKB</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">9</td>
                <td class="tg-za14">PBB</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m">10</td>
                <td class="tg-za14">Nasdem</td>
                <td class="tg-za14"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-pb0m" colspan="2">Jumlah</td>
                <td class="tg-jkyp">0</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-2b7s">0</td>
            </tr>
            <tr>
                <td class="tg-q2a3" rowspan="3">2</td>
                <td class="tg-hlym" colspan="2"><span style="font-weight:bold">Jumlah Peraturan Daerah (Perda)
                        yang
                        dihasilkan DPRD</span></td>
                <td class="tg-wys7" colspan="3"><span style="font-weight:bold">2021</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl" colspan="2">a. Jumlah Peraturan Daerah</td>
                <td class="tg-2b7s" colspan="3">10</td>
            </tr>
            <tr>
                <td class="tg-7zrl" colspan="2">b. Jumlah Peraturan Daerah Inisiatif (Prakarsa) DPRD</td>
                <td class="tg-2b7s" colspan="3">1</td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.027_DPRD.script')
@endsection
