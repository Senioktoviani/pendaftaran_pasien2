<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin Pasien';
        $user->email = 'Admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Seni Oktoviani';
        $user->email = 'Seniokto@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Seniseni';
        $user->email = 'Seniseni@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Senisen';
        $user->email = 'Senisen@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Senini';
        $user->email = 'Senini@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

    }
}
