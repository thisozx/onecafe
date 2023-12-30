@extends('template/master')
@section('content')
    <br>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu/</span> Tambah Data</h4>

            <!-- Basic Layout -->
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Menu</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <div class="input-group input-group-merge">
                                    <span id="nama2" class="input-group-text"><i class='bx bx-food-menu'></i></span>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Menu" aria-describedby="nama2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kategori">Kategori</label>
                                <select id="kategori" name="kategori" class="form-select">
                                    <option disabled value="" selected>Pilih Kategori</option>
                                    <option value="makanan">Makanan</option>
                                    <option value="minuman">Minuman</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                <div class="input-group input-group-merge">
                                    <span id="deskripsi2" class="input-group-text"><i class="bx bx-notepad"></i></span>
                                    <input type="text" id="deskripsi" name="deskripsi" class="form-control"
                                        placeholder="Masukkan Deskripsi Menu" aria-describedby="deskripsi2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="harga">Harga</label>
                                <div class="input-group input-group-merge">
                                    <span id="harga2" class="input-group-text"><i class="bx bx-dollar"></i></span>
                                    <input type="number" id="harga" name="harga" class="form-control"
                                        placeholder="Masukkan Harga Menu" aria-describedby="harga2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="foto">Foto</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-camera"></i></span>
                                    <input type="file" id="foto" name="foto"
                                        class="custom-file-input form-control" placeholder="Pilih Foto"
                                        aria-describedby="foto2" />
                                    <span id="foto2" class="input-group-text">.png/.jpg/.jpeg/.img</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
@section('css')
    <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('js')
    <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('#deskripsi_form').summernote()
        })
    </script>
@endsection
