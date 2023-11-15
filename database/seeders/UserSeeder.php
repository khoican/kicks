<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'firstname' => 'admin',
                'lastname' => 'admin',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'gender' => 'n',
                'password' => Hash::make('admin'),
            ],
            [
                'firstname' => 'Riko',
                'lastname' => 'Saputro',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'gender' => 'l',
                'password' => Hash::make('rikoadi123'),
            ],
            [
                'firstname' => 'Melan',
                'lastname' => 'Ricard',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'gender' => 'p',
                'password' => Hash::make('melan123'),
            ],
            [
                'firstname' => 'Oktavia',
                'lastname' => 'Putri',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'gender' => 'p',
                'password' => Hash::make('oktavia123'),
            ],
        ]);
    }
}
