<?php

namespace Database\Seeders;

use App\Models\Spesialis;
use Illuminate\Database\Seeder;

class SpesialisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $spesialis1 = Spesialis::create(['spesialis' => 'Penyakit Dalam']);

        $spesialis2 = Spesialis::create(['spesialis' => 'Dokter Umum']);

        $spesialis3 = Spesialis::create(['spesialis' => 'Dokter Gigi']);

    }
}
