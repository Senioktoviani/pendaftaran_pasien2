@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pendaftaran</div>
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Nama Pasien</label>
                                <input type="text" name="nama_pasien" value="{{ $pendaftaran->nama_pasien }}"
                                    class="form-control @error('nama_pasien') is-invalid @enderror">
                                @error('nama_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Keluhan</label>
                                <select name="id_keluhan" class="form-control @error('id_keluhan') is-invalid @enderror">
                                    @foreach ($keluhan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_keluhan }}</option>
                                    @endforeach
                                </select>
                                @error('id_keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal Daftar</label>
                                <input type="date" name="tanggal_daftar" class="form-control">
                                @error('tanggal_daftar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan No Telepon</label>
                                <input type="text" name="no_telepon" value="{{ $pendaftaran->no_telepon }}"
                                    class="form-control @error('no_telepon') is-invalid @enderror">
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Nama Dokter</label>
                                <select name="id_dokter" class="form-control @error('id_dokter') is-invalid @enderror">
                                    @foreach ($jadwal as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_dokter }}</option>
                                    @endforeach
                                </select>
                                @error('id_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Jenis Kelamin</label>
                                <br>
                                <input type="radio" name="jk" value="laki-laki"> Laki-laki
                                <br>
                                <input type="radio" name="jk" value="perempuan"> Perempuan
                                <br>

                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jadwal Periksa</label>
                                <input type="time" name="jadwal_periksa" value="{{ $pendaftaran->jadwal_periksa }}"
                                    class="form-control @error('jadwal_periksa') is-invalid @enderror">
                                @error('jadwal_periksa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Nama Ruangan</label>
                                <select name="id_ruang" class="form-control @error('id_ruang') is-invalid @enderror">
                                    @foreach ($ruang as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                                @error('id_ruang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Pilih No kamar</label>
                                <select name="id_kamar" class="form-control @error('id_kamar') is-invalid @enderror">
                                    @foreach ($kamar as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kamar }}</option>
                                    @endforeach
                                </select>
                                @error('id_kamar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Cara Bayar</label>
                                <select name="cara_bayar" id="" class="form-control">
                                    <option value="UMUM">UMUM</option>
                                    <option value="BPJS">BPJS</option>
                                </select>
                                @error('cara_bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
