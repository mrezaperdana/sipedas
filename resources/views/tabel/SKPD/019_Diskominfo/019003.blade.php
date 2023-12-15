@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Tabel</th>
                    <th rowspan="2">10.2.9</th>
                    <th>Jumlah Media menurut Jenis dan Induk Organisasi di Kabupaten Soppeng, 2021</th>
                </tr>
                <tr>
                    <th>Table</th>
                    <th>Number of Media by Type and Parent Organization in Soppeng Regency, 2021</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td rowspan="2"> Induk Organisasi/ Parent Organization</td>
                    <td colspan="2">Jenis Media/ Type of Media</td>
                </tr>
                <tr>

                    <td>Media Cetak/ Print Media</td>
                    <td>Media Online/ Online Media</td>
                </tr>
                <tr>
                    <td>(1)</td>
                    <td>(2)</td>
                    <td>(3)</td>
                </tr>
                <tr>
                    <td>Persatuan Wartawan Soppeng</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('cetak1') is-invalid @enderror"
                            id="cetak1" name="cetak1" value="{{ old('cetak1', $data->cetak1) }}">
                        @error('cetak1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('online1') is-invalid @enderror" id="online1" name="online1"
                            value="{{ old('online1', $data->online1) }}">
                        @error('online1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Ikatan Jurnalis Soppeng&nbsp;&nbsp;(IJS)</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('cetak2') is-invalid @enderror"
                            id="cetak2" name="cetak2" value="{{ old('cetak2', $data->cetak2) }}">
                        @error('cetak2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('online2') is-invalid @enderror" id="online2" name="online2"
                            value="{{ old('online2', $data->online2) }}">
                        @error('online2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Ikatan Wartawan Online (IWO) </td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('cetak3') is-invalid @enderror"
                            id="cetak3" name="cetak3" value="{{ old('cetak3', $data->cetak3) }}">
                        @error('cetak3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('online3') is-invalid @enderror" id="online3" name="online3"
                            value="{{ old('online3', $data->online3) }}">
                        @error('online3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Lain-lain</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('cetak4') is-invalid @enderror"
                            id="cetak4" name="cetak4" value="{{ old('cetak4', $data->cetak4) }}">
                        @error('cetak4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('online4') is-invalid @enderror" id="online4" name="online4"
                            value="{{ old('online4', $data->online4) }}">
                        @error('online4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Jumlah/Total</td>
                    <td class="tg-cly1"><input type="text" class="form-control @error('cetakt') is-invalid @enderror"
                            id="cetakt" name="cetakt" value="{{ old('cetakt', $data->cetakt) }}">
                        @error('cetakt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('onlinet') is-invalid @enderror" id="onlinet" name="onlinet"
                            value="{{ old('onlinet', $data->onlinet) }}">
                        @error('onlinet')
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
    <table>
        <thead>
            <tr>
                <th>Tabel</th>
                <th rowspan="2">10.2.9</th>
                <th>Jumlah Media menurut Jenis dan Induk Organisasi di Kabupaten Soppeng, 2021</th>
            </tr>
            <tr>
                <th>Table</th>
                <th>Number of Media by Type and Parent Organization in Soppeng Regency, 2021</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Induk Organisasi/ Parent Organization</td>
                <td>Jenis Media/ Type of Media</td>
            </tr>
            <tr>
                <td></td>
                <td>Media Cetak/ Print Media</td>
                <td>Media Online/ Online Media</td>
            </tr>
            <tr>
                <td>(1)</td>
                <td>(3)</td>
            </tr>
            <tr>
                <td>Persatuan Wartawan Soppeng</td>
                <td>18</td>
            </tr>
            <tr>
                <td>Ikatan Jurnalis Soppeng&nbsp;&nbsp;(IJS)</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Ikatan Wartawan Online (IWO) </td>
                <td>11</td>
            </tr>
            <tr>
                <td>Lain-lain</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Jumlah/Total</td>
                <td>55</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <script>
        function sumOnlines() {
            var onlineElements = document.querySelectorAll('[id^="online"]');
            var onlineSum = 0;
            for (var i = 0; i < onlineElements.length; i++) {
                if (onlineElements[i].id !== "onlinet") {
                    var onlineValue = parseFloat(onlineElements[i].value) || 0;
                    onlineSum += onlineValue;
                }
            }
            document.getElementById('onlinet').value = onlineSum;
        }

        var onlineInputs = document.querySelectorAll('[id^="online"]');
        for (var i = 0; i < onlineInputs.length; i++) {
            onlineInputs[i].addEventListener('focusout', sumOnlines);
        }
    </script>
    <script>
        function sumCetaks() {
            var cetakElements = document.querySelectorAll('[id^="cetak"]');
            var cetakSum = 0;
            for (var i = 0; i < cetakElements.length; i++) {
                if (cetakElements[i].id !== "cetakt") {
                    var cetakValue = parseFloat(cetakElements[i].value) || 0;
                    cetakSum += cetakValue;
                }
            }
            document.getElementById('cetakt').value = cetakSum;
        }

        var cetakInputs = document.querySelectorAll('[id^="cetak"]');
        for (var i = 0; i < cetakInputs.length; i++) {
            cetakInputs[i].addEventListener('focusout', sumCetaks);
        }
    </script>
@endsection
