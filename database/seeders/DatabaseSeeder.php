<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        $faker->seed(17);

        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
    }
}
