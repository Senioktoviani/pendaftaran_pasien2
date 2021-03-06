<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            JadwalDokterSeeder::class,
            KeluhanSeeder::class,
            RuangSeeder::class,
            SpesialisSeeder::class,
            DataDokterSeeder::class,
            KamarSeeder::class,
            PendaftaranSeeder::class,
        ]);

    }
}
