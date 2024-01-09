@extends('template.auth')

@section('content')
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('assets/img/logo/LOGO.png') }}" alt="Logo" width="150" />
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-3 text-center">Selamat Datang di OneCafe! 👋</h4>
                        <p class="mb-4 text-center">Silahkan isi nama dan no meja untuk melakukan pemesanan</p>

                        <form action="/cust" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="namaCustomer" class="form-label">Nama Customer:</label>
                                <input type="text" class="form-control" id="namaCustomer" name="namaCustomer" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomorMeja" class="form-label">Nomor Meja:</label>
                                <input type="text" class="form-control" id="nomorMeja" name="nomorMeja" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- / Content -->
@endsection
