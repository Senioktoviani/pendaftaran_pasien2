@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Jadwal Dokter</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Jadwal Dokter</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Nama Dokter</label>
                            <input type="text" name="nama_dokter" value="{{ $jadwal->nama_dokter }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Waktu Mulai</label>
                            <input type="text" name="waktu_mulai" value="{{ $jadwal->waktu_mulai }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Waktu Berakhir</label>
                            <input type="text" name="waktu_akhir" value="{{ $jadwal->waktu_akhir }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('jadwaldokter.index') }}"
                                class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
