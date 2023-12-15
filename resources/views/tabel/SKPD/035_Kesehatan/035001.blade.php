@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.2.16</th>
                    <th class="tg-wa1i" colspan="12"><span style="font-weight:bold">Banyaknya Kasus Penyakit Menurut
                            Kecamatan dan Jenis Penyakit di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="12"><span style="font-weight:bold;font-style:italic">Number of Cases
                            of Disease by Subdistrict and Type of Disease in Soppeng Regency, {{ $data->tahun }}</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-iuam"><span style="background-color:#0F0">MARIORIWAWO</span></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">Desa/Kelurahan</td>
                    <td class="tg-nrix">Malaria</td>
                    <td class="tg-nrix">Tuberkulosis/</td>
                    <td class="tg-nrix">Pneumonia</td>
                    <td class="tg-nrix">Kusta</td>
                    <td class="tg-nrix">Tetanus</td>
                    <td class="tg-nrix">Campak</td>
                    <td class="tg-nrix">Diare</td>
                    <td class="tg-nrix">Demam Derdarah</td>
                    <td class="tg-nrix">HIV-AIDS</td>
                    <td class="tg-nrix">Infeksi Menular Seksual/</td>
                    <td class="tg-nrix">Terkonfirmasi COVID19</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnyavar') is-invalid @enderror" id="lainnyavar"
                            name="lainnyavar" value="{{ old('lainnyavar', $data->lainnyavar) }}">
                        @error('lainnyavar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Malaria</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Tuberculosis</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Pneumonia</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">leprous</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Tetanus</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Measles</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">/Diarrhea</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Dengue Fever</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">HIV-AIDS</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Sexually Trans-mitted Infection</span></td>
                    <td class="tg-lhti"></td>
                    <td class="tg-lhti"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                    <td class="tg-nrix">(5)</td>
                    <td class="tg-nrix">(6)</td>
                    <td class="tg-nrix">(7)</td>
                    <td class="tg-nrix">(8)</td>
                    <td class="tg-nrix">(9)</td>
                    <td class="tg-nrix">(10)</td>
                    <td class="tg-nrix">(11)</td>
                    <td class="tg-nrix">(12)</td>
                    <td class="tg-nrix">(13)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">001. Gattareng</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria1') is-invalid @enderror" id="malaria1" name="malaria1"
                            value="{{ old('malaria1', $data->malaria1) }}">
                        @error('malaria1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('tbc1') is-invalid @enderror"
                            id="tbc1" name="tbc1" value="{{ old('tbc1', $data->tbc1) }}">
                        @error('tbc1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia1') is-invalid @enderror" id="pneumonia1"
                            name="pneumonia1" value="{{ old('pneumonia1', $data->pneumonia1) }}">
                        @error('pneumonia1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta1') is-invalid @enderror" id="kusta1" name="kusta1"
                            value="{{ old('kusta1', $data->kusta1) }}">
                        @error('kusta1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus1') is-invalid @enderror" id="tetanus1"
                            name="tetanus1" value="{{ old('tetanus1', $data->tetanus1) }}">
                        @error('tetanus1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak1') is-invalid @enderror" id="campak1" name="campak1"
                            value="{{ old('campak1', $data->campak1) }}">
                        @error('campak1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare1') is-invalid @enderror" id="diare1" name="diare1"
                            value="{{ old('diare1', $data->diare1) }}">
                        @error('diare1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd1') is-invalid @enderror" id="dbd1" name="dbd1"
                            value="{{ old('dbd1', $data->dbd1) }}">
                        @error('dbd1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv1') is-invalid @enderror" id="hiv1" name="hiv1"
                            value="{{ old('hiv1', $data->hiv1) }}">
                        @error('hiv1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims1') is-invalid @enderror" id="ims1" name="ims1"
                            value="{{ old('ims1', $data->ims1) }}">
                        @error('ims1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid1') is-invalid @enderror" id="covid1" name="covid1"
                            value="{{ old('covid1', $data->covid1) }}">
                        @error('covid1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya1') is-invalid @enderror" id="lainnya1"
                            name="lainnya1" value="{{ old('lainnya1', $data->lainnya1) }}">
                        @error('lainnya1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">002. Marioriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria2') is-invalid @enderror" id="malaria2"
                            name="malaria2" value="{{ old('malaria2', $data->malaria2) }}">
                        @error('malaria2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc2') is-invalid @enderror" id="tbc2" name="tbc2"
                            value="{{ old('tbc2', $data->tbc2) }}">
                        @error('tbc2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia2') is-invalid @enderror" id="pneumonia2"
                            name="pneumonia2" value="{{ old('pneumonia2', $data->pneumonia2) }}">
                        @error('pneumonia2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta2') is-invalid @enderror" id="kusta2" name="kusta2"
                            value="{{ old('kusta2', $data->kusta2) }}">
                        @error('kusta2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus2') is-invalid @enderror" id="tetanus2"
                            name="tetanus2" value="{{ old('tetanus2', $data->tetanus2) }}">
                        @error('tetanus2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak2') is-invalid @enderror" id="campak2"
                            name="campak2" value="{{ old('campak2', $data->campak2) }}">
                        @error('campak2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare2') is-invalid @enderror" id="diare2" name="diare2"
                            value="{{ old('diare2', $data->diare2) }}">
                        @error('diare2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd2') is-invalid @enderror" id="dbd2" name="dbd2"
                            value="{{ old('dbd2', $data->dbd2) }}">
                        @error('dbd2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv2') is-invalid @enderror" id="hiv2" name="hiv2"
                            value="{{ old('hiv2', $data->hiv2) }}">
                        @error('hiv2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims2') is-invalid @enderror" id="ims2" name="ims2"
                            value="{{ old('ims2', $data->ims2) }}">
                        @error('ims2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid2') is-invalid @enderror" id="covid2" name="covid2"
                            value="{{ old('covid2', $data->covid2) }}">
                        @error('covid2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya2') is-invalid @enderror" id="lainnya2"
                            name="lainnya2" value="{{ old('lainnya2', $data->lainnya2) }}">
                        @error('lainnya2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">003. Watu </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria4') is-invalid @enderror" id="malaria4"
                            name="malaria4" value="{{ old('malaria4', $data->malaria4) }}">
                        @error('malaria4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc4') is-invalid @enderror" id="tbc4" name="tbc4"
                            value="{{ old('tbc4', $data->tbc4) }}">
                        @error('tbc4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia4') is-invalid @enderror" id="pneumonia4"
                            name="pneumonia4" value="{{ old('pneumonia4', $data->pneumonia4) }}">
                        @error('pneumonia4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta4') is-invalid @enderror" id="kusta4" name="kusta4"
                            value="{{ old('kusta4', $data->kusta4) }}">
                        @error('kusta4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus4') is-invalid @enderror" id="tetanus4"
                            name="tetanus4" value="{{ old('tetanus4', $data->tetanus4) }}">
                        @error('tetanus4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak4') is-invalid @enderror" id="campak4"
                            name="campak4" value="{{ old('campak4', $data->campak4) }}">
                        @error('campak4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare4') is-invalid @enderror" id="diare4" name="diare4"
                            value="{{ old('diare4', $data->diare4) }}">
                        @error('diare4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd4') is-invalid @enderror" id="dbd4" name="dbd4"
                            value="{{ old('dbd4', $data->dbd4) }}">
                        @error('dbd4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv4') is-invalid @enderror" id="hiv4" name="hiv4"
                            value="{{ old('hiv4', $data->hiv4) }}">
                        @error('hiv4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims4') is-invalid @enderror" id="ims4" name="ims4"
                            value="{{ old('ims4', $data->ims4) }}">
                        @error('ims4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid4') is-invalid @enderror" id="covid4" name="covid4"
                            value="{{ old('covid4', $data->covid4) }}">
                        @error('covid4')
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
                </tr>
                <tr>
                    <td class="tg-cly1">004. Marioritengnga</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria4') is-invalid @enderror" id="malaria4"
                            name="malaria4" value="{{ old('malaria4', $data->malaria4) }}">
                        @error('malaria4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc4') is-invalid @enderror" id="tbc4" name="tbc4"
                            value="{{ old('tbc4', $data->tbc4) }}">
                        @error('tbc4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia4') is-invalid @enderror" id="pneumonia4"
                            name="pneumonia4" value="{{ old('pneumonia4', $data->pneumonia4) }}">
                        @error('pneumonia4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta4') is-invalid @enderror" id="kusta4" name="kusta4"
                            value="{{ old('kusta4', $data->kusta4) }}">
                        @error('kusta4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus4') is-invalid @enderror" id="tetanus4"
                            name="tetanus4" value="{{ old('tetanus4', $data->tetanus4) }}">
                        @error('tetanus4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak4') is-invalid @enderror" id="campak4"
                            name="campak4" value="{{ old('campak4', $data->campak4) }}">
                        @error('campak4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare4') is-invalid @enderror" id="diare4" name="diare4"
                            value="{{ old('diare4', $data->diare4) }}">
                        @error('diare4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd4') is-invalid @enderror" id="dbd4" name="dbd4"
                            value="{{ old('dbd4', $data->dbd4) }}">
                        @error('dbd4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv4') is-invalid @enderror" id="hiv4" name="hiv4"
                            value="{{ old('hiv4', $data->hiv4) }}">
                        @error('hiv4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims4') is-invalid @enderror" id="ims4" name="ims4"
                            value="{{ old('ims4', $data->ims4) }}">
                        @error('ims4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid4') is-invalid @enderror" id="covid4" name="covid4"
                            value="{{ old('covid4', $data->covid4) }}">
                        @error('covid4')
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
                </tr>
                <tr>
                    <td class="tg-cly1">005. Goarie</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria5') is-invalid @enderror" id="malaria5"
                            name="malaria5" value="{{ old('malaria5', $data->malaria5) }}">
                        @error('malaria5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc5') is-invalid @enderror" id="tbc5" name="tbc5"
                            value="{{ old('tbc5', $data->tbc5) }}">
                        @error('tbc5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia5') is-invalid @enderror" id="pneumonia5"
                            name="pneumonia5" value="{{ old('pneumonia5', $data->pneumonia5) }}">
                        @error('pneumonia5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta5') is-invalid @enderror" id="kusta5" name="kusta5"
                            value="{{ old('kusta5', $data->kusta5) }}">
                        @error('kusta5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus5') is-invalid @enderror" id="tetanus5"
                            name="tetanus5" value="{{ old('tetanus5', $data->tetanus5) }}">
                        @error('tetanus5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak5') is-invalid @enderror" id="campak5"
                            name="campak5" value="{{ old('campak5', $data->campak5) }}">
                        @error('campak5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare5') is-invalid @enderror" id="diare5" name="diare5"
                            value="{{ old('diare5', $data->diare5) }}">
                        @error('diare5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd5') is-invalid @enderror" id="dbd5" name="dbd5"
                            value="{{ old('dbd5', $data->dbd5) }}">
                        @error('dbd5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv5') is-invalid @enderror" id="hiv5" name="hiv5"
                            value="{{ old('hiv5', $data->hiv5) }}">
                        @error('hiv5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims5') is-invalid @enderror" id="ims5" name="ims5"
                            value="{{ old('ims5', $data->ims5) }}">
                        @error('ims5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid5') is-invalid @enderror" id="covid5" name="covid5"
                            value="{{ old('covid5', $data->covid5) }}">
                        @error('covid5')
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
                </tr>
                <tr>
                    <td class="tg-cly1">006. Barae</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria6') is-invalid @enderror" id="malaria6"
                            name="malaria6" value="{{ old('malaria6', $data->malaria6) }}">
                        @error('malaria6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc6') is-invalid @enderror" id="tbc6" name="tbc6"
                            value="{{ old('tbc6', $data->tbc6) }}">
                        @error('tbc6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia6') is-invalid @enderror" id="pneumonia6"
                            name="pneumonia6" value="{{ old('pneumonia6', $data->pneumonia6) }}">
                        @error('pneumonia6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta6') is-invalid @enderror" id="kusta6" name="kusta6"
                            value="{{ old('kusta6', $data->kusta6) }}">
                        @error('kusta6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus6') is-invalid @enderror" id="tetanus6"
                            name="tetanus6" value="{{ old('tetanus6', $data->tetanus6) }}">
                        @error('tetanus6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak6') is-invalid @enderror" id="campak6"
                            name="campak6" value="{{ old('campak6', $data->campak6) }}">
                        @error('campak6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare6') is-invalid @enderror" id="diare6" name="diare6"
                            value="{{ old('diare6', $data->diare6) }}">
                        @error('diare6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd6') is-invalid @enderror" id="dbd6" name="dbd6"
                            value="{{ old('dbd6', $data->dbd6) }}">
                        @error('dbd6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv6') is-invalid @enderror" id="hiv6" name="hiv6"
                            value="{{ old('hiv6', $data->hiv6) }}">
                        @error('hiv6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims6') is-invalid @enderror" id="ims6" name="ims6"
                            value="{{ old('ims6', $data->ims6) }}">
                        @error('ims6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid6') is-invalid @enderror" id="covid6" name="covid6"
                            value="{{ old('covid6', $data->covid6) }}">
                        @error('covid6')
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
                </tr>
                <tr>
                    <td class="tg-cly1">007. Mariorilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria7') is-invalid @enderror" id="malaria7"
                            name="malaria7" value="{{ old('malaria7', $data->malaria7) }}">
                        @error('malaria7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc7') is-invalid @enderror" id="tbc7" name="tbc7"
                            value="{{ old('tbc7', $data->tbc7) }}">
                        @error('tbc7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia7') is-invalid @enderror" id="pneumonia7"
                            name="pneumonia7" value="{{ old('pneumonia7', $data->pneumonia7) }}">
                        @error('pneumonia7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta7') is-invalid @enderror" id="kusta7" name="kusta7"
                            value="{{ old('kusta7', $data->kusta7) }}">
                        @error('kusta7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus7') is-invalid @enderror" id="tetanus7"
                            name="tetanus7" value="{{ old('tetanus7', $data->tetanus7) }}">
                        @error('tetanus7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak7') is-invalid @enderror" id="campak7"
                            name="campak7" value="{{ old('campak7', $data->campak7) }}">
                        @error('campak7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare7') is-invalid @enderror" id="diare7" name="diare7"
                            value="{{ old('diare7', $data->diare7) }}">
                        @error('diare7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd7') is-invalid @enderror" id="dbd7" name="dbd7"
                            value="{{ old('dbd7', $data->dbd7) }}">
                        @error('dbd7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv7') is-invalid @enderror" id="hiv7" name="hiv7"
                            value="{{ old('hiv7', $data->hiv7) }}">
                        @error('hiv7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims7') is-invalid @enderror" id="ims7" name="ims7"
                            value="{{ old('ims7', $data->ims7) }}">
                        @error('ims7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid7') is-invalid @enderror" id="covid7" name="covid7"
                            value="{{ old('covid7', $data->covid7) }}">
                        @error('covid7')
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
                </tr>
                <tr>
                    <td class="tg-cly1">008. Tettikenrarae</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria8') is-invalid @enderror" id="malaria8"
                            name="malaria8" value="{{ old('malaria8', $data->malaria8) }}">
                        @error('malaria8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc8') is-invalid @enderror" id="tbc8" name="tbc8"
                            value="{{ old('tbc8', $data->tbc8) }}">
                        @error('tbc8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia8') is-invalid @enderror" id="pneumonia8"
                            name="pneumonia8" value="{{ old('pneumonia8', $data->pneumonia8) }}">
                        @error('pneumonia8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta8') is-invalid @enderror" id="kusta8" name="kusta8"
                            value="{{ old('kusta8', $data->kusta8) }}">
                        @error('kusta8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus8') is-invalid @enderror" id="tetanus8"
                            name="tetanus8" value="{{ old('tetanus8', $data->tetanus8) }}">
                        @error('tetanus8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak8') is-invalid @enderror" id="campak8"
                            name="campak8" value="{{ old('campak8', $data->campak8) }}">
                        @error('campak8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare8') is-invalid @enderror" id="diare8" name="diare8"
                            value="{{ old('diare8', $data->diare8) }}">
                        @error('diare8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd8') is-invalid @enderror" id="dbd8" name="dbd8"
                            value="{{ old('dbd8', $data->dbd8) }}">
                        @error('dbd8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv8') is-invalid @enderror" id="hiv8" name="hiv8"
                            value="{{ old('hiv8', $data->hiv8) }}">
                        @error('hiv8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims8') is-invalid @enderror" id="ims8" name="ims8"
                            value="{{ old('ims8', $data->ims8) }}">
                        @error('ims8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid8') is-invalid @enderror" id="covid8" name="covid8"
                            value="{{ old('covid8', $data->covid8) }}">
                        @error('covid8')
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
                </tr>
                <tr>
                    <td class="tg-cly1">009. Labessi</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria9') is-invalid @enderror" id="malaria9"
                            name="malaria9" value="{{ old('malaria9', $data->malaria9) }}">
                        @error('malaria9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc9') is-invalid @enderror" id="tbc9" name="tbc9"
                            value="{{ old('tbc9', $data->tbc9) }}">
                        @error('tbc9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia9') is-invalid @enderror" id="pneumonia9"
                            name="pneumonia9" value="{{ old('pneumonia9', $data->pneumonia9) }}">
                        @error('pneumonia9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta9') is-invalid @enderror" id="kusta9"
                            name="kusta9" value="{{ old('kusta9', $data->kusta9) }}">
                        @error('kusta9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus9') is-invalid @enderror" id="tetanus9"
                            name="tetanus9" value="{{ old('tetanus9', $data->tetanus9) }}">
                        @error('tetanus9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak9') is-invalid @enderror" id="campak9"
                            name="campak9" value="{{ old('campak9', $data->campak9) }}">
                        @error('campak9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare9') is-invalid @enderror" id="diare9"
                            name="diare9" value="{{ old('diare9', $data->diare9) }}">
                        @error('diare9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd9') is-invalid @enderror" id="dbd9" name="dbd9"
                            value="{{ old('dbd9', $data->dbd9) }}">
                        @error('dbd9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv9') is-invalid @enderror" id="hiv9" name="hiv9"
                            value="{{ old('hiv9', $data->hiv9) }}">
                        @error('hiv9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims9') is-invalid @enderror" id="ims9" name="ims9"
                            value="{{ old('ims9', $data->ims9) }}">
                        @error('ims9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid9') is-invalid @enderror" id="covid9"
                            name="covid9" value="{{ old('covid9', $data->covid9) }}">
                        @error('covid9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya9') is-invalid @enderror" id="lainnya9"
                            name="lainnya9" value="{{ old('lainnya9', $data->lainnya9) }}">
                        @error('lainnya9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Congko</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria10') is-invalid @enderror" id="malaria10"
                            name="malaria10" value="{{ old('malaria10', $data->malaria10) }}">
                        @error('malaria10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc10') is-invalid @enderror" id="tbc10" name="tbc10"
                            value="{{ old('tbc10', $data->tbc10) }}">
                        @error('tbc10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia10') is-invalid @enderror" id="pneumonia10"
                            name="pneumonia10" value="{{ old('pneumonia10', $data->pneumonia10) }}">
                        @error('pneumonia10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta10') is-invalid @enderror" id="kusta10"
                            name="kusta10" value="{{ old('kusta10', $data->kusta10) }}">
                        @error('kusta10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus10') is-invalid @enderror" id="tetanus10"
                            name="tetanus10" value="{{ old('tetanus10', $data->tetanus10) }}">
                        @error('tetanus10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak10') is-invalid @enderror" id="campak10"
                            name="campak10" value="{{ old('campak10', $data->campak10) }}">
                        @error('campak10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare10') is-invalid @enderror" id="diare10"
                            name="diare10" value="{{ old('diare10', $data->diare10) }}">
                        @error('diare10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd10') is-invalid @enderror" id="dbd10" name="dbd10"
                            value="{{ old('dbd10', $data->dbd10) }}">
                        @error('dbd10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv10') is-invalid @enderror" id="hiv10" name="hiv10"
                            value="{{ old('hiv10', $data->hiv10) }}">
                        @error('hiv10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims10') is-invalid @enderror" id="ims10" name="ims10"
                            value="{{ old('ims10', $data->ims10) }}">
                        @error('ims10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid10') is-invalid @enderror" id="covid10"
                            name="covid10" value="{{ old('covid10', $data->covid10) }}">
                        @error('covid10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya10') is-invalid @enderror" id="lainnya10"
                            name="lainnya10" value="{{ old('lainnya10', $data->lainnya10) }}">
                        @error('lainnya10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">011. Watu Toa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria11') is-invalid @enderror" id="malaria11"
                            name="malaria11" value="{{ old('malaria11', $data->malaria11) }}">
                        @error('malaria11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc11') is-invalid @enderror" id="tbc11" name="tbc11"
                            value="{{ old('tbc11', $data->tbc11) }}">
                        @error('tbc11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia11') is-invalid @enderror" id="pneumonia11"
                            name="pneumonia11" value="{{ old('pneumonia11', $data->pneumonia11) }}">
                        @error('pneumonia11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta11') is-invalid @enderror" id="kusta11"
                            name="kusta11" value="{{ old('kusta11', $data->kusta11) }}">
                        @error('kusta11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus11') is-invalid @enderror" id="tetanus11"
                            name="tetanus11" value="{{ old('tetanus11', $data->tetanus11) }}">
                        @error('tetanus11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak11') is-invalid @enderror" id="campak11"
                            name="campak11" value="{{ old('campak11', $data->campak11) }}">
                        @error('campak11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare11') is-invalid @enderror" id="diare11"
                            name="diare11" value="{{ old('diare11', $data->diare11) }}">
                        @error('diare11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd11') is-invalid @enderror" id="dbd11" name="dbd11"
                            value="{{ old('dbd11', $data->dbd11) }}">
                        @error('dbd11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv11') is-invalid @enderror" id="hiv11" name="hiv11"
                            value="{{ old('hiv11', $data->hiv11) }}">
                        @error('hiv11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims11') is-invalid @enderror" id="ims11"
                            name="ims11" value="{{ old('ims11', $data->ims11) }}">
                        @error('ims11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid11') is-invalid @enderror" id="covid11"
                            name="covid11" value="{{ old('covid11', $data->covid11) }}">
                        @error('covid11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya11') is-invalid @enderror" id="lainnya11"
                            name="lainnya11" value="{{ old('lainnya11', $data->lainnya11) }}">
                        @error('lainnya11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">012. Gattareng Toa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria12') is-invalid @enderror" id="malaria12"
                            name="malaria12" value="{{ old('malaria12', $data->malaria12) }}">
                        @error('malaria12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc12') is-invalid @enderror" id="tbc12"
                            name="tbc12" value="{{ old('tbc12', $data->tbc12) }}">
                        @error('tbc12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia12') is-invalid @enderror" id="pneumonia12"
                            name="pneumonia12" value="{{ old('pneumonia12', $data->pneumonia12) }}">
                        @error('pneumonia12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta12') is-invalid @enderror" id="kusta12"
                            name="kusta12" value="{{ old('kusta12', $data->kusta12) }}">
                        @error('kusta12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus12') is-invalid @enderror" id="tetanus12"
                            name="tetanus12" value="{{ old('tetanus12', $data->tetanus12) }}">
                        @error('tetanus12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak12') is-invalid @enderror" id="campak12"
                            name="campak12" value="{{ old('campak12', $data->campak12) }}">
                        @error('campak12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare12') is-invalid @enderror" id="diare12"
                            name="diare12" value="{{ old('diare12', $data->diare12) }}">
                        @error('diare12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd12') is-invalid @enderror" id="dbd12"
                            name="dbd12" value="{{ old('dbd12', $data->dbd12) }}">
                        @error('dbd12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv12') is-invalid @enderror" id="hiv12"
                            name="hiv12" value="{{ old('hiv12', $data->hiv12) }}">
                        @error('hiv12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims12') is-invalid @enderror" id="ims12"
                            name="ims12" value="{{ old('ims12', $data->ims12) }}">
                        @error('ims12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid12') is-invalid @enderror" id="covid12"
                            name="covid12" value="{{ old('covid12', $data->covid12) }}">
                        @error('covid12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya12') is-invalid @enderror" id="lainnya12"
                            name="lainnya12" value="{{ old('lainnya12', $data->lainnya12) }}">
                        @error('lainnya12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">013. Soga</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('malaria13') is-invalid @enderror" id="malaria13"
                            name="malaria13" value="{{ old('malaria13', $data->malaria13) }}">
                        @error('malaria13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbc13') is-invalid @enderror" id="tbc13"
                            name="tbc13" value="{{ old('tbc13', $data->tbc13) }}">
                        @error('tbc13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumonia13') is-invalid @enderror" id="pneumonia13"
                            name="pneumonia13" value="{{ old('pneumonia13', $data->pneumonia13) }}">
                        @error('pneumonia13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kusta13') is-invalid @enderror" id="kusta13"
                            name="kusta13" value="{{ old('kusta13', $data->kusta13) }}">
                        @error('kusta13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanus13') is-invalid @enderror" id="tetanus13"
                            name="tetanus13" value="{{ old('tetanus13', $data->tetanus13) }}">
                        @error('tetanus13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campak13') is-invalid @enderror" id="campak13"
                            name="campak13" value="{{ old('campak13', $data->campak13) }}">
                        @error('campak13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diare13') is-invalid @enderror" id="diare13"
                            name="diare13" value="{{ old('diare13', $data->diare13) }}">
                        @error('diare13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbd13') is-invalid @enderror" id="dbd13"
                            name="dbd13" value="{{ old('dbd13', $data->dbd13) }}">
                        @error('dbd13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hiv13') is-invalid @enderror" id="hiv13"
                            name="hiv13" value="{{ old('hiv13', $data->hiv13) }}">
                        @error('hiv13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ims13') is-invalid @enderror" id="ims13"
                            name="ims13" value="{{ old('ims13', $data->ims13) }}">
                        @error('ims13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covid13') is-invalid @enderror" id="covid13"
                            name="covid13" value="{{ old('covid13', $data->covid13) }}">
                        @error('covid13')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('lainnya13') is-invalid @enderror" id="lainnya13"
                            name="lainnya13" value="{{ old('lainnya13', $data->lainnya13) }}">
                        @error('lainnya13')
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
                            class="form-control @error('malariat') is-invalid @enderror" id="malariat"
                            name="malariat" value="{{ old('malariat', $data->malariat) }}">
                        @error('malariat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tbct') is-invalid @enderror" id="tbct"
                            name="tbct" value="{{ old('tbct', $data->tbct) }}">
                        @error('tbct')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pneumoniat') is-invalid @enderror" id="pneumoniat"
                            name="pneumoniat" value="{{ old('pneumoniat', $data->pneumoniat) }}">
                        @error('pneumoniat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('kustat') is-invalid @enderror" id="kustat"
                            name="kustat" value="{{ old('kustat', $data->kustat) }}">
                        @error('kustat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tetanust') is-invalid @enderror" id="tetanust"
                            name="tetanust" value="{{ old('tetanust', $data->tetanust) }}">
                        @error('tetanust')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('campakt') is-invalid @enderror" id="campakt"
                            name="campakt" value="{{ old('campakt', $data->campakt) }}">
                        @error('campakt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('diaret') is-invalid @enderror" id="diaret"
                            name="diaret" value="{{ old('diaret', $data->diaret) }}">
                        @error('diaret')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('dbdt') is-invalid @enderror" id="dbdt"
                            name="dbdt" value="{{ old('dbdt', $data->dbdt) }}">
                        @error('dbdt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('hivt') is-invalid @enderror" id="hivt"
                            name="hivt" value="{{ old('hivt', $data->hivt) }}">
                        @error('hivt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('imst') is-invalid @enderror" id="imst"
                            name="imst" value="{{ old('imst', $data->imst) }}">
                        @error('imst')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('covidt') is-invalid @enderror" id="covidt"
                            name="covidt" value="{{ old('covidt', $data->covidt) }}">
                        @error('covidt')
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
                <th class="tg-amwm" rowspan="2">4.2.16</th>
                <th class="tg-wa1i" colspan="12"><span style="font-weight:bold">Banyaknya Kasus Penyakit Menurut
                        Kecamatan dan Jenis Penyakit di Kabupaten Soppeng, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="12"><span style="font-weight:bold;font-style:italic">Number of
                        Cases
                        of Disease by Subdistrict and Type of Disease in Soppeng Regency, {{ $data->tahun }}</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-iuam"><span style="background-color:#0F0">MARIORIWAWO</span></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Desa/Kelurahan</td>
                <td class="tg-nrix">Malaria</td>
                <td class="tg-nrix">Tuberkulosis/</td>
                <td class="tg-nrix">Pneumonia</td>
                <td class="tg-nrix">Kusta</td>
                <td class="tg-nrix">Tetanus</td>
                <td class="tg-nrix">Campak</td>
                <td class="tg-nrix">Diare</td>
                <td class="tg-nrix">Demam Derdarah</td>
                <td class="tg-nrix">HIV-AIDS</td>
                <td class="tg-nrix">Infeksi Menular Seksual/</td>
                <td class="tg-nrix">Terkonfirmasi COVID19</td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">Isikan jika ada jenis lain</span></td>
                <td class="tg-lec9"><span style="background-color:#D7F3CB">Isikan jika ada jenis lain</span></td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Villages/Urban Villages</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Malaria</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Tuberculosis</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Pneumonia</span></td>
                <td class="tg-lhti"><span style="font-style:italic">leprous</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Tetanus</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Measles</span></td>
                <td class="tg-lhti"><span style="font-style:italic">/Diarrhea</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Dengue Fever</span></td>
                <td class="tg-lhti"><span style="font-style:italic">HIV-AIDS</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Sexually Trans-mitted Infection</span></td>
                <td class="tg-lhti"></td>
                <td class="tg-lhti"></td>
                <td class="tg-lhti"></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
                <td class="tg-nrix">(7)</td>
                <td class="tg-nrix">(8)</td>
                <td class="tg-nrix">(9)</td>
                <td class="tg-nrix">(10)</td>
                <td class="tg-nrix">(11)</td>
                <td class="tg-nrix">(12)</td>
                <td class="tg-nrix">(13)</td>
                <td class="tg-nrix">(14)</td>
            </tr>
            <tr>
                <td class="tg-cly1">001. Gattareng</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">16</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">24</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">002. Marioriaja</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">16</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">35</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">003. Watu </td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">25</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">13</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">004. Marioritengnga</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">35</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">17</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">005. Goarie</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">18</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">9</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">006. Barae</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">007. Mariorilau</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">19</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">008. Tettikenrarae</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">30</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">103</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">009. Labessi</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">16</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">51</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Congko</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">13</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">17</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">011. Watu Toa</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">18</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">012. Gattareng Toa</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">11</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">14</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-cly1">013. Soga</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">0</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-l6sh"></td>
                <td class="tg-l6sh"></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">14</td>
                <td class="tg-mwxe">6</td>
                <td class="tg-mwxe">7</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">220</td>
                <td class="tg-mwxe">8</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">308</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
