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
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
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
                        <div class="row g-4 menu-items" data-tab="all">
                            <!-- Menampilkan semua menu -->
                            @foreach ($menu as $data)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="d-flex flex-row align-items-center text-start justify-content-center">
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
                                                <button class="btn btn-primary btn-sm">Add</button>
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
                                    <div class="d-flex flex-row align-items-center text-start justify-content-center">
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
                                                <button class="btn btn-primary btn-sm">Add</button>
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
                                    <div class="d-flex flex-row align-items-center text-start justify-content-center">
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
                                                <button class="btn btn-primary btn-sm">Add</button>
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
@endsection
@section('js')
@endsection