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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu /</span> Daftar Menu</h4>

        <!-- Basic Bootstrap Table -->
        <div class="mb-2">
            <a href="{{ route('menu.create') }}"><button type="submit" class="btn btn-primary"><i class="bx bx-plus"></i> Tambah</button></a>
        </div>
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Menu</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($menu as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->deskripsi}}</td>
                            <td>{{ $data->harga}}</td>
                            <td>
                                <img src="{{ Storage::url('/menu/'.$data->foto) }}" style="width:150px">
                            </td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('menu.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" type="submit" class="btn btn-outline-danger"><i class="bx bx-trash me-1"></i></a>
                                    <a href="{{ route('menu.edit', $data->id) }}" class="btn btn-outline-warning"><i class="bx bx-edit-alt me-1"></i></a>
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
