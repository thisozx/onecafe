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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pesanan /</span> Daftar Pesanan</h4>

        <!-- Basic Bootstrap Table -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <h5 class="card-header">Pesanan Masuk</h5>
                    <div class="table-responsive text-nowrap">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Menu</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($pesanan as $data)
                                @if($data->status == 0)
                                <tr>
                                    <td>{{ $data->menu }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>{{ $data->total }}</td>
                                    <td>
                                        <form action="/pesanan/update/{{ $data->id }}" method="post">
                                            @csrf
                                            @method('post')
                                            <button type="submit" class="btn btn-sm btn-outline-{{ $data->status == 0 ? 'danger' : 'warning'}}">
                                                {{ $data->status == 0 ? 'Masuk' : 'Diproses' }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card">
                    <h5 class="card-header">Pesanan Disiapkan</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Menu</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($pesanan as $data)
                                @if($data->status == 1)
                                <tr>
                                    <td>{{ $data->menu }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>{{ $data->total }}</td>
                                    <td>
                                        <form action="/pesanan/update/{{ $data->id }}" method="post">
                                            @csrf
                                            @method('post')
                                            <button type="submit" class="btn btn-sm btn-outline-{{ $data->status == 0 ? 'danger' : 'warning'}}">
                                                {{ $data->status == 0 ? 'Masuk' : 'Diproses' }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
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
<script>
    function confirmUpdate(id) {
        if (confirm("Yakin ubah data?")) {
            window.location.href = "/pesanan/" + id;
        }
    }
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
