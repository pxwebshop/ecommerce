<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users =  [
            [
                'name' => 'admin',
                'phone' => '0123456789',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12341234'),
                'role' => '1'
            ],
            [
                'name' => 'user1',
                'phone' => '0123456789',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('12341234'),
                'role' => '2'
            ],
        ];

        User::insert($users);
    }
}
