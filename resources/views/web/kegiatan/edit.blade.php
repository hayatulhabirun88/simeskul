@extends('web.template.content')

@section('title')
    Ubah Kegiatan
@endsection

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ubah Kegiatan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.kegiatan', $kegiatan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan"
                                value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}">
                            @error('nama_kegiatan')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Foto Kegiatan</label>
                            <input type="file" class="form-control" name="foto_kegiatan"
                                value="{{ old('foto_kegiatan') }}">
                            @error('foto_kegiatan')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="10">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ekstrakulikuler</label>
                            <select name="ekstrakulikuler" id="ekstrakulikuler" class="form-control">
                                <option value="">--Pilih Ekstrakulikuler</option>
                                @foreach ($ekstrakulikuler as $eks)
                                    <option value="{{ $eks->id }}"
                                        {{ old('ekstrakulikuler', $kegiatan->ekstrakulikuler_id) == $eks->id ? 'selected' : '' }}>
                                        {{ $eks->nama_ekstrakulikuler }}</option>
                                @endforeach
                            </select>
                            @error('ekstrakulikuler')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pembina</label>
                            <select name="pembina" id="pembina" class="form-control">
                                <option value="">--Pilih Pembina</option>
                                @foreach ($pembina as $pemb)
                                    <option value="{{ $pemb->id }}"
                                        {{ old('pembina', $kegiatan->pembina_id) == $pemb->id ? 'selected' : '' }}>
                                        {{ $pemb->nama_pembina }}
                                    </option>
                                @endforeach
                            </select>
                            @error('pembina')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>

                        <button class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
