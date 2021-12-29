<?php

namespace Database\Seeders;

use App\Models\Keluhan;
use Illuminate\Database\Seeder;

class KeluhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $keluhan1 = Keluhan::create(['nama_keluhan' => 'Diare']);

        $keluhan2 = Keluhan::create(['nama_keluhan' => 'Demam']);

        $keluhan3 = Keluhan::create(['nama_keluhan' => 'Batuk']);

    }
}
