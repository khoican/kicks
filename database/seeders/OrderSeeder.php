<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("orders")->insert([
            [
                'user_id' => 2,
                'email' => fake()->safeEmail(),
                'firstname' => 'Riko',
                'lastname' => 'Saputro',
                'alamat' => 'Jl. Merbabu No. 31 Jember',
                'no_telp' => 8819467281,
                'pengiriman' => 'standard',
                'status' => 'delivered',
                'ongkir' => '21000',
                'harga_produk' => '2048000',
                'total' => '2069000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
