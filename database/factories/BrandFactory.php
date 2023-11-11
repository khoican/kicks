<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = ['Nike', 'Adidas', 'Compass'];
        return [
            'nama_brand' => $this->faker->unique()->randomElement($brand),
            'logo' => Str::random(10),
        ];
    }
}
