@if (!empty($data))

    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                    <th class="tg-amwm" rowspan="2">5.6.1</th>
                    <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">Luas Area Penangkapan Ikan Menurut
                            Kecamatan dan Lokasi Penangkapan di Kabupaten Soppeng, 2021 (Hektar)</span></th>
                </tr>
                <tr>
                    <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Area of Fishing
                            by
                            Subdistrict and Location of Fishinig in Soppeng Regency, 2021 (Hectare)</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-cly1"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                    <td class="tg-7zrl"></td>
                </tr>
                <tr>
                    <td class="tg-nrix">Kecamatan/</td>
                    <td class="tg-nrix">Danau/</td>
                    <td class="tg-nrix">Sungai/</td>
                    <td class="tg-nrix">Rawa/</td>
                    <td class="tg-nrix">Jumlah/</td>
                </tr>
                <tr>
                    <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Lake</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">River</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Swamp</span></td>
                    <td class="tg-lhti"><span style="font-style:italic">Total</span></td>
                </tr>
                <tr>
                    <td class="tg-nrix">(1)</td>
                    <td class="tg-nrix">(2)</td>
                    <td class="tg-nrix">(3)</td>
                    <td class="tg-nrix">(4)</td>
                    <td class="tg-nrix">(5)</td>
                </tr>
                <tr>
                    <td class="tg-cly1">010. Marioriwawo</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB"> 320 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe"> 320 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">020. Lalabata</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe">-</td>
                </tr>
                <tr>
                    <td class="tg-cly1">030. Liliriaja</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB"> 256 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe"> 256 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">031. Ganra</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB"> 216 </span></td>
                    <td class="tg-mwxe"> 216 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">032. Citta</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe">-</td>
                </tr>
                <tr>
                    <td class="tg-cly1">040. Lilirilau</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB"> 64 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe"> 64 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">050. Donri-Donri</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB"> 101 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe"> 101 </td>
                </tr>
                <tr>
                    <td class="tg-cly1">060. Marioriawa</td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">2 099 </span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                    <td class="tg-mwxe">2 099 </td>
                </tr>
                <tr>
                    <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-mwxe">2 200 </td>
                    <td class="tg-mwxe"> 640 </td>
                    <td class="tg-mwxe"> 216 </td>
                    <td class="tg-mwxe">3 056 </td>
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
                <th class="tg-wa1i"><span style="font-weight:bold">Tabel</span></th>
                <th class="tg-amwm" rowspan="2">5.6.1</th>
                <th class="tg-wa1i" colspan="3"><span style="font-weight:bold">Luas Area Penangkapan Ikan Menurut
                        Kecamatan dan Lokasi Penangkapan di Kabupaten Soppeng, 2021 (Hektar)</span></th>
            </tr>
            <tr>
                <th class="tg-xxp7"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-xxp7" colspan="3"><span style="font-weight:bold;font-style:italic">Area of Fishing
                        by
                        Subdistrict and Location of Fishinig in Soppeng Regency, 2021 (Hectare)</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-cly1"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
                <td class="tg-7zrl"></td>
            </tr>
            <tr>
                <td class="tg-nrix">Kecamatan/</td>
                <td class="tg-nrix">Danau/</td>
                <td class="tg-nrix">Sungai/</td>
                <td class="tg-nrix">Rawa/</td>
                <td class="tg-nrix">Jumlah/</td>
            </tr>
            <tr>
                <td class="tg-lhti"><span style="font-style:italic">Subdistrict</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Lake</span></td>
                <td class="tg-lhti"><span style="font-style:italic">River</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Swamp</span></td>
                <td class="tg-lhti"><span style="font-style:italic">Total</span></td>
            </tr>
            <tr>
                <td class="tg-nrix">(1)</td>
                <td class="tg-nrix">(2)</td>
                <td class="tg-nrix">(3)</td>
                <td class="tg-nrix">(4)</td>
                <td class="tg-nrix">(5)</td>
            </tr>
            <tr>
                <td class="tg-cly1">010. Marioriwawo</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> 320 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe"> 320 </td>
            </tr>
            <tr>
                <td class="tg-cly1">020. Lalabata</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe">-</td>
            </tr>
            <tr>
                <td class="tg-cly1">030. Liliriaja</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> 256 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe"> 256 </td>
            </tr>
            <tr>
                <td class="tg-cly1">031. Ganra</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> 216 </span></td>
                <td class="tg-mwxe"> 216 </td>
            </tr>
            <tr>
                <td class="tg-cly1">032. Citta</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe">-</td>
            </tr>
            <tr>
                <td class="tg-cly1">040. Lilirilau</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> 64 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe"> 64 </td>
            </tr>
            <tr>
                <td class="tg-cly1">050. Donri-Donri</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB"> 101 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe"> 101 </td>
            </tr>
            <tr>
                <td class="tg-cly1">060. Marioriawa</td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">2 099 </span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-iygw"><span style="background-color:#D7F3CB">-</span></td>
                <td class="tg-mwxe">2 099 </td>
            </tr>
            <tr>
                <td class="tg-baqh"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-mwxe">2 200 </td>
                <td class="tg-mwxe"> 640 </td>
                <td class="tg-mwxe"> 216 </td>
                <td class="tg-mwxe">3 056 </td>
            </tr>
        </tbody>
    </table>

@endif
