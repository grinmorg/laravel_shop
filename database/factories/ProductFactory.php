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

            // пример с изображением нашёл сам
            'thumbnail' => $this->faker->imageUrl(400, 300, 'placeholder', true, '400x300', true),

            'price' => $this->faker->numberBetween(1000, 100000),
        ];
    }
}
