@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="background-color: rgb(209, 236, 245)">
                    <div class="card-header">
                        <center>
                            <h5>Selamat Datang di <strong>Rumah Sakit Sentosa</strong></h5>
                        </center>
                    </div>
                    <br><br><br>
                    <div class="card-body" style="background-color: rgb(209, 236, 245)">
                        <div class="image">
                            <p style="text-align:justify;"><img src="http://127.0.0.1:8000/img/logo2.jpg"
                                    style="float:left; margin:0 20px 20px 0;" width="400px" />

                            <table>
                                <br><br><br><br>
                                <tr>
                                    <td><b>Nama Rumah Sakit</b></td>
                                    <td>:</td>
                                    <td>Rumah Sakit Sentosa</td>
                                </tr>
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td>:</td>
                                    <td>Jalan Situ Tarate Jl. Cibaduyut,Cangkuang Kulon, Kec. Dayeuhkolot, Kota Bandung,
                                        Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>:</td>
                                    <td>rssentosa@gmail.com</td>
                                </tr>
                                <tr>
                                    <td><b>No Telepon</b></td>
                                    <td>:</td>
                                    <td>0884372832904</td>
                                </tr>
                                <tr>
                                    <td><b>Kode Pos</b></td>
                                    <td>:</td>
                                    <td>40265</td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
