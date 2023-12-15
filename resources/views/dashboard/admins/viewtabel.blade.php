@extends('dashboard.admins.layouts.admin-dashboard')
@section('title', 'View Tabel')
@section('content')

    {{-- @dd($data) --}}
    <!-- About Me Box -->
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Kerangka Tabel {{ $kodetabel }} / {{ $daftartabel->judultabel }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @include($tipetabel)
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->

@endsection
