<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("produks")->insert([
            [
                'category_id' => 3,
                'brand_id' => 1,
                'nama_produk' => 'Nike Air Force',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'nike-air-force-1.jpg',
                'gambar_2' => 'nike-air-force-2.jpg',
                'gambar_3' => 'nike-air-force-3.jpg',
                'gambar_4' => 'nike-air-force-4.jpg',
                'harga_beli' => '100000',
                'harga_normal' => '154900',
                'harga_jual' => '134900',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
