@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">2.2.5</th>
                    <th colspan="5">
                        {{ $judultabel }}, {{ $data->tahun }}
                        (lanjutan)
                    </th>

                </tr>
                <tr>
                    <th>Table</th>
                    <th colspan="5">
                        {{ $judultabelen }}, {{ $data->tahun }}
                        (continued)
                    </th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td rowspan="4">
                        Kecamatan/Subdistrict</td>
                    <td colspan="6">Organisasi Masyarakat/Community Organization</td>

                </tr>

                <tr>
                    <td>Forum/Forum</td>

                    <td>Badan/Agency</td>

                    <td>Komunitas/Community</td>

                    <td>Profesi/Profession</td>

                    <td>Lainnya/ </td>

                    <td>Total</td>

                </tr>

                <tr>

                    <td>2022</td>

                    <td>2022</td>

                    <td>2022</td>

                    <td>2022</td>

                    <td>2022</td>

                    <td>2022</td>
                </tr>
                <tr>
                    <td colspan="2">(1)</td>
                    <td>(3)</td>
                    <td>(4)</td>
                    <td>(5)</td>
                    <td>(6)</td>

                </tr>
                <tr>
                    <td>010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('forum1') is-invalid @enderror"
                            id="forum1" name="forum1" value="{{ old('forum1', $data->forum1) }}">
                        @error('forum1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('badan1') is-invalid @enderror"
                            id="badan1" name="badan1" value="{{ old('badan1', $data->badan1) }}">
                        @error('badan1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas1') is-invalid @enderror" id="komunitas1"
                            name="komunitas1" value="{{ old('komunitas1', $data->komunitas1) }}">
                        @error('komunitas1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi1') is-invalid @enderror" id="profesi1" name="profesi1"
                            value="{{ old('profesi1', $data->profesi1) }}">
                        @error('profesi1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya1') is-invalid @enderror" id="lainnya1" name="lainnya1"
                            value="{{ old('lainnya1', $data->lainnya1) }}">
                        @error('lainnya1')
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
                    <td>020. Lalabata</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('forum2') is-invalid @enderror"
                            id="forum2" name="forum2" value="{{ old('forum2', $data->forum2) }}">
                        @error('forum2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('badan2') is-invalid @enderror"
                            id="badan2" name="badan2" value="{{ old('badan2', $data->badan2) }}">
                        @error('badan2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas2') is-invalid @enderror" id="komunitas2"
                            name="komunitas2" value="{{ old('komunitas2', $data->komunitas2) }}">
                        @error('komunitas2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi2') is-invalid @enderror" id="profesi2" name="profesi2"
                            value="{{ old('profesi2', $data->profesi2) }}">
                        @error('profesi2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya2') is-invalid @enderror" id="lainnya2" name="lainnya2"
                            value="{{ old('lainnya2', $data->lainnya2) }}">
                        @error('lainnya2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('total2') is-invalid @enderror" id="total2" name="total2"
                            value="{{ old('total2', $data->total2) }}">
                        @error('total2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forum3') is-invalid @enderror" id="forum3" name="forum3"
                            value="{{ old('forum3', $data->forum3) }}">
                        @error('forum3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badan3') is-invalid @enderror" id="badan3" name="badan3"
                            value="{{ old('badan3', $data->badan3) }}">
                        @error('badan3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas3') is-invalid @enderror" id="komunitas3"
                            name="komunitas3" value="{{ old('komunitas3', $data->komunitas3) }}">
                        @error('komunitas3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi3') is-invalid @enderror" id="profesi3"
                            name="profesi3" value="{{ old('profesi3', $data->profesi3) }}">
                        @error('profesi3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya3') is-invalid @enderror" id="lainnya3"
                            name="lainnya3" value="{{ old('lainnya3', $data->lainnya3) }}">
                        @error('lainnya3')
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
                    <td>031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forum4') is-invalid @enderror" id="forum4" name="forum4"
                            value="{{ old('forum4', $data->forum4) }}">
                        @error('forum4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badan4') is-invalid @enderror" id="badan4" name="badan4"
                            value="{{ old('badan4', $data->badan4) }}">
                        @error('badan4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas4') is-invalid @enderror" id="komunitas4"
                            name="komunitas4" value="{{ old('komunitas4', $data->komunitas4) }}">
                        @error('komunitas4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi4') is-invalid @enderror" id="profesi4"
                            name="profesi4" value="{{ old('profesi4', $data->profesi4) }}">
                        @error('profesi4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya4') is-invalid @enderror" id="lainnya4"
                            name="lainnya4" value="{{ old('lainnya4', $data->lainnya4) }}">
                        @error('lainnya4')
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
                    <td>032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forum5') is-invalid @enderror" id="forum5" name="forum5"
                            value="{{ old('forum5', $data->forum5) }}">
                        @error('forum5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badan5') is-invalid @enderror" id="badan5" name="badan5"
                            value="{{ old('badan5', $data->badan5) }}">
                        @error('badan5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas5') is-invalid @enderror" id="komunitas5"
                            name="komunitas5" value="{{ old('komunitas5', $data->komunitas5) }}">
                        @error('komunitas5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi5') is-invalid @enderror" id="profesi5"
                            name="profesi5" value="{{ old('profesi5', $data->profesi5) }}">
                        @error('profesi5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya5') is-invalid @enderror" id="lainnya5"
                            name="lainnya5" value="{{ old('lainnya5', $data->lainnya5) }}">
                        @error('lainnya5')
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
                    <td>040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forum6') is-invalid @enderror" id="forum6" name="forum6"
                            value="{{ old('forum6', $data->forum6) }}">
                        @error('forum6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badan6') is-invalid @enderror" id="badan6" name="badan6"
                            value="{{ old('badan6', $data->badan6) }}">
                        @error('badan6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas6') is-invalid @enderror" id="komunitas6"
                            name="komunitas6" value="{{ old('komunitas6', $data->komunitas6) }}">
                        @error('komunitas6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi6') is-invalid @enderror" id="profesi6"
                            name="profesi6" value="{{ old('profesi6', $data->profesi6) }}">
                        @error('profesi6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya6') is-invalid @enderror" id="lainnya6"
                            name="lainnya6" value="{{ old('lainnya6', $data->lainnya6) }}">
                        @error('lainnya6')
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
                    <td>050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forum7') is-invalid @enderror" id="forum7" name="forum7"
                            value="{{ old('forum7', $data->forum7) }}">
                        @error('forum7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badan7') is-invalid @enderror" id="badan7" name="badan7"
                            value="{{ old('badan7', $data->badan7) }}">
                        @error('badan7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas7') is-invalid @enderror" id="komunitas7"
                            name="komunitas7" value="{{ old('komunitas7', $data->komunitas7) }}">
                        @error('komunitas7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi7') is-invalid @enderror" id="profesi7"
                            name="profesi7" value="{{ old('profesi7', $data->profesi7) }}">
                        @error('profesi7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya7') is-invalid @enderror" id="lainnya7"
                            name="lainnya7" value="{{ old('lainnya7', $data->lainnya7) }}">
                        @error('lainnya7')
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
                    <td>060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forum8') is-invalid @enderror" id="forum8" name="forum8"
                            value="{{ old('forum8', $data->forum8) }}">
                        @error('forum8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badan8') is-invalid @enderror" id="badan8" name="badan8"
                            value="{{ old('badan8', $data->badan8) }}">
                        @error('badan8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitas8') is-invalid @enderror" id="komunitas8"
                            name="komunitas8" value="{{ old('komunitas8', $data->komunitas8) }}">
                        @error('komunitas8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesi8') is-invalid @enderror" id="profesi8"
                            name="profesi8" value="{{ old('profesi8', $data->profesi8) }}">
                        @error('profesi8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya8') is-invalid @enderror" id="lainnya8"
                            name="lainnya8" value="{{ old('lainnya8', $data->lainnya8) }}">
                        @error('lainnya8')
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
                    <td>Jumlah/Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('forumt') is-invalid @enderror" id="forumt" name="forumt"
                            value="{{ old('forumt', $data->forumt) }}">
                        @error('forumt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('badant') is-invalid @enderror" id="badant" name="badant"
                            value="{{ old('badant', $data->badant) }}">
                        @error('badant')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('komunitast') is-invalid @enderror" id="komunitast"
                            name="komunitast" value="{{ old('komunitast', $data->komunitast) }}">
                        @error('komunitast')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('profesit') is-invalid @enderror" id="profesit"
                            name="profesit" value="{{ old('profesit', $data->profesit) }}">
                        @error('profesit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnyat') is-invalid @enderror" id="lainnyat"
                            name="lainnyat" value="{{ old('lainnyat', $data->lainnyat) }}">
                        @error('lainnyat')
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
                <th>Tabel</th>
                <th rowspan="2">2.2.5</th>
                <th>Jumlah Organisasi Masyarakat menurut Kecamatan di Kabupaten Soppeng, 2017-2022
                    (lanjutan)</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Table</th>
                <th>Number of Community Organizations by Subdistrict in Soppeng Regency, 2017-2022
                    (continued)</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>

            </tr>
            <tr>

            </tr>
            <tr>
                <td rowspan="5">Kecamatan/</td>
                <td colspan="39">Organisasi Masyarakat/</td>

            </tr>
            <tr>
                <td colspan="39">Community Organization</td>

            </tr>
            <tr>
                <td>Forum/</td>

                <td>Badan/</td>

                <td>Komunitas/</td>

                <td>Profesi/</td>

                <td>Lainnya/</td>

                <td>Total</td>

            </tr>
            <tr>
                <td>Forum</td>

                <td>Agency</td>

                <td>Community</td>

                <td>Profession</td>

                <td> </td>

            </tr>
            <tr>
                <td>2017</td>
                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>

                <td>2017</td>
                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
                <td>2017</td>

                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
                <td>2017</td>

                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
                <td>2017</td>

                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
                <td>2017</td>
                <td>2018</td>
                <td>2019</td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
            </tr>
            <tr>
                <td colspan="2">(1)</td>
                <td>(3)</td>
                <td>(4)</td>
                <td>(5)</td>
                <td>(6)</td>

                <td>(7)</td>
                <td>(8)</td>
                <td>(9)</td>
                <td>(10)</td>
                <td>(11)</td>

                <td>(12)</td>

                <td>(13)</td>
                <td>(14)</td>
                <td>(15)</td>
                <td>(16)</td>

                <td>(17)</td>

                <td>(18)</td>
                <td>(19)</td>
                <td>(20)</td>
                <td>(21)</td>

                <td>(22)</td>

                <td>(23)</td>
                <td>(24)</td>
                <td>(25)</td>
                <td>(26)</td>

                <td>(27)</td>
                <td>(28)</td>
                <td>(29)</td>
                <td>(30)</td>
                <td>(31)</td>
                <td>(31)</td>
            </tr>
            <tr>
                <td>010. Marioriwawo</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td> 26 </td>
                <td> 6 </td>
                <td> 3 </td>
                <td> 10 </td>

                <td>-</td>

                <td>-</td>
                <td>-</td>
                <td> 1 </td>
                <td>-</td>

                <td>-</td>
                <td> 26 </td>
                <td> 6 </td>
                <td> 4 </td>
                <td> 10 </td>
                <td>-</td>
            </tr>
            <tr>
                <td>020. Lalabata</td>
                <td>-</td>
                <td>-</td>

                <td> 1 </td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td> 1 </td>

                <td> 23 </td>

                <td> 24 </td>

                <td> 1 </td>
                <td>-</td>

                <td> 38 </td>

                <td> 78 </td>
                <td> 8 </td>
                <td> 5 </td>
                <td> 1 </td>

                <td>-</td>

                <td>-</td>
                <td> 5 </td>
                <td>-</td>
                <td>-</td>

                <td> 61 </td>
                <td> 102 </td>
                <td> 13 </td>
                <td> 7 </td>
                <td> 2 </td>
                <td>-</td>
            </tr>
            <tr>
                <td>030. Liliriaja</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td> 22 </td>
                <td> 4 </td>
                <td>-</td>
                <td> 8 </td>

                <td>-</td>

                <td>-</td>
                <td> 3 </td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td> 22 </td>
                <td> 7 </td>
                <td>-</td>
                <td> 8 </td>
                <td>-</td>
            </tr>
            <tr>
                <td>031. Ganra</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td> 22 </td>
                <td> 1 </td>
                <td>-</td>
                <td> 1 </td>

                <td>-</td>

                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td> 22 </td>
                <td> 1 </td>
                <td>-</td>
                <td> 1 </td>
                <td>-</td>
            </tr>
            <tr>
                <td>032. Citta</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td> 1 </td>
                <td> 1 </td>
                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td> 1 </td>
                <td> 1 </td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>040. Lilirilau</td>
                <td> 30 </td>
                <td> 30 </td>

                <td> 1 </td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td> 54 </td>
                <td> 10 </td>
                <td> 3 </td>
                <td> 1 </td>

                <td>-</td>

                <td>-</td>
                <td> 1 </td>
                <td>-</td>
                <td>-</td>

                <td> 30 </td>
                <td> 84 </td>
                <td> 11 </td>
                <td> 4 </td>
                <td> 1 </td>
                <td>-</td>
            </tr>
            <tr>
                <td>050. Donri-Donri</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td> 10 </td>
                <td> 8 </td>
                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>
                <td>-</td>
                <td> 1 </td>
                <td>-</td>

                <td>-</td>
                <td> 10 </td>
                <td> 8 </td>
                <td> 1 </td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>060. Marioriawa</td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td>-</td>

                <td>-</td>

                <td>-</td>

                <td> 1 </td>
                <td>-</td>

                <td>-</td>

                <td> 3 </td>
                <td> 1 </td>
                <td>-</td>
                <td> 5 </td>

                <td>-</td>

                <td>-</td>
                <td> 1 </td>
                <td>-</td>
                <td>-</td>

                <td>-</td>
                <td> 3 </td>
                <td> 2 </td>
                <td> 1 </td>
                <td> 5 </td>
                <td>-</td>
            </tr>
            <tr>
                <td>Jumlah/Total</td>
                <td> 30 </td>
                <td> 30 </td>
                <td>-</td>
                <td> 2 </td>
                <td>-</td>

                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td> 1 </td>

                <td> 23 </td>

                <td> 24 </td>
                <td>-</td>
                <td> 2 </td>
                <td>-</td>

                <td> 38 </td>

                <td> 216 </td>
                <td> 39 </td>
                <td> 11 </td>
                <td> 26 </td>

                <td>-</td>

                <td>-</td>
                <td> 10 </td>
                <td> 2 </td>
                <td>-</td>

                <td> 91 </td>
                <td> 270 </td>
                <td> 49 </td>
                <td> 17 </td>
                <td> 27 </td>

            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumForums() {
            var forumElements = document.querySelectorAll('[id^="forum"]');
            var forumSum = 0;
            for (var i = 0; i < forumElements.length; i++) {
                if (forumElements[i].id !== "forumt") {
                    var forumValue = parseFloat(forumElements[i].value) || 0;
                    forumSum += forumValue;
                }
            }
            document.getElementById('forumt').value = forumSum;
        }

        var forumInputs = document.querySelectorAll('[id^="forum"]');
        for (var i = 0; i < forumInputs.length; i++) {
            forumInputs[i].addEventListener('focusout', sumForums);
        }
    </script>
    <script>
        function sumBadans() {
            var badanElements = document.querySelectorAll('[id^="badan"]');
            var badanSum = 0;
            for (var i = 0; i < badanElements.length; i++) {
                if (badanElements[i].id !== "badant") {
                    var badanValue = parseFloat(badanElements[i].value) || 0;
                    badanSum += badanValue;
                }
            }
            document.getElementById('badant').value = badanSum;
        }

        var badanInputs = document.querySelectorAll('[id^="badan"]');
        for (var i = 0; i < badanInputs.length; i++) {
            badanInputs[i].addEventListener('focusout', sumBadans);
        }
    </script>
    <script>
        function sumKomunitass() {
            var komunitasElements = document.querySelectorAll('[id^="komunitas"]');
            var komunitasSum = 0;
            for (var i = 0; i < komunitasElements.length; i++) {
                if (komunitasElements[i].id !== "komunitast") {
                    var komunitasValue = parseFloat(komunitasElements[i].value) || 0;
                    komunitasSum += komunitasValue;
                }
            }
            document.getElementById('komunitast').value = komunitasSum;
        }

        var komunitasInputs = document.querySelectorAll('[id^="komunitas"]');
        for (var i = 0; i < komunitasInputs.length; i++) {
            komunitasInputs[i].addEventListener('focusout', sumKomunitass);
        }
    </script>
    <script>
        function sumProfesis() {
            var profesiElements = document.querySelectorAll('[id^="profesi"]');
            var profesiSum = 0;
            for (var i = 0; i < profesiElements.length; i++) {
                if (profesiElements[i].id !== "profesit") {
                    var profesiValue = parseFloat(profesiElements[i].value) || 0;
                    profesiSum += profesiValue;
                }
            }
            document.getElementById('profesit').value = profesiSum;
        }

        var profesiInputs = document.querySelectorAll('[id^="profesi"]');
        for (var i = 0; i < profesiInputs.length; i++) {
            profesiInputs[i].addEventListener('focusout', sumProfesis);
        }
    </script>
    <script>
        function sumLainnyas() {
            var lainnyaElements = document.querySelectorAll('[id^="lainnya"]');
            var lainnyaSum = 0;
            for (var i = 0; i < lainnyaElements.length; i++) {
                if (lainnyaElements[i].id !== "lainnyat") {
                    var lainnyaValue = parseFloat(lainnyaElements[i].value) || 0;
                    lainnyaSum += lainnyaValue;
                }
            }
            document.getElementById('lainnyat').value = lainnyaSum;
        }

        var lainnyaInputs = document.querySelectorAll('[id^="lainnya"]');
        for (var i = 0; i < lainnyaInputs.length; i++) {
            lainnyaInputs[i].addEventListener('focusout', sumLainnyas);
        }
    </script>
    <script>
        function sumTotals() {
            var totalElements = document.querySelectorAll('[id^="total"]');
            var totalSum = 0;
            for (var i = 0; i < totalElements.length; i++) {
                if (totalElements[i].id !== "totalt") {
                    var totalValue = parseFloat(totalElements[i].value) || 0;
                    totalSum += totalValue;
                }
            }
            document.getElementById('totalt').value = totalSum;
        }

        var totalInputs = document.querySelectorAll('[id^="total"]');
        for (var i = 0; i < totalInputs.length; i++) {
            totalInputs[i].addEventListener('focusout', sumTotals);
        }
    </script>
@endsection
