@props(['data'])
@props(['judultabel'])
@props(['judultabelen'])

@isset($tabel1)
    <form action="/user/update/{{ $data->tipetabel }}/{{ $data->kodetabel }}"method="post" enctype="multipart/form-data">
        @csrf
        {{-- tabel disini --}}
        <p>{{ $judultabel }}</p>
        {{ $tabel1 }}

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
@endisset
{{-- tabel kosongan disini --}}
@isset($tabel2)
    <p>{{ $judultabel }}</p>
    {{ $tabel2 }}
@endisset

@section('script')
    {{-- script disini --}}
    @isset($script)
        {{ $script }}
    @endisset
@endsection
