<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pedas - BPS Soppeng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/home-assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="home-css/styles.css" rel="stylesheet" />

</head>

<body id="page-top">
    <div class="col-md-5 justify-content-center">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->has('session_expired'))
            <div class="alert alert-danger">
                {{ $errors->first('session_expired') }}
            </div>
        @endif
        @if ($errors->has('session_expired'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first('session_expired') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Pendaftaran Gagal!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h2>Selamat Datang di Website Pengumpulan Data Statistik BPS Soppeng</h2>
        @if ($errors->has('failed'))
            <div class="container right-panel-active" id="container">
            @else
                <div class="container" id="container">
        @endif
        <div class="form-container sign-up-container">
            <form action="/register" method="POST">
                @csrf
                <h1>Buat Akun</h1>
                <div class="social-container">

                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>

                <input type="name  @error('name') is-invalid @enderror" name="name" class="form-control  "
                    id="name" placeholder="Nama" autofocus required value="{{ old('name') }}" />
                <input type="username  @error('username') is-invalid @enderror" name="username" class="form-control  "
                    id="username" placeholder="Username" required value="{{ old('username') }}" />
                <input type="email  @error('email') is-invalid @enderror" name="email" class="form-control  "
                    id="email" placeholder="E-mail" required value="{{ old('email') }}" />
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                    required />
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/login" method="post">
                @csrf
                <h1>Masuk</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <input type="username  @error('username') is-invalid @enderror" name="username"
                    class="form-control  " id="username" placeholder="Username" autofocus required
                    value="{{ Cookie::get('last_username'), old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                    required>
                <a href="#">Lupa password?</a>
                <button type="submit">Masuk</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat datang!</h1>
                    <p>Klik Tombol di bawah jika kamu <strong class="font-weight-bold"> sudah</strong> terdaftar.</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Selamat datang!</h1>
                    <p>Klik Tombol di bawah jika kamu <strong class="font-weight-bold"> belum</strong> terdaftar.</p>
                    <button class="ghost" id="signUp">Mendaftar</button>
                </div>
            </div>
        </div>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="home-js/scripts.js"></script>

</body>

</html>
