<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = ['Sport', 'Casual', 'Formal'];
        return [
            'kategori' => $this->faker->unique()->randomElement($category),
            'deskripsi' => Str::random(10)
        ];
    }
}
