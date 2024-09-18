@extends('mobile.template.content')

@section('title', 'Kegiatan')

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
            @foreach ($kegiatan as $kgt)
                <div class="single-product-item product-item--style-3" style="margin-top:10px;">
                    <div class="image">
                        <img width="100%" class="img-fluid"
                            src="{{ asset('/') }}foto_kegiatan/{{ $kgt->foto_kegiatan }}" alt="image">
                    </div>
                    <div class="content">
                        <div class="content--left">
                            {{ $kgt->deskripsi }}
                            <span class="price">{{ $kgt->nama_kegiatan }}</span>
                        </div>
                        <div class="content--right">
                            <span
                                class="review-star-text">{{ \App\Models\Ekstrakulikuler::find($kgt->ekstrakulikuler_id)->nama_ekstrakulikuler }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    </div>
    </div><br><br>
    <!-- ...:::Start Catagories - 1 Section:::... -->

@endsection
