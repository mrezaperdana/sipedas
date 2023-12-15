@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="tg-uzvj"><span style="font-weight:bold"></th>
                    <th class="tg-7btt" rowspan="2">5.3.1</th>
                    <th class="tg-uzvj" colspan="10"><span style="font-weight:bold">Luas Areal Tanaman Perkebunan
                            Menurut Kecamatan dan Jenis Tanaman di Kabupaten Soppeng (ha), 2021</span></th>
                    <th class="tg-za14"></th>
                    <th class="tg-za14"></th>
                    <th class="tg-za14"></th>
                </tr>
                <tr>
                    <th class="tg-t6k2"><span style="font-weight:bold;font-style:italic">Table</span></th>
                    <th class="tg-t6k2" colspan="10"><span style="font-weight:bold;font-style:italic">Planted Area of
                            Estate Crops by Subdistrict and Type of Crops in Soppeng Regency (ha),2021</span></th>
                    <th class="tg-za14"></th>
                    <th class="tg-za14"></th>
                    <th class="tg-za14"></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="tg-9wq8">Kecamatan/</td>
                    <td class="tg-9wq8">Kelapa Sawit/</td>
                    <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Kelapa Hibrida/
                        </span><span style="font-style:italic;color:#000">Hybrid Coconut</span></td>
                    <td class="tg-9wq8">Kelapa Dalam/</td>
                    <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Karet/ </span><span
                            style="font-style:italic;color:#000">Rubber</span></td>
                    <td class="tg-9wq8">Kopi/</td>
                    <td class="tg-9wq8">Kakao/</td>
                    <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Tebu/ </span><span
                            style="font-style:italic;color:#000">Sugar Cane</span></td>
                    <td class="tg-9wq8">Teh/</td>
                    <td class="tg-9wq8">Tembakau/</td>
                    <td class="tg-9wq8">Cengkeh/</td>
                    <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Lada/ </span><span
                            style="font-style:italic;color:#000">Pepper</span></td>
                    <td class="tg-9wq8">Aren/</td>
                    <td class="tg-9wq8">Jambu Mete/</td>
                    <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Kemiri/ </span><span
                            style="font-style:italic;color:#000">Candlenut</span></td>
                </tr>
                <tr>
                    <td class="tg-vrnj"><span style="font-style:italic">Subdistrict</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Oil Palm</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Coconut</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Coffee</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Cocoa</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Tea</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Tobacco</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Clove</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Sugar Palm</span></td>
                    <td class="tg-vrnj"><span style="font-style:italic">Cashew</span></td>
                </tr>
                <tr>
                    <td class="tg-9wq8">(1)</td>
                    <td class="tg-9wq8">(2)</td>
                    <td class="tg-9wq8">(3)</td>
                    <td class="tg-9wq8">(4)</td>
                    <td class="tg-9wq8">(5)</td>
                    <td class="tg-9wq8">(6)</td>
                    <td class="tg-9wq8">(7)</td>
                    <td class="tg-9wq8">(8)</td>
                    <td class="tg-9wq8">(9)</td>
                    <td class="tg-9wq8">(10)</td>
                    <td class="tg-9wq8">(11)</td>
                    <td class="tg-9wq8">(12)</td>
                    <td class="tg-9wq8">(13)</td>
                    <td class="tg-9wq8">(14)</td>
                    <td class="tg-9wq8">(15)</td>
                </tr>
                <tr>
                    <td class="tg-lboi">010. Marioriwawo</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 44.65 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 524.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 126.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB">5 000.93 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 10.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 127.95 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 31.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 834.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 571.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">020. Lalabata</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 22.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 220.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 125.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 335.35 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 254.75 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 30.50 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 78.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 72.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 505.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">030. Liliriaja</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 15.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 388.42 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 606.26 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 4.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 20.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 18.58 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 9.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 2.12 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 33.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">031. Ganra</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 8.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 16.80 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 98.49 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">032. Citta</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 12.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 376.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 16.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB">1 125.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 48.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 37.04 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 8.80 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 8.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 244.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 369.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">040. Lilirilau</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 65.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 875.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 6.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB">2 703.19 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 155.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.34 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 27.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB">2 103.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 198.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">050. Donri-Donri</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 81.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 398.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 349.11 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 24.50 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 5.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 12.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 41.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 311.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-lboi">060. Marioriawa</td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 25.38 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 74.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 957.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 21.13 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 517.23 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 65.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 4.25 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 26.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 480.00 </span></td>
                    <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 488.00 </span></td>
                </tr>
                <tr>
                    <td class="tg-c3ow"><span style="font-style:normal;color:#000">Jumlah/</span><span
                            style="font-style:italic;color:#000">Total</span></td>
                    <td class="tg-yz93"> 40.38 </td>
                    <td class="tg-yz93"> 320.65 </td>
                    <td class="tg-yz93">3 755.22 </td>
                    <td class="tg-yz93"> 0.00 </td>
                    <td class="tg-yz93"> 322.13 </td>
                    <td class="tg-yz93">10 735.56 </td>
                    <td class="tg-yz93"> 0.00 </td>
                    <td class="tg-yz93"> 0.00 </td>
                    <td class="tg-yz93"> 207.00 </td>
                    <td class="tg-yz93"> 411.29 </td>
                    <td class="tg-yz93"> 209.42 </td>
                    <td class="tg-yz93"> 191.00 </td>
                    <td class="tg-yz93">3 776.12 </td>
                    <td class="tg-yz93">2 475.00 </td>
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
                <th class="tg-uzvj"><span style="font-weight:bold"> </th>
                <th class="tg-7btt" rowspan="2">5.3.1</th>
                <th class="tg-uzvj" colspan="10"><span style="font-weight:bold">Luas Areal Tanaman Perkebunan
                        Menurut Kecamatan dan Jenis Tanaman di Kabupaten Soppeng (ha), 2021</span></th>
                <th class="tg-za14"></th>
                <th class="tg-za14"></th>
                <th class="tg-za14"></th>
            </tr>
            <tr>
                <th class="tg-t6k2"><span style="font-weight:bold;font-style:italic">Table</span></th>
                <th class="tg-t6k2" colspan="10"><span style="font-weight:bold;font-style:italic">Planted Area of
                        Estate Crops by Subdistrict and Type of Crops in Soppeng Regency (ha),2021</span></th>
                <th class="tg-za14"></th>
                <th class="tg-za14"></th>
                <th class="tg-za14"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
                <td class="tg-za14"></td>
            </tr>
            <tr>
                <td class="tg-9wq8">Kecamatan/</td>
                <td class="tg-9wq8">Kelapa Sawit/</td>
                <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Kelapa Hibrida/
                    </span><span style="font-style:italic;color:#000">Hybrid Coconut</span></td>
                <td class="tg-9wq8">Kelapa Dalam/</td>
                <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Karet/ </span><span
                        style="font-style:italic;color:#000">Rubber</span></td>
                <td class="tg-9wq8">Kopi/</td>
                <td class="tg-9wq8">Kakao/</td>
                <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Tebu/ </span><span
                        style="font-style:italic;color:#000">Sugar Cane</span></td>
                <td class="tg-9wq8">Teh/</td>
                <td class="tg-9wq8">Tembakau/</td>
                <td class="tg-9wq8">Cengkeh/</td>
                <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Lada/ </span><span
                        style="font-style:italic;color:#000">Pepper</span></td>
                <td class="tg-9wq8">Aren/</td>
                <td class="tg-9wq8">Jambu Mete/</td>
                <td class="tg-c3ow" rowspan="2"><span style="font-style:normal;color:#000">Kemiri/ </span><span
                        style="font-style:italic;color:#000">Candlenut</span></td>
            </tr>
            <tr>
                <td class="tg-vrnj"><span style="font-style:italic">Subdistrict</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Oil Palm</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Coconut</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Coffee</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Cocoa</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Tea</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Tobacco</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Clove</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Sugar Palm</span></td>
                <td class="tg-vrnj"><span style="font-style:italic">Cashew</span></td>
            </tr>
            <tr>
                <td class="tg-9wq8">(1)</td>
                <td class="tg-9wq8">(2)</td>
                <td class="tg-9wq8">(3)</td>
                <td class="tg-9wq8">(4)</td>
                <td class="tg-9wq8">(5)</td>
                <td class="tg-9wq8">(6)</td>
                <td class="tg-9wq8">(7)</td>
                <td class="tg-9wq8">(8)</td>
                <td class="tg-9wq8">(9)</td>
                <td class="tg-9wq8">(10)</td>
                <td class="tg-9wq8">(11)</td>
                <td class="tg-9wq8">(12)</td>
                <td class="tg-9wq8">(13)</td>
                <td class="tg-9wq8">(14)</td>
                <td class="tg-9wq8">(15)</td>
            </tr>
            <tr>
                <td class="tg-lboi">010. Marioriwawo</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 44.65 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 524.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 126.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB">5 000.93 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 10.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 127.95 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 31.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 834.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 571.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">020. Lalabata</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 22.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 220.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 125.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 335.35 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 254.75 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 30.50 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 78.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 72.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 505.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">030. Liliriaja</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 15.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 388.42 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 606.26 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 4.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 20.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 18.58 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 9.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 2.12 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 33.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">031. Ganra</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 8.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 16.80 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 98.49 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">032. Citta</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 12.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 376.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 16.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB">1 125.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 48.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 37.04 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 8.80 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 8.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 244.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 369.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">040. Lilirilau</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 65.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 875.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 6.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB">2 703.19 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 155.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.34 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 27.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB">2 103.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 198.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">050. Donri-Donri</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 81.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 398.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 14.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 349.11 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 24.50 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 5.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 12.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 41.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 311.00 </span></td>
            </tr>
            <tr>
                <td class="tg-lboi">060. Marioriawa</td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 25.38 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 74.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 957.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 21.13 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 517.23 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 0.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 65.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 4.25 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 26.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 480.00 </span></td>
                <td class="tg-9vyd"><span style="background-color:#D7F3CB"> 488.00 </span></td>
            </tr>
            <tr>
                <td class="tg-c3ow"><span style="font-style:normal;color:#000">Jumlah/</span><span
                        style="font-style:italic;color:#000">Total</span></td>
                <td class="tg-yz93"> 40.38 </td>
                <td class="tg-yz93"> 320.65 </td>
                <td class="tg-yz93">3 755.22 </td>
                <td class="tg-yz93"> 0.00 </td>
                <td class="tg-yz93"> 322.13 </td>
                <td class="tg-yz93">10 735.56 </td>
                <td class="tg-yz93"> 0.00 </td>
                <td class="tg-yz93"> 0.00 </td>
                <td class="tg-yz93"> 207.00 </td>
                <td class="tg-yz93"> 411.29 </td>
                <td class="tg-yz93"> 209.42 </td>
                <td class="tg-yz93"> 191.00 </td>
                <td class="tg-yz93">3 776.12 </td>
                <td class="tg-yz93">2 475.00 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
@endsection
