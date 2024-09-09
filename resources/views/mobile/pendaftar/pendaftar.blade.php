@extends('mobile.template.content')

@section('title', 'Data Ekskul')

@section('list-item')

    <li class="list-item">
        <a href="/mobile/dashboard" area-label="Cart"
            class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow">
            <svg xmlns="http://www.w3.org/2000/svg" width="5.973" height="10.449" viewBox="0 0 5.973 10.449">
                <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back"
                    d="M13.051,11.417,17,7.466a.747.747,0,0,0-1.058-1.054l-4.479,4.476a.745.745,0,0,0-.022,1.03l4.5,4.507A.747.747,0,1,0,17,15.37Z"
                    transform="translate(-11.251 -6.194)"></path>
            </svg>
        </a>
    </li>

@endsection

@section('content')
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
                <h2 class="title">Pendaftar</h2>
            </div>
            <div class="product-wrapper">
                <div class="product-wrapper-content--4">
                    @foreach ($pendaftar as $pdf)
                        <li class="single-cart-item" style="margin-top:10px">
                            <div class="image">
                                <img width="90" height="90" src="{{ asset('/') }}user.png" alt="image">
                            </div>
                            <div class="content">
                                <div class="details">
                                    <div class="left">
                                        <span class="redbook"><strong>{{ $pdf->nama_lengkap }}</strong></span>

                                    </div>
                                    <div class="right"><strong>{{ $pdf->kelas }}</strong></div>
                                </div>
                                Alamat: {{ $pdf->alamat }}

                            </div>
                        </li>
                    @endforeach
                </div>
            </div>
            <nav style="margin-top:10px;">
                <ul class="pagination" style="text-align: center; ">
                    <!-- Tombol "Previous" -->
                    @if ($pendaftar->onFirstPage())
                        <li class="page-item disabled"><span class="page-link"
                                style="padding:4px; border-radius:3px; margin:3px; background-color:#007aff; color:white;">Previous</span>
                        </li>
                    @else
                        <li class="page-item"><a class="page-link"
                                style="padding:4px; border-radius:3px;margin:3px; background-color:#007aff; color:white;"
                                href="{{ $pendaftar->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    <!-- Tombol "Next" -->
                    @if ($pendaftar->hasMorePages())
                        <li class="page-item"><a class="page-link"
                                style="padding:4px; border-radius:3px;margin:3px; background-color:#007aff; color:white;"
                                href="{{ $pendaftar->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="page-item disabled"><span
                                style="padding:4px; border-radius:3px; margin:3px; background-color:#007aff; color:white;"
                                class="page-link">Next</span></li>
                    @endif
                </ul>
            </nav>

        </div>
    </div><br><br>

@endsection
