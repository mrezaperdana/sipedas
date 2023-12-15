<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">2.2.3</th>
                        <th colspan="4">{{ $judultabel }}, {{ $data->tahun }}
                        </th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="4">{{ $judultabelen }}, {{ $data->tahun }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">Nama Komisi/Commition Name</td>
                        <td colspan="5">Jabatan/Position</td>
                    </tr>
                    <tr>
                        <td>Ketua/Chairman</td>
                        <td>Wakil/Vice-chairman</td>
                        <td>Sekretaris/Secretary</td>
                        <td>Anggota/Member</td>
                        <td>Jumlah/Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>(5)</td>
                        <td>(6)</td>
                    </tr>
                    <tr>
                        <td>Pimpinan/Leader</td>

                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('chairman1') is-invalid @enderror" id="chairman1"
                                name="chairman1" value="{{ old('chairman1', $data->chairman1) }}">
                            @error('chairman1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('vice1') is-invalid @enderror" id="vice1" name="vice1"
                                value="{{ old('vice1', $data->vice1) }}">
                            @error('vice1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('secretary1') is-invalid @enderror" id="secretary1"
                                name="secretary1" value="{{ old('secretary1', $data->secretary1) }}">
                            @error('secretary1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('member1') is-invalid @enderror" id="member1"
                                name="member1" value="{{ old('member1', $data->member1) }}">
                            @error('member1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total1') is-invalid @enderror" id="total1" name="total1"
                                value="{{ old('total1', $data->total1) }}">
                            @error('total1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Komisi&nbsp;&nbsp;1/Commition 1</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('chairman2') is-invalid @enderror" id="chairman2"
                                name="chairman2" value="{{ old('chairman2', $data->chairman2) }}">
                            @error('chairman2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('vice2') is-invalid @enderror" id="vice2" name="vice2"
                                value="{{ old('vice2', $data->vice2) }}">
                            @error('vice2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('secretary2') is-invalid @enderror" id="secretary2"
                                name="secretary2" value="{{ old('secretary2', $data->secretary2) }}">
                            @error('secretary2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('member2') is-invalid @enderror" id="member2"
                                name="member2" value="{{ old('member2', $data->member2) }}">
                            @error('member2')
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
                        <td>Komisi&nbsp;&nbsp;2/Commition 2</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('chairman3') is-invalid @enderror" id="chairman3"
                                name="chairman3" value="{{ old('chairman3', $data->chairman3) }}">
                            @error('chairman3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('vice3') is-invalid @enderror" id="vice3" name="vice3"
                                value="{{ old('vice3', $data->vice3) }}">
                            @error('vice3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('secretary3') is-invalid @enderror" id="secretary3"
                                name="secretary3" value="{{ old('secretary3', $data->secretary3) }}">
                            @error('secretary3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('member3') is-invalid @enderror" id="member3"
                                name="member3" value="{{ old('member3', $data->member3) }}">
                            @error('member3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total3') is-invalid @enderror" id="total3"
                                name="total3" value="{{ old('total3', $data->total3) }}">
                            @error('total3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Komisi&nbsp;&nbsp;3/Commition 3</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('chairman4') is-invalid @enderror" id="chairman4"
                                name="chairman4" value="{{ old('chairman4', $data->chairman4) }}">
                            @error('chairman4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('vice4') is-invalid @enderror" id="vice4"
                                name="vice4" value="{{ old('vice4', $data->vice4) }}">
                            @error('vice4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('secretary4') is-invalid @enderror" id="secretary4"
                                name="secretary4" value="{{ old('secretary4', $data->secretary4) }}">
                            @error('secretary4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('member4') is-invalid @enderror" id="member4"
                                name="member4" value="{{ old('member4', $data->member4) }}">
                            @error('member4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('total4') is-invalid @enderror" id="total4"
                                name="total4" value="{{ old('total4', $data->total4) }}">
                            @error('total4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('chairmant') is-invalid @enderror" id="chairmant"
                                name="chairmant" value="{{ old('chairmant', $data->chairmant) }}">
                            @error('chairmant')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('vicet') is-invalid @enderror" id="vicet"
                                name="vicet" value="{{ old('vicet', $data->vicet) }}">
                            @error('vicet')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('secretaryt') is-invalid @enderror" id="secretaryt"
                                name="secretaryt" value="{{ old('secretaryt', $data->secretaryt) }}">
                            @error('secretaryt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('membert') is-invalid @enderror" id="membert"
                                name="membert" value="{{ old('membert', $data->membert) }}">
                            @error('membert')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td class="tg-cly1"><input type="text"
                                class="form-control @error('totalt') is-invalid @enderror" id="totalt"
                                name="totalt" value="{{ old('totalt', $data->totalt) }}">
                            @error('totalt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @else
        <x-slot name="tabel2">
            {{-- //tabel 2 disini --}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">2.2.3</th>
                        <th colspan="4">Komposisi Jabatan Anggota DPRD Menurut Nama Komisi di Kabupaten Soppeng,
                            2021
                        </th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="4">Compotition of Regional Parliaments Members Position by Commission
                            Name&nbsp;&nbsp;in Soppeng Regency, 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">Nama Komisi/Commition Name</td>
                        <td colspan="5">Jabatan/Position</td>
                    </tr>
                    <tr>
                        <td>Ketua/Chairman</td>
                        <td>Wakil/Vice-chairman</td>
                        <td>Sekretaris/Secretary</td>
                        <td>Anggota/Member</td>
                        <td>Jumlah/Total</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>(5)</td>
                        <td>(6)</td>
                    </tr>
                    <tr>
                        <td>Pimpinan/Leader</td>
                        <td>1</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Komisi&nbsp;&nbsp;1/Commition 1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>6</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Komisi&nbsp;&nbsp;2/Commition 2</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>6</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Komisi&nbsp;&nbsp;3/Commition 3</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>6</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td>4</td>
                        <td>5</td>
                        <td>3</td>
                        <td>18</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.027_DPRD.script4')
    </x-slot>
</x-tabel-entri-view>
