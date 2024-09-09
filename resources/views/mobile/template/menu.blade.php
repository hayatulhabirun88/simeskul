<div class="swiper-slide">
    <a href="/mobile/ekskul" class="btn"
        @if (Request::segment(2) == 'ekskul') style="background-color:#007aff; color:white;" @endif>Daftar Ekskul</a>
</div>
<div class="swiper-slide">
    <a href="/mobile/dataeskul" class="btn"
        @if (Request::segment(2) == 'dataeskul') style="background-color:#007aff; color:white;" @endif>Data Ekskul</a>
</div>
<div class="swiper-slide">
    <a href="/mobile/jadwal" class="btn"
        @if (Request::segment(2) == 'jadwal') style="background-color:#007aff; color:white;" @endif>Jadwal</a>
</div>
<div class="swiper-slide">
    <a href="/mobile/kegiatan" class="btn"
        @if (Request::segment(2) == 'kegiatan') style="background-color:#007aff; color:white;" @endif>Kegiatan</a>
</div>
<div class="swiper-slide">
    <a href="/mobile/informasi" class="btn"
        @if (Request::segment(2) == 'informasi') style="background-color:#007aff; color:white;" @endif>Informasi</a>
</div>

<div class="swiper-slide">
    <a href="/mobile/presensi" @if (Request::segment(2) == 'presensi') style="background-color:#007aff; color:white;" @endif
        class="btn">Presensi</a>
</div>
