<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->lastname = 'admin-lastname';
        $admin->phone = '12345678';
        $admin->address = 'admin-address';
        $admin->birthdate = '2021-01-01';
        $admin->city = 'admin-city';
        $admin->email = 'admin@test.com';
        $admin->password = bcrypt('12345678');
        $admin->role = 'admin';
        $admin->save();

        $user = new User();
        $user->name = 'user';
        $user->lastname = 'user-lastname';
        $user->phone = '12345678';
        $user->address = 'user-address';
        $user->birthdate = '2021-01-01';
        $user->city = 'user-city';
        $user->email = 'user@test.com';
        $user->password = bcrypt('12345678');
        $user->role = 'user';
        $user->save();
    }


}
