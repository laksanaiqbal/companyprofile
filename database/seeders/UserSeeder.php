<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'administrator',
            'email' => 'admin@role.com',
            'password' => bcrypt('Tikus123()')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@role.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('user');
    }
}
