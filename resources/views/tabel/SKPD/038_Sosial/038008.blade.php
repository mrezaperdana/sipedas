@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">4.22</th>
                    <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">{{ $judultabel }},
                            {{ $data->tahun }}</span></th>
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
                    <td class="tg-cly1">001. Pajalesang</td>

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
                    <td class="tg-cly1">002. Cabenge</td>

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
                    <td class="tg-cly1">003. Paroto</td>

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
                    <td class="tg-cly1">004. Palangiseng</td>

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
                    <td class="tg-cly1">005. Tetewatu</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind5') is-invalid @enderror" id="blind5" name="blind5"
                            value="{{ old('blind5', $data->blind5) }}">
                        @error('blind5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf5') is-invalid @enderror" id="deaf5" name="deaf5"
                            value="{{ old('deaf5', $data->deaf5) }}">
                        @error('deaf5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled5') is-invalid @enderror"
                            id="mentally_disabled5" name="mentally_disabled5"
                            value="{{ old('mentally_disabled5', $data->mentally_disabled5) }}">
                        @error('mentally_disabled5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled5') is-invalid @enderror" id="disabled5"
                            name="disabled5" value="{{ old('disabled5', $data->disabled5) }}">
                        @error('disabled5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability5') is-invalid @enderror"
                            id="multiple_dissability5" name="multiple_dissability5"
                            value="{{ old('multiple_dissability5', $data->multiple_dissability5) }}">
                        @error('multiple_dissability5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">006. Abbanuange</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind6') is-invalid @enderror" id="blind6" name="blind6"
                            value="{{ old('blind6', $data->blind6) }}">
                        @error('blind6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf6') is-invalid @enderror" id="deaf6" name="deaf6"
                            value="{{ old('deaf6', $data->deaf6) }}">
                        @error('deaf6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled6') is-invalid @enderror"
                            id="mentally_disabled6" name="mentally_disabled6"
                            value="{{ old('mentally_disabled6', $data->mentally_disabled6) }}">
                        @error('mentally_disabled6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled6') is-invalid @enderror" id="disabled6"
                            name="disabled6" value="{{ old('disabled6', $data->disabled6) }}">
                        @error('disabled6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability6') is-invalid @enderror"
                            id="multiple_dissability6" name="multiple_dissability6"
                            value="{{ old('multiple_dissability6', $data->multiple_dissability6) }}">
                        @error('multiple_dissability6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">007. Parenring</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind7') is-invalid @enderror" id="blind7" name="blind7"
                            value="{{ old('blind7', $data->blind7) }}">
                        @error('blind7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf7') is-invalid @enderror" id="deaf7" name="deaf7"
                            value="{{ old('deaf7', $data->deaf7) }}">
                        @error('deaf7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled7') is-invalid @enderror"
                            id="mentally_disabled7" name="mentally_disabled7"
                            value="{{ old('mentally_disabled7', $data->mentally_disabled7) }}">
                        @error('mentally_disabled7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled7') is-invalid @enderror" id="disabled7"
                            name="disabled7" value="{{ old('disabled7', $data->disabled7) }}">
                        @error('disabled7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability7') is-invalid @enderror"
                            id="multiple_dissability7" name="multiple_dissability7"
                            value="{{ old('multiple_dissability7', $data->multiple_dissability7) }}">
                        @error('multiple_dissability7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">008. Ujung</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind8') is-invalid @enderror" id="blind8" name="blind8"
                            value="{{ old('blind8', $data->blind8) }}">
                        @error('blind8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf8') is-invalid @enderror" id="deaf8" name="deaf8"
                            value="{{ old('deaf8', $data->deaf8) }}">
                        @error('deaf8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled8') is-invalid @enderror"
                            id="mentally_disabled8" name="mentally_disabled8"
                            value="{{ old('mentally_disabled8', $data->mentally_disabled8) }}">
                        @error('mentally_disabled8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled8') is-invalid @enderror" id="disabled8"
                            name="disabled8" value="{{ old('disabled8', $data->disabled8) }}">
                        @error('disabled8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability8') is-invalid @enderror"
                            id="multiple_dissability8" name="multiple_dissability8"
                            value="{{ old('multiple_dissability8', $data->multiple_dissability8) }}">
                        @error('multiple_dissability8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">009. Masing</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind9') is-invalid @enderror" id="blind9" name="blind9"
                            value="{{ old('blind9', $data->blind9) }}">
                        @error('blind9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf9') is-invalid @enderror" id="deaf9" name="deaf9"
                            value="{{ old('deaf9', $data->deaf9) }}">
                        @error('deaf9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled9') is-invalid @enderror"
                            id="mentally_disabled9" name="mentally_disabled9"
                            value="{{ old('mentally_disabled9', $data->mentally_disabled9) }}">
                        @error('mentally_disabled9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled9') is-invalid @enderror" id="disabled9"
                            name="disabled9" value="{{ old('disabled9', $data->disabled9) }}">
                        @error('disabled9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability9') is-invalid @enderror"
                            id="multiple_dissability9" name="multiple_dissability9"
                            value="{{ old('multiple_dissability9', $data->multiple_dissability9) }}">
                        @error('multiple_dissability9')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Baringeng</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind10') is-invalid @enderror" id="blind10"
                            name="blind10" value="{{ old('blind10', $data->blind10) }}">
                        @error('blind10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf10') is-invalid @enderror" id="deaf10" name="deaf10"
                            value="{{ old('deaf10', $data->deaf10) }}">
                        @error('deaf10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled10') is-invalid @enderror"
                            id="mentally_disabled10" name="mentally_disabled10"
                            value="{{ old('mentally_disabled10', $data->mentally_disabled10) }}">
                        @error('mentally_disabled10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled10') is-invalid @enderror" id="disabled10"
                            name="disabled10" value="{{ old('disabled10', $data->disabled10) }}">
                        @error('disabled10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability10') is-invalid @enderror"
                            id="multiple_dissability10" name="multiple_dissability10"
                            value="{{ old('multiple_dissability10', $data->multiple_dissability10) }}">
                        @error('multiple_dissability10')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">011. Kebo</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind11') is-invalid @enderror" id="blind11"
                            name="blind11" value="{{ old('blind11', $data->blind11) }}">
                        @error('blind11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf11') is-invalid @enderror" id="deaf11" name="deaf11"
                            value="{{ old('deaf11', $data->deaf11) }}">
                        @error('deaf11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled11') is-invalid @enderror"
                            id="mentally_disabled11" name="mentally_disabled11"
                            value="{{ old('mentally_disabled11', $data->mentally_disabled11) }}">
                        @error('mentally_disabled11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled11') is-invalid @enderror" id="disabled11"
                            name="disabled11" value="{{ old('disabled11', $data->disabled11) }}">
                        @error('disabled11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability11') is-invalid @enderror"
                            id="multiple_dissability11" name="multiple_dissability11"
                            value="{{ old('multiple_dissability11', $data->multiple_dissability11) }}">
                        @error('multiple_dissability11')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-cly1">012. Macanre</td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('blind12') is-invalid @enderror" id="blind12"
                            name="blind12" value="{{ old('blind12', $data->blind12) }}">
                        @error('blind12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('deaf12') is-invalid @enderror" id="deaf12" name="deaf12"
                            value="{{ old('deaf12', $data->deaf12) }}">
                        @error('deaf12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mentally_disabled12') is-invalid @enderror"
                            id="mentally_disabled12" name="mentally_disabled12"
                            value="{{ old('mentally_disabled12', $data->mentally_disabled12) }}">
                        @error('mentally_disabled12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('disabled12') is-invalid @enderror" id="disabled12"
                            name="disabled12" value="{{ old('disabled12', $data->disabled12) }}">
                        @error('disabled12')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('multiple_dissability12') is-invalid @enderror"
                            id="multiple_dissability12" name="multiple_dissability12"
                            value="{{ old('multiple_dissability12', $data->multiple_dissability12) }}">
                        @error('multiple_dissability12')
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
                <th class="tg-amwm" rowspan="2">4.22</th>
                <th class="tg-wa1i" colspan="4"><span style="font-weight:bold">Banyaknya Penyandang Cacat Menurut
                        Desa/Kelurahan dan Jenis Cacat di Kecamatan Lilirilau, {{ $data->tahun }}</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="4"><span style="font-weight:bold;font-style:italic">Number of People
                        with Disabilities by Villages/Urban Villages and Type of Disability in Lilirilau Subdistrict,
                        {{ $data->tahun }}</span></th>
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
                <td class="tg-nrix">(5)</td>
                <td class="tg-nrix">(6)</td>
            </tr>
            <tr>
                <td class="tg-cly1">001. Pajalesang</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">002. Cabenge</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">003. Paroto</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">004. Palangiseng</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">5</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">005. Tetewatu</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">006. Abbanuange</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">007. Parenring</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">13</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">008. Ujung</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">009. Masing</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Baringeng</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">7</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">6</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">4</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">10</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">011. Kebo</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-ycra"><span style="background-color:#D7F3CB">1</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">012. Macanre</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">13</span></td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">28</td>
                <td class="tg-mwxe">20</td>
                <td class="tg-mwxe">16</td>
                <td class="tg-mwxe">78</td>
                <td class="tg-mwxe">3</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.038_Sosial.script')
@endsection
