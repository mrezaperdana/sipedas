@extends('dashboard.admins.layouts.admin-dashboard')
@section('title', 'Beranda')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-success">
                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Selesai</span>
                    <span class="info-box-number">{{ $selesai }}</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        <a href="{{ route('admin.dashboard.DaftarEntri') }}" class="info-box-text"
                            style="color: inherit; text-decoration: underline;">Lihat
                            selengkapnya</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-warning">
                <span class="info-box-icon"><i class="fa fa-exclamation-triangle "></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Belum Selesai</span>
                    <span class="info-box-number">{{ $belum }}</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        <a href="{{ route('admin.dashboard.DaftarEntri') }}" class="info-box-text"
                            style="color: inherit; text-decoration: underline;">Lihat
                            selengkapnya</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-danger">
                <span class="info-box-icon"><i class="fa fa-times"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Belum Terisi</span>
                    <span class="info-box-number">{{ $kosong }}</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        <a href="{{ route('admin.dashboard.DaftarEntri') }}" class="info-box-text"
                            style="color: inherit; text-decoration: underline;">Lihat
                            selengkapnya</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection
