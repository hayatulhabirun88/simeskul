@extends('mobile.template.content')

@section('title', 'Dashboard')

@section('list-item')

    <li class="list-item">
    </li>

@endsection

@section('content')

    <!-- ...:::Start Contact Section:::... -->
    <div class="contact-section section-gap-top-30">
        <div class="container">

            <div class="profile-card-section section-gap-top-25">
                <div class="profile-card-wrapper">
                    <div class="image">
                        <img class="img-fluid" src="{{ asset('/') }}carce/carce/assets/images/user/user-profile.png"
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

                <form action="#" class="default-form-wrapper profile-wrapper">
                    @if (auth()->user()->level == 'siswa')
                        <ul class="default-form-list">
                            <li class="single-form-item">
                                <label for="nama_lengkap" class="visually-hidden">Nama Lengkap</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap"
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
                                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                                    value="{{ old('tempat_lahir', @$datasetting->tempat_lahir) }}">
                                <span class="icon"><i class="icon icon-carce-user"></i></span>

                                @error('tempat_lahir')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                            <li class="single-form-item">
                                <label for="tgl_lahir" class="visually-hidden">Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir"
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
                                <label for="password_confirmation" class="visually-hidden">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Konfirmasi Password">
                                <span class="icon"><i class="icon icon-carce-eye"></i></span>
                                @error('password_confirmation')
                                    <span style="color:red; margin-left:70px;">{{ $message }}</span>
                                @enderror
                            </li>
                        </ul>
                    @else
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
                    @endif

                </form>
                <a href="#"
                    class="btn btn--block btn--radius btn--size-xlarge btn--color-white btn--bg-maya-blue text-center contact-btn">Save</a>
            </div>

        </div>
    </div>
    <!-- ...:::End Contact Section:::... -->

@endsection
