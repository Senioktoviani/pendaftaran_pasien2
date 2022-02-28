<!DOCTYPE html>
<html Lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Data Pendaftaran</title>
    <style>
        table tr td {
            font-size: 15px;
        }

        table tr .text {
            text-align: right;
            font-size: 15px;
        }

        table tr .text1 {
            text-align: left;
            font-size: 15px;
        }

    </style>
</head>

<body>
    <script Language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September November Desember");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>
    <center>
        <table width="710">
            <tr>
                <td><img src="{{ asset('vendor/adminlte/dist/img/s.jpg') }}" width="70" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b>RUMAH SAKIT SENTOSA</b></font><br>
                        <font size="2">Jalan Situ Tarate Jl. Cibaduyut,Cangkuang Kulon, Kec. Dayeuhkolot, Kota Bandung,
                            Jawa Barat
                            40265</font><br>
                        <font size="2">Email: rssentosa@gmail.com, Telepon: 0884372832904</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table width="710">
            <tr>
                <script Language='JavaScript'>
                    document.write(tanggallengkap);
                </script></td>
            </tr>
        </table>
        <br>
        <table width="710">
            <tr>
                <td class="text2">
                    <h3>Laporan Data Pendaftaran : </h3>
                </td>
            </tr>
        </table>
        <table border="1px" width="710">
            <tr style="background-color: rgb(136, 236, 223);">
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
            </tr>
            @php $no=1; @endphp
            @foreach ($cetak as $data)
                <tr>
                    <td style="background-color: rgb(136, 236, 223);">{{ $no++ }}</td>
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
                </tr>
            @endforeach
        </table>
    </center>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
