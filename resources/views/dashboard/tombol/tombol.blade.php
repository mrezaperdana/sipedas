<div class="py-3 text-right">
    <button type="submit"class="btn  btn-success ">Simpan</button>
    @if (Auth::user()->role == 1)
        <a class="btn btn-info"href="{{ route('admin.dashboard.DaftarEntri') }}"role="button">Batal</a>
    @else
        <a class="btn btn-info"href="{{ route('user.dashboard.DaftarEntri') }}"role="button">Batal</a>
    @endif
</div>
