<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Setting | Simeskul</title>
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
</head>

<body>

    <main class="main-wrapper overflow-x-hidden">

        <!-- ...:::Start User Event Section:::... -->
        <div class="header-section">
            <div class="container">
                <br><br>
                <!-- Start User Event Area -->
                <div class="header-area">
                    <div class="header-top-area header-top-area--style-1">
                        <ul class="event-list">
                            <li class="list-item">
                            </li>
                            <li class="list-item">
                                <h2 class="title text-center">Setting</h2>
                            </li>
                            <li class="list-item">
                                <ul class="list-child">
                                    <li class="list-item">
                                        <span class="notch-bg notch-bg--emerald"></span>
                                        <a href="#profile-menu-offcanvas" area-label="User"
                                            class="btn btn--size-33-33 btn--center btn--round offcanvas-toggle offside-menu">
                                            <img class="img-fluid" height="33" width="33"
                                                src="{{ asset('/') }}carce/carce/assets/images/header-top-user-img.jpg"
                                                alt="user image"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End User Event Area -->
            </div>
        </div>
        <!-- ...:::End User Event Section:::... -->

        <!--  Start Offcanvas Mobile Menu Section -->
        <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header flex-end">

                <div class="logo">
                    <a href="index.html"><img class="img-fluid" width="147" height="26"
                            src="{{ asset('/') }}carce/carce/assets/images/logo.png" alt="image"></a>
                </div>

                <button class="offcanvas-close" aria-label="offcanvas svg icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.973" height="10.449" viewBox="0 0 5.973 10.449">
                        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                            d="M13.051,11.417,17,7.466a.747.747,0,0,0-1.058-1.054l-4.479,4.476a.745.745,0,0,0-.022,1.03l4.5,4.507A.747.747,0,1,0,17,15.37Z"
                            transform="translate(-11.251 -6.194)" />
                    </svg>
                </button>
            </div>
            <!-- End Offcanvas Header -->

            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            <li>
                                <a href="index.html"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="#"><span>Shop</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product.html">Product</a></li>
                                    <li><a href="shop-category.html">Shop Category</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="order.html">Order</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->

                <!-- Start Mobile contact Info -->
                <div class="mobile-contact-info">
                    <address class="address">
                        <span>Address: 4710-4890 Breckinridge St, Fayettevill</span>
                        <span>Call Us: (+800) 345 678, (+800) 123 456</span>
                        <span>Email: yourmail@mail.com</span>
                    </address>
                </div>
                <!-- End Mobile contact Info -->

            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

        <!--  Start Offcanvas Profile Menu Section -->
        <div id="profile-menu-offcanvas" class="offcanvas offcanvas-rightside">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header flex-start offcanvas-modify">
                <button class="offcanvas-close" aria-label="offcanvas svg icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.973" height="10.449" viewBox="0 0 5.973 10.449">
                        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                            d="M13.051,11.417,17,7.466a.747.747,0,0,0-1.058-1.054l-4.479,4.476a.745.745,0,0,0-.022,1.03l4.5,4.507A.747.747,0,1,0,17,15.37Z"
                            transform="translate(-11.251 -6.194)" />
                    </svg>
                </button>
                <span>Home</span>

            </div> <!-- End Offcanvas Header -->
            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-profile-menu-wrapper">
                <!-- ...:::Start Profile Card Section:::... -->
                <div class="profile-card-section section-gap-top-25">
                    <div class="profile-card-wrapper">
                        <div class="image">
                            <img class="img-fluid" width="96" height="96"
                                src="{{ asset('/') }}carce/carce/assets/images/user/user-profile.png"
                                alt="image">
                        </div>
                        <div class="content">
                            <h2 class="name">{{ auth()->user()->name }}</h2>
                            <span class="email">{{ auth()->user()->email }}</span>
                        </div>
                        <div class="profile-shape profile-shape-1"><img class="img-fluid" width="61"
                                height="50" src="{{ asset('/') }}carce/carce/assets/images/profile-shape-1.svg"
                                alt="image"></div>
                        <div class="profile-shape profile-shape-2"><img class="img-fluid" width="48"
                                height="59" src="{{ asset('/') }}carce/carce/assets/images/profile-shape-2.svg"
                                alt="image"></div>
                    </div>
                </div>
                <!-- ...:::End Profile Card Section:::... -->

                <!-- ...:::Start Profile Details Section:::... -->
                <div class="profile-details-section section-gap-top-30">
                    <div class="profile-details-wrapper">
                        <div class="profile-details-bottom">
                            <ul class="profile-user-list">
                                <li class="profile-list-item">
                                    <ul class="profile-single-list">

                                        <li class="list-item">
                                            <span class="title">Setting</span>
                                        </li>
                                        <li class="list-item">
                                            <a href="/mobile/setting" class="profile-link"><span class="icon"><i
                                                        class="icon icon-carce-user"></i></span>Setting
                                                Akun</a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="profile-link"><span class="icon"><i
                                                        class="icon icon-carce-bell"></i></span>Notifikasi</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="profile-list-item">
                                    <ul class="profile-single-list">
                                        <li class="list-item">
                                            <a href="/mobile/logout" class="profile-link"><span class="icon"><i
                                                        class="icon icon-carce-login"></i></span>Keluar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ...:::End Profile Details Section:::... -->
            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div> <!-- ...:::: End Offcanvas Profile Menu Section:::... -->

        <div class="offcanvas-overlay"></div>

        <!-- ...:::Start Contact Section:::... -->
        <div class="contact-section section-gap-top-30">
            <div class="container">

                <div class="profile-card-section section-gap-top-25">
                    <div class="profile-card-wrapper">
                        <div class="image">
                            <img class="img-fluid"
                                src="{{ asset('/') }}carce/carce/assets/images/user/user-profile.png"
                                alt="" width="96" height="96">
                            <label class="upload-image-label" for="file">
                                <i class="icon icon-carce-camera"></i>
                            </label>
                            <input class="upload-file" id="file" type="file">
                        </div>
                        <div class="content">
                            <h2 class="setting-name">{{ auth()->user()->name }}</h2>
                            <span class="setting-email email">{{ auth()->user()->email }}</span>
                        </div>
                        <div class="profile-shape profile-shape-1"><img class="img-fluid"
                                src="{{ asset('/') }}carce/carce/assets/images/profile-shape-1.svg" alt=""
                                width="61" height="50"></div>
                        <div class="profile-shape profile-shape-2"><img class="img-fluid"
                                src="{{ asset('/') }}carce/carce/assets/images/profile-shape-2.svg" alt=""
                                width="48" height="59"></div>
                    </div>
                </div>

                <!-- Start User Event Area -->
                <div class="login-wrapper">
                    @if (session('success'))
                        <div
                            style="background-color:green; padding:10px; border-radius:5px; margin-top:20px; color:white;">
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (auth()->user()->level == 'siswa')
                        <form action="{{ route('mobile.setting.proses.siswa') }}" method="POST"
                            class="default-form-wrapper">
                            @csrf
                            <ul class="default-form-list">
                                <li class="single-form-item">
                                    <label for="nama_lengkap" class="visually-hidden">Nama Lengkap</label>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Nama Lengkap"
                                        value="{{ old('nama_lengkap', @$datasetting->nama_lengkap) }}">
                                    <span class="icon"><i class="icon icon-carce-user"></i></span>
                                    @error('nama_lengkap')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="kelas" class="visually-hidden">Kelas</label>
                                    <input type="text" id="kelas" name="kelas" placeholder="Kelas"
                                        value="{{ old('kelas', @$datasetting->kelas) }}">
                                    <span class="icon"><i class="icon icon-carce-user"></i></span>
                                    @error('kelas')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="tempat_lahir" class="visually-hidden">Tempat Lahir</label>
                                    <input type="text" id="tempat_lahir" name="tempat_lahir"
                                        placeholder="Tempat Lahir"
                                        value="{{ old('tempat_lahir', @$datasetting->tempat_lahir) }}">
                                    <span class="icon"><i class="icon icon-carce-user"></i></span>

                                    @error('tempat_lahir')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="tgl_lahir" class="visually-hidden">Tanggal Lahir</label>
                                    <input type="date" id="tgl_lahir" name="tgl_lahir"
                                        placeholder="Tanggal Lahir"
                                        value="{{ old('tgl_lahir', @$datasetting->tgl_lahir) }}"
                                        style="width: 65%; background-color:white;"> <span style="color:green">Tanggal
                                        Lahir</span>
                                    <span class="icon"><i class="icon icon-carce-user"></i></span><br>

                                    @error('tgl_lahir')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="alamat" class="visually-hidden">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" placeholder="Alamat"
                                        value="{{ old('alamat', @$datasetting->alamat) }}">
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
                                        value="{{ old('no_hp', @$datasetting->no_hp) }}">
                                    <span class="icon">
                                        <i class="icon icon-carce-user"></i>
                                    </span>
                                    @error('no_hp')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="hobi" class="visually-hidden">Hobi</label>
                                    <input type="text" id="hobi" name="hobi" placeholder="Hobi"
                                        value="{{ old('hobi', @$datasetting->hobi) }}">
                                    <span class="icon">
                                        <i class="icon icon-carce-user"></i>
                                    </span>
                                    @error('hobi')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="Ekstrakulikuler" class="visually-hidden">Ekstrakulikuler</label>
                                    <select
                                        style="border: 2px solid #e2e7ea;border-radius: 10px;padding: 18px 25px 18px 80px;width: -webkit-fill-available; background-color:white; font-size: 14px;width: 100%;"
                                        name="ekstrakulikuler" id="ekstrakulikuler">
                                        <option value="">Pilih Ekstrakulikuler</option>
                                        @foreach ($ekstrakulikuler as $eks)
                                            <option value="{{ $eks->id }}"
                                                {{ old('ekstrakulikuler', @$datasetting->ekstrakulikuler_id) == $eks->id ? 'selected' : '' }}>
                                                {{ $eks->nama_ekstrakulikuler }}</option>
                                        @endforeach
                                    </select>
                                    <span class="icon">
                                        <i class="icon icon-carce-user"></i>
                                    </span>
                                    @error('ekstrakulikuler')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="email" class="visually-hidden">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Email"
                                        value="{{ old('email', auth()->user()->email) }}">
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
                                    <label for="password_confirmation" class="visually-hidden">Confirm
                                        Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder="Konfirmasi Password">
                                    <span class="icon"><i class="icon icon-carce-eye"></i></span>
                                    @error('password_confirmation')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                            </ul>
                            <input type="submit" name="submit" value="Save"
                                class="btn btn--block btn--radius btn--size-xlarge btn--color-white btn--bg-maya-blue text-center register-space-top"
                                style="width: 100%">
                        </form>
                    @else
                        <form action="{{ route('mobile.setting.proses.orangtua') }}" method="POST"
                            class="default-form-wrapper">
                            @csrf
                            <ul class="default-form-list">
                                <li class="single-form-item">
                                    <label for="nama_lengkap" class="visually-hidden">Nama Lengkap</label>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Nama Lengkap"
                                        value="{{ old('nama_lengkap', @$datasetting->nama_orangtua) }}">
                                    <span class="icon"><i class="icon icon-carce-user"></i></span>
                                    @error('nama_lengkap')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="pekerjaan" class="visually-hidden">Pekerjaan</label>
                                    <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan"
                                        value="{{ old('pekerjaan', @$datasetting->pekerjaan) }}">
                                    <span class="icon"><i class="icon icon-carce-user"></i></span>
                                    @error('pekerjaan')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="alamat" class="visually-hidden">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" placeholder="Alamat"
                                        value="{{ old('alamat', @$datasetting->alamat) }}">
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
                                        value="{{ old('no_hp', @$datasetting->no_hp) }}">
                                    <span class="icon">
                                        <i class="icon icon-carce-user"></i>
                                    </span>
                                    @error('no_hp')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                                <li class="single-form-item">
                                    <label for="siswa" class="visually-hidden">Siswa</label>
                                    <input type="text" id="siswa" placeholder="Siswa"
                                        value="{{ old('siswa', @$datasetting->pendaftar->nama_lengkap) }}">
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
                                        value="{{ old('email', auth()->user()->email) }}">
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
                                    <label for="password_confirmation" class="visually-hidden">Confirm
                                        Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder="Konfirmasi Password">
                                    <span class="icon"><i class="icon icon-carce-eye"></i></span>
                                    @error('password_confirmation')
                                        <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                    @enderror
                                </li>
                            </ul>
                            <input type="submit" name="submit" value="Save"
                                class="btn btn--block btn--radius btn--size-xlarge btn--color-white btn--bg-maya-blue text-center register-space-top"
                                style="width: 100%">
                        </form>
                    @endif
                </div>

            </div>
        </div>
        <!-- ...:::End Contact Section:::... -->

        <!-- ...:::Start User Event Section:::... -->
        <div class="user-event-section" style="width: 100% !important;">
            <!-- Start User Event Area -->
            <div class="col pos-relative">

                <div class="user-event-area">
                    <div class="user-event user-event--left">
                        <a area-label="event link icon" href="/mobile/setting" class="event-btn-link"><i
                                class="icon icon-carce-heart"></i></a>

                    </div>
                    <div class="user-event user-event--center">
                        <a area-label="cart icon" href="/mobile/dashboard" class="event-btn-link"><i
                                class="icon icon-carce-home"></i></a>
                    </div>
                    <div class="user-event user-event--right">
                        <a area-label="order icon" href="/mobile/logout" class="event-btn-link"><i
                                class="icon icon-carce-compare"></i></a>
                    </div>
                </div>
            </div>
            <!-- End User Event Area -->
        </div>
        <!-- ...:::End User Event Section:::... -->

        <footer class="footer-section"></footer>
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

</body>

</html>
