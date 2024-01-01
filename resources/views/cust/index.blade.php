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
@endsection
@section('js')
    <script>
        // ...

        function tambahKePesanan(idItem, namaItem, hargaItem) {
            try {
                // Lakukan logika penambahan item ke pesanan di sini
                console.log(`Item ditambahkan ke pesanan: ${namaItem} - Rp${hargaItem}`);

                // Contoh: Simpan item ke localStorage
                // Anda dapat mengganti ini dengan logika penyimpanan data yang sesuai
                let pesananItems = localStorage.getItem('pesananItems');
                pesananItems = pesananItems ? JSON.parse(pesananItems) : [];

                // Cek apakah item sudah ada di pesanan
                const itemIndex = pesananItems.findIndex(item => item.id === idItem);

                if (itemIndex !== -1) {
                    // Jika item sudah ada, tambahkan jumlahnya
                    pesananItems[itemIndex].jumlah += 1;
                } else {
                    // Jika item belum ada, tambahkan item baru
                    const itemBaru = {
                        id: idItem,
                        nama: namaItem,
                        harga: hargaItem,
                        jumlah: 1
                    };
                    pesananItems.push(itemBaru);
                }

                localStorage.setItem('pesananItems', JSON.stringify(pesananItems));
                perbaruiPesananDanTotal();

                // Tampilkan notifikasi menggunakan SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Pesanan Ditambahkan',
                    text: `${namaItem} telah ditambahkan ke pesanan!`,
                });
            } catch (error) {
                console.error('Terjadi kesalahan saat menambahkan item ke pesanan:', error);
            }
        }

        function hapusDariPesanan(idItem) {
            try {
                // Lakukan logika penghapusan item dari pesanan di sini
                console.log(`Item dihapus dari pesanan dengan ID: ${idItem}`);

                // Anda dapat mengganti ini dengan logika penghapusan yang sesuai
                let pesananItems = localStorage.getItem('pesananItems');
                pesananItems = pesananItems ? JSON.parse(pesananItems) : [];

                // Temukan item dengan ID yang sesuai
                const itemIndex = pesananItems.findIndex(item => item.id === idItem);

                if (itemIndex !== -1) {
                    // Kurangi jumlah item, hapus jika jumlahnya 0
                    pesananItems[itemIndex].jumlah -= 1;

                    if (pesananItems[itemIndex].jumlah === 0) {
                        // Jika jumlah mencapai 0, hapus item dari pesanan
                        pesananItems.splice(itemIndex, 1);
                    }

                    // Tambahkan pembaruan total dan pesanan sebelum menampilkan pesanan
                    const totalPesanan = kurangiTotalPesanan(pesananItems);
                    // perbaruiPesananDanTotal(totalPesanan);
                    perbaruiPesanan(totalPesanan);

                    localStorage.setItem('pesananItems', JSON.stringify(pesananItems));
                    tampilkanPesanan();
                }
            } catch (error) {
                console.error('Terjadi kesalahan saat menghapus item dari pesanan:', error);
            }
        }

        // Fungsi untuk menghitung total pesanan
        function hitungTotalPesanan(pesananItems) {
            let total = 0;
            pesananItems.forEach(item => {
                total += item.harga * item.jumlah;
            });
            return total;
        }

        // Fungsi untuk memperbarui total di dalam modal
        function perbaruiTotalPesananModal(total) {
            const elemenTotalPesanan = document.getElementById('totalPesanan');
            elemenTotalPesanan.textContent = `Total Pesanan: Rp${total}`;
        }

        // Fungsi untuk memperbarui total pesanan dan tampilan pesanan di modal
        function perbaruiPesananDanTotal() {
            const pesananItems = JSON.parse(localStorage.getItem('pesananItems')) || [];
            const totalPesanan = hitungTotalPesanan(pesananItems);
            perbaruiTotalPesananModal(totalPesanan);
            tampilkanPesanan();
        }

        function perbaruiPesanan() {
            const pesananItems = JSON.parse(localStorage.getItem('pesananItems')) || [];
            const totalPesanan = kurangiTotalPesanan(pesananItems);
            perbaruiTotalPesananModal(totalPesanan);
            tampilkanPesanan();
        }

        // Fungsi untuk mengurangi total pesanan
        function kurangiTotalPesanan(pesananItems) {
            let total = 0;
            pesananItems.forEach(item => {
                total += item.harga * item.jumlah;
            });
            return total;
        }


        function tampilkanPesanan() {
            try {
                const pesananItemsTable = document.getElementById('pesananItemsTable');
                pesananItemsTable.innerHTML = '';

                const pesananItems = localStorage.getItem('pesananItems');

                if (pesananItems) {
                    const parsedPesananItems = JSON.parse(pesananItems);
                    parsedPesananItems.forEach(item => {
                        const tableRow = document.createElement('tr');

                        const namaItemCell = document.createElement('td');
                        namaItemCell.textContent = item.nama;
                        tableRow.appendChild(namaItemCell);

                        const hargaItemCell = document.createElement('td');
                        hargaItemCell.textContent = `Rp${item.harga}`;
                        tableRow.appendChild(hargaItemCell);

                        const jumlahItemCell = document.createElement('td');
                        jumlahItemCell.textContent = item.jumlah;
                        tableRow.appendChild(jumlahItemCell);

                        const aksiCell = document.createElement('td');
                        const deleteButton = document.createElement('button');
                        deleteButton.innerHTML = '<i class="bi bi-trash"></i>';
                        deleteButton.className = 'btn btn-danger btn-sm';
                        deleteButton.onclick = function() {
                            hapusDariPesanan(item.id);
                            perbaruiTotalPesananModal(kurangiTotalPesanan(parsedPesananItems));
                        };
                        aksiCell.appendChild(deleteButton);

                        tableRow.appendChild(aksiCell);

                        pesananItemsTable.appendChild(tableRow);
                    });

                    // Perbarui total pesanan di modal
                    perbaruiTotalPesananModal(hitungTotalPesanan(parsedPesananItems));
                }
            } catch (error) {
                console.error('Terjadi kesalahan saat menampilkan pesanan:', error);
            }
        }

        const form = document.getElementById('formPesanan');

        form.addEventListener('submit', function(event) {

            event.preventDefault();

            // Ambil data pesanan
            const meja = document.getElementById('meja').value;
            const pesananItems = JSON.parse(localStorage.getItem('pesananItems')) || [];

            // Ambil total pesanan
            const totalPesanan = document.getElementById('totalPesanan').textContent;
            totalPesanan = totalPesanan.split('Total Pesanan: Rp')[1];

            form.submit(); // submit form
        });

        const btnPesan = document.getElementById('btnPesanSekarang');

        btnPesan.addEventListener('click', function() {
            // Ambil data pesanan
            const meja = document.getElementById('meja').value;
            const pesananItems = JSON.parse(localStorage.getItem('pesananItems')) || [];

            // Ambil total pesanan
            const totalPesanan = document.getElementById('totalPesanan').textContent;
            totalPesanan = totalPesanan.split('Total Pesanan: Rp')[1];
        });

        const dataPesanan = {
            meja: meja,
            pesanan_items: pesananItems,
            total: totalPesanan
        };

        // Contoh menggunakan Fetch API
        fetch('/pesan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(dataPesanan)
            })
            .then(response => {
                // Pesanan berhasil disimpan
                console.log('Data pesanan berhasil disimpan');
            })
            .catch(error => {
                console.error('Gagal menyimpan data pesanan', error);
            });
        // ...
    </script>
@endsection
