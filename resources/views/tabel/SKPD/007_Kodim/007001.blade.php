<form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
    @csrf

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm"rowspan="2">{{ $notabel }}</th>
                <th class="tg-wa1i"colspan="5"><span style="font-weight:bold">{{ $judultabel }},
                        {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7"colspan="5"><span style="font-weight:bold;font-style:italic">{{ $judultabelen }},
                        {{ $data->tahun }}</span>
                </th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="tg-c3ow"rowspan="2">No</td>
                <td class="tg-c3ow"rowspan="2"><span style="font-style:normal;color:#000">Unit Kerja/
                    </span><span style="font-style:italic;color:#000">Work Unit</span></td>
                <td class="tg-9wq8"></td>
                <td class="tg-c3ow"colspan="4"><span style="font-style:normal;color:#000">Golongan/ </span><span
                        style="font-style:italic;color:#000">Class</span></td>
            </tr>
            <tr>
                <td class="tg-9wq8">I</td>
                <td class="tg-9wq8">II</td>
                <td class="tg-9wq8">III</td>
                <td class="tg-9wq8">IV</td>
                <td class="tg-c3ow"><span style="font-style:normal;color:#000">Jumlah/ </span><span
                        style="font-style:italic;color:#000">Total</span></td>
            </tr>
            <tr>
                <td class="tg-9wq8">(1)</td>
                <td class="tg-9wq8">(2)</td>
                <td class="tg-9wq8">(3)</td>
                <td class="tg-9wq8">(4)</td>
                <td class="tg-9wq8">(5)</td>
                <td class="tg-9wq8">(6)</td>
                <td class="tg-9wq8">(7)</td>
            </tr>
            <tr>
                <td class="tg-9wq8">9</td>
                <td class="tg-9wq8">Kodim/Military District Commander</td>
                <td class="tg-9wq8"> 19 </td>
                <td class="tg-9wq8"> 93 </td>
                <td class="tg-9wq8"> 11 </td>
                <td class="tg-9wq8"> 1 </td>
                <td class="tg-9wq8"> 124 </td>
            </tr>
            <tr>
                <td class="tg-c3ow"rowspan="2">Rincian</td>
                <td class="tg-9wq8">PNS</td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rpns1') is-invalid @enderror"id="rpns1"name="rpns1"
                        value="{{ old('rpns1', $data->rpns1) }}">
                    @error('rpns1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rpns2') is-invalid @enderror"id="rpns2"name="rpns2"
                        value="{{ old('rpns2', $data->rpns2) }}">
                    @error('rpns2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rpns3') is-invalid @enderror"id="rpns3"name="rpns3"
                        value="{{ old('rpns3', $data->rpns3) }}">
                    @error('rpns3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rpns4') is-invalid @enderror"id="rpns4"name="rpns4"
                        value="{{ old('rpns4', $data->rpns4) }}">
                    @error('rpns4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rpnst') is-invalid @enderror"id="rpnst"name="rpnst"
                        value="{{ old('rpnst', $data->rpnst) }}">
                    @error('rpnst')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-9wq8">Personil TNI</td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rtni1') is-invalid @enderror"id="rtni1"name="rtni1"
                        value="{{ old('rtni1', $data->rtni1) }}">
                    @error('rtni1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rtni2') is-invalid @enderror"id="rtni2"name="rtni2"
                        value="{{ old('rtni2', $data->rtni2) }}">
                    @error('rtni2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rtni3') is-invalid @enderror"id="rtni3"name="rtni3"
                        value="{{ old('rtni3', $data->rtni3) }}">
                    @error('rtni3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rtni4') is-invalid @enderror"id="rtni4"name="rtni4"
                        value="{{ old('rtni4', $data->rtni4) }}">
                    @error('rtni4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('rtnit') is-invalid @enderror"id="rtnit"name="rtnit"
                        value="{{ old('rtnit', $data->rtnit) }}">
                    @error('rtnit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>

            <tr>
                <td class="tg-9wq8">total</td>
                <td class="tg-9wq8">PNS</td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('tpns1') is-invalid @enderror"id="tpns1"name="tpns1"
                        value="{{ old('tpns1', $data->tpns1) }}">
                    @error('tpns1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('tpns2') is-invalid @enderror"id="tpns2"name="tpns2"
                        value="{{ old('tpns2', $data->tpns2) }}">
                    @error('tpns2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('tpns3') is-invalid @enderror"id="tpns3"name="tpns3"
                        value="{{ old('tpns3', $data->tpns3) }}">
                    @error('tpns3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('tpns4') is-invalid @enderror"id="tpns4"name="tpns4"
                        value="{{ old('tpns4', $data->tpns4) }}">
                    @error('tpns4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('tpnst') is-invalid @enderror"id="tpnst"name="tpnst"
                        value="{{ old('tpnst', $data->tpnst) }}">
                    @error('tpnst')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-9wq8">Personil TNI</td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('ttni1') is-invalid @enderror"id="ttni1"name="ttni1"
                        value="{{ old('ttni1', $data->ttni1) }}">
                    @error('ttni1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('ttni2') is-invalid @enderror"id="ttni2"name="ttni2"
                        value="{{ old('ttni2', $data->ttni2) }}">
                    @error('ttni2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('ttni3') is-invalid @enderror"id="ttni3"name="ttni3"
                        value="{{ old('ttni3', $data->ttni3) }}">
                    @error('ttni3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('ttni4') is-invalid @enderror"id="ttni4"name="ttni4"
                        value="{{ old('ttni4', $data->ttni4) }}">
                    @error('ttni4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
                <td class="tg-cly1"><input type="text"
                        class="form-control @error('ttnit') is-invalid @enderror"id="ttnit"name="ttnit"
                        value="{{ old('ttnit', $data->ttnit) }}">
                    @error('ttnit')
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
