@extends('template/cust')
@section('css')
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="color: #6ED04C">Food Menu
                </h5>
                <h1 class="mb-5">Daftar Menu</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">All Menu</small>
                                <h6 class="mt-n1 mb-0">Semua</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Foods</small>
                                <h6 class="mt-n1 mb-0">Makanan</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Drinks</small>
                                <h6 class="mt-n1 mb-0">Minuman</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-5 menu-items" data-tab="all">
                            <!-- Menampilkan semua menu -->
                            @foreach ($menu as $data)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="d-flex align-items-center text-start ms-4">
                                        <img class="flex-shrink-1 img-fluid rounded"
                                            src="{{ Storage::url('/menu/' . $data->foto) }}" alt=""
                                            style="width: 100px; height: 100px;">
                                        <div class="ms-3">
                                            <h6 class="mb-1">{{ $data->nama }}</h6>
                                            <small class="fst-italic">{{ $data->deskripsi }}</small>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-primary fw-bold">Rp{{ $data->harga }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#modalTambah{{ $data->id }}" type="button"
                                                    class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-bs-toggle="modal">Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade p-0">
                        <div class="row g-4 menu-items" data-tab="food">
                            <!-- Menampilkan menu makanan -->
                            @foreach ($foods as $data)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="d-flex align-items-center text-start ms-4">
                                        <img class="flex-shrink-1 img-fluid rounded"
                                            src="{{ Storage::url('/menu/' . $data->foto) }}" alt=""
                                            style="width: 100px; height: 100px;">
                                        <div class="ms-3">
                                            <h6 class="mb-1">{{ $data->nama }}</h6>
                                            <small class="fst-italic">{{ $data->deskripsi }}</small>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-primary fw-bold">Rp{{ $data->harga }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#modalTambah{{ $data->id }}" type="button"
                                                    class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-bs-toggle="modal">Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade p-0">
                        <div class="row g-4 menu-items" data-tab="drink">
                            <!-- Menampilkan menu minuman -->
                            @foreach ($drinks as $data)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="d-flex align-items-center text-start ms-4">
                                        <img class="flex-shrink-1 img-fluid rounded"
                                            src="{{ Storage::url('/menu/' . $data->foto) }}" alt=""
                                            style="width: 100px; height: 100px;">
                                        <div class="ms-3">
                                            <h6 class="mb-1">{{ $data->nama }}</h6>
                                            <small class="fst-italic">{{ $data->deskripsi }}</small>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-primary fw-bold">Rp{{ $data->harga }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="#modalTambah{{ $data->id }}" type="button"
                                                    class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-bs-toggle="modal">Tambah</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Modal -->
    <div class="modal fade" id="pesananModal" tabindex="-1" aria-labelledby="pesananModalLabel" aria-hidden="true">
        <form action="/cust/store" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pesananModalLabel">Pesanan Saya</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="text-primary fw-bold" for="noMeja">Nomor Meja:</label>
                            <input class="form-control" type="text" id="meja" name="meja" value="{{ $cust->nomeja }}" required>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Item</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="pesananItemsTable">
                                @php
                                    $totalSeluruh = 0;
                                @endphp
                                @foreach ($pesan as $data)
                                    <tr>
                                        <td>{{ $data->menu }}</td>
                                        <input type="hidden" name="menu" value="{{ $data->menu }}">
                                        <td>{{ $data->harga }}</td>
                                        <input type="hidden" name="harga" value="{{ $data->harga }}">
                                        <td>{{ $data->jumlah }}</td>
                                        <input type="hidden" name="jumlah" value="{{ $data->jumlah }}">
                                        <input type="hidden" name="total" value="{{ $data->total }}">
                                        <td>
                                            <a href="/pesanan/destroy/{{ $data->id }}" type="button"
                                                class="btn btn-outline-danger btn-hapus" data-id="{{ $data->id }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @php
                                        $totalSeluruh += $data->total;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span id="totalPesanan" class="fw-bold">Total Pesanan: Rp {{ $totalSeluruh }}</span>
                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal Tambah Pesanan -->
    @foreach ($menu as $data)
        <div class="modal fade" id="modalTambah{{ $data->id }}" tabindex="-1" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <form action="/cust/simpan" method="post">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahLabel">Tambah Pesanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" id="menuId">
                            <h6 id="menu">{{ $data->nama }}</h6>
                            <input type="hidden" name="menu" value="{{ $data->nama }}">
                            <p id="harga">Rp{{ $data->harga }}</p>
                            <input type="hidden" name="harga" value="{{ $data->harga }}">
                            <label for="jumlahPesanan">Jumlah Pesanan:</label>
                            <input type="number" class="form-control" id="jumlahPesanan" min="1"
                                name="jumlah">
                            <input type="hidden" name="customer" value="{{ $cust->id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="">Tambah Pesanan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection
@section('js')
@endsection
