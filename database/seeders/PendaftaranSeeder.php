<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendaftaran1 = Pendaftaran::create(['nama_pasien' => 'Seni', 'id_keluhan' => 1,
            'tanggal_daftar' => '19 Januari', 'no_telepon' => '08964728637', 'id_dokter' => 2,
            'jk' => 'Perempuan', 'jadwal_periksa' => '11.00 WIB', 'id_ruang' => 1, 'cara_bayar' => 'BPJS']);

        $pendaftaran2 = Pendaftaran::create(['nama_pasien' => 'Senisen', 'id_keluhan' => 2,
            'tanggal_daftar' => '20 Januari', 'no_telepon' => '08964909637', 'id_dokter' => 3,
            'jk' => 'Perempuan', 'jadwal_periksa' => '09.00 WIB', 'id_ruang' => 2, 'cara_bayar' => 'UMUM']);

        $pendaftaran3 = Pendaftaran::create(['nama_pasien' => 'Dikri', 'id_keluhan' => 1,
            'tanggal_daftar' => '14 Januari', 'no_telepon' => '08567909637', 'id_dokter' => 1,
            'jk' => 'Laki-laki', 'jadwal_periksa' => '13.00 WIB', 'id_ruang' => 3, 'cara_bayar' => 'BPJS']);

    }
}
