@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-bobw"><span style="font-weight:bold">`</span></th>
                    <th class="tg-amwm" rowspan="2">4.5.13</th>
                    <th class="tg-bobw" colspan="8"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}</span></th>
                </tr>
                <tr>
                    <th class="tg-ijet"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-ijet" colspan="8"><span
                            style="font-weight:bold;font-style:italic">{{ $judultabelen }}, {{ $data->tahun }}</span>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-8d8j">Kecamatan/ Subdistrict</td>
                    <td class="tg-8d8j">Anak balita/anak/lanjut usia/ Toddler/child/elder</td>
                    <td class="tg-8d8j">Anak yang berhadapan dengan hukum/membutuhkan perlindungan khusus/ Children
                        dealing with law/ need a special protection</td>
                    <td class="tg-8d8j">Bekas warga binaan/ Former inmate</td>
                    <td class="tg-8d8j">Keluarga bermasalah sosial psikologis / Family Psychological problems</td>
                    <td class="tg-7zrl">Korban penyalah-gunaan NAPZA/ Victims of drug abuse</td>
                    <td class="tg-8d8j">Fakir Miskin/ The Poor</td>
                    <td class="tg-8d8j">Pemulung/ Scavenger</td>
                    <td class="tg-8d8j">Pekerja migran bermasalah sosial/ Migrant workers with social problems</td>
                    <td class="tg-8d8j">Perempuan rawan sosial ekonomi/ Woman with Socio eco-nomic vulnerable problems
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">(1)</td>
                    <td class="tg-8d8j">(2)</td>
                    <td class="tg-8d8j">(3)</td>
                    <td class="tg-8d8j">(4)</td>
                    <td class="tg-8d8j">(5)</td>
                    <td class="tg-8d8j">(6)</td>
                    <td class="tg-8d8j">(7)</td>
                    <td class="tg-8d8j">(8)</td>
                    <td class="tg-8d8j">(9)</td>
                    <td class="tg-8d8j">(10)</td>
                </tr>
                <tr>
                    <td class="tg-7zrl">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('child1') is-invalid @enderror"
                            id="child1" name="child1" value="{{ old('child1', $data->child1) }}">
                        @error('child1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection1') is-invalid @enderror" id="protection1"
                            name="protection1" value="{{ old('protection1', $data->protection1) }}">
                        @error('protection1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate1') is-invalid @enderror" id="inmate1" name="inmate1"
                            value="{{ old('inmate1', $data->inmate1) }}">
                        @error('inmate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho1') is-invalid @enderror" id="psycho1" name="psycho1"
                            value="{{ old('psycho1', $data->psycho1) }}">
                        @error('psycho1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse1') is-invalid @enderror" id="drug_abuse1"
                            name="drug_abuse1" value="{{ old('drug_abuse1', $data->drug_abuse1) }}">
                        @error('drug_abuse1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('poor1') is-invalid @enderror"
                            id="poor1" name="poor1" value="{{ old('poor1', $data->poor1) }}">
                        @error('poor1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger1') is-invalid @enderror" id="scavenger1"
                            name="scavenger1" value="{{ old('scavenger1', $data->scavenger1) }}">
                        @error('scavenger1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant1') is-invalid @enderror" id="migrant1" name="migrant1"
                            value="{{ old('migrant1', $data->migrant1) }}">
                        @error('migrant1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable1') is-invalid @enderror" id="vulnerable1"
                            name="vulnerable1" value="{{ old('vulnerable1', $data->vulnerable1) }}">
                        @error('vulnerable1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child2') is-invalid @enderror" id="child2" name="child2"
                            value="{{ old('child2', $data->child2) }}">
                        @error('child2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection2') is-invalid @enderror" id="protection2"
                            name="protection2" value="{{ old('protection2', $data->protection2) }}">
                        @error('protection2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate2') is-invalid @enderror" id="inmate2"
                            name="inmate2" value="{{ old('inmate2', $data->inmate2) }}">
                        @error('inmate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho2') is-invalid @enderror" id="psycho2"
                            name="psycho2" value="{{ old('psycho2', $data->psycho2) }}">
                        @error('psycho2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse2') is-invalid @enderror" id="drug_abuse2"
                            name="drug_abuse2" value="{{ old('drug_abuse2', $data->drug_abuse2) }}">
                        @error('drug_abuse2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor2') is-invalid @enderror" id="poor2" name="poor2"
                            value="{{ old('poor2', $data->poor2) }}">
                        @error('poor2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger2') is-invalid @enderror" id="scavenger2"
                            name="scavenger2" value="{{ old('scavenger2', $data->scavenger2) }}">
                        @error('scavenger2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant2') is-invalid @enderror" id="migrant2"
                            name="migrant2" value="{{ old('migrant2', $data->migrant2) }}">
                        @error('migrant2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable2') is-invalid @enderror" id="vulnerable2"
                            name="vulnerable2" value="{{ old('vulnerable2', $data->vulnerable2) }}">
                        @error('vulnerable2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child3') is-invalid @enderror" id="child3" name="child3"
                            value="{{ old('child3', $data->child3) }}">
                        @error('child3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection3') is-invalid @enderror" id="protection3"
                            name="protection3" value="{{ old('protection3', $data->protection3) }}">
                        @error('protection3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate3') is-invalid @enderror" id="inmate3"
                            name="inmate3" value="{{ old('inmate3', $data->inmate3) }}">
                        @error('inmate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho3') is-invalid @enderror" id="psycho3"
                            name="psycho3" value="{{ old('psycho3', $data->psycho3) }}">
                        @error('psycho3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse3') is-invalid @enderror" id="drug_abuse3"
                            name="drug_abuse3" value="{{ old('drug_abuse3', $data->drug_abuse3) }}">
                        @error('drug_abuse3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor3') is-invalid @enderror" id="poor3" name="poor3"
                            value="{{ old('poor3', $data->poor3) }}">
                        @error('poor3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger3') is-invalid @enderror" id="scavenger3"
                            name="scavenger3" value="{{ old('scavenger3', $data->scavenger3) }}">
                        @error('scavenger3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant3') is-invalid @enderror" id="migrant3"
                            name="migrant3" value="{{ old('migrant3', $data->migrant3) }}">
                        @error('migrant3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable3') is-invalid @enderror" id="vulnerable3"
                            name="vulnerable3" value="{{ old('vulnerable3', $data->vulnerable3) }}">
                        @error('vulnerable3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child4') is-invalid @enderror" id="child4" name="child4"
                            value="{{ old('child4', $data->child4) }}">
                        @error('child4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection4') is-invalid @enderror" id="protection4"
                            name="protection4" value="{{ old('protection4', $data->protection4) }}">
                        @error('protection4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate4') is-invalid @enderror" id="inmate4"
                            name="inmate4" value="{{ old('inmate4', $data->inmate4) }}">
                        @error('inmate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho4') is-invalid @enderror" id="psycho4"
                            name="psycho4" value="{{ old('psycho4', $data->psycho4) }}">
                        @error('psycho4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse4') is-invalid @enderror" id="drug_abuse4"
                            name="drug_abuse4" value="{{ old('drug_abuse4', $data->drug_abuse4) }}">
                        @error('drug_abuse4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor4') is-invalid @enderror" id="poor4" name="poor4"
                            value="{{ old('poor4', $data->poor4) }}">
                        @error('poor4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger4') is-invalid @enderror" id="scavenger4"
                            name="scavenger4" value="{{ old('scavenger4', $data->scavenger4) }}">
                        @error('scavenger4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant4') is-invalid @enderror" id="migrant4"
                            name="migrant4" value="{{ old('migrant4', $data->migrant4) }}">
                        @error('migrant4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable4') is-invalid @enderror" id="vulnerable4"
                            name="vulnerable4" value="{{ old('vulnerable4', $data->vulnerable4) }}">
                        @error('vulnerable4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child5') is-invalid @enderror" id="child5" name="child5"
                            value="{{ old('child5', $data->child5) }}">
                        @error('child5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection5') is-invalid @enderror" id="protection5"
                            name="protection5" value="{{ old('protection5', $data->protection5) }}">
                        @error('protection5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate5') is-invalid @enderror" id="inmate5"
                            name="inmate5" value="{{ old('inmate5', $data->inmate5) }}">
                        @error('inmate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho5') is-invalid @enderror" id="psycho5"
                            name="psycho5" value="{{ old('psycho5', $data->psycho5) }}">
                        @error('psycho5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse5') is-invalid @enderror" id="drug_abuse5"
                            name="drug_abuse5" value="{{ old('drug_abuse5', $data->drug_abuse5) }}">
                        @error('drug_abuse5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor5') is-invalid @enderror" id="poor5" name="poor5"
                            value="{{ old('poor5', $data->poor5) }}">
                        @error('poor5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger5') is-invalid @enderror" id="scavenger5"
                            name="scavenger5" value="{{ old('scavenger5', $data->scavenger5) }}">
                        @error('scavenger5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant5') is-invalid @enderror" id="migrant5"
                            name="migrant5" value="{{ old('migrant5', $data->migrant5) }}">
                        @error('migrant5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable5') is-invalid @enderror" id="vulnerable5"
                            name="vulnerable5" value="{{ old('vulnerable5', $data->vulnerable5) }}">
                        @error('vulnerable5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child6') is-invalid @enderror" id="child6" name="child6"
                            value="{{ old('child6', $data->child6) }}">
                        @error('child6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection6') is-invalid @enderror" id="protection6"
                            name="protection6" value="{{ old('protection6', $data->protection6) }}">
                        @error('protection6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate6') is-invalid @enderror" id="inmate6"
                            name="inmate6" value="{{ old('inmate6', $data->inmate6) }}">
                        @error('inmate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho6') is-invalid @enderror" id="psycho6"
                            name="psycho6" value="{{ old('psycho6', $data->psycho6) }}">
                        @error('psycho6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse6') is-invalid @enderror" id="drug_abuse6"
                            name="drug_abuse6" value="{{ old('drug_abuse6', $data->drug_abuse6) }}">
                        @error('drug_abuse6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor6') is-invalid @enderror" id="poor6" name="poor6"
                            value="{{ old('poor6', $data->poor6) }}">
                        @error('poor6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger6') is-invalid @enderror" id="scavenger6"
                            name="scavenger6" value="{{ old('scavenger6', $data->scavenger6) }}">
                        @error('scavenger6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant6') is-invalid @enderror" id="migrant6"
                            name="migrant6" value="{{ old('migrant6', $data->migrant6) }}">
                        @error('migrant6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable6') is-invalid @enderror" id="vulnerable6"
                            name="vulnerable6" value="{{ old('vulnerable6', $data->vulnerable6) }}">
                        @error('vulnerable6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child7') is-invalid @enderror" id="child7" name="child7"
                            value="{{ old('child7', $data->child7) }}">
                        @error('child7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection7') is-invalid @enderror" id="protection7"
                            name="protection7" value="{{ old('protection7', $data->protection7) }}">
                        @error('protection7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate7') is-invalid @enderror" id="inmate7"
                            name="inmate7" value="{{ old('inmate7', $data->inmate7) }}">
                        @error('inmate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho7') is-invalid @enderror" id="psycho7"
                            name="psycho7" value="{{ old('psycho7', $data->psycho7) }}">
                        @error('psycho7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse7') is-invalid @enderror" id="drug_abuse7"
                            name="drug_abuse7" value="{{ old('drug_abuse7', $data->drug_abuse7) }}">
                        @error('drug_abuse7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor7') is-invalid @enderror" id="poor7" name="poor7"
                            value="{{ old('poor7', $data->poor7) }}">
                        @error('poor7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger7') is-invalid @enderror" id="scavenger7"
                            name="scavenger7" value="{{ old('scavenger7', $data->scavenger7) }}">
                        @error('scavenger7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant7') is-invalid @enderror" id="migrant7"
                            name="migrant7" value="{{ old('migrant7', $data->migrant7) }}">
                        @error('migrant7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable7') is-invalid @enderror" id="vulnerable7"
                            name="vulnerable7" value="{{ old('vulnerable7', $data->vulnerable7) }}">
                        @error('vulnerable7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-7zrl">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('child8') is-invalid @enderror" id="child8" name="child8"
                            value="{{ old('child8', $data->child8) }}">
                        @error('child8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protection8') is-invalid @enderror" id="protection8"
                            name="protection8" value="{{ old('protection8', $data->protection8) }}">
                        @error('protection8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmate8') is-invalid @enderror" id="inmate8"
                            name="inmate8" value="{{ old('inmate8', $data->inmate8) }}">
                        @error('inmate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psycho8') is-invalid @enderror" id="psycho8"
                            name="psycho8" value="{{ old('psycho8', $data->psycho8) }}">
                        @error('psycho8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuse8') is-invalid @enderror" id="drug_abuse8"
                            name="drug_abuse8" value="{{ old('drug_abuse8', $data->drug_abuse8) }}">
                        @error('drug_abuse8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poor8') is-invalid @enderror" id="poor8" name="poor8"
                            value="{{ old('poor8', $data->poor8) }}">
                        @error('poor8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavenger8') is-invalid @enderror" id="scavenger8"
                            name="scavenger8" value="{{ old('scavenger8', $data->scavenger8) }}">
                        @error('scavenger8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrant8') is-invalid @enderror" id="migrant8"
                            name="migrant8" value="{{ old('migrant8', $data->migrant8) }}">
                        @error('migrant8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerable8') is-invalid @enderror" id="vulnerable8"
                            name="vulnerable8" value="{{ old('vulnerable8', $data->vulnerable8) }}">
                        @error('vulnerable8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-8d8j">Jumlah/Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('childt') is-invalid @enderror" id="childt" name="childt"
                            value="{{ old('childt', $data->childt) }}">
                        @error('childt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('protectiont') is-invalid @enderror" id="protectiont"
                            name="protectiont" value="{{ old('protectiont', $data->protectiont) }}">
                        @error('protectiont')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('inmatet') is-invalid @enderror" id="inmatet"
                            name="inmatet" value="{{ old('inmatet', $data->inmatet) }}">
                        @error('inmatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('psychot') is-invalid @enderror" id="psychot"
                            name="psychot" value="{{ old('psychot', $data->psychot) }}">
                        @error('psychot')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('drug_abuset') is-invalid @enderror" id="drug_abuset"
                            name="drug_abuset" value="{{ old('drug_abuset', $data->drug_abuset) }}">
                        @error('drug_abuset')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('poort') is-invalid @enderror" id="poort" name="poort"
                            value="{{ old('poort', $data->poort) }}">
                        @error('poort')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('scavengert') is-invalid @enderror" id="scavengert"
                            name="scavengert" value="{{ old('scavengert', $data->scavengert) }}">
                        @error('scavengert')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('migrantt') is-invalid @enderror" id="migrantt"
                            name="migrantt" value="{{ old('migrantt', $data->migrantt) }}">
                        @error('migrantt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('vulnerablet') is-invalid @enderror" id="vulnerablet"
                            name="vulnerablet" value="{{ old('vulnerablet', $data->vulnerablet) }}">
                        @error('vulnerablet')
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
                <th class="tg-bobw"><span style="font-weight:bold">`</span></th>
                <th class="tg-amwm" rowspan="2">4.5.13</th>
                <th class="tg-bobw" colspan="8"><span style="font-weight:bold">Banyaknya Penyandang Kesejahteraan
                        Sosial Menurut Kecamatan di Kabupaten Soppeng, 2021</span></th>
            </tr>
            <tr>
                <th class="tg-ijet"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-ijet" colspan="8"><span style="font-weight:bold;font-style:italic">Number of People
                        with Welfare Disability by Subdistrict in Soppeng Regency, 2021</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
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
                <td class="tg-8d8j">Kecamatan/Subdistrict</td>
                <td class="tg-8d8j">Anak balita/anak/lanjut usia/ Toddler/child/elder</td>
                <td class="tg-8d8j">Anak yang berhadapan dengan hukum/membutuhkan perlindungan khusus/ Children dealing
                    with law/ need a special protection</td>
                <td class="tg-8d8j">Bekas warga binaan/Former inmate</td>
                <td class="tg-8d8j">Keluarga bermasalah sosial psikologis /Family Psychological problems</td>
                <td class="tg-7zrl">Korban penyalah-gunaan NAPZA/ Victims of drug abuse</td>
                <td class="tg-8d8j">Fakir Miskin/The Poor</td>
                <td class="tg-8d8j">Pemulung/Scavenger</td>
                <td class="tg-8d8j">Pekerja migran bermasalah sosial/Migrant workers with social problems</td>
                <td class="tg-8d8j">Perempuan rawan sosial ekonomi/Wo-man with Socio eco-nomic vulnerable problems</td>
            </tr>
            <tr>
                <td class="tg-8d8j">(1)</td>
                <td class="tg-8d8j">(2)</td>
                <td class="tg-8d8j">(3)</td>
                <td class="tg-8d8j">(4)</td>
                <td class="tg-8d8j">(5)</td>
                <td class="tg-8d8j">(6)</td>
                <td class="tg-8d8j">(7)</td>
                <td class="tg-8d8j">(8)</td>
                <td class="tg-8d8j">(9)</td>
                <td class="tg-8d8j">(10)</td>
            </tr>
            <tr>
                <td class="tg-7zrl">010. Marioriwawo</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">3 239 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">9 781 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 1 </span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">020. Lalabata</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2 047 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 1 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">7 386 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">030. Liliriaja</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2 172 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">5 929 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">031. Ganra</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 617 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 1 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2 445 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">032. Citta</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 614 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1 451 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">040. Lilirilau</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2 550 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 5 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">7 004 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">050. Donri-Donri</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1 682 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 2 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">4 910 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-7zrl">060. Marioriawa</td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">2 235 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB"> 1 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">6 452 </span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-8d8j">Jumlah/Total</td>
                <td class="tg-2b7s">15 156 </td>
                <td class="tg-2b7s"> 16 </td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">45 357 </td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s">-</td>
                <td class="tg-2b7s"> 1 </td>
            </tr>
        </tbody>
    </table>

@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.038_Sosial.script_038015')
@endsection
