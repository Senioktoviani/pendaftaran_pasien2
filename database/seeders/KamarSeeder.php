<?php

namespace Database\Seeders;

use App\Models\Kamars;
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
        $kamar1 = Kamars::create(['nama_kamar' => '01']);

        $kamar2 = Kamars::create(['nama_kamar' => '02']);

        $kamar3 = Kamars::create(['nama_kamar' => '03']);

        $kamar4 = Kamars::create(['nama_kamar' => '04']);

        $kamar5 = Kamars::create(['nama_kamar' => '05']);

        $kamar6 = Kamars::create(['nama_kamar' => '06']);

        $kamar7 = Kamars::create(['nama_kamar' => '07']);

        $kamar8 = Kamars::create(['nama_kamar' => '08']);

        $kamar9 = Kamars::create(['nama_kamar' => '09']);

        $kamar10 = Kamars::create(['nama_kamar' => '10']);

    }
}
