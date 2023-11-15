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
                'harga_beli' => '1000000',
                'harga_normal' => '1549000',
                'harga_jual' => '1349000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'brand_id' => 1,
                'nama_produk' => 'Nike Tanjun',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'nike-tanjun-1.jpg',
                'gambar_2' => 'nike-tanjun-2.jpg',
                'gambar_3' => 'nike-tanjun-3.jpg',
                'gambar_4' => 'nike-tanjun-4.jpg',
                'harga_beli' => '567000',
                'harga_normal' => '799000',
                'harga_jual' => '699000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'brand_id' => 1,
                'nama_produk' => 'Nike Air Force',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'nike-air-force-1.jpg',
                'gambar_2' => 'nike-air-force-2.jpg',
                'gambar_3' => 'nike-air-force-3.jpg',
                'gambar_4' => 'nike-air-force-4.jpg',
                'harga_beli' => '1000000',
                'harga_normal' => '1549000',
                'harga_jual' => '1349000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'brand_id' => 2,
                'nama_produk' => 'Adidas Grand Court',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'adidas-grand-1.jpg',
                'gambar_2' => 'adidas-grand-2.jpg',
                'gambar_3' => 'adidas-grand-3.jpg',
                'gambar_4' => 'adidas-grand-4.jpg',
                'harga_beli' => '800000',
                'harga_normal' => '1100000',
                'harga_jual' => '999000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'brand_id' => 2,
                'nama_produk' => 'Adidas Neo Advantage',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'adidas-neo-1.jpg',
                'gambar_2' => 'adidas-neo-2.jpg',
                'gambar_3' => 'adidas-neo-3.jpg',
                'gambar_4' => 'adidas-neo-4.jpg',
                'harga_beli' => '550000',
                'harga_normal' => '950000',
                'harga_jual' => '799000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'brand_id' => 3,
                'nama_produk' => 'Converse Chuck Taylor All Star Leather',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'converse-chuck-1.jpg',
                'gambar_2' => 'converse-chuck-2.jpg',
                'gambar_3' => 'converse-chuck-3.jpg',
                'gambar_4' => 'converse-chuck-4.jpg',
                'harga_beli' => '550000',
                'harga_normal' => '859000',
                'harga_jual' => '799000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'brand_id' => 3,
                'nama_produk' => 'Converse Chuck Taylor All Star Dainty',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam modi laboriosam nostrum cumque repellendus rerum cupiditate sunt voluptate aliquam omnis! Unde nemo omnis id saepe sunt. Sed repudiandae laboriosam necessitatibus?',
                'gambar_1' => 'converse-ctas-1.jpg',
                'gambar_2' => 'converse-ctas-2.jpg',
                'gambar_3' => 'converse-ctas-3.jpg',
                'gambar_4' => 'converse-ctas-4.jpg',
                'harga_beli' => '490000',
                'harga_normal' => '759000',
                'harga_jual' => '699000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
