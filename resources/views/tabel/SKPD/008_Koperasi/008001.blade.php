@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p> {{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tahun</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">NILAI OMZET (Rp.000)</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">NILAI LABA (Rp.000)</span></th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td class="tg-2b7s">2020</td>
                    <td class="tg-2b7s"><span style="font-weight:normal">99903191</span></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">8391827</span></td>
                </tr> --}}
                {{-- <tr>
                    <td class="tg-2b7s">2021</td>
                    <td class="tg-2b7s"><span style="font-weight:normal">98533869</span></td>
                    <td class="tg-2b7s"><span style="font-weight:normal">7625570</span></td>
                </tr> --}}
                <tr>
                    <td class="tg-2b7s">{{ $data->tahun }}</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('omzet') is-invalid @enderror"
                            id="omzet" name="omzet" value="{{ old('omzet', $data->omzet) }}">
                        @error('omzet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('laba') is-invalid @enderror"
                            id="laba" name="laba" value="{{ old('laba', $data->laba) }}">
                        @error('laba')
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">Tahun</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">NILAI OMZET (Rp.000)</span></th>
                <th class="tg-wa1i"><span style="font-weight:bold">NILAI LABA (Rp.000)</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-2b7s">2020</td>
                <td class="tg-2b7s"><span style="font-weight:normal">99903191</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">8391827</span></td>
            </tr>
            <tr>
                <td class="tg-2b7s">2021</td>
                <td class="tg-2b7s"><span style="font-weight:normal">98533869</span></td>
                <td class="tg-2b7s"><span style="font-weight:normal">7625570</span></td>
            </tr>
            <tr>
                <td class="tg-2b7s">2022</td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
        </tbody>
    </table>
@endif
