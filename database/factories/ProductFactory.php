<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'special_price' => $this->faker->randomFloat(2, 5, 400),
            'special_price_start' => now(),
            'special_price_end' => now()->addDays(10),
            'status' => 1,
            'quantity' => $this->faker->numberBetween(1, 100),
            'sku' => strtoupper(Str::random(8)),
            'image' => 'default.png',
        ];
    }
}
