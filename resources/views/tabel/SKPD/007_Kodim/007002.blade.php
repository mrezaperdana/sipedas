<form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}" method="post" enctype="multipart/form-data">

    @csrf
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">{{ $data->notabel }}</th>
                <th class="tg-wa1i" colspan="5"><span style="font-weight:bold">{{ $data->judultabel }},
                        {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="5"><span
                        style="font-weight:bold;font-style:italic">{{ $data->judultabelen }},{{ $data->tahun }}</span>
                </th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="tg-baqh" rowspan="2">No</td>
                <td class="tg-baqh" rowspan="2"><span style="font-style:normal;color:#000">Unit Kerja/
                    </span><span style="font-style:italic;color:#000">Work Unit</span></td>
                <td class="tg-nrix"></td>
                <td class="tg-baqh" colspan="4"><span style="font-style:normal;color:#000">Golongan/
                    </span><span style="font-style:italic;color:#000">Class</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">I</td>
                <td class="tg-nrix">II</td>
                <td class="tg-nrix">III</td>
                <td class="tg-nrix">IV</td>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/ </span><span
                        style="font-style:italic;color:#000">Total</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
                <td class="tg-nrix">(7)</td>
            </tr>
            <tr>
                <td class="tg-nrix">9</td>
                <td class="tg-nrix">Kodim/Military District Commander</td>
                <td class="tg-nrix">19</td>
                <td class="tg-nrix">91</td>
                <td class="tg-nrix">10</td>
                <td class="tg-nrix">1</td>
                <td class="tg-cly1">121</td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="8">Rincian</td>
                <td class="tg-cly1">Koramil Marioriwawo</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkmo1') is-invalid @enderror"
                        id="rkmo1" name="rkmo1" value="{{ old('rkmo1', $data->rkmo1) }}">
                    @error('rkmo1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkmo2') is-invalid @enderror"
                        id="rkmo2" name="rkmo2" value="{{ old('rkmo2', $data->rkmo2) }}">
                    @error('rkmo2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkmo3') is-invalid @enderror"
                        id="rkmo3" name="rkmo3" value="{{ old('rkmo3', $data->rkmo3) }}">
                    @error('rkmo3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkmo4') is-invalid @enderror"
                        id="rkmo4" name="rkmo4" value="{{ old('rkmo4', $data->rkmo4) }}">
                    @error('rkmo4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkmot') is-invalid @enderror"
                        id="rkmot" name="rkmot" value="{{ old('rkmot', $data->rkmot) }}">
                    @error('rkmot')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Lalabata</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkl1') is-invalid @enderror"
                        id="rkl1" name="rkl1" value="{{ old('rkl1', $data->rkl1) }}">
                    @error('rkl1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkl2') is-invalid @enderror"
                        id="rkl2" name="rkl2" value="{{ old('rkl2', $data->rkl2) }}">
                    @error('rkl2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkl3') is-invalid @enderror"
                        id="rkl3" name="rkl3" value="{{ old('rkl3', $data->rkl3) }}">
                    @error('rkl3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkl4') is-invalid @enderror"
                        id="rkl4" name="rkl4" value="{{ old('rkl4', $data->rkl4) }}">
                    @error('rkl4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklt') is-invalid @enderror"
                        id="rklt" name="rklt" value="{{ old('rklt', $data->rklt) }}">
                    @error('rklt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Liliriaja</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkla1') is-invalid @enderror"
                        id="rkla1" name="rkla1" value="{{ old('rkla1', $data->rkla1) }}">
                    @error('rkla1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkla2') is-invalid @enderror"
                        id="rkla2" name="rkla2" value="{{ old('rkla2', $data->rkla2) }}">
                    @error('rkla2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkla3') is-invalid @enderror"
                        id="rkla3" name="rkla3" value="{{ old('rkla3', $data->rkla3) }}">
                    @error('rkla3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkla4') is-invalid @enderror"
                        id="rkla4" name="rkla4" value="{{ old('rkla4', $data->rkla4) }}">
                    @error('rkla4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklat') is-invalid @enderror"
                        id="rklat" name="rklat" value="{{ old('rklat', $data->rklat) }}">
                    @error('rklat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Lilirilau</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklu1') is-invalid @enderror"
                        id="rklu1" name="rklu1" value="{{ old('rklu1', $data->rklu1) }}">
                    @error('rklu1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklu2') is-invalid @enderror"
                        id="rklu2" name="rklu2" value="{{ old('rklu2', $data->rklu2) }}">
                    @error('rklu2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklu3') is-invalid @enderror"
                        id="rklu3" name="rklu3" value="{{ old('rklu3', $data->rklu3) }}">
                    @error('rklu3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklu4') is-invalid @enderror"
                        id="rklu4" name="rklu4" value="{{ old('rklu4', $data->rklu4) }}">
                    @error('rklu4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rklut') is-invalid @enderror"
                        id="rklut" name="rklut" value="{{ old('rklut', $data->rklut) }}">
                    @error('rklut')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Ganra</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkg1') is-invalid @enderror"
                        id="rkg1" name="rkg1" value="{{ old('rkg1', $data->rkg1) }}">
                    @error('rkg1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkg2') is-invalid @enderror"
                        id="rkg2" name="rkg2" value="{{ old('rkg2', $data->rkg2) }}">
                    @error('rkg2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkg3') is-invalid @enderror"
                        id="rkg3" name="rkg3" value="{{ old('rkg3', $data->rkg3) }}">
                    @error('rkg3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkg4') is-invalid @enderror"
                        id="rkg4" name="rkg4" value="{{ old('rkg4', $data->rkg4) }}">
                    @error('rkg4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkgt') is-invalid @enderror"
                        id="rkgt" name="rkgt" value="{{ old('rkgt', $data->rkgt) }}">
                    @error('rkgt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Citta</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkc1') is-invalid @enderror"
                        id="rkc1" name="rkc1" value="{{ old('rkc1', $data->rkc1) }}">
                    @error('rkc1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkc2') is-invalid @enderror"
                        id="rkc2" name="rkc2" value="{{ old('rkc2', $data->rkc2) }}">
                    @error('rkc2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkc3') is-invalid @enderror"
                        id="rkc3" name="rkc3" value="{{ old('rkc3', $data->rkc3) }}">
                    @error('rkc3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkc4') is-invalid @enderror"
                        id="rkc4" name="rkc4" value="{{ old('rkc4', $data->rkc4) }}">
                    @error('rkc4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkct') is-invalid @enderror"
                        id="rkct" name="rkct" value="{{ old('rkct', $data->rkct) }}">
                    @error('rkct')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Donri-Donri</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkma1') is-invalid @enderror"
                        id="rkma1" name="rkma1" value="{{ old('rkma1', $data->rkma1) }}">
                    @error('rkma1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkma2') is-invalid @enderror"
                        id="rkma2" name="rkma2" value="{{ old('rkma2', $data->rkma2) }}">
                    @error('rkma2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkma3') is-invalid @enderror"
                        id="rkma3" name="rkma3" value="{{ old('rkma3', $data->rkma3) }}">
                    @error('rkma3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkma4') is-invalid @enderror"
                        id="rkma4" name="rkma4" value="{{ old('rkma4', $data->rkma4) }}">
                    @error('rkma4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkmat') is-invalid @enderror"
                        id="rkmat" name="rkmat" value="{{ old('rkmat', $data->rkmat) }}">
                    @error('rkmat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-cly1">Koramil Marioriawa</td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkd1') is-invalid @enderror"
                        id="rkd1" name="rkd1" value="{{ old('rkd1', $data->rkd1) }}">
                    @error('rkd1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkd2') is-invalid @enderror"
                        id="rkd2" name="rkd2" value="{{ old('rkd2', $data->rkd2) }}">
                    @error('rkd2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkd3') is-invalid @enderror"
                        id="rkd3" name="rkd3" value="{{ old('rkd3', $data->rkd3) }}">
                    @error('rkd3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkd4') is-invalid @enderror"
                        id="rkd4" name="rkd4" value="{{ old('rkd4', $data->rkd4) }}">
                    @error('rkd4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text" class="form-control @error('rkdt') is-invalid @enderror"
                        id="rkdt" name="rkdt" value="{{ old('rkdt', $data->rkdt) }}">
                    @error('rkdt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>

            </tr>
        </tbody>
    </table>
    <div class="py-3 text-right">
        <button type="submit"class="btn  btn-success ">Simpan</button>
        @if (Auth::user()->role == 1)
            <a class="btn btn-info"href="{{ route('admin.dashboard.DaftarEntri') }}"role="button">Batal</a>
        @else
            <a class="btn btn-info"href="{{ route('user.dashboard.DaftarEntri') }}"role="button">Batal</a>
        @endif
    </div>

</form>
