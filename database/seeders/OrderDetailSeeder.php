<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("order_details")->insert([
            [
                'order_id' => 1,
                'produk_id' => 1,
                'jumlah' => 1,
                'keuntungan' => 349000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'order_id' => 1,
                'produk_id' => 2,
                'jumlah' => 1,
                'keuntungan' => 132000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
