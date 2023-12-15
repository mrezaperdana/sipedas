<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabel</th>
                        <th rowspan="2">2.2.4</th>
                        <th>{{ $judultabel }},
                            {{ $data->tahun }}</th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th>{{ $judultabelen }}, {{ $data->tahun }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jenis Keputusan/ Decision Category</td>
                        <td colspan="2"> {{ $data->tahun }}</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td colspan="2"> (2)</td>
                    </tr>
                    <tr>
                        <td>Peraturan Daerah/Regional Regulation</td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah1') is-invalid @enderror" id="jumlah1" name="jumlah1"
                                value="{{ old('jumlah1', $data->jumlah1) }}">
                            @error('jumlah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Keputusan DPRD/Parliament Decision</td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah2') is-invalid @enderror" id="jumlah2"
                                name="jumlah2" value="{{ old('jumlah2', $data->jumlah2) }}">
                            @error('jumlah2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Keputusan Pimpinan DPRD/Parliament Leadership Decision</td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlah3') is-invalid @enderror" id="jumlah3"
                                name="jumlah3" value="{{ old('jumlah3', $data->jumlah3) }}">
                            @error('jumlah3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td class="tg-cly1" colspan="2"><input type="text"
                                class="form-control @error('jumlaht') is-invalid @enderror" id="jumlaht"
                                name="jumlaht" value="{{ old('jumlaht', $data->jumlaht) }}">
                            @error('jumlaht')
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
                        <th rowspan="2">2.2.4</th>
                        <th colspan="5">Banyaknya Keputusan DPRD Menurut Jenis Keputusan di Kabupaten Soppeng,
                            2014-2021</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Table</th>
                        <th colspan="5">Number of Regional Parliaments Decision by Decision Category in Soppeng
                            Regency, 2014-2021</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jenis Keputusan/</td>
                        <td rowspan="2">2014</td>
                        <td rowspan="2">2015</td>
                        <td rowspan="2">2016</td>
                        <td rowspan="2">2017</td>
                        <td rowspan="2">2018</td>
                        <td rowspan="2">2019</td>
                        <td rowspan="2">2020</td>
                        <td rowspan="2">2021</td>
                    </tr>
                    <tr>
                        <td>Decision Category</td>
                    </tr>
                    <tr>
                        <td>(1)</td>
                        <td>(2)</td>
                        <td>(3)</td>
                        <td>(4)</td>
                        <td>(5)</td>
                        <td>(6)</td>
                        <td>(7)</td>
                        <td>(8)</td>
                        <td>(9)</td>
                    </tr>
                    <tr>
                        <td>Peraturan Daerah/Regional Regulation</td>
                        <td>9</td>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Keputusan DPRD/Parliament Decision</td>
                        <td>12</td>
                        <td>19</td>
                        <td>23</td>
                        <td>22</td>
                        <td>28</td>
                        <td>27</td>
                        <td>26</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Keputusan Pimpinan DPRD/Parliament Leadership Decision</td>
                        <td>6</td>
                        <td>11</td>
                        <td>4</td>
                        <td>6</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Jumlah/Total</td>
                        <td>27</td>
                        <td>38</td>
                        <td>35</td>
                        <td>36</td>
                        <td>39</td>
                        <td>39</td>
                        <td>39</td>
                        <td>38</td>
                    </tr>
                </tbody>
            </table>

        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}
        @include('tabel.skpd.027_DPRD.script5')
    </x-slot>
</x-tabel-entri-view>
