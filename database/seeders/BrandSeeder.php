<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("brands")->insert([
            [
                'nama_brand' => 'Nike',
                'logo' => 'nike-logo.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'nama_brand' => 'Adidas',
                'logo' => 'adidas-logo.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'nama_brand' => 'Converse',
                'logo' => 'converse-logo.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
