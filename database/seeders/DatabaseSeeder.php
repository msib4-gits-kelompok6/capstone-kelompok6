<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
            ]
        ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'phone_number' => '083891428869',
                'alamat' => 'Kabupaten Tangerang',
                'password' => Hash::make('user12345'),
            ]
        ]);

        DB::table('pemilik_bengkels')->insert([
            [
                'id' => 1,
                'name' => 'Owner1',
                'email' => 'owner1@gmail.com',
                'phone_number' => '083891428869',
                'password' => Hash::make('owner12345'),
            ]
        ]);
    }
}
