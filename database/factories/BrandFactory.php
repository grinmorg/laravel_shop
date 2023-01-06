<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->company(),

            // пример с изображением нашёл сам
            'thumbnail' => $this->faker->imageUrl(400, 300, 'placeholder', true, '400x300', true)
        ];
    }
}
