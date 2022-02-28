@extends('adminlte::page')
@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Pendaftaran</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(".delete-confirm").click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection


@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pendaftaran
                        <a href="{{ route('pendaftaran.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah
                            Pendaftaran</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Pasien</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal daftar</th>
                                        <th>No Telepon</th>
                                        <th>Nama Dokter</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jadwal Pemeriksaan</th>
                                        <th>Nama Ruangan</th>
                                        <th>No Kamar</th>
                                        <th>Cara Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($pendaftaran as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_pasien }}</td>
                                            <td>{{ $data->Keluhan->nama_keluhan }}</td>
                                            <td>{{ $data->tanggal_daftar }}</td>
                                            <td>{{ $data->no_telepon }}</td>
                                            <td>{{ $data->jadwal->nama_dokter }}</td>
                                            <td>{{ $data->jk }}</td>
                                            <td>{{ $data->jadwal_periksa }}</td>
                                            <td>{{ $data->Ruang->keterangan }}</td>
                                            <td>{{ $data->Kamar->nama_kamar }}</td>
                                            <td>{{ $data->cara_bayar }}</td>
                                            <td>
                                                <form action="{{ route('pendaftaran.destroy', $data->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('pendaftaran.edit', $data->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('pendaftaran.show', $data->id) }}"
                                                        class="btn btn-outline-warning">Show</a>
                                                    <button type="submit"
                                                        class="btn btn-danger delete-confirm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
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

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('Datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
