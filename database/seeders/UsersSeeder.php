<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'fname' => 'kevin felix',
                'lname' => 'caluag',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'role_id' => 2,
                'fname' => 'Staff',
                'lname' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'role_id' => 3,
                'fname' => 'Customer',
                'lname' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('password'),
            ]
            ]);
    }
}
