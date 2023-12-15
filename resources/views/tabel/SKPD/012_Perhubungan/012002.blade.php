<style>
    tr.sticky-row {
        position: sticky;
        top: 0;
        background-color: white;
    }

    th:first-child,
    td:first-child,
    th.sticky-col,
    td.sticky-col {
        position: sticky;
        left: 0;
        background: #fff;
    }
</style>
@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>{{ $judultabel }}</p>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th class=" ">Tabel</th>
                    <th rowspan="2">10.1.6</th>
                    <th colspan="33">{{ $judultabel }}, {{ $data->tahun }}</th>
                </tr>
                <tr>
                    <th class=" ">Table</th>
                    <th colspan="33">{{ $judultabelen }}, {{ $data->tahun }}</th>
                </tr>
                <tr>
                    <td class="text-nowrap  ">Kecamatan/ Subdistrict</td>
                    <td colspan="2">Sedan</td>
                    <td colspan="2">Jeep</td>
                    <td colspan="2">Bus</td>
                    <td colspan="2">Ambulans/ Ambulance</td>
                    <td colspan="2">Mobil Pemadam Kebakaran/ Fire Truck</td>
                    <td colspan="2">Motor/ Motorcycle</td>
                    <td colspan="2">Ojek/ Taxibike</td>
                    <td colspan="2">Bemor/ Motor Cab</td>
                    <td colspan="2">Becak/ Pedicab</td>
                    <td colspan="2">Pick Up</td>
                    <td colspan="2">Truk Besar/ Large Truck</td>
                    <td colspan="2">Traktor/ Tractor</td>
                    <td colspan="2">Sepeda/ Bike</td>
                    <td colspan="2">Dokar/ Gig</td>
                    <td colspan="2">Gerobak/ Cart</td>
                    <td colspan="2">Mikrolet</td>
                    <td colspan="2">Truk 6 Roda</td>
                </tr>
                <tr>
                    <td class=" "></td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                    <td class="text-nowrap">Dinas/ private</td>
                    <td class="text-nowrap">Pribadi/ Private</td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class=" ">(1)</td>
                    <td>(2)</td>
                    <td>(3)</td>
                    <td>(4)</td>
                    <td>(5)</td>
                    <td>(6)</td>
                    <td>(7)</td>
                    <td>(8)</td>
                    <td>(9)</td>
                    <td>(10)</td>
                    <td>(11)</td>
                    <td>(12)</td>
                    <td>(13)</td>
                    <td>(14)</td>
                    <td>(15)</td>
                    <td>(16)</td>
                    <td>(17)</td>
                    <td>(18)</td>
                    <td>(19)</td>
                    <td>(20)</td>
                    <td>(21)</td>
                    <td>(22)</td>
                    <td>(23)</td>
                    <td>(24)</td>
                    <td>(25)</td>
                    <td>(26)</td>
                    <td>(27)</td>
                    <td>(28)</td>
                    <td>(29)</td>
                    <td>(30)</td>
                    <td>(31)</td>
                    <td>(32)</td>
                    <td>(33)</td>
                    <td>(34)</td>
                    <td>(35)</td>
                </tr>
                <tr>
                    <td class=" ">010. Marioriwawo</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice1') is-invalid @enderror" id="sedanservice1"
                            name="sedanservice1" value="{{ old('sedanservice1', $data->sedanservice1) }}">
                        @error('sedanservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate1') is-invalid @enderror" id="sedanprivate1"
                            name="sedanprivate1" value="{{ old('sedanprivate1', $data->sedanprivate1) }}">
                        @error('sedanprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice1') is-invalid @enderror" id="jeepservice1"
                            name="jeepservice1" value="{{ old('jeepservice1', $data->jeepservice1) }}">
                        @error('jeepservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate1') is-invalid @enderror" id="jeepprivate1"
                            name="jeepprivate1" value="{{ old('jeepprivate1', $data->jeepprivate1) }}">
                        @error('jeepprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice1') is-invalid @enderror" id="busservice1"
                            name="busservice1" value="{{ old('busservice1', $data->busservice1) }}">
                        @error('busservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate1') is-invalid @enderror" id="busprivate1"
                            name="busprivate1" value="{{ old('busprivate1', $data->busprivate1) }}">
                        @error('busprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice1') is-invalid @enderror"
                            id="ambulanceservice1" name="ambulanceservice1"
                            value="{{ old('ambulanceservice1', $data->ambulanceservice1) }}">
                        @error('ambulanceservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate1') is-invalid @enderror"
                            id="ambulanceprivate1" name="ambulanceprivate1"
                            value="{{ old('ambulanceprivate1', $data->ambulanceprivate1) }}">
                        @error('ambulanceprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice1') is-invalid @enderror"
                            id="fire_truckservice1" name="fire_truckservice1"
                            value="{{ old('fire_truckservice1', $data->fire_truckservice1) }}">
                        @error('fire_truckservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate1') is-invalid @enderror"
                            id="fire_truckprivate1" name="fire_truckprivate1"
                            value="{{ old('fire_truckprivate1', $data->fire_truckprivate1) }}">
                        @error('fire_truckprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice1') is-invalid @enderror" id="motorservice1"
                            name="motorservice1" value="{{ old('motorservice1', $data->motorservice1) }}">
                        @error('motorservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate1') is-invalid @enderror" id="motorprivate1"
                            name="motorprivate1" value="{{ old('motorprivate1', $data->motorprivate1) }}">
                        @error('motorprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate1') is-invalid @enderror" id="ojekprivate1"
                            name="ojekprivate1" value="{{ old('ojekprivate1', $data->ojekprivate1) }}">
                        @error('ojekprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice1') is-invalid @enderror" id="ojekservice1"
                            name="ojekservice1" value="{{ old('ojekservice1', $data->ojekservice1) }}">
                        @error('ojekservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice1') is-invalid @enderror" id="bemorservice1"
                            name="bemorservice1" value="{{ old('bemorservice1', $data->bemorservice1) }}">
                        @error('bemorservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate1') is-invalid @enderror" id="bemorprivate1"
                            name="bemorprivate1" value="{{ old('bemorprivate1', $data->bemorprivate1) }}">
                        @error('bemorprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice1') is-invalid @enderror" id="pedicabservice1"
                            name="pedicabservice1" value="{{ old('pedicabservice1', $data->pedicabservice1) }}">
                        @error('pedicabservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate1') is-invalid @enderror" id="pedicabprivate1"
                            name="pedicabprivate1" value="{{ old('pedicabprivate1', $data->pedicabprivate1) }}">
                        @error('pedicabprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice1') is-invalid @enderror" id="pickupservice1"
                            name="pickupservice1" value="{{ old('pickupservice1', $data->pickupservice1) }}">
                        @error('pickupservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate1') is-invalid @enderror" id="pickupprivate1"
                            name="pickupprivate1" value="{{ old('pickupprivate1', $data->pickupprivate1) }}">
                        @error('pickupprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice1') is-invalid @enderror"
                            id="large_truckservice1" name="large_truckservice1"
                            value="{{ old('large_truckservice1', $data->large_truckservice1) }}">
                        @error('large_truckservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate1') is-invalid @enderror"
                            id="large_truckprivate1" name="large_truckprivate1"
                            value="{{ old('large_truckprivate1', $data->large_truckprivate1) }}">
                        @error('large_truckprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice1') is-invalid @enderror" id="tractorservice1"
                            name="tractorservice1" value="{{ old('tractorservice1', $data->tractorservice1) }}">
                        @error('tractorservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate1') is-invalid @enderror" id="tractorprivate1"
                            name="tractorprivate1" value="{{ old('tractorprivate1', $data->tractorprivate1) }}">
                        @error('tractorprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice1') is-invalid @enderror" id="bikeservice1"
                            name="bikeservice1" value="{{ old('bikeservice1', $data->bikeservice1) }}">
                        @error('bikeservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate1') is-invalid @enderror" id="bikeprivate1"
                            name="bikeprivate1" value="{{ old('bikeprivate1', $data->bikeprivate1) }}">
                        @error('bikeprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice1') is-invalid @enderror" id="gigservice1"
                            name="gigservice1" value="{{ old('gigservice1', $data->gigservice1) }}">
                        @error('gigservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate1') is-invalid @enderror" id="gigprivate1"
                            name="gigprivate1" value="{{ old('gigprivate1', $data->gigprivate1) }}">
                        @error('gigprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice1') is-invalid @enderror" id="cartservice1"
                            name="cartservice1" value="{{ old('cartservice1', $data->cartservice1) }}">
                        @error('cartservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate1') is-invalid @enderror" id="cartprivate1"
                            name="cartprivate1" value="{{ old('cartprivate1', $data->cartprivate1) }}">
                        @error('cartprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice1') is-invalid @enderror"
                            id="mikroletservice1" name="mikroletservice1"
                            value="{{ old('mikroletservice1', $data->mikroletservice1) }}">
                        @error('mikroletservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate1') is-invalid @enderror"
                            id="mikroletprivate1" name="mikroletprivate1"
                            value="{{ old('mikroletprivate1', $data->mikroletprivate1) }}">
                        @error('mikroletprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice1') is-invalid @enderror"
                            id="truk_6_rodaservice1" name="truk_6_rodaservice1"
                            value="{{ old('truk_6_rodaservice1', $data->truk_6_rodaservice1) }}">
                        @error('truk_6_rodaservice1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate1') is-invalid @enderror"
                            id="truk_6_rodaprivate1" name="truk_6_rodaprivate1"
                            value="{{ old('truk_6_rodaprivate1', $data->truk_6_rodaprivate1) }}">
                        @error('truk_6_rodaprivate1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td class=" ">020. Lalabata</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice2') is-invalid @enderror" id="sedanservice2"
                            name="sedanservice2" value="{{ old('sedanservice2', $data->sedanservice2) }}">
                        @error('sedanservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate2') is-invalid @enderror" id="sedanprivate2"
                            name="sedanprivate2" value="{{ old('sedanprivate2', $data->sedanprivate2) }}">
                        @error('sedanprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice2') is-invalid @enderror" id="jeepservice2"
                            name="jeepservice2" value="{{ old('jeepservice2', $data->jeepservice2) }}">
                        @error('jeepservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate2') is-invalid @enderror" id="jeepprivate2"
                            name="jeepprivate2" value="{{ old('jeepprivate2', $data->jeepprivate2) }}">
                        @error('jeepprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice2') is-invalid @enderror" id="busservice2"
                            name="busservice2" value="{{ old('busservice2', $data->busservice2) }}">
                        @error('busservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate2') is-invalid @enderror" id="busprivate2"
                            name="busprivate2" value="{{ old('busprivate2', $data->busprivate2) }}">
                        @error('busprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice2') is-invalid @enderror"
                            id="ambulanceservice2" name="ambulanceservice2"
                            value="{{ old('ambulanceservice2', $data->ambulanceservice2) }}">
                        @error('ambulanceservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate2') is-invalid @enderror"
                            id="ambulanceprivate2" name="ambulanceprivate2"
                            value="{{ old('ambulanceprivate2', $data->ambulanceprivate2) }}">
                        @error('ambulanceprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice2') is-invalid @enderror"
                            id="fire_truckservice2" name="fire_truckservice2"
                            value="{{ old('fire_truckservice2', $data->fire_truckservice2) }}">
                        @error('fire_truckservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate2') is-invalid @enderror"
                            id="fire_truckprivate2" name="fire_truckprivate2"
                            value="{{ old('fire_truckprivate2', $data->fire_truckprivate2) }}">
                        @error('fire_truckprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice2') is-invalid @enderror" id="motorservice2"
                            name="motorservice2" value="{{ old('motorservice2', $data->motorservice2) }}">
                        @error('motorservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate2') is-invalid @enderror" id="motorprivate2"
                            name="motorprivate2" value="{{ old('motorprivate2', $data->motorprivate2) }}">
                        @error('motorprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate2') is-invalid @enderror" id="ojekprivate2"
                            name="ojekprivate2" value="{{ old('ojekprivate2', $data->ojekprivate2) }}">
                        @error('ojekprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice2') is-invalid @enderror" id="ojekservice2"
                            name="ojekservice2" value="{{ old('ojekservice2', $data->ojekservice2) }}">
                        @error('ojekservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice2') is-invalid @enderror" id="bemorservice2"
                            name="bemorservice2" value="{{ old('bemorservice2', $data->bemorservice2) }}">
                        @error('bemorservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate2') is-invalid @enderror" id="bemorprivate2"
                            name="bemorprivate2" value="{{ old('bemorprivate2', $data->bemorprivate2) }}">
                        @error('bemorprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice2') is-invalid @enderror" id="pedicabservice2"
                            name="pedicabservice2" value="{{ old('pedicabservice2', $data->pedicabservice2) }}">
                        @error('pedicabservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate2') is-invalid @enderror" id="pedicabprivate2"
                            name="pedicabprivate2" value="{{ old('pedicabprivate2', $data->pedicabprivate2) }}">
                        @error('pedicabprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice2') is-invalid @enderror" id="pickupservice2"
                            name="pickupservice2" value="{{ old('pickupservice2', $data->pickupservice2) }}">
                        @error('pickupservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate2') is-invalid @enderror" id="pickupprivate2"
                            name="pickupprivate2" value="{{ old('pickupprivate2', $data->pickupprivate2) }}">
                        @error('pickupprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice2') is-invalid @enderror"
                            id="large_truckservice2" name="large_truckservice2"
                            value="{{ old('large_truckservice2', $data->large_truckservice2) }}">
                        @error('large_truckservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate2') is-invalid @enderror"
                            id="large_truckprivate2" name="large_truckprivate2"
                            value="{{ old('large_truckprivate2', $data->large_truckprivate2) }}">
                        @error('large_truckprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice2') is-invalid @enderror" id="tractorservice2"
                            name="tractorservice2" value="{{ old('tractorservice2', $data->tractorservice2) }}">
                        @error('tractorservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate2') is-invalid @enderror" id="tractorprivate2"
                            name="tractorprivate2" value="{{ old('tractorprivate2', $data->tractorprivate2) }}">
                        @error('tractorprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice2') is-invalid @enderror" id="bikeservice2"
                            name="bikeservice2" value="{{ old('bikeservice2', $data->bikeservice2) }}">
                        @error('bikeservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate2') is-invalid @enderror" id="bikeprivate2"
                            name="bikeprivate2" value="{{ old('bikeprivate2', $data->bikeprivate2) }}">
                        @error('bikeprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice2') is-invalid @enderror" id="gigservice2"
                            name="gigservice2" value="{{ old('gigservice2', $data->gigservice2) }}">
                        @error('gigservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate2') is-invalid @enderror" id="gigprivate2"
                            name="gigprivate2" value="{{ old('gigprivate2', $data->gigprivate2) }}">
                        @error('gigprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice2') is-invalid @enderror" id="cartservice2"
                            name="cartservice2" value="{{ old('cartservice2', $data->cartservice2) }}">
                        @error('cartservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate2') is-invalid @enderror" id="cartprivate2"
                            name="cartprivate2" value="{{ old('cartprivate2', $data->cartprivate2) }}">
                        @error('cartprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice2') is-invalid @enderror"
                            id="mikroletservice2" name="mikroletservice2"
                            value="{{ old('mikroletservice2', $data->mikroletservice2) }}">
                        @error('mikroletservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate2') is-invalid @enderror"
                            id="mikroletprivate2" name="mikroletprivate2"
                            value="{{ old('mikroletprivate2', $data->mikroletprivate2) }}">
                        @error('mikroletprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice2') is-invalid @enderror"
                            id="truk_6_rodaservice2" name="truk_6_rodaservice2"
                            value="{{ old('truk_6_rodaservice2', $data->truk_6_rodaservice2) }}">
                        @error('truk_6_rodaservice2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate2') is-invalid @enderror"
                            id="truk_6_rodaprivate2" name="truk_6_rodaprivate2"
                            value="{{ old('truk_6_rodaprivate2', $data->truk_6_rodaprivate2) }}">
                        @error('truk_6_rodaprivate2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">030. Liliriaja</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice3') is-invalid @enderror" id="sedanservice3"
                            name="sedanservice3" value="{{ old('sedanservice3', $data->sedanservice3) }}">
                        @error('sedanservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate3') is-invalid @enderror" id="sedanprivate3"
                            name="sedanprivate3" value="{{ old('sedanprivate3', $data->sedanprivate3) }}">
                        @error('sedanprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice3') is-invalid @enderror" id="jeepservice3"
                            name="jeepservice3" value="{{ old('jeepservice3', $data->jeepservice3) }}">
                        @error('jeepservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate3') is-invalid @enderror" id="jeepprivate3"
                            name="jeepprivate3" value="{{ old('jeepprivate3', $data->jeepprivate3) }}">
                        @error('jeepprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice3') is-invalid @enderror" id="busservice3"
                            name="busservice3" value="{{ old('busservice3', $data->busservice3) }}">
                        @error('busservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate3') is-invalid @enderror" id="busprivate3"
                            name="busprivate3" value="{{ old('busprivate3', $data->busprivate3) }}">
                        @error('busprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice3') is-invalid @enderror"
                            id="ambulanceservice3" name="ambulanceservice3"
                            value="{{ old('ambulanceservice3', $data->ambulanceservice3) }}">
                        @error('ambulanceservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate3') is-invalid @enderror"
                            id="ambulanceprivate3" name="ambulanceprivate3"
                            value="{{ old('ambulanceprivate3', $data->ambulanceprivate3) }}">
                        @error('ambulanceprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice3') is-invalid @enderror"
                            id="fire_truckservice3" name="fire_truckservice3"
                            value="{{ old('fire_truckservice3', $data->fire_truckservice3) }}">
                        @error('fire_truckservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate3') is-invalid @enderror"
                            id="fire_truckprivate3" name="fire_truckprivate3"
                            value="{{ old('fire_truckprivate3', $data->fire_truckprivate3) }}">
                        @error('fire_truckprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice3') is-invalid @enderror" id="motorservice3"
                            name="motorservice3" value="{{ old('motorservice3', $data->motorservice3) }}">
                        @error('motorservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate3') is-invalid @enderror" id="motorprivate3"
                            name="motorprivate3" value="{{ old('motorprivate3', $data->motorprivate3) }}">
                        @error('motorprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate3') is-invalid @enderror" id="ojekprivate3"
                            name="ojekprivate3" value="{{ old('ojekprivate3', $data->ojekprivate3) }}">
                        @error('ojekprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice3') is-invalid @enderror" id="ojekservice3"
                            name="ojekservice3" value="{{ old('ojekservice3', $data->ojekservice3) }}">
                        @error('ojekservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice3') is-invalid @enderror" id="bemorservice3"
                            name="bemorservice3" value="{{ old('bemorservice3', $data->bemorservice3) }}">
                        @error('bemorservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate3') is-invalid @enderror" id="bemorprivate3"
                            name="bemorprivate3" value="{{ old('bemorprivate3', $data->bemorprivate3) }}">
                        @error('bemorprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice3') is-invalid @enderror" id="pedicabservice3"
                            name="pedicabservice3" value="{{ old('pedicabservice3', $data->pedicabservice3) }}">
                        @error('pedicabservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate3') is-invalid @enderror" id="pedicabprivate3"
                            name="pedicabprivate3" value="{{ old('pedicabprivate3', $data->pedicabprivate3) }}">
                        @error('pedicabprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice3') is-invalid @enderror" id="pickupservice3"
                            name="pickupservice3" value="{{ old('pickupservice3', $data->pickupservice3) }}">
                        @error('pickupservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate3') is-invalid @enderror" id="pickupprivate3"
                            name="pickupprivate3" value="{{ old('pickupprivate3', $data->pickupprivate3) }}">
                        @error('pickupprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice3') is-invalid @enderror"
                            id="large_truckservice3" name="large_truckservice3"
                            value="{{ old('large_truckservice3', $data->large_truckservice3) }}">
                        @error('large_truckservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate3') is-invalid @enderror"
                            id="large_truckprivate3" name="large_truckprivate3"
                            value="{{ old('large_truckprivate3', $data->large_truckprivate3) }}">
                        @error('large_truckprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice3') is-invalid @enderror" id="tractorservice3"
                            name="tractorservice3" value="{{ old('tractorservice3', $data->tractorservice3) }}">
                        @error('tractorservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate3') is-invalid @enderror" id="tractorprivate3"
                            name="tractorprivate3" value="{{ old('tractorprivate3', $data->tractorprivate3) }}">
                        @error('tractorprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice3') is-invalid @enderror" id="bikeservice3"
                            name="bikeservice3" value="{{ old('bikeservice3', $data->bikeservice3) }}">
                        @error('bikeservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate3') is-invalid @enderror" id="bikeprivate3"
                            name="bikeprivate3" value="{{ old('bikeprivate3', $data->bikeprivate3) }}">
                        @error('bikeprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice3') is-invalid @enderror" id="gigservice3"
                            name="gigservice3" value="{{ old('gigservice3', $data->gigservice3) }}">
                        @error('gigservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate3') is-invalid @enderror" id="gigprivate3"
                            name="gigprivate3" value="{{ old('gigprivate3', $data->gigprivate3) }}">
                        @error('gigprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice3') is-invalid @enderror" id="cartservice3"
                            name="cartservice3" value="{{ old('cartservice3', $data->cartservice3) }}">
                        @error('cartservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate3') is-invalid @enderror" id="cartprivate3"
                            name="cartprivate3" value="{{ old('cartprivate3', $data->cartprivate3) }}">
                        @error('cartprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice3') is-invalid @enderror"
                            id="mikroletservice3" name="mikroletservice3"
                            value="{{ old('mikroletservice3', $data->mikroletservice3) }}">
                        @error('mikroletservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate3') is-invalid @enderror"
                            id="mikroletprivate3" name="mikroletprivate3"
                            value="{{ old('mikroletprivate3', $data->mikroletprivate3) }}">
                        @error('mikroletprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice3') is-invalid @enderror"
                            id="truk_6_rodaservice3" name="truk_6_rodaservice3"
                            value="{{ old('truk_6_rodaservice3', $data->truk_6_rodaservice3) }}">
                        @error('truk_6_rodaservice3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate3') is-invalid @enderror"
                            id="truk_6_rodaprivate3" name="truk_6_rodaprivate3"
                            value="{{ old('truk_6_rodaprivate3', $data->truk_6_rodaprivate3) }}">
                        @error('truk_6_rodaprivate3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">031. Ganra</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice4') is-invalid @enderror" id="sedanservice4"
                            name="sedanservice4" value="{{ old('sedanservice4', $data->sedanservice4) }}">
                        @error('sedanservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate4') is-invalid @enderror" id="sedanprivate4"
                            name="sedanprivate4" value="{{ old('sedanprivate4', $data->sedanprivate4) }}">
                        @error('sedanprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice4') is-invalid @enderror" id="jeepservice4"
                            name="jeepservice4" value="{{ old('jeepservice4', $data->jeepservice4) }}">
                        @error('jeepservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate4') is-invalid @enderror" id="jeepprivate4"
                            name="jeepprivate4" value="{{ old('jeepprivate4', $data->jeepprivate4) }}">
                        @error('jeepprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice4') is-invalid @enderror" id="busservice4"
                            name="busservice4" value="{{ old('busservice4', $data->busservice4) }}">
                        @error('busservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate4') is-invalid @enderror" id="busprivate4"
                            name="busprivate4" value="{{ old('busprivate4', $data->busprivate4) }}">
                        @error('busprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice4') is-invalid @enderror"
                            id="ambulanceservice4" name="ambulanceservice4"
                            value="{{ old('ambulanceservice4', $data->ambulanceservice4) }}">
                        @error('ambulanceservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate4') is-invalid @enderror"
                            id="ambulanceprivate4" name="ambulanceprivate4"
                            value="{{ old('ambulanceprivate4', $data->ambulanceprivate4) }}">
                        @error('ambulanceprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice4') is-invalid @enderror"
                            id="fire_truckservice4" name="fire_truckservice4"
                            value="{{ old('fire_truckservice4', $data->fire_truckservice4) }}">
                        @error('fire_truckservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate4') is-invalid @enderror"
                            id="fire_truckprivate4" name="fire_truckprivate4"
                            value="{{ old('fire_truckprivate4', $data->fire_truckprivate4) }}">
                        @error('fire_truckprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice4') is-invalid @enderror" id="motorservice4"
                            name="motorservice4" value="{{ old('motorservice4', $data->motorservice4) }}">
                        @error('motorservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate4') is-invalid @enderror" id="motorprivate4"
                            name="motorprivate4" value="{{ old('motorprivate4', $data->motorprivate4) }}">
                        @error('motorprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate4') is-invalid @enderror" id="ojekprivate4"
                            name="ojekprivate4" value="{{ old('ojekprivate4', $data->ojekprivate4) }}">
                        @error('ojekprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice4') is-invalid @enderror" id="ojekservice4"
                            name="ojekservice4" value="{{ old('ojekservice4', $data->ojekservice4) }}">
                        @error('ojekservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice4') is-invalid @enderror" id="bemorservice4"
                            name="bemorservice4" value="{{ old('bemorservice4', $data->bemorservice4) }}">
                        @error('bemorservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate4') is-invalid @enderror" id="bemorprivate4"
                            name="bemorprivate4" value="{{ old('bemorprivate4', $data->bemorprivate4) }}">
                        @error('bemorprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice4') is-invalid @enderror" id="pedicabservice4"
                            name="pedicabservice4" value="{{ old('pedicabservice4', $data->pedicabservice4) }}">
                        @error('pedicabservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate4') is-invalid @enderror" id="pedicabprivate4"
                            name="pedicabprivate4" value="{{ old('pedicabprivate4', $data->pedicabprivate4) }}">
                        @error('pedicabprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice4') is-invalid @enderror" id="pickupservice4"
                            name="pickupservice4" value="{{ old('pickupservice4', $data->pickupservice4) }}">
                        @error('pickupservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate4') is-invalid @enderror" id="pickupprivate4"
                            name="pickupprivate4" value="{{ old('pickupprivate4', $data->pickupprivate4) }}">
                        @error('pickupprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice4') is-invalid @enderror"
                            id="large_truckservice4" name="large_truckservice4"
                            value="{{ old('large_truckservice4', $data->large_truckservice4) }}">
                        @error('large_truckservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate4') is-invalid @enderror"
                            id="large_truckprivate4" name="large_truckprivate4"
                            value="{{ old('large_truckprivate4', $data->large_truckprivate4) }}">
                        @error('large_truckprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice4') is-invalid @enderror" id="tractorservice4"
                            name="tractorservice4" value="{{ old('tractorservice4', $data->tractorservice4) }}">
                        @error('tractorservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate4') is-invalid @enderror" id="tractorprivate4"
                            name="tractorprivate4" value="{{ old('tractorprivate4', $data->tractorprivate4) }}">
                        @error('tractorprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice4') is-invalid @enderror" id="bikeservice4"
                            name="bikeservice4" value="{{ old('bikeservice4', $data->bikeservice4) }}">
                        @error('bikeservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate4') is-invalid @enderror" id="bikeprivate4"
                            name="bikeprivate4" value="{{ old('bikeprivate4', $data->bikeprivate4) }}">
                        @error('bikeprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice4') is-invalid @enderror" id="gigservice4"
                            name="gigservice4" value="{{ old('gigservice4', $data->gigservice4) }}">
                        @error('gigservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate4') is-invalid @enderror" id="gigprivate4"
                            name="gigprivate4" value="{{ old('gigprivate4', $data->gigprivate4) }}">
                        @error('gigprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice4') is-invalid @enderror" id="cartservice4"
                            name="cartservice4" value="{{ old('cartservice4', $data->cartservice4) }}">
                        @error('cartservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate4') is-invalid @enderror" id="cartprivate4"
                            name="cartprivate4" value="{{ old('cartprivate4', $data->cartprivate4) }}">
                        @error('cartprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice4') is-invalid @enderror"
                            id="mikroletservice4" name="mikroletservice4"
                            value="{{ old('mikroletservice4', $data->mikroletservice4) }}">
                        @error('mikroletservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate4') is-invalid @enderror"
                            id="mikroletprivate4" name="mikroletprivate4"
                            value="{{ old('mikroletprivate4', $data->mikroletprivate4) }}">
                        @error('mikroletprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice4') is-invalid @enderror"
                            id="truk_6_rodaservice4" name="truk_6_rodaservice4"
                            value="{{ old('truk_6_rodaservice4', $data->truk_6_rodaservice4) }}">
                        @error('truk_6_rodaservice4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate4') is-invalid @enderror"
                            id="truk_6_rodaprivate4" name="truk_6_rodaprivate4"
                            value="{{ old('truk_6_rodaprivate4', $data->truk_6_rodaprivate4) }}">
                        @error('truk_6_rodaprivate4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">032. Citta</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice5') is-invalid @enderror" id="sedanservice5"
                            name="sedanservice5" value="{{ old('sedanservice5', $data->sedanservice5) }}">
                        @error('sedanservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate5') is-invalid @enderror" id="sedanprivate5"
                            name="sedanprivate5" value="{{ old('sedanprivate5', $data->sedanprivate5) }}">
                        @error('sedanprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice5') is-invalid @enderror" id="jeepservice5"
                            name="jeepservice5" value="{{ old('jeepservice5', $data->jeepservice5) }}">
                        @error('jeepservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate5') is-invalid @enderror" id="jeepprivate5"
                            name="jeepprivate5" value="{{ old('jeepprivate5', $data->jeepprivate5) }}">
                        @error('jeepprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice5') is-invalid @enderror" id="busservice5"
                            name="busservice5" value="{{ old('busservice5', $data->busservice5) }}">
                        @error('busservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate5') is-invalid @enderror" id="busprivate5"
                            name="busprivate5" value="{{ old('busprivate5', $data->busprivate5) }}">
                        @error('busprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice5') is-invalid @enderror"
                            id="ambulanceservice5" name="ambulanceservice5"
                            value="{{ old('ambulanceservice5', $data->ambulanceservice5) }}">
                        @error('ambulanceservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate5') is-invalid @enderror"
                            id="ambulanceprivate5" name="ambulanceprivate5"
                            value="{{ old('ambulanceprivate5', $data->ambulanceprivate5) }}">
                        @error('ambulanceprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice5') is-invalid @enderror"
                            id="fire_truckservice5" name="fire_truckservice5"
                            value="{{ old('fire_truckservice5', $data->fire_truckservice5) }}">
                        @error('fire_truckservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate5') is-invalid @enderror"
                            id="fire_truckprivate5" name="fire_truckprivate5"
                            value="{{ old('fire_truckprivate5', $data->fire_truckprivate5) }}">
                        @error('fire_truckprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice5') is-invalid @enderror" id="motorservice5"
                            name="motorservice5" value="{{ old('motorservice5', $data->motorservice5) }}">
                        @error('motorservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate5') is-invalid @enderror" id="motorprivate5"
                            name="motorprivate5" value="{{ old('motorprivate5', $data->motorprivate5) }}">
                        @error('motorprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate5') is-invalid @enderror" id="ojekprivate5"
                            name="ojekprivate5" value="{{ old('ojekprivate5', $data->ojekprivate5) }}">
                        @error('ojekprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice5') is-invalid @enderror" id="ojekservice5"
                            name="ojekservice5" value="{{ old('ojekservice5', $data->ojekservice5) }}">
                        @error('ojekservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice5') is-invalid @enderror" id="bemorservice5"
                            name="bemorservice5" value="{{ old('bemorservice5', $data->bemorservice5) }}">
                        @error('bemorservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate5') is-invalid @enderror" id="bemorprivate5"
                            name="bemorprivate5" value="{{ old('bemorprivate5', $data->bemorprivate5) }}">
                        @error('bemorprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice5') is-invalid @enderror"
                            id="pedicabservice5" name="pedicabservice5"
                            value="{{ old('pedicabservice5', $data->pedicabservice5) }}">
                        @error('pedicabservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate5') is-invalid @enderror"
                            id="pedicabprivate5" name="pedicabprivate5"
                            value="{{ old('pedicabprivate5', $data->pedicabprivate5) }}">
                        @error('pedicabprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice5') is-invalid @enderror" id="pickupservice5"
                            name="pickupservice5" value="{{ old('pickupservice5', $data->pickupservice5) }}">
                        @error('pickupservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate5') is-invalid @enderror" id="pickupprivate5"
                            name="pickupprivate5" value="{{ old('pickupprivate5', $data->pickupprivate5) }}">
                        @error('pickupprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice5') is-invalid @enderror"
                            id="large_truckservice5" name="large_truckservice5"
                            value="{{ old('large_truckservice5', $data->large_truckservice5) }}">
                        @error('large_truckservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate5') is-invalid @enderror"
                            id="large_truckprivate5" name="large_truckprivate5"
                            value="{{ old('large_truckprivate5', $data->large_truckprivate5) }}">
                        @error('large_truckprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice5') is-invalid @enderror"
                            id="tractorservice5" name="tractorservice5"
                            value="{{ old('tractorservice5', $data->tractorservice5) }}">
                        @error('tractorservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate5') is-invalid @enderror"
                            id="tractorprivate5" name="tractorprivate5"
                            value="{{ old('tractorprivate5', $data->tractorprivate5) }}">
                        @error('tractorprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice5') is-invalid @enderror" id="bikeservice5"
                            name="bikeservice5" value="{{ old('bikeservice5', $data->bikeservice5) }}">
                        @error('bikeservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate5') is-invalid @enderror" id="bikeprivate5"
                            name="bikeprivate5" value="{{ old('bikeprivate5', $data->bikeprivate5) }}">
                        @error('bikeprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice5') is-invalid @enderror" id="gigservice5"
                            name="gigservice5" value="{{ old('gigservice5', $data->gigservice5) }}">
                        @error('gigservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate5') is-invalid @enderror" id="gigprivate5"
                            name="gigprivate5" value="{{ old('gigprivate5', $data->gigprivate5) }}">
                        @error('gigprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice5') is-invalid @enderror" id="cartservice5"
                            name="cartservice5" value="{{ old('cartservice5', $data->cartservice5) }}">
                        @error('cartservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate5') is-invalid @enderror" id="cartprivate5"
                            name="cartprivate5" value="{{ old('cartprivate5', $data->cartprivate5) }}">
                        @error('cartprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice5') is-invalid @enderror"
                            id="mikroletservice5" name="mikroletservice5"
                            value="{{ old('mikroletservice5', $data->mikroletservice5) }}">
                        @error('mikroletservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate5') is-invalid @enderror"
                            id="mikroletprivate5" name="mikroletprivate5"
                            value="{{ old('mikroletprivate5', $data->mikroletprivate5) }}">
                        @error('mikroletprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice5') is-invalid @enderror"
                            id="truk_6_rodaservice5" name="truk_6_rodaservice5"
                            value="{{ old('truk_6_rodaservice5', $data->truk_6_rodaservice5) }}">
                        @error('truk_6_rodaservice5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate5') is-invalid @enderror"
                            id="truk_6_rodaprivate5" name="truk_6_rodaprivate5"
                            value="{{ old('truk_6_rodaprivate5', $data->truk_6_rodaprivate5) }}">
                        @error('truk_6_rodaprivate5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">040. Lilirilau</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice6') is-invalid @enderror" id="sedanservice6"
                            name="sedanservice6" value="{{ old('sedanservice6', $data->sedanservice6) }}">
                        @error('sedanservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate6') is-invalid @enderror" id="sedanprivate6"
                            name="sedanprivate6" value="{{ old('sedanprivate6', $data->sedanprivate6) }}">
                        @error('sedanprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice6') is-invalid @enderror" id="jeepservice6"
                            name="jeepservice6" value="{{ old('jeepservice6', $data->jeepservice6) }}">
                        @error('jeepservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate6') is-invalid @enderror" id="jeepprivate6"
                            name="jeepprivate6" value="{{ old('jeepprivate6', $data->jeepprivate6) }}">
                        @error('jeepprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice6') is-invalid @enderror" id="busservice6"
                            name="busservice6" value="{{ old('busservice6', $data->busservice6) }}">
                        @error('busservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate6') is-invalid @enderror" id="busprivate6"
                            name="busprivate6" value="{{ old('busprivate6', $data->busprivate6) }}">
                        @error('busprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice6') is-invalid @enderror"
                            id="ambulanceservice6" name="ambulanceservice6"
                            value="{{ old('ambulanceservice6', $data->ambulanceservice6) }}">
                        @error('ambulanceservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate6') is-invalid @enderror"
                            id="ambulanceprivate6" name="ambulanceprivate6"
                            value="{{ old('ambulanceprivate6', $data->ambulanceprivate6) }}">
                        @error('ambulanceprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice6') is-invalid @enderror"
                            id="fire_truckservice6" name="fire_truckservice6"
                            value="{{ old('fire_truckservice6', $data->fire_truckservice6) }}">
                        @error('fire_truckservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate6') is-invalid @enderror"
                            id="fire_truckprivate6" name="fire_truckprivate6"
                            value="{{ old('fire_truckprivate6', $data->fire_truckprivate6) }}">
                        @error('fire_truckprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice6') is-invalid @enderror" id="motorservice6"
                            name="motorservice6" value="{{ old('motorservice6', $data->motorservice6) }}">
                        @error('motorservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate6') is-invalid @enderror" id="motorprivate6"
                            name="motorprivate6" value="{{ old('motorprivate6', $data->motorprivate6) }}">
                        @error('motorprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate6') is-invalid @enderror" id="ojekprivate6"
                            name="ojekprivate6" value="{{ old('ojekprivate6', $data->ojekprivate6) }}">
                        @error('ojekprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice6') is-invalid @enderror" id="ojekservice6"
                            name="ojekservice6" value="{{ old('ojekservice6', $data->ojekservice6) }}">
                        @error('ojekservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice6') is-invalid @enderror" id="bemorservice6"
                            name="bemorservice6" value="{{ old('bemorservice6', $data->bemorservice6) }}">
                        @error('bemorservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate6') is-invalid @enderror" id="bemorprivate6"
                            name="bemorprivate6" value="{{ old('bemorprivate6', $data->bemorprivate6) }}">
                        @error('bemorprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice6') is-invalid @enderror"
                            id="pedicabservice6" name="pedicabservice6"
                            value="{{ old('pedicabservice6', $data->pedicabservice6) }}">
                        @error('pedicabservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate6') is-invalid @enderror"
                            id="pedicabprivate6" name="pedicabprivate6"
                            value="{{ old('pedicabprivate6', $data->pedicabprivate6) }}">
                        @error('pedicabprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice6') is-invalid @enderror" id="pickupservice6"
                            name="pickupservice6" value="{{ old('pickupservice6', $data->pickupservice6) }}">
                        @error('pickupservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate6') is-invalid @enderror" id="pickupprivate6"
                            name="pickupprivate6" value="{{ old('pickupprivate6', $data->pickupprivate6) }}">
                        @error('pickupprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice6') is-invalid @enderror"
                            id="large_truckservice6" name="large_truckservice6"
                            value="{{ old('large_truckservice6', $data->large_truckservice6) }}">
                        @error('large_truckservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate6') is-invalid @enderror"
                            id="large_truckprivate6" name="large_truckprivate6"
                            value="{{ old('large_truckprivate6', $data->large_truckprivate6) }}">
                        @error('large_truckprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice6') is-invalid @enderror"
                            id="tractorservice6" name="tractorservice6"
                            value="{{ old('tractorservice6', $data->tractorservice6) }}">
                        @error('tractorservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate6') is-invalid @enderror"
                            id="tractorprivate6" name="tractorprivate6"
                            value="{{ old('tractorprivate6', $data->tractorprivate6) }}">
                        @error('tractorprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice6') is-invalid @enderror" id="bikeservice6"
                            name="bikeservice6" value="{{ old('bikeservice6', $data->bikeservice6) }}">
                        @error('bikeservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate6') is-invalid @enderror" id="bikeprivate6"
                            name="bikeprivate6" value="{{ old('bikeprivate6', $data->bikeprivate6) }}">
                        @error('bikeprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice6') is-invalid @enderror" id="gigservice6"
                            name="gigservice6" value="{{ old('gigservice6', $data->gigservice6) }}">
                        @error('gigservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate6') is-invalid @enderror" id="gigprivate6"
                            name="gigprivate6" value="{{ old('gigprivate6', $data->gigprivate6) }}">
                        @error('gigprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice6') is-invalid @enderror" id="cartservice6"
                            name="cartservice6" value="{{ old('cartservice6', $data->cartservice6) }}">
                        @error('cartservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate6') is-invalid @enderror" id="cartprivate6"
                            name="cartprivate6" value="{{ old('cartprivate6', $data->cartprivate6) }}">
                        @error('cartprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice6') is-invalid @enderror"
                            id="mikroletservice6" name="mikroletservice6"
                            value="{{ old('mikroletservice6', $data->mikroletservice6) }}">
                        @error('mikroletservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate6') is-invalid @enderror"
                            id="mikroletprivate6" name="mikroletprivate6"
                            value="{{ old('mikroletprivate6', $data->mikroletprivate6) }}">
                        @error('mikroletprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice6') is-invalid @enderror"
                            id="truk_6_rodaservice6" name="truk_6_rodaservice6"
                            value="{{ old('truk_6_rodaservice6', $data->truk_6_rodaservice6) }}">
                        @error('truk_6_rodaservice6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate6') is-invalid @enderror"
                            id="truk_6_rodaprivate6" name="truk_6_rodaprivate6"
                            value="{{ old('truk_6_rodaprivate6', $data->truk_6_rodaprivate6) }}">
                        @error('truk_6_rodaprivate6')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">050. Donri-Donri</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice7') is-invalid @enderror" id="sedanservice7"
                            name="sedanservice7" value="{{ old('sedanservice7', $data->sedanservice7) }}">
                        @error('sedanservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate7') is-invalid @enderror" id="sedanprivate7"
                            name="sedanprivate7" value="{{ old('sedanprivate7', $data->sedanprivate7) }}">
                        @error('sedanprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice7') is-invalid @enderror" id="jeepservice7"
                            name="jeepservice7" value="{{ old('jeepservice7', $data->jeepservice7) }}">
                        @error('jeepservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate7') is-invalid @enderror" id="jeepprivate7"
                            name="jeepprivate7" value="{{ old('jeepprivate7', $data->jeepprivate7) }}">
                        @error('jeepprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice7') is-invalid @enderror" id="busservice7"
                            name="busservice7" value="{{ old('busservice7', $data->busservice7) }}">
                        @error('busservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate7') is-invalid @enderror" id="busprivate7"
                            name="busprivate7" value="{{ old('busprivate7', $data->busprivate7) }}">
                        @error('busprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice7') is-invalid @enderror"
                            id="ambulanceservice7" name="ambulanceservice7"
                            value="{{ old('ambulanceservice7', $data->ambulanceservice7) }}">
                        @error('ambulanceservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate7') is-invalid @enderror"
                            id="ambulanceprivate7" name="ambulanceprivate7"
                            value="{{ old('ambulanceprivate7', $data->ambulanceprivate7) }}">
                        @error('ambulanceprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice7') is-invalid @enderror"
                            id="fire_truckservice7" name="fire_truckservice7"
                            value="{{ old('fire_truckservice7', $data->fire_truckservice7) }}">
                        @error('fire_truckservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate7') is-invalid @enderror"
                            id="fire_truckprivate7" name="fire_truckprivate7"
                            value="{{ old('fire_truckprivate7', $data->fire_truckprivate7) }}">
                        @error('fire_truckprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice7') is-invalid @enderror" id="motorservice7"
                            name="motorservice7" value="{{ old('motorservice7', $data->motorservice7) }}">
                        @error('motorservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate7') is-invalid @enderror" id="motorprivate7"
                            name="motorprivate7" value="{{ old('motorprivate7', $data->motorprivate7) }}">
                        @error('motorprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate7') is-invalid @enderror" id="ojekprivate7"
                            name="ojekprivate7" value="{{ old('ojekprivate7', $data->ojekprivate7) }}">
                        @error('ojekprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice7') is-invalid @enderror" id="ojekservice7"
                            name="ojekservice7" value="{{ old('ojekservice7', $data->ojekservice7) }}">
                        @error('ojekservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice7') is-invalid @enderror" id="bemorservice7"
                            name="bemorservice7" value="{{ old('bemorservice7', $data->bemorservice7) }}">
                        @error('bemorservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate7') is-invalid @enderror" id="bemorprivate7"
                            name="bemorprivate7" value="{{ old('bemorprivate7', $data->bemorprivate7) }}">
                        @error('bemorprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice7') is-invalid @enderror"
                            id="pedicabservice7" name="pedicabservice7"
                            value="{{ old('pedicabservice7', $data->pedicabservice7) }}">
                        @error('pedicabservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate7') is-invalid @enderror"
                            id="pedicabprivate7" name="pedicabprivate7"
                            value="{{ old('pedicabprivate7', $data->pedicabprivate7) }}">
                        @error('pedicabprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice7') is-invalid @enderror" id="pickupservice7"
                            name="pickupservice7" value="{{ old('pickupservice7', $data->pickupservice7) }}">
                        @error('pickupservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate7') is-invalid @enderror" id="pickupprivate7"
                            name="pickupprivate7" value="{{ old('pickupprivate7', $data->pickupprivate7) }}">
                        @error('pickupprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice7') is-invalid @enderror"
                            id="large_truckservice7" name="large_truckservice7"
                            value="{{ old('large_truckservice7', $data->large_truckservice7) }}">
                        @error('large_truckservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate7') is-invalid @enderror"
                            id="large_truckprivate7" name="large_truckprivate7"
                            value="{{ old('large_truckprivate7', $data->large_truckprivate7) }}">
                        @error('large_truckprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice7') is-invalid @enderror"
                            id="tractorservice7" name="tractorservice7"
                            value="{{ old('tractorservice7', $data->tractorservice7) }}">
                        @error('tractorservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate7') is-invalid @enderror"
                            id="tractorprivate7" name="tractorprivate7"
                            value="{{ old('tractorprivate7', $data->tractorprivate7) }}">
                        @error('tractorprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice7') is-invalid @enderror" id="bikeservice7"
                            name="bikeservice7" value="{{ old('bikeservice7', $data->bikeservice7) }}">
                        @error('bikeservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate7') is-invalid @enderror" id="bikeprivate7"
                            name="bikeprivate7" value="{{ old('bikeprivate7', $data->bikeprivate7) }}">
                        @error('bikeprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice7') is-invalid @enderror" id="gigservice7"
                            name="gigservice7" value="{{ old('gigservice7', $data->gigservice7) }}">
                        @error('gigservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate7') is-invalid @enderror" id="gigprivate7"
                            name="gigprivate7" value="{{ old('gigprivate7', $data->gigprivate7) }}">
                        @error('gigprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice7') is-invalid @enderror" id="cartservice7"
                            name="cartservice7" value="{{ old('cartservice7', $data->cartservice7) }}">
                        @error('cartservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate7') is-invalid @enderror" id="cartprivate7"
                            name="cartprivate7" value="{{ old('cartprivate7', $data->cartprivate7) }}">
                        @error('cartprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice7') is-invalid @enderror"
                            id="mikroletservice7" name="mikroletservice7"
                            value="{{ old('mikroletservice7', $data->mikroletservice7) }}">
                        @error('mikroletservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate7') is-invalid @enderror"
                            id="mikroletprivate7" name="mikroletprivate7"
                            value="{{ old('mikroletprivate7', $data->mikroletprivate7) }}">
                        @error('mikroletprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice7') is-invalid @enderror"
                            id="truk_6_rodaservice7" name="truk_6_rodaservice7"
                            value="{{ old('truk_6_rodaservice7', $data->truk_6_rodaservice7) }}">
                        @error('truk_6_rodaservice7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate7') is-invalid @enderror"
                            id="truk_6_rodaprivate7" name="truk_6_rodaprivate7"
                            value="{{ old('truk_6_rodaprivate7', $data->truk_6_rodaprivate7) }}">
                        @error('truk_6_rodaprivate7')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">060. Marioriawa</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservice8') is-invalid @enderror" id="sedanservice8"
                            name="sedanservice8" value="{{ old('sedanservice8', $data->sedanservice8) }}">
                        @error('sedanservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivate8') is-invalid @enderror" id="sedanprivate8"
                            name="sedanprivate8" value="{{ old('sedanprivate8', $data->sedanprivate8) }}">
                        @error('sedanprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservice8') is-invalid @enderror" id="jeepservice8"
                            name="jeepservice8" value="{{ old('jeepservice8', $data->jeepservice8) }}">
                        @error('jeepservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivate8') is-invalid @enderror" id="jeepprivate8"
                            name="jeepprivate8" value="{{ old('jeepprivate8', $data->jeepprivate8) }}">
                        @error('jeepprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservice8') is-invalid @enderror" id="busservice8"
                            name="busservice8" value="{{ old('busservice8', $data->busservice8) }}">
                        @error('busservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivate8') is-invalid @enderror" id="busprivate8"
                            name="busprivate8" value="{{ old('busprivate8', $data->busprivate8) }}">
                        @error('busprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservice8') is-invalid @enderror"
                            id="ambulanceservice8" name="ambulanceservice8"
                            value="{{ old('ambulanceservice8', $data->ambulanceservice8) }}">
                        @error('ambulanceservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivate8') is-invalid @enderror"
                            id="ambulanceprivate8" name="ambulanceprivate8"
                            value="{{ old('ambulanceprivate8', $data->ambulanceprivate8) }}">
                        @error('ambulanceprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservice8') is-invalid @enderror"
                            id="fire_truckservice8" name="fire_truckservice8"
                            value="{{ old('fire_truckservice8', $data->fire_truckservice8) }}">
                        @error('fire_truckservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivate8') is-invalid @enderror"
                            id="fire_truckprivate8" name="fire_truckprivate8"
                            value="{{ old('fire_truckprivate8', $data->fire_truckprivate8) }}">
                        @error('fire_truckprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservice8') is-invalid @enderror" id="motorservice8"
                            name="motorservice8" value="{{ old('motorservice8', $data->motorservice8) }}">
                        @error('motorservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivate8') is-invalid @enderror" id="motorprivate8"
                            name="motorprivate8" value="{{ old('motorprivate8', $data->motorprivate8) }}">
                        @error('motorprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivate8') is-invalid @enderror" id="ojekprivate8"
                            name="ojekprivate8" value="{{ old('ojekprivate8', $data->ojekprivate8) }}">
                        @error('ojekprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservice8') is-invalid @enderror" id="ojekservice8"
                            name="ojekservice8" value="{{ old('ojekservice8', $data->ojekservice8) }}">
                        @error('ojekservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservice8') is-invalid @enderror" id="bemorservice8"
                            name="bemorservice8" value="{{ old('bemorservice8', $data->bemorservice8) }}">
                        @error('bemorservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivate8') is-invalid @enderror" id="bemorprivate8"
                            name="bemorprivate8" value="{{ old('bemorprivate8', $data->bemorprivate8) }}">
                        @error('bemorprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservice8') is-invalid @enderror"
                            id="pedicabservice8" name="pedicabservice8"
                            value="{{ old('pedicabservice8', $data->pedicabservice8) }}">
                        @error('pedicabservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivate8') is-invalid @enderror"
                            id="pedicabprivate8" name="pedicabprivate8"
                            value="{{ old('pedicabprivate8', $data->pedicabprivate8) }}">
                        @error('pedicabprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservice8') is-invalid @enderror" id="pickupservice8"
                            name="pickupservice8" value="{{ old('pickupservice8', $data->pickupservice8) }}">
                        @error('pickupservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivate8') is-invalid @enderror" id="pickupprivate8"
                            name="pickupprivate8" value="{{ old('pickupprivate8', $data->pickupprivate8) }}">
                        @error('pickupprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservice8') is-invalid @enderror"
                            id="large_truckservice8" name="large_truckservice8"
                            value="{{ old('large_truckservice8', $data->large_truckservice8) }}">
                        @error('large_truckservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivate8') is-invalid @enderror"
                            id="large_truckprivate8" name="large_truckprivate8"
                            value="{{ old('large_truckprivate8', $data->large_truckprivate8) }}">
                        @error('large_truckprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservice8') is-invalid @enderror"
                            id="tractorservice8" name="tractorservice8"
                            value="{{ old('tractorservice8', $data->tractorservice8) }}">
                        @error('tractorservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivate8') is-invalid @enderror"
                            id="tractorprivate8" name="tractorprivate8"
                            value="{{ old('tractorprivate8', $data->tractorprivate8) }}">
                        @error('tractorprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservice8') is-invalid @enderror" id="bikeservice8"
                            name="bikeservice8" value="{{ old('bikeservice8', $data->bikeservice8) }}">
                        @error('bikeservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivate8') is-invalid @enderror" id="bikeprivate8"
                            name="bikeprivate8" value="{{ old('bikeprivate8', $data->bikeprivate8) }}">
                        @error('bikeprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservice8') is-invalid @enderror" id="gigservice8"
                            name="gigservice8" value="{{ old('gigservice8', $data->gigservice8) }}">
                        @error('gigservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivate8') is-invalid @enderror" id="gigprivate8"
                            name="gigprivate8" value="{{ old('gigprivate8', $data->gigprivate8) }}">
                        @error('gigprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservice8') is-invalid @enderror" id="cartservice8"
                            name="cartservice8" value="{{ old('cartservice8', $data->cartservice8) }}">
                        @error('cartservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivate8') is-invalid @enderror" id="cartprivate8"
                            name="cartprivate8" value="{{ old('cartprivate8', $data->cartprivate8) }}">
                        @error('cartprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservice8') is-invalid @enderror"
                            id="mikroletservice8" name="mikroletservice8"
                            value="{{ old('mikroletservice8', $data->mikroletservice8) }}">
                        @error('mikroletservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivate8') is-invalid @enderror"
                            id="mikroletprivate8" name="mikroletprivate8"
                            value="{{ old('mikroletprivate8', $data->mikroletprivate8) }}">
                        @error('mikroletprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservice8') is-invalid @enderror"
                            id="truk_6_rodaservice8" name="truk_6_rodaservice8"
                            value="{{ old('truk_6_rodaservice8', $data->truk_6_rodaservice8) }}">
                        @error('truk_6_rodaservice8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivate8') is-invalid @enderror"
                            id="truk_6_rodaprivate8" name="truk_6_rodaprivate8"
                            value="{{ old('truk_6_rodaprivate8', $data->truk_6_rodaprivate8) }}">
                        @error('truk_6_rodaprivate8')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class=" ">Jumlah/Total</td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanservicet') is-invalid @enderror" id="sedanservicet"
                            name="sedanservicet" value="{{ old('sedanservicet', $data->sedanservicet) }}">
                        @error('sedanservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('sedanprivatet') is-invalid @enderror" id="sedanprivatet"
                            name="sedanprivatet" value="{{ old('sedanprivatet', $data->sedanprivatet) }}">
                        @error('sedanprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepservicet') is-invalid @enderror" id="jeepservicet"
                            name="jeepservicet" value="{{ old('jeepservicet', $data->jeepservicet) }}">
                        @error('jeepservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('jeepprivatet') is-invalid @enderror" id="jeepprivatet"
                            name="jeepprivatet" value="{{ old('jeepprivatet', $data->jeepprivatet) }}">
                        @error('jeepprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busservicet') is-invalid @enderror" id="busservicet"
                            name="busservicet" value="{{ old('busservicet', $data->busservicet) }}">
                        @error('busservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('busprivatet') is-invalid @enderror" id="busprivatet"
                            name="busprivatet" value="{{ old('busprivatet', $data->busprivatet) }}">
                        @error('busprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceservicet') is-invalid @enderror"
                            id="ambulanceservicet" name="ambulanceservicet"
                            value="{{ old('ambulanceservicet', $data->ambulanceservicet) }}">
                        @error('ambulanceservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ambulanceprivatet') is-invalid @enderror"
                            id="ambulanceprivatet" name="ambulanceprivatet"
                            value="{{ old('ambulanceprivatet', $data->ambulanceprivatet) }}">
                        @error('ambulanceprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckservicet') is-invalid @enderror"
                            id="fire_truckservicet" name="fire_truckservicet"
                            value="{{ old('fire_truckservicet', $data->fire_truckservicet) }}">
                        @error('fire_truckservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('fire_truckprivatet') is-invalid @enderror"
                            id="fire_truckprivatet" name="fire_truckprivatet"
                            value="{{ old('fire_truckprivatet', $data->fire_truckprivatet) }}">
                        @error('fire_truckprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorservicet') is-invalid @enderror" id="motorservicet"
                            name="motorservicet" value="{{ old('motorservicet', $data->motorservicet) }}">
                        @error('motorservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('motorprivatet') is-invalid @enderror" id="motorprivatet"
                            name="motorprivatet" value="{{ old('motorprivatet', $data->motorprivatet) }}">
                        @error('motorprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekprivatet') is-invalid @enderror" id="ojekprivatet"
                            name="ojekprivatet" value="{{ old('ojekprivatet', $data->ojekprivatet) }}">
                        @error('ojekprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('ojekservicet') is-invalid @enderror" id="ojekservicet"
                            name="ojekservicet" value="{{ old('ojekservicet', $data->ojekservicet) }}">
                        @error('ojekservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorservicet') is-invalid @enderror" id="bemorservicet"
                            name="bemorservicet" value="{{ old('bemorservicet', $data->bemorservicet) }}">
                        @error('bemorservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bemorprivatet') is-invalid @enderror" id="bemorprivatet"
                            name="bemorprivatet" value="{{ old('bemorprivatet', $data->bemorprivatet) }}">
                        @error('bemorprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabservicet') is-invalid @enderror"
                            id="pedicabservicet" name="pedicabservicet"
                            value="{{ old('pedicabservicet', $data->pedicabservicet) }}">
                        @error('pedicabservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pedicabprivatet') is-invalid @enderror"
                            id="pedicabprivatet" name="pedicabprivatet"
                            value="{{ old('pedicabprivatet', $data->pedicabprivatet) }}">
                        @error('pedicabprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupservicet') is-invalid @enderror" id="pickupservicet"
                            name="pickupservicet" value="{{ old('pickupservicet', $data->pickupservicet) }}">
                        @error('pickupservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('pickupprivatet') is-invalid @enderror" id="pickupprivatet"
                            name="pickupprivatet" value="{{ old('pickupprivatet', $data->pickupprivatet) }}">
                        @error('pickupprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckservicet') is-invalid @enderror"
                            id="large_truckservicet" name="large_truckservicet"
                            value="{{ old('large_truckservicet', $data->large_truckservicet) }}">
                        @error('large_truckservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('large_truckprivatet') is-invalid @enderror"
                            id="large_truckprivatet" name="large_truckprivatet"
                            value="{{ old('large_truckprivatet', $data->large_truckprivatet) }}">
                        @error('large_truckprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorservicet') is-invalid @enderror"
                            id="tractorservicet" name="tractorservicet"
                            value="{{ old('tractorservicet', $data->tractorservicet) }}">
                        @error('tractorservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('tractorprivatet') is-invalid @enderror"
                            id="tractorprivatet" name="tractorprivatet"
                            value="{{ old('tractorprivatet', $data->tractorprivatet) }}">
                        @error('tractorprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeservicet') is-invalid @enderror" id="bikeservicet"
                            name="bikeservicet" value="{{ old('bikeservicet', $data->bikeservicet) }}">
                        @error('bikeservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('bikeprivatet') is-invalid @enderror" id="bikeprivatet"
                            name="bikeprivatet" value="{{ old('bikeprivatet', $data->bikeprivatet) }}">
                        @error('bikeprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigservicet') is-invalid @enderror" id="gigservicet"
                            name="gigservicet" value="{{ old('gigservicet', $data->gigservicet) }}">
                        @error('gigservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('gigprivatet') is-invalid @enderror" id="gigprivatet"
                            name="gigprivatet" value="{{ old('gigprivatet', $data->gigprivatet) }}">
                        @error('gigprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>

                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartservicet') is-invalid @enderror" id="cartservicet"
                            name="cartservicet" value="{{ old('cartservicet', $data->cartservicet) }}">
                        @error('cartservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('cartprivatet') is-invalid @enderror" id="cartprivatet"
                            name="cartprivatet" value="{{ old('cartprivatet', $data->cartprivatet) }}">
                        @error('cartprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletservicet') is-invalid @enderror"
                            id="mikroletservicet" name="mikroletservicet"
                            value="{{ old('mikroletservicet', $data->mikroletservicet) }}">
                        @error('mikroletservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('mikroletprivatet') is-invalid @enderror"
                            id="mikroletprivatet" name="mikroletprivatet"
                            value="{{ old('mikroletprivatet', $data->mikroletprivatet) }}">
                        @error('mikroletprivatet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaservicet') is-invalid @enderror"
                            id="truk_6_rodaservicet" name="truk_6_rodaservicet"
                            value="{{ old('truk_6_rodaservicet', $data->truk_6_rodaservicet) }}">
                        @error('truk_6_rodaservicet')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="tg-cly1"><input type="text"
                            class="form-control @error('truk_6_rodaprivatet') is-invalid @enderror"
                            id="truk_6_rodaprivatet" name="truk_6_rodaprivatet"
                            value="{{ old('truk_6_rodaprivatet', $data->truk_6_rodaprivatet) }}">
                        @error('truk_6_rodaprivatet')
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
    <p>{{ $judultabel }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tabel</th>
                <th rowspan="2">10.1.6</th>
                <th colspan="7">T Banyaknya Kendaraan Dinas dan Pribadi Menurut Kecamatan dan Jenis Kendaraan di
                    Kabupaten Soppeng, 2022</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Table</th>
                <th colspan="7">Number of Personal and Private Vehicle by Subdistrict and Type of
                    Vehicle&nbsp;&nbsp;in Soppeng Regency, 2022</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2">Kecamatan/ Subdistrict</td>
                <td colspan="2">Sedan</td>
                <td colspan="2">Jeep</td>
                <td colspan="2">Bus</td>
                <td colspan="2">Ambulans/ Ambulance</td>
                <td colspan="2">Mobil Pemadam Kebakaran/ Fire Truck</td>
                <td colspan="2">Motor/ Motorcycle</td>
                <td colspan="2">Ojek/ Taxibike</td>
                <td colspan="2">Bemor/ Motor Cab</td>
                <td colspan="2">Becak/ Pedicab</td>
                <td colspan="2">Pick Up</td>
                <td colspan="2">Truk Besar/ Large Truck</td>
                <td colspan="2">Traktor/ Tractor</td>
                <td colspan="2">Sepeda/ Bike</td>
                <td colspan="2">Dokar/ Gig</td>
                <td colspan="2">Gerobak/ Cart</td>
                <td colspan="2">Mikrolet</td>
                <td colspan="2">Truk 6 Roda</td>
            </tr>
            <tr>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
                <td>Dinas/ private</td>
                <td>Pribadi/ Private</td>
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
                <td>(10)</td>
                <td>(11)</td>
                <td>(12)</td>
                <td>(13)</td>
                <td>(14)</td>
                <td>(15)</td>
                <td>(16)</td>
                <td>(17)</td>
                <td>(18)</td>
                <td>(19)</td>
                <td>(20)</td>
                <td>(21)</td>
                <td>(22)</td>
                <td>(23)</td>
                <td>(24)</td>
                <td>(25)</td>
                <td>(26)</td>
                <td>(27)</td>
                <td>(28)</td>
                <td>(29)</td>
                <td>(30)</td>
                <td>(31)</td>
                <td>(32)</td>
                <td>(33)</td>
                <td>(34)</td>
                <td>(35)</td>
            </tr>
            <tr>
                <td>010. Marioriwawo</td>
                <td colspan="5"> - </td>
                <td>&nbsp;&nbsp;93 </td>
                <td>&nbsp;&nbsp;5 </td>
                <td colspan="5">&nbsp;&nbsp;1 </td>
                <td> - </td>
                <td colspan="6">&nbsp;&nbsp;337 </td>
                <td>&nbsp;&nbsp;10 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;3 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;27 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;30 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;28 </td>
            </tr>
            <tr>
                <td>020. Lalabata</td>
                <td colspan="5">&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;176 </td>
                <td>&nbsp;&nbsp;47 </td>
                <td colspan="5">&nbsp;&nbsp;3 </td>
                <td> - </td>
                <td colspan="6">&nbsp;&nbsp;450 </td>
                <td>&nbsp;&nbsp;456 </td>
                <td>&nbsp;&nbsp;39 </td>
                <td>&nbsp;&nbsp;216 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;977 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;5 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;8 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;66 </td>
            </tr>
            <tr>
                <td>030. Liliriaja</td>
                <td> - </td>
                <td>&nbsp;&nbsp;7 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;41 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;78 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;43 </td>
                <td>&nbsp;&nbsp;7,435 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;298 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;141 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1,377 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;10 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;14 </td>
            </tr>
            <tr>
                <td colspan="2">031. Ganra</td>
                <td>&nbsp;&nbsp;3 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;7 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;48 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;40 </td>
                <td>&nbsp;&nbsp;3,361 </td>
                <td> - </td>
                <td>21</td>
                <td> - </td>
                <td>&nbsp;&nbsp;21 </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;94 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;38 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;350 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;10 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;21 </td>
            </tr>
            <tr>
                <td>032. Citta</td>
                <td> - </td>
                <td>&nbsp;&nbsp;3 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;56 </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;31 </td>
                <td>&nbsp;&nbsp;1,222 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1 </td>
                <td>&nbsp;&nbsp;36 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;9 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;378 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;9 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;7 </td>
            </tr>
            <tr>
                <td>040. Lilirilau</td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;15 </td>
                <td>&nbsp;&nbsp;4 </td>
                <td>&nbsp;&nbsp;1 </td>
                <td>&nbsp;&nbsp;1 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;58 </td>
                <td>&nbsp;&nbsp;11,122 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;125 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;125 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;27 </td>
                <td>&nbsp;&nbsp;1 </td>
                <td>&nbsp;&nbsp;493 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;179 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;7 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;6 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;72 </td>
            </tr>
            <tr>
                <td>050. Donri-Donri</td>
                <td> - </td>
                <td>&nbsp;&nbsp;4 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;57 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;83 </td>
                <td>&nbsp;&nbsp;5,776 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;4 </td>
                <td>&nbsp;&nbsp;158 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;128 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1,363 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;12 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;5 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;22 </td>
            </tr>
            <tr>
                <td>060. Marioriawa</td>
                <td> - </td>
                <td>&nbsp;&nbsp;12 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;30 </td>
                <td>&nbsp;&nbsp;2 </td>
                <td>&nbsp;&nbsp;15 </td>
                <td>&nbsp;&nbsp;3 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;46 </td>
                <td>&nbsp;&nbsp;6,677 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;55 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;133 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;20 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;181 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;122 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1,490 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;20 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;15 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;25 </td>
            </tr>
            <tr>
                <td>Jumlah/Total</td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;94 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;240 </td>
                <td>&nbsp;&nbsp;84 </td>
                <td>&nbsp;&nbsp;538 </td>
                <td>&nbsp;&nbsp;58 </td>
                <td>&nbsp;&nbsp;3 </td>
                <td>&nbsp;&nbsp;11 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;1,835 </td>
                <td>&nbsp;&nbsp;54,657 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;988 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;279 </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;37 </td>
                <td>&nbsp;&nbsp;1,726 </td>
                <td>&nbsp;&nbsp;39 </td>
                <td>&nbsp;&nbsp;836 </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td>&nbsp;&nbsp;5,977 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;59 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;8 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;100 </td>
                <td> - </td>
                <td>&nbsp;&nbsp;255 </td>
            </tr>
        </tbody>
    </table>
@endif
@section('script')
    {{-- script disini --}}
    @include('tabel.skpd.012_Perhubungan.script2')
@endsection
