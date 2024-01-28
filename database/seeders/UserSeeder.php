<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // [
            //     'name' => 'Admin user',
            //     'username' => 'adminuser',
            //     'email' => 'admin@gmail.com',
            //     'role' => 'admin',
            //     'status' => 'active',
            //     'password' => bcrypt('password')
            // ],
            [
                'name' => 'Admin user',
                'username' => 'adminuser',
                'email' => 'admin@buhogt.com',
                'role' => 'admin',
                'status' => 'active',
                'email_verified_at' => now(),
                'password' => bcrypt('password')

            ],
            [
                'name' => 'Vendor user',
                'username' => 'vendoruser',
                'email' => 'vendedor@buhogt.com',
                'role' => 'vendor',
                'status' => 'active',
                'email_verified_at' => now(),
                'password' => bcrypt('password')
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@buhogt.com',
                'role' => 'user',
                'status' => 'active',
                'email_verified_at' => now(),
                'password' => bcrypt('password')
            ],
            [
                'name' => 'servicio user',
                'username' => 'user',
                'email' => 'servicio@buhogt.com',
                'role' => 'service',
                'status' => 'active',
                'email_verified_at' => now(),
                'password' => bcrypt('password')
            ]
        ]);
    }
}
