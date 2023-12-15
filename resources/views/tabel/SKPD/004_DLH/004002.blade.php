<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tabel 4.3.10</th>
                        <th>Daftar Nama dan Alamat Taman Kota di Kabupaten Soppeng, 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Table 4.3.10</td>
                        <td>List of Name and Addreses of City Parks in Soppeng Regency, 2021</td>
                    </tr>

                    <tr>
                        <td>Taman/ Park</td>
                        <td>Alamat/ Address</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                    </tr>
                    <tr>
                        <td>Taman Bunga Laburawung</td>
                        <td>sebelah Utara Stadion H. A. Wana</td>
                    </tr>
                    <tr>
                        <td>Taman Tugu BNI</td>
                        <td>Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman Lamumpatue (Bank SulSelBar)</td>
                        <td>Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman SalassaE</td>
                        <td>Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman Villa Yuliana</td>
                        <td>Jl. Pengayoman</td>
                    </tr>
                    <tr>
                        <td>Taman Kalong</td>
                        <td>Jl. Merdeka/Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman Tugu Adipura</td>
                        <td>Jl. Pemuda</td>
                    </tr>
                    <tr>
                        <td>Taman BNI</td>
                        <td>Jl. Kalino</td>
                    </tr>
                    <tr>
                        <td>Taman Anggrek</td>
                        <td>Jl. Kemakmuran</td>
                    </tr>
                    <tr>
                        <td>Taman Sutra</td>
                        <td>Jl. Kemakmuran</td>
                    </tr>
                    <tr>
                        <td>Taman Dare' Bunga-BungaE</td>
                        <td>Pajalesang, Kec. Lilirilau</td>
                    </tr>
                    <tr>
                        <td>Taman Tugu Arung Palakka</td>
                        <td>Tettikenrarae, Kec. Marioriwawo</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga Batu-batu</td>
                        <td>Batu-batu, Kec. Marioriawa</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga dekat KUA Liliriaja</td>
                        <td>Cangadi, Kec. Liliriaja</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga Salaonro</td>
                        <td>Kel. Ujung, Kec. Lilirilau</td>
                    </tr>
                    <tr>
                        <td>Taman Waduk Ompo</td>
                        <td>Ompo</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga Depan Kelurahan Botto</td>
                        <td>Jl. Kayangan</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga (Taman Gula Merah)</td>
                        <td>Jl. Harun Sewo</td>
                    </tr>
                    <tr>
                        <td>Isikan jika masih ada yang lain</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Isikan jika masih ada yang lain</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @else
        <x-slot name="tabel2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tabel 4.3.10</th>
                        <th>Daftar Nama dan Alamat Taman Kota di Kabupaten Soppeng, 2021</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Table 4.3.10</td>
                        <td>List of Name and Addreses of City Parks in Soppeng Regency, 2021</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Taman/</td>
                        <td>Alamat/</td>
                    </tr>
                    <tr>
                        <td>The Park</td>
                        <td>Address</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                    </tr>
                    <tr>
                        <td>Taman Bunga Laburawung</td>
                        <td>sebelah Utara Stadion H. A. Wana</td>
                    </tr>
                    <tr>
                        <td>Taman Tugu BNI</td>
                        <td>Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman Lamumpatue (Bank SulSelBar)</td>
                        <td>Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman SalassaE</td>
                        <td>Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman Villa Yuliana</td>
                        <td>Jl. Pengayoman</td>
                    </tr>
                    <tr>
                        <td>Taman Kalong</td>
                        <td>Jl. Merdeka/Jl. Lamumpatu'e</td>
                    </tr>
                    <tr>
                        <td>Taman Tugu Adipura</td>
                        <td>Jl. Pemuda</td>
                    </tr>
                    <tr>
                        <td>Taman BNI</td>
                        <td>Jl. Kalino</td>
                    </tr>
                    <tr>
                        <td>Taman Anggrek</td>
                        <td>Jl. Kemakmuran</td>
                    </tr>
                    <tr>
                        <td>Taman Sutra</td>
                        <td>Jl. Kemakmuran</td>
                    </tr>
                    <tr>
                        <td>Taman Dare' Bunga-BungaE</td>
                        <td>Pajalesang, Kec. Lilirilau</td>
                    </tr>
                    <tr>
                        <td>Taman Tugu Arung Palakka</td>
                        <td>Tettikenrarae, Kec. Marioriwawo</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga Batu-batu</td>
                        <td>Batu-batu, Kec. Marioriawa</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga dekat KUA Liliriaja</td>
                        <td>Cangadi, Kec. Liliriaja</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga Salaonro</td>
                        <td>Kel. Ujung, Kec. Lilirilau</td>
                    </tr>
                    <tr>
                        <td>Taman Waduk Ompo</td>
                        <td>Ompo</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga Depan Kelurahan Botto</td>
                        <td>Jl. Kayangan</td>
                    </tr>
                    <tr>
                        <td>Taman Segitiga (Taman Gula Merah)</td>
                        <td>Jl. Harun Sewo</td>
                    </tr>
                    <tr>
                        <td>Isikan jika masih ada yang lain</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Isikan jika masih ada yang lain</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    @endif
    <x-slot name="script">
        @include('tabel.skpd.023_DPMDes.script2')

    </x-slot>
</x-tabel-entri-view>
