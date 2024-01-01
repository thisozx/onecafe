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
                                                <button class="btn btn-primary btn-sm"
                                                    onclick="tambahKePesanan({{ $data->id }}, '{{ $data->nama }}', {{ $data->harga }})">Tambah</button>
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
                                        <img class="flex-shrink-0 img-fluid rounded"
                                            src="{{ Storage::url('/menu/' . $data->foto) }}" alt=""
                                            style="width: 100px; height: 100px;">
                                        <div class="ms-3">
                                            <h6 class="mb-1">{{ $data->nama }}</h6>
                                            <small class="fst-italic">{{ $data->deskripsi }}</small>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="text-primary fw-bold">Rp{{ $data->harga }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button class="btn btn-primary btn-sm"
                                                    onclick="tambahKePesanan({{ $data->id }}, '{{ $data->nama }}', {{ $data->harga }})">Tambah</button>
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
                                                <button class="btn btn-primary btn-sm"
                                                    onclick="tambahKePesanan({{ $data->id }}, '{{ $data->nama }}', {{ $data->harga }})">Tambah</button>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pesananModalLabel">Pesanan Saya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formPesanan" action="\pesan">
                    <div class="modal-body">
                        @csrf
                        <label class="text-primary fw-bold" for="noMeja">Nomor Meja:</label>
                        <input class="form-control mb-2" type="text" id="meja" name="meja" required>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Item</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="pesananItemsTable"></tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span id="totalPesanan" class="fw-bold">Total Pesanan: Rp0</span>
                            <button id="btnPesanSekarang" class="btn btn-primary">Pesan Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Pesanan -->
    <div class="modal fade" id="modalTambahPesanan" tabindex="-1" aria-labelledby="modalTambahPesananLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPesananLabel">Tambah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="menuId">
                    <h6 id="menuNama"></h6>
                    <p id="menuHarga"></p>
                    <label for="jumlahPesanan">Jumlah Pesanan:</label>
                    <input type="number" class="form-control" id="jumlahPesanan" min="1" value="1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnTambahPesanan">Tambah Pesanan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // Objek untuk menyimpan pesanan sementara
        let pesanan = [];

        function tambahKePesanan(id, nama, harga) {
            // Tampilkan modal untuk memasukkan jumlah pesanan
            $('#modalTambahPesanan').modal('show');

            // Set data menu yang dipilih
            $('#modalTambahPesanan').find('#menuId').val(id);
            $('#modalTambahPesanan').find('#menuNama').text(nama);
            $('#modalTambahPesanan').find('#menuHarga').text(`Rp${harga}`);

            // Fungsi yang akan dipanggil saat tombol "Tambah Pesanan" di modal ditekan
            $('#modalTambahPesanan').find('#btnTambahPesanan').off('click').on('click', function() {
                let jumlah = parseInt($('#modalTambahPesanan').find('#jumlahPesanan').val());

                if (!isNaN(jumlah) && jumlah > 0) {
                    // Tambahkan item ke pesanan sementara
                    let item = {
                        id: id,
                        nama: nama,
                        harga: harga,
                        jumlah: jumlah
                    };
                    pesanan.push(item);
                    refreshTabelPesanan();
                    // Sembunyikan modal setelah menambahkan pesanan
                    $('#modalTambahPesanan').modal('hide');
                } else {
                    alert('Jumlah tidak valid.');
                }
            });
        }

        // Fungsi untuk menampilkan modal pesanan
        function tampilkanModalPesanan() {
            refreshTabelPesanan();
            $('#pesananModal').modal('show');
        }

        function refreshTabelPesanan() {
            // Perbarui tabel pesanan di modal
            let tabelPesanan = document.getElementById('pesananItemsTable');
            let totalPesanan = 0;
            tabelPesanan.innerHTML = '';

            pesanan.forEach((item, index) => {
                let subtotal = item.harga * item.jumlah;
                totalPesanan += subtotal;

                let row = `
                    <tr>
                        <td>${item.nama}</td>
                        <td>Rp${item.harga}</td>
                        <td>${item.jumlah}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="hapusDariPesanan(${index})"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>`;
                tabelPesanan.innerHTML += row;
            });

            // Perbarui total pesanan
            document.getElementById('totalPesanan').innerText = `Total Pesanan: Rp${totalPesanan}`;
        }

        function hapusDariPesanan(index) {
            // Hapus item dari pesanan sementara
            pesanan.splice(index, 1);
            refreshTabelPesanan();
        }

        function pesanSekarang() {
            // Kirim pesanan ke server atau lakukan tindakan sesuai kebutuhan
            $.ajax({
                url: '/pesan',
                method: 'POST',
                contentType: 'application/json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: JSON.stringify({
                    pesanan: pesanan
                }),
                success: function(response) {
                    console.log('Pesanan berhasil dikirim ke server:', response);
                    pesanan = [];
                    refreshTabelPesanan();
                },
                error: function(error) {
                    console.error('Gagal mengirim pesanan ke server:', error);
                }
            });

            // Setelah pesanan dikirim atau diproses, bersihkan pesanan
            pesanan = [];
            refreshTabelPesanan();
        }
        // Event listener untuk button pesan sekarang di modal
        document.getElementById('btnPesanSekarang').addEventListener('click', pesanSekarang);

        // Event listener untuk button pesanan di header
        document.getElementById('btnPesananSaya').addEventListener('click', tampilkanModalPesanan);
    </script>
@endsection
