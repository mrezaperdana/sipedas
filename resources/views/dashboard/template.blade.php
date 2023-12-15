php artisan make:model /Tables/T004001 -m
php artisan make:model /Tables/T004002 -m
php artisan make:model /Tables/T004003 -m
php artisan make:model /Tables/T027004 -m
php artisan make:model /Tables/T027005 -m
php artisan make:model /Tables/T045006 -m
php artisan make:model /Tables/T045007 -m
php artisan make:model /Tables/T045008 -m
php artisan make:model /Tables/T045009 -m
a
<x-tabel-entri-view :data="$data" :judultabel="$judultabel" :judultabelen="$judultabelen">
    @if (!empty($data))
        <x-slot name="tabel1">
            {{-- //tabel 1 disini --}}

        </x-slot>
    @else
        <x-slot name="tabel2">
            {{-- //tabel 2 disini --}}

        </x-slot>
    @endif
    <x-slot name="script">
        {{-- //script disini --}}

    </x-slot>
</x-tabel-entri-view>
{{-- input nomor --}}
{{ $judultabel }}, {{ $data->tahun }}
{{ $judultabelen }}, {{ $data->tahun }}

<td class="tg-cly1"><input type="text" class="form-control @error('blindganti') is-invalid @enderror" id="blindganti"
        name="blindganti" value="{{ old('blindganti', $data->blindganti) }}">
    @error('blindganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('deafganti') is-invalid @enderror" id="deafganti"
        name="deafganti" value="{{ old('deafganti', $data->deafganti) }}">
    @error('deafganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('mentally_disabledganti') is-invalid @enderror"
        id="mentally_disabledganti" name="mentally_disabledganti"
        value="{{ old('mentally_disabledganti', $data->mentally_disabledganti) }}">
    @error('mentally_disabledganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('disabledganti') is-invalid @enderror"
        id="disabledganti" name="disabledganti" value="{{ old('disabledganti', $data->disabledganti) }}">
    @error('disabledganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('multiple_dissabilityganti') is-invalid @enderror"
        id="multiple_dissabilityganti" name="multiple_dissabilityganti"
        value="{{ old('multiple_dissabilityganti', $data->multiple_dissabilityganti) }}">
    @error('multiple_dissabilityganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>

<td class="tg-cly1"><input type="text" class="form-control @error('ubahganti') is-invalid @enderror" id="ubahganti"
        name="ubahganti" value="{{ old('ubahganti', $data->ubahganti) }}">
    @error('ubahganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('datarganti') is-invalid @enderror" id="datarganti"
        name="datarganti" value="{{ old('datarganti', $data->datarganti) }}">
    @error('datarganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bukitganti') is-invalid @enderror" id="bukitganti"
        name="bukitganti" value="{{ old('bukitganti', $data->bukitganti) }}">
    @error('bukitganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('pantaiganti') is-invalid @enderror"
        id="pantaiganti" name="pantaiganti" value="{{ old('pantaiganti', $data->pantaiganti) }}">
    @error('pantaiganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bukanpantaiganti') is-invalid @enderror"
        id="bukanpantaiganti" name="bukanpantaiganti" value="{{ old('bukanpantaiganti', $data->bukanpantaiganti) }}">
    @error('bukanpantaiganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>

<td class="tg-cly1"><input type="text" class="form-control @error('ubahganti') is-invalid @enderror" id="ubahganti"
        name="ubahganti" value="{{ old('ubahganti', $data->ubahganti) }}">
    @error('ubahganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('datarganti') is-invalid @enderror"
        id="datarganti" name="datarganti" value="{{ old('datarganti', $data->datarganti) }}">
    @error('datarganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bukitganti') is-invalid @enderror"
        id="bukitganti" name="bukitganti" value="{{ old('bukitganti', $data->bukitganti) }}">
    @error('bukitganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('pantaiganti') is-invalid @enderror"
        id="pantaiganti" name="pantaiganti" value="{{ old('pantaiganti', $data->pantaiganti) }}">
    @error('pantaiganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bukanpantaiganti') is-invalid @enderror"
        id="bukanpantaiganti" name="bukanpantaiganti"
        value="{{ old('bukanpantaiganti', $data->bukanpantaiganti) }}">
    @error('bukanpantaiganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>

<td class="tg-cly1"><input type="number" step="0.01"
        class="form-control @error('ubahganti') is-invalid @enderror" id="ubahganti" name="ubahganti"
        value="{{ old('ubahganti', $data->ubahganti) }}">
    @error('ubahganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="number" step="0.01"
        class="form-control @error('obyekganti') is-invalid @enderror" id="obyekganti" name="obyekganti"
        value="{{ old('obyekganti', $data->obyekganti) }}">
    @error('obyekganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="number" step="0.01"
        class="form-control @error('obyekganti') is-invalid @enderror" id="obyekganti" name="obyekganti"
        value="{{ old('obyekganti', $data->obyekganti) }}">
    @error('obyekganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
{{ $data->tahun }}
@include('tabel.catatan')

<td class="tg-cly1"><input type="number" step="0.01"
        class="form-control @error('ubahganti') is-invalid @enderror" id="ubahganti" name="ubahganti"
        value="{{ old('ubahganti', $data->ubahganti) }}">
    @error('ubahganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="number" step="0.01" class="form-control @error('laba1') is-invalid @enderror"
        id="laba1" name="laba1" value="{{ old('laba1', $data->laba1) }}">
    @error('laba1')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>

<script>
    function sumobyeks() {
        var obyek1 = parseFloat(document.getElementById('obyek1').value) || 0;
        var obyek2 = parseFloat(document.getElementById('obyek2').value) || 0;
        var obyek3 = parseFloat(document.getElementById('obyek3').value) || 0;
        var obyek4 = parseFloat(document.getElementById('obyek4').value) || 0;
        var obyek5 = parseFloat(document.getElementById('obyek5').value) || 0;
        var obyek6 = parseFloat(document.getElementById('obyek6').value) || 0;
        var obyek7 = parseFloat(document.getElementById('obyek7').value) || 0;

        var obyekSum = parseFloat(obyek1) + parseFloat(obyek2) + parseFloat(obyek3) + parseFloat(obyek4) +
            parseFloat(
                obyek5) + parseFloat(obyek6) + parseFloat(obyek7);

        document.getElementById('obyekt').value = obyekSum;
    }

    document.getElementById('obyek1').addEventListener('focusout', sumobyeks);
    document.getElementById('obyek2').addEventListener('focusout', sumobyeks);
    document.getElementById('obyek3').addEventListener('focusout', sumobyeks);
    document.getElementById('obyek4').addEventListener('focusout', sumobyeks);
    document.getElementById('obyek5').addEventListener('focusout', sumobyeks);
    document.getElementById('obyek6').addEventListener('focusout', sumobyeks);
    document.getElementById('obyek7').addEventListener('focusout', sumobyeks);
</script>

<script>
    function sumjumlahs() {
        var jumlah1 = document.getElementById('jumlah1').value || 0;
        var jumlah2 = document.getElementById('jumlah2').value || 0;
        var jumlah3 = document.getElementById('jumlah3').value || 0;
        var jumlah4 = document.getElementById('jumlah4').value || 0;
        var jumlah5 = document.getElementById('jumlah5').value || 0;

        var jumlahSum = parseInt(jumlah1) + parseInt(jumlah2) + parseInt(jumlah3) + parseInt(
            jumlah4) + parseInt(
            jumlah5);

        document.getElementById('jumlaht').value = jumlahSum;
    }

    document.getElementById('jumlah1').addEventListener('focusout', sumjumlahs);
    document.getElementById('jumlah2').addEventListener('focusout', sumjumlahs);
    document.getElementById('jumlah3').addEventListener('focusout', sumjumlahs);
    document.getElementById('jumlah4').addEventListener('focusout', sumjumlahs);
    document.getElementById('jumlah5').addEventListener('focusout', sumjumlahs);
</script>

<script>
    function sumnilais() {
        var nilai1 = document.getElementById('nilai1').value || 0;
        var nilai2 = document.getElementById('nilai2').value || 0;
        var nilai3 = document.getElementById('nilai3').value || 0;
        var nilai4 = document.getElementById('nilai4').value || 0;
        var nilai5 = document.getElementById('nilai5').value || 0;

        var nilaiSum = parseInt(nilai1) + parseInt(nilai2) + parseInt(nilai3) + parseInt(
            nilai4) + parseInt(
            nilai5);

        document.getElementById('nilait').value = nilaiSum;
    }

    document.getElementById('nilai1').addEventListener('focusout', sumnilais);
    document.getElementById('nilai2').addEventListener('focusout', sumnilais);
    document.getElementById('nilai3').addEventListener('focusout', sumnilais);
    document.getElementById('nilai4').addEventListener('focusout', sumnilais);
    document.getElementById('nilai5').addEventListener('focusout', sumnilais);
</script>

@if (!empty($data))
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post"
        enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}

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
@endsection

<td class="tg-cly1"><input type="text" class="form-control @error('sedanprivateganti') is-invalid @enderror"
        id="sedanprivateganti" name="sedanprivateganti"
        value="{{ old('sedanprivateganti', $data->sedanprivateganti) }}">
    @error('sedanprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('jeepprivateganti') is-invalid @enderror"
        id="jeepprivateganti" name="jeepprivateganti"
        value="{{ old('jeepprivateganti', $data->jeepprivateganti) }}">
    @error('jeepprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('busprivateganti') is-invalid @enderror"
        id="busprivateganti" name="busprivateganti" value="{{ old('busprivateganti', $data->busprivateganti) }}">
    @error('busprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('ambulanceprivateganti') is-invalid @enderror"
        id="ambulanceprivateganti" name="ambulanceprivateganti"
        value="{{ old('ambulanceprivateganti', $data->ambulanceprivateganti) }}">
    @error('ambulanceprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
</tr>
<td class="tg-cly1"><input type="text" class="form-control @error('fire_truckprivateganti') is-invalid @enderror"
        id="fire_truckprivateganti" name="fire_truckprivateganti"
        value="{{ old('fire_truckprivateganti', $data->fire_truckprivateganti) }}">
    @error('fire_truckprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('motorprivateganti') is-invalid @enderror"
        id="motorprivateganti" name="motorprivateganti"
        value="{{ old('motorprivateganti', $data->motorprivateganti) }}">
    @error('motorprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('ojekprivateganti') is-invalid @enderror"
        id="ojekprivateganti" name="ojekprivateganti"
        value="{{ old('ojekprivateganti', $data->ojekprivateganti) }}">
    @error('ojekprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bemorprivateganti') is-invalid @enderror"
        id="bemorprivateganti" name="bemorprivateganti"
        value="{{ old('bemorprivateganti', $data->bemorprivateganti) }}">
    @error('bemorprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('pedicabprivateganti') is-invalid @enderror"
        id="pedicabprivateganti" name="pedicabprivateganti"
        value="{{ old('pedicabprivateganti', $data->pedicabprivateganti) }}">
    @error('pedicabprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('pickupprivateganti') is-invalid @enderror"
        id="pickupprivateganti" name="pickupprivateganti"
        value="{{ old('pickupprivateganti', $data->pickupprivateganti) }}">
    @error('pickupprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text"
        class="form-control @error('large_truckprivateganti') is-invalid @enderror" id="large_truckprivateganti"
        name="large_truckprivateganti" value="{{ old('large_truckprivateganti', $data->large_truckprivateganti) }}">
    @error('large_truckprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('tractorprivateganti') is-invalid @enderror"
        id="tractorprivateganti" name="tractorprivateganti"
        value="{{ old('tractorprivateganti', $data->tractorprivateganti) }}">
    @error('tractorprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bikeprivateganti') is-invalid @enderror"
        id="bikeprivateganti" name="bikeprivateganti"
        value="{{ old('bikeprivateganti', $data->bikeprivateganti) }}">
    @error('bikeprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('gigprivateganti') is-invalid @enderror"
        id="gigprivateganti" name="gigprivateganti" value="{{ old('gigprivateganti', $data->gigprivateganti) }}">
    @error('gigprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>

<td class="tg-cly1"><input type="text" class="form-control @error('cartprivateganti') is-invalid @enderror"
        id="cartprivateganti" name="cartprivateganti"
        value="{{ old('cartprivateganti', $data->cartprivateganti) }}">
    @error('cartprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('mikroletprivateganti') is-invalid @enderror"
        id="mikroletprivateganti" name="mikroletprivateganti"
        value="{{ old('mikroletprivateganti', $data->mikroletprivateganti) }}">
    @error('mikroletprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text"
        class="form-control @error('truk_6_rodaprivateganti') is-invalid @enderror" id="truk_6_rodaprivateganti"
        name="truk_6_rodaprivateganti" value="{{ old('truk_6_rodaprivateganti', $data->truk_6_rodaprivateganti) }}">
    @error('truk_6_rodaprivateganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('sedanserviceganti') is-invalid @enderror"
        id="sedanserviceganti" name="sedanserviceganti"
        value="{{ old('sedanserviceganti', $data->sedanserviceganti) }}">
    @error('sedanserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('jeepserviceganti') is-invalid @enderror"
        id="jeepserviceganti" name="jeepserviceganti"
        value="{{ old('jeepserviceganti', $data->jeepserviceganti) }}">
    @error('jeepserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('busserviceganti') is-invalid @enderror"
        id="busserviceganti" name="busserviceganti" value="{{ old('busserviceganti', $data->busserviceganti) }}">
    @error('busserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('ambulanceserviceganti') is-invalid @enderror"
        id="ambulanceserviceganti" name="ambulanceserviceganti"
        value="{{ old('ambulanceserviceganti', $data->ambulanceserviceganti) }}">
    @error('ambulanceserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
</tr>
<td class="tg-cly1"><input type="text" class="form-control @error('fire_truckserviceganti') is-invalid @enderror"
        id="fire_truckserviceganti" name="fire_truckserviceganti"
        value="{{ old('fire_truckserviceganti', $data->fire_truckserviceganti) }}">
    @error('fire_truckserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('motorserviceganti') is-invalid @enderror"
        id="motorserviceganti" name="motorserviceganti"
        value="{{ old('motorserviceganti', $data->motorserviceganti) }}">
    @error('motorserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('ojekserviceganti') is-invalid @enderror"
        id="ojekserviceganti" name="ojekserviceganti"
        value="{{ old('ojekserviceganti', $data->ojekserviceganti) }}">
    @error('ojekserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bemorserviceganti') is-invalid @enderror"
        id="bemorserviceganti" name="bemorserviceganti"
        value="{{ old('bemorserviceganti', $data->bemorserviceganti) }}">
    @error('bemorserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('pedicabserviceganti') is-invalid @enderror"
        id="pedicabserviceganti" name="pedicabserviceganti"
        value="{{ old('pedicabserviceganti', $data->pedicabserviceganti) }}">
    @error('pedicabserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('pickupserviceganti') is-invalid @enderror"
        id="pickupserviceganti" name="pickupserviceganti"
        value="{{ old('pickupserviceganti', $data->pickupserviceganti) }}">
    @error('pickupserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text"
        class="form-control @error('large_truckserviceganti') is-invalid @enderror" id="large_truckserviceganti"
        name="large_truckserviceganti" value="{{ old('large_truckserviceganti', $data->large_truckserviceganti) }}">
    @error('large_truckserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('tractorserviceganti') is-invalid @enderror"
        id="tractorserviceganti" name="tractorserviceganti"
        value="{{ old('tractorserviceganti', $data->tractorserviceganti) }}">
    @error('tractorserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('bikeserviceganti') is-invalid @enderror"
        id="bikeserviceganti" name="bikeserviceganti"
        value="{{ old('bikeserviceganti', $data->bikeserviceganti) }}">
    @error('bikeserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('gigserviceganti') is-invalid @enderror"
        id="gigserviceganti" name="gigserviceganti" value="{{ old('gigserviceganti', $data->gigserviceganti) }}">
    @error('gigserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>

<td class="tg-cly1"><input type="text" class="form-control @error('cartserviceganti') is-invalid @enderror"
        id="cartserviceganti" name="cartserviceganti"
        value="{{ old('cartserviceganti', $data->cartserviceganti) }}">
    @error('cartserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text" class="form-control @error('mikroletserviceganti') is-invalid @enderror"
        id="mikroletserviceganti" name="mikroletserviceganti"
        value="{{ old('mikroletserviceganti', $data->mikroletserviceganti) }}">
    @error('mikroletserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
<td class="tg-cly1"><input type="text"
        class="form-control @error('truk_6_rodaserviceganti') is-invalid @enderror" id="truk_6_rodaserviceganti"
        name="truk_6_rodaserviceganti" value="{{ old('truk_6_rodaserviceganti', $data->truk_6_rodaserviceganti) }}">
    @error('truk_6_rodaserviceganti')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</td>
