<?php

namespace Database\Seeders;

use App\Models\JadwalDokter;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jadwal1 = JadwalDokter::create(['nama_dokter' => 'Dr.Sansan', 'waktu_mulai' => "jam 10",
            'waktu_akhir' => "jam 12"]);

        $jadwal2 = JadwalDokter::create(['nama_dokter' => 'Dr.Sindy', 'waktu_mulai' => "jam 11",
            'waktu_akhir' => "jam 13"]);

        $jadwa31 = JadwalDokter::create(['nama_dokter' => 'Dr.Sani', 'waktu_mulai' => "jam 12",
            'waktu_akhir' => "jam 14"]);

    }
}
