@extends('template/master')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Riwayat /</span> Daftar Riwayat</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Riwayat Pemesanan</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pesanan No</th>
                                <th>Total</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($riwayat as $data)
                                <tr>
                                    <td>Pesanan Ke-{{ $data->pesanan }}</td>
                                    <td>{{ $data->total }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>
                                        <form action="{{ route('riwayat', $data->id) }}" method="POST" class="form-hapus">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-hapus"
                                                data-id="{{ $data->id }}">
                                                <i class="bx bx-trash me-1"></i>
                                            </button>
                                        </form>
                                        &nbsp;
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- DataTables & Plugins -->
    <script src="{{ url('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ url('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <!-- Page specific script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $('.btn-hapus').click(function() {
                var id = $(this).data('id');

                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus data?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect ke route delete
                        window.location.href = "{{ url('riwayat') }}/" + id;
                    }
                });
            });
        });
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
