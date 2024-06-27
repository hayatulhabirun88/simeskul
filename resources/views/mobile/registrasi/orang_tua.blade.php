<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrasi | Simeskul</title>
    <meta name="Googlebot" content="noindex" />
    <meta name="description"
        content="Carce is an exclusive ecommerce mobile app template with 2 distinct layouts. This superb mobile app template for ecommerce embodies a professional-looking mobile website design while providing tons of features.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{ asset('/') }}carce/carce/assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All Google Fonts::::::::::::::-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/vendor/icomoon.css" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/plugins/ion.rangeSlider.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="{{ asset('/') }}carce/carce/assets/css/style.min.css"> -->

</head>

<body>

    <main class="main-wrapper">

        <!-- ...:::Start Login Section:::... -->
        <div class="login-section mt-115">
            <br><br>
            <div class="container">
                <!-- Start User Event Area -->
                <div class="login-wrapper">
                    <div class="section-content">
                        <h1 class="title">Registrasi sebagai Orang Tua Siswa</h1>
                        <p>Registrasikan akun anda dengan cara mengisi form dibawah ini.</p>
                    </div>
                    <form action="{{ route('mobile.registrasi.proses.orangtua') }}" class="default-form-wrapper"
                        method="post">
                        @csrf
                        <ul class="default-form-list">
                            <li class="single-form-item">
                                <label for="nama_lengkap" class="visually-hidden">Nama Lengkap</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap"
                                    value="{{ old('nama_lengkap') }}">
                                <span class="icon"><i class="icon icon-carce-user"></i></span>
                                @error('nama_lengkap')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="pekerjaan" class="visually-hidden">Pekerjaan</label>
                                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan"
                                    value="{{ old('pekerjaan') }}">
                                <span class="icon"><i class="icon icon-carce-user"></i></span>
                                @error('pekerjaan')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="alamat" class="visually-hidden">Alamat</label>
                                <input type="text" id="alamat" name="alamat" placeholder="Alamat"
                                    value="{{ old('alamat') }}">
                                <span class="icon">
                                    <i class="icon icon-carce-user"></i>
                                </span>
                                @error('alamat')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="no_hp" class="visually-hidden">No HP</label>
                                <input type="text" id="no_hp" name="no_hp" placeholder="No HP"
                                    value="{{ old('no_hp') }}">
                                <span class="icon">
                                    <i class="icon icon-carce-user"></i>
                                </span>
                                @error('no_hp')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="siswa" class="visually-hidden">siswa</label>
                                <select
                                    style="border: 2px solid #e2e7ea;border-radius: 10px;padding: 18px 25px 18px 80px;width: -webkit-fill-available; background-color:white; font-size: 14px;width: 100%;"
                                    name="siswa" id="siswa">
                                    <option value="">Pilih Siswa</option>
                                    @foreach ($siswa as $sis)
                                        <option value="{{ $sis->id }}"
                                            {{ old('siswa') == $sis->id ? 'selected' : '' }}>
                                            {{ $sis->nama_lengkap }} | Kelas:{{ $sis->kelas }}</option>
                                    @endforeach
                                </select>
                                <span class="icon">
                                    <i class="icon icon-carce-user"></i>
                                </span>
                                @error('siswa')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>

                            <li class="single-form-item">
                                <label for="email" class="visually-hidden">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}">
                                <span class="icon"><i class="icon icon-carce-mail"></i></span>
                                @error('email')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="password" class="visually-hidden">Password</label>
                                <input type="password" id="password" name="password" placeholder="Password">
                                <span class="icon"><i class="icon icon-carce-eye"></i></span>
                                @error('password')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="password_confirmation" class="visually-hidden">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Konfirmasi Password">
                                <span class="icon"><i class="icon icon-carce-eye"></i></span>
                                @error('password_confirmation')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                        </ul>
                        <input type="submit" name="submit" value="DAFTAR"
                            class="btn btn--block btn--radius btn--size-xlarge btn--color-white btn--bg-maya-blue text-center register-space-top"
                            style="width: 100%">
                    </form>
                </div>

                <div class="sign-account-text text-center">Sudah memiliki akun? <a href="/mobile/login"
                        class="btn--color-radical-red">Login</a></div>
                <!-- End User Event Area -->
            </div>
        </div><br><br>
        <!-- ...:::End User Event Section:::... -->

    </main>

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor -->
    <script src="{{ asset('/') }}carce/carce/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="{{ asset('/') }}carce/carce/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}carce/carce/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{ asset('/') }}carce/carce/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}carce/carce/assets/js/plugins/ion.rangeSlider.min.js"></script>

    <!-- Minify Version -->
    <!-- <script src="{{ asset('/') }}carce/carce/assets/js/vendor.min.js"></script>
    <script src="{{ asset('/') }}carce/carce/assets/js/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{ asset('/') }}carce/carce/assets/js/main.js"></script>
    <!-- <script src="{{ asset('/') }}carce/carce/assets/js/main.min.js"></script> -->
    <script>
        $(document).ready(function() {
            document.addEventListener('DOMContentLoaded', function() {
                var dateInputs = document.querySelectorAll('input[type="date"]');

                dateInputs.forEach(function(input) {
                    if (!input.value) {
                        input.classList.add('placeholder-visible');
                    }

                    input.addEventListener('change', function() {
                        if (input.value) {
                            input.classList.remove('placeholder-visible');
                        } else {
                            input.classList.add('placeholder-visible');
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
