@extends('web.template.content')

@section('title')
    Kategori Ekstrakulikuler
@endsection

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Ekstrakulikuler</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('eskul.kategori.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Ekstrakulikuler</label>
                            <input type="text" class="form-control" name="nama_eskul">
                            @error('nama_eskul')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="file" class="form-control" name="icon">
                            @error('icon')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"></textarea>
                            @error('deskripsi')
                                <span style="color:red;font-size:13px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
@endpush

@push('script')
    <!-- JS Libraies -->
    <script src="{{ asset('') }}otika/assets/bundles/sweetalert/sweetalert.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('') }}otika/assets/js/page/sweetalert.js"></script>

    <script>
        $(document).ready(function() {
            $("#hapuseskul").click(function(e) {
                e.preventDefault();
                swal({
                    title: 'Apakah anda yakin?',
                    text: 'Akan menghapus eskul ' + this.getAttribute('data-nama-eskul') + ' !',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $("#deleteEskulForm").submit();
                    }
                });
            });

        });
    </script>
@endpush
