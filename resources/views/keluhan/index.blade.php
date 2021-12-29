@extends('adminlte::page')

@section('content_header')
    Dashboard
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
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <td>Kode </td>
                                        <td>Nama Keluhan</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($jadwal as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->keluhan }}</td>
                                            <td>
                                                <form action="{{ route('keluhan.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('keluhan.edit', $data->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('keluhan.show', $data->id) }}"
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

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @role('admin')
                            Data Keluhan Admin {{ \Laratrust::hasRole('admin') }}
                        @endrole

                        @role('member')
                            Data Keluhan Member {{ \Laratrust::hasRole('member') }}
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
