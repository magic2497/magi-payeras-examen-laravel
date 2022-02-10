<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $users = [
            ['name' => 'admin1', 'email' => 'admin1@gmail.com', 'password' => Hash::make('admin'), 'role' => 'admin'],
            ['name' => 'user1', 'email' => 'user1@gmail.com', 'password' => Hash::make('user'), 'role' => 'user'],

        ];
        DB::table('users')->insert($users);
    }
}
