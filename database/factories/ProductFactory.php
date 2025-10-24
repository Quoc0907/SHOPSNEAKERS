<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "MASP" => "FSP".Str::random(5),
            "TENSP" => $this->faker->unique()->words(rand(1,5), true),
            "HINHANH" => $this->faker->imageUrl(640, 480, "Products", true, "Faker Image"),
            "DVT" => $this->faker->word(),
            "NUOCSX" => $this->faker->country,
            "GIA" => $this->faker->randomFloat(0,0, 1000),
            "MOTA" => $this->faker->paragraph(),
        ];
    }
}
