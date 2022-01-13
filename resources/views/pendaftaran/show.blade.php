@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pendaftarab</div>
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama Pasien</label>
                                <input type="text" name="nama_pasien" value="{{ $pendaftaran->nama_pasien }}"
                                    class="form-control @error('nama_pasien') is-invalid @enderror" disabled>
                                @error('nama_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Nama Keluhan</label>
                                <input type="text" name="id_keluhan" value="{{ $pendaftaran->id_keluhan }}"
                                    class="form-control @error('id_keluhan') is-invalid @enderror" disabled>
                                @error('id_keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Tanggal daftar</label>
                                <input type="text" name="tanggal_daftar" value="{{ $pendaftaran->tanggal_daftar }}"
                                    class="form-control @error('tanggal_daftar') is-invalid @enderror" disabled>
                                @error('tanggal_daftar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> No Telepon</label>
                                <input type="text" name="no_telepon" value="{{ $pendaftaran->no_telepon }}"
                                    class="form-control @error('no_telepon') is-invalid @enderror" disabled>
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Nama Dokter</label>
                                <input type="text" name="id_dokter" value="{{ $pendaftaran->id_dokter }}"
                                    class="form-control @error('id_dokter') is-invalid @enderror" disabled>
                                @error('id_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Jenis Kelamin</label>
                                <input type="text" name="jk" value="{{ $pendaftaran->jk }}"
                                    class="form-control @error('jk') is-invalid @enderror" disabled>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Jadwal Periksa</label>
                                <input type="text" name="jadwal_periksa" value="{{ $pendaftaran->jadwal_periksa }}"
                                    class="form-control @error('jadwal_periksa') is-invalid @enderror" disabled>
                                @error('jadwal_periksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Nama Ruangan</label>
                                <input type="text" name="id_ruang" value="{{ $pendaftaran->id_ruang }}"
                                    class="form-control @error('id_ruang') is-invalid @enderror" disabled>
                                @error('id_ruang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Cara bayar</label>
                                <input type="text" name="cara_bayar" value="{{ $pendaftaran->cara_bayar }}"
                                    class="form-control @error('cara_bayar') is-invalid @enderror" disabled>
                                @error('cara_bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('pendaftaran.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
