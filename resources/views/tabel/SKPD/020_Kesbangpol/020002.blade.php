@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-o139" colspan="8">B. PEMERINTAH DAERAH (PEMDA)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-54sw" colspan="2" rowspan="3">3</td>
                    <td class="tg-r1fi" colspan="3">Jumlah organisasi kemasyarakatan&nbsp;&nbsp;&nbsp;(Ormas)/lembaga
                        swadaya masyarakat (LSM) yang terdaftar di Bakesbangpol</td>
                    <td class="tg-54sw" colspan="3">2022</td>
                </tr>
                <tr>
                    <td class="tg-r1fi" colspan="3">a. Mendaftar Tahun Ini</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mendaftar1') is-invalid @enderror" id="mendaftar1"
                            name="mendaftar1" value="{{ old('mendaftar1', $data->mendaftar1) }}">
                        @error('mendaftar1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="tg-r1fi" colspan="3">b. Total terdaftar</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mendaftart') is-invalid @enderror" id="mendaftart"
                            name="mendaftart" value="{{ old('mendaftart', $data->mendaftart) }}">
                        @error('mendaftart')
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
                <th class="tg-o139" colspan="8">B. PEMERINTAH DAERAH (PEMDA)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-54sw" colspan="2" rowspan="3">3</td>
                <td class="tg-r1fi" colspan="3">Jumlah organisasi kemasyarakatan&nbsp;&nbsp;&nbsp;(Ormas)/lembaga
                    swadaya masyarakat (LSM) yang terdaftar di Bakesbangpol</td>
                <td class="tg-54sw" colspan="3">2022</td>
            </tr>
            <tr>
                <td class="tg-r1fi" colspan="3">a. Mendaftar Tahun Ini</td>
                <td class="tg-54sw" colspan="3">…………….</td>
            </tr>
            <tr>
                <td class="tg-r1fi" colspan="3">b. Total terdaftar</td>
                <td class="tg-54sw" colspan="3">…………….</td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">2.2.5</th>
                <th class="tg-yla0" colspan="16"><span style="font-weight:bold">Jumlah Organisasi Politik dan
                        Organisasi Masyarakat menurut Kecamatan di Kabupaten Soppeng, 2017-2021</span></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-sn55" colspan="16"><span style="font-weight:bold;font-style:italic">Number of
                        Political Organizations and Community Organizations by Subdistrict in Soppeng Regency,
                        2017-2021</span></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
                <th class="tg-7zrl"></th>
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
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="3">Kecamatan/</td>
                <td class="tg-baqh" colspan="5" rowspan="3">Organisasi politik</td>
                <td class="tg-nrix" colspan="15">Organisasi Masyarakat/</td>
            </tr>
            <tr>
                <td class="tg-lhti" colspan="15"><span style="font-style:italic">Community Organization</span></td>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="5">Lembaga Swadaya Masyarakat</td>
                <td class="tg-nrix" colspan="5">Yayasan</td>
                <td class="tg-nrix" colspan="5">Lembaga</td>
            </tr>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
                <td class="tg-nrix">2017</td>
                <td class="tg-nrix">2018</td>
                <td class="tg-nrix">2019</td>
                <td class="tg-nrix">2020</td>
                <td class="tg-nrix">2021</td>
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
                <td class="tg-nrix">(15)</td>
                <td class="tg-nrix">(16)</td>
                <td class="tg-nrix">(17)</td>
                <td class="tg-nrix">(18)</td>
                <td class="tg-nrix">(19)</td>
                <td class="tg-nrix">(20)</td>
                <td class="tg-nrix">(21)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">1</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">6</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-mwxe">12</td>
                <td class="tg-mwxe">14</td>
                <td class="tg-mwxe">14</td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">16</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-cly1">1</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">3</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">1</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">30</td>
                <td class="tg-cly1">30</td>
                <td class="tg-mwxe">12</td>
                <td class="tg-2b7s">2</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">5</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">2</td>
                <td class="tg-cly1">2</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">1</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">2</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">1</td>
                <td class="tg-mwxe">8</td>
                <td class="tg-2b7s">1</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">1</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">7</td>
                <td class="tg-2b7s">0</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-mwxe">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">0</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">1</span></td>
                <td class="tg-cly1">-</td>
                <td class="tg-cly1">-</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-2b7s">1</td>
                <td class="tg-l6sh"><span style="background-color:#D7F3CB">-</span></td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">12</td>
                <td class="tg-mwxe">16</td>
                <td class="tg-mwxe">16</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">17</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">0</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">1</td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">5</td>
                <td class="tg-mwxe">6</td>
                <td class="tg-mwxe">2</td>
                <td class="tg-mwxe">3</td>
                <td class="tg-mwxe">30</td>
                <td class="tg-mwxe">32</td>
                <td class="tg-mwxe">42</td>
                <td class="tg-mwxe">4</td>
                <td class="tg-mwxe">0</td>
            </tr>
        </tbody>
    </table>
@endsection
