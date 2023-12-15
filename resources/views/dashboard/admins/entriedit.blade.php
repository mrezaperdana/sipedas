@extends('dashboard.users.layouts.user-dashboard')
@section('title', 'Edit')
@section('content')

    {{-- @dd($data) --}}
    <!-- About Me Box -->
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informasi Umum</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{-- @dd($tipetabel) --}}
                @include($tipetabel)
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->

@endsection
