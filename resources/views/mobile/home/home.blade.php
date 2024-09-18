@extends('mobile.template.content')

@section('title', 'Dashboard')

@section('list-item')

    <li class="list-item">
    </li>

@endsection

@push('style')
    <style>
        * {
            box-sizing: border-box
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;

        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
@endpush

@push('script')
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
    </script>
@endpush

@section('content')
    <!-- ...:::Start Hero Slider Section:::... -->
    <div class="hero-section section-gap-top-25">
        <div class="container">
            <!-- Start Hero Area -->
            <div class="hero-area hero-area--style-1 hero-slider-active">
                <!-- Slider main container -->

                <div class="swiper">
                    <!-- Additional required wrapper -->

                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($gallery as $gbr)
                            <div class="mySlides fade">
                                <div class="numbertext">{{ $i++ }} / {{ $gallery->count() }}</div>
                                <img src="{{ asset('/') }}{{ env('ASSET_UPLOAD') }}foto/{{ $gbr->foto }}"
                                    style="width:100%">
                            </div>
                        @endforeach

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>

                    {{-- <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($gallery as $gbr)
                            <div class="swiper-slide">
                                <div class="hero-singel-slide ">
                                    <div class="hero-bg">
                                        <img width="388" height="160" class="img-full"
                                            src="{{ asset('/') }}{{ env('ASSET_UPLOAD') }}foto/{{ $gbr->foto }}"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- End Hero Area -->
        </div>
    </div>
    <!-- ...:::End Hero Slider Section:::... -->

    <!-- ...:::Start Catagories - 1 Section:::... -->
    <div class="catagories-section section-gap-top-50">
        <div class="container">
            <div class="catagories-area">
                <div class="catagories-nav-1">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @include('mobile.template.menu')
                        </div>
                    </div>
                </div>
            </div>

            <div class="title-content">
                <h2 class="title">Presensi</h2>
                <a href="/mobile/presensi" class="view-all">Lihat Semua</a>
            </div>
            <div class="product-wrapper">
                <div class="product-wrapper-content--4">
                    @if (count($presensi) > 0)
                        @foreach ($presensi as $presens)
                            <div id="single-product-item" class="single-product-item product-item--style-4">
                                <div>
                                    {{ $presens->tgl_presensi }} <strong>Ekskul
                                        {{ @$presens->nama_ekstrakulikuler }}</strong> |
                                    Pembina: {{ @$presens->nama_pembina }} |
                                    @if ($presens->status_kehadiran == 'Hadir')
                                        <span
                                            style="background-color:#28a745; padding:4px; border-radius:4px;color:white;">Hadir</span>
                                    @else
                                        <span
                                            style="background-color:#dc3545; padding:4px; border-radius:4px;color:white;">Tidak
                                            Hadir</span>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">Tidak ada presensi</p>
                    @endif

                </div>

            </div>

            <div class="title-content">
                <h2 class="title">Jadwal</h2>
                <a href="/mobile/jadwal" class="view-all">Lihat Semua</a>
            </div>
            <div class="product-wrapper">
                <div class="product-wrapper-content--4">
                    @foreach ($jadwal as $jdw)
                        <li class="single-cart-item" style="margin-top:10px">

                            <div class="image">
                                <img width="90" height="90"
                                    src="{{ asset('/') }}icon/{{ $jdw->ekstrakulikuler->icon }}" alt="image">
                            </div>
                            <div class="content">
                                <a href="/mobile/jadwal-detail/{{ $jdw->id }}">
                                    Bertempat di <strong>{{ $jdw->tempat }}</strong> mulai
                                    {{ $jdw->jam_mulai }} WITA selesai {{ $jdw->jam_selesai }} WITA
                                    <div class="details">
                                        <div class="left">
                                            <span class="redbook">
                                                <strong>Ekstrakulikuler
                                                    {{ $jdw->ekstrakulikuler->nama_ekstrakulikuler }}</strong></span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </li>
                    @endforeach
                </div>
            </div>
            {{-- <div class="product-wrapper">
                <div class="product-wrapper-content--4">
                    @foreach ($jadwal as $jdw)
                        <div id="single-product-item" class="single-product-item product-item--style-4">
                            <div>
                                <strong>{{ $jdw->tgl_kegiatan }} Ekstrakulikuler
                                    {{ $jdw->ekstrakulikuler->nama_ekstrakulikuler }}</strong><br>
                                <a href="/mobile/jadwal" class="title">
                                    Bertempat di {{ $jdw->tempat }} mulai
                                    {{ $jdw->jam_mulai }} WITA selesai {{ $jdw->jam_selesai }} WITA
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div> --}}

            <div class="title-content">
                <h2 class="title">Informasi</h2>
                <a href="/mobile/informasi" class="view-all">Lihat Semua</a>
            </div>
            <div class="product-wrapper">
                <div class="product-wrapper-content--4">
                    @foreach ($lomba as $lmb)
                        <div id="single-product-item" class="single-product-item product-item--style-4">
                            <a aria-label="Product Image" href="/mobile/informasi" class="image">
                                <img width="90" height="90" class="img-fluid"
                                    src="{{ asset('/') }}{{ env('ASSET_UPLOAD') }}foto_lomba/{{ $lmb->foto_utama }}"
                                    alt="">
                            </a>
                            <div class="content">
                                <div class="content--left">
                                    <a href="/mobile/informasi" class="title"><strong>{{ $lmb->judul_lomba }}</strong><br>
                                    </a>
                                    <p>
                                        Tempat : {{ $lmb->tempat }}<br>
                                        Tanggal : {{ $lmb->tgl_mulai }} s.d {{ $lmb->tgl_selesai }}
                                    </p>
                                </div>
                            </div>
                            <a href="#?" aria-label="Cart" class="cart-link"><i
                                    class="icon icon-carce-x-circle"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div><br><br>
    <!-- ...:::Start Catagories - 1 Section:::... -->

    <script>
        var swiper = new Swiper('.swiper', {
            loop: true, // Slider akan kembali ke slide pertama setelah slide terakhir
            autoplay: {
                delay: 3000, // Durasi antar slide dalam milidetik (3 detik)
                disableOnInteraction: false, // Tetap berjalan setelah interaksi pengguna
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
@endsection
