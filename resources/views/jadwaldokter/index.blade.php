@extends('adminlte::page')
@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Jadwal Dokter</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="background-color: antiquewhite">
                    <div class="card-header">
                        Data Jadwal Dokter
                        <a href="{{ route('jadwaldokter.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah
                            Data Jadwal</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <td>Nama Dokter </td>
                                        <td>Waktu Mulai</td>
                                        <td>Waktu Akhi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($jadwal as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_dokter }}</td>
                                            <td>{{ $data->waktu_mulai }}</td>
                                            <td>{{ $data->waktu_akhir }}</td>
                                            <td>
                                                <form action="{{ route('jadwaldokter.destroy', $data->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('jadwaldokter.edit', $data->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('jadwaldokter.show', $data->id) }}"
                                                        class="btn btn-outline-warning">Show</a>
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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




@role('member')
    Data Jadwal Member {{ \Laratrust::hasRole('member') }}
@endrole
