@extends('dashboard.users.layouts.user-dashboard')
@section('title', 'Profile')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle user_picture"
                                    src="{{ Auth::user()->picture }}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center user_name">{{ Auth::user()->name }}</h3>
                            <p class="text-muted text-center">{{ $namainstansi }}</p>
                            <input type="file" name="user_image" id="user_image"
                                style="opacity: 0;height:1px;display:none">
                            <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"> <b>Ganti
                                    Foto</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Instansi</strong>
                            <p class="text-muted">{{ $namainstansi }}</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Status </strong>
                            <p class="text-muted">
                                <span class="tag tag-danger">Aktif, </span>
                                <span class="tag tag-success">User</span>

                            </p>
                            <hr>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#profil" data-toggle="tab">Profil</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah
                                        Password</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="profil">
                                    <form class="form-horizontal" method="POST" action="{{ route('UserUpdateInfo') }}"
                                        id="UserInfoForm">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    id="username" name="username"
                                                    value="{{ old('username', Auth::user()->username) }}">
                                                <span class="text-danger error-text username_error">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" value="{{ old('username', Auth::user()->email) }}">
                                                <span class="text-danger error-text email_error">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                    name="name" value="{{ old('username', Auth::user()->name) }}">
                                                <span class="text-danger error-text name_error">

                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nohp" class="col-sm-2 col-form-label">No. Handphone/
                                                Whatsapp</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('nohp') is-invalid @enderror" id="nohp"
                                                    name="nohp" value="{{ old('username', Auth::user()->nohp) }}">
                                                <span class="text-danger error-text nohp_error">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Simpan</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal" action="{{ route('UserChangePassword') }}" method="post"
                                        id="ChangePasswordUserForm">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="oldpassword" class="col-sm-2 col-form-label">Password
                                                lama</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="oldpassword"
                                                    placeholder="Password lama" name="oldpassword">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="newpassword" class="col-sm-2 col-form-label">Password
                                                baru</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="newpassword"
                                                    placeholder="Password baru" name="newpassword">
                                                <span class="text-danger error-text newpassword_error"></span>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cnewpassword" class="col-sm-2 col-form-label">Konfirmasi
                                                password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="cnewpassword"
                                                    placeholder="Konfirmasi password" name="cnewpassword">
                                                <span class="text-danger error-text cnewpassword_error"></span>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            // Update Detail User
            $('#UserInfoForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $.each(data.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });

                        } else {
                            $('.user_name').each(function() {
                                $(this).html($('#UserInfoForm').find($(
                                    'input[name="name"]')).val());
                            });
                            alert(data.msg);
                        }
                    }
                });
            });
            $(document).on('click', '#change_picture_btn', function() {
                $('#user_image').click();
            });


            $('#user_image').ijaboCropTool({
                preview: '.user_picture',
                setRatio: 1,
                allowedExtensions: ['jpg', 'jpeg', 'png'],
                buttonsText: ['CROP', 'Kembali'],
                buttonsColor: ['#30bf7d', '#ee5155', -15],
                processUrl: '{{ route('UserUpdatePicture') }}',
                onSuccess: function(message, element, status) {
                    alert(message);
                },
                onError: function(message, element, status) {
                    alert(message);
                }
            });

            $('#ChangePasswordUserForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $.each(data.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });

                        } else {
                            $('#ChangePasswordUserForm')[0].reset();
                            alert(data.msg);
                        }
                    }
                });
            });

        });
    </script>
@endsection
