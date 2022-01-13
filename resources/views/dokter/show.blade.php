@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Dokter</div>
                    <div class="card-body">
                        <form action="{{ route('dokter.update', $dokter->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> NIK</label>
                                <input type="text" name="nik" value="{{ $dokter->nik }}"
                                    class="form-control @error('nik') is-invalid @enderror" disabled>
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Nama Dokter</label>
                                <input type="text" name="id_dokter" value="{{ $dokter->id_dokter }}"
                                    class="form-control @error('id_dokter') is-invalid @enderror" disabled>
                                @error('id_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" value="{{ $dokter->jk }}"
                                    class="form-control @error('jk') is-invalid @enderror" disabled>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Spesialis</label>
                                <input type="text" name="id_spesialis" value="{{ $dokter->id_spesialis }}"
                                    class="form-control @error('id_spesialis') is-invalid @enderror" disabled>
                                @error('id_spesialis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="{{ $dokter->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror" disabled>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('keluhan.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
