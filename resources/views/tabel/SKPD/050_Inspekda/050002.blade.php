@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p> {{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-wa1i"><span style="font-weight:bold">Jumlah Obyek Pemeriksaan berdasarkan NON PPKT
                            menurut Jenis Sasaran, 2021</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></td>
                    <td class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Number of&nbsp;&nbsp;Non Annual
                            Supervision Work Program Inspection Object by Kind of Target, 2021</span></td>
                </tr>

                <tr>
                    <td class="tg-amwm"><span style="font-weight:bold;font-style:normal;color:#000">Uraian /
                        </span><span style="font-weight:bold;font-style:italic;color:#000">Description</span></td>
                    <td class="tg-nrix">2021 </td>
                </tr>
                <tr>
                    <td class="tg-wa1i"><span style="font-weight:bold">(1)</span></td>
                    <td class="tg-wa1i"><span style="font-weight:bold">(2)</span></td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pengaduan Masyarakat yang Diajukan
                            kepada BKDH Kabupaten Soppeng / </span><span style="font-style:italic;color:#000">Community
                            Complaints Filed with BKDH Soppeng Regency</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('obyek1') is-invalid @enderror"
                            id="obyek1" name="obyek1" value="{{ old('obyek1', $data->obyek1) }}">
                        @error('obyek1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pengaduan Melalui Tromol Pos 5000 /
                        </span><span style="font-style:italic;color:#000">Accusation Pass PO BOX 5000</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('obyek2') is-invalid @enderror"
                            id="obyek2" name="obyek2" value="{{ old('obyek2', $data->obyek2) }}">
                        @error('obyek2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Pelanggaran Disiplin Pegawai /
                        </span><span style="font-style:italic;color:#000">Transgression Civil Servant</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('obyek3') is-invalid @enderror"
                            id="obyek3" name="obyek3" value="{{ old('obyek3', $data->obyek3) }}">
                        @error('obyek3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Peng1an Pejabat dalam Lingkungan
                            Pemerintah Daerah / </span><span style="font-style:italic;color:#000">Employee Subtitute in
                            Regency Goverment</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('obyek4') is-invalid @enderror"
                            id="obyek4" name="obyek4" value="{{ old('obyek4', $data->obyek4) }}">
                        @error('obyek4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal;color:#000">Proyek Inpres Daerah Kab. Soppeng /
                        </span><span style="font-style:italic;color:#000">Soppeng Regency Regional Inpres Project</span>
                    </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('obyek5') is-invalid @enderror"
                            id="obyek5" name="obyek5" value="{{ old('obyek5', $data->obyek5) }}">
                        @error('obyek5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-0lax"><span style="font-style:normal">Jumlah/</span><span
                            style="font-style:italic">Total</span></td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('obyekt') is-invalid @enderror"
                            id="obyekt" name="obyekt" value="{{ old('obyekt', $data->obyekt) }}">
                        @error('obyekt')
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
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumObyeks() {
            var obyekElements = document.querySelectorAll('[id^="obyek"]');
            var obyekSum = 0;
            for (var i = 0; i < obyekElements.length; i++) {
                if (obyekElements[i].id !== "obyekt") {
                    var obyekValue = parseFloat(obyekElements[i].value) || 0;
                    obyekSum += obyekValue;
                }
            }
            document.getElementById('obyekt').value = obyekSum;
        }

        var obyekInputs = document.querySelectorAll('[id^="obyek"]');
        for (var i = 0; i < obyekInputs.length; i++) {
            obyekInputs[i].addEventListener('focusout', sumObyeks);
        }
    </script>
@endsection
