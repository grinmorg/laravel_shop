<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => ucfirst( $this->faker->words(2, true) ), // ucfirst - делает первую букву заглавной

            // Берём рандомный бренд для присваивания - только id
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),

            'thumbnail' => $this->faker->randomElement(['/images/good-card-1.jpg', '/images/good-card-2.jpg', '/images/good-card-3.jpg', '/images/good-card-4.jpg']),

            'price' => $this->faker->numberBetween(1000, 100000),

            'on_home_page' => $this->faker->boolean(),
            'sorting' => $this->faker->numberBetween(1, 999)
        ];
    }
}
