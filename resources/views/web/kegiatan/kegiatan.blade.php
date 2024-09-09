@extends('web.template.content')

@section('title')
    Daftar Kegiatan
@endsection

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Kegiatan</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <div class="mb-3">
                                <form action="{{ route('cari.kegiatan') }}" method="get" id="searchForm">
                                    <input type="text" class="form-control" name="cari" id="searchInput"
                                        placeholder="Cari" />
                                </form>
                            </div>

                        </div>
                        <div class="col-4">
                            <a type="submit" name="" id="" class="btn btn-primary float-right "
                                href="/kegiatan/create" role="button">Tambah</a>

                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Deskripsi</th>
                                    <th>Ekstrakulikuler</th>
                                    <th>Pembina</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatan as $index => $kgt)
                                    <tr>
                                        <td>{{ $index + $kegiatan->firstItem() }}</td>
                                        <td>{{ $kgt->nama_kegiatan }}</td>
                                        <td><img width="50"
                                                src="{{ asset('/') }}{{ env('ASSET_UPLOAD') }}/foto_kegiatan/{{ $kgt->foto_kegiatan }}"
                                                alt=""></td>
                                        <td>{{ $kgt->deskripsi }}</td>
                                        <td>{{ $kgt->ekstrakulikuler->nama_ekstrakulikuler }}</td>
                                        <td>{{ $kgt->pembina->nama_pembina }}</td>
                                        <td>
                                            <a href="/kegiatan/{{ $kgt->id }}/edit" class="btn btn-sm btn-warning"><i
                                                    class="far fa-edit"></i></a>
                                            <form action="{{ route('destroy.kegiatan', $kgt->id) }}" style="display:inline"
                                                method="POST" id="deletekegiatanForm-{{ $kgt->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger hapus-kegiatan-btn"
                                                    data-nama-kgt="{{ $kgt->nama_kegiatan }}"
                                                    data-form-id="deletekegiatanForm-{{ $kgt->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination justify-content-end ">
                        <ul class="pagination">
                            <li class="page-item {{ $kegiatan->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $kegiatan->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>

                            @foreach ($kegiatan->getUrlRange(1, $kegiatan->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $kegiatan->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            <li class="page-item {{ $kegiatan->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $kegiatan->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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

            $('#searchInput').keypress(function(e) {
                // Check if the key pressed is Enter (keyCode 13)
                if (e.which == 13) {
                    e.preventDefault(); // Prevent the default action (form submission)
                    $('#searchForm').submit(); // Submit the form
                }
            });


            $(".hapus-kegiatan-btn").click(function(e) {
                e.preventDefault();
                var formId = $(this).data('form-id');
                var kegiatanName = $(this).data('nama-kgt');

                swal({
                    title: 'Apakah anda yakin?',
                    text: 'Akan menghapus kegiatan ' + kegiatanName + ' !',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $("#" + formId).submit();
                    }
                });
            });

        });
    </script>
@endpush
