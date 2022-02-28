<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar1 = Kamar::create(['nama_kamar' => '01']);

        $kamar2 = Kamar::create(['nama_kamar' => '02']);

        $kamar3 = Kamar::create(['nama_kamar' => '03']);

        $kamar4 = Kamar::create(['nama_kamar' => '04']);

        $kamar5 = Kamar::create(['nama_kamar' => '05']);

        $kamar6 = Kamar::create(['nama_kamar' => '06']);

        $kamar7 = Kamar::create(['nama_kamar' => '07']);

        $kamar8 = Kamar::create(['nama_kamar' => '08']);

        $kamar9 = Kamar::create(['nama_kamar' => '09']);

        $kamar10 = Kamar::create(['nama_kamar' => '10']);

    }
}
