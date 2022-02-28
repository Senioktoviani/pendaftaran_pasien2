<?php

namespace Database\Seeders;

use App\Models\Jeniskelamin;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jenis1 = Jeniskelamin::create(['jenis_kelamin' => 'Laki-laki']);

        $jenis2 = Jeniskelamin::create(['jenis_kelamin' => 'Perempuan']);

    }
}
