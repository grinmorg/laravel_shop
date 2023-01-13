<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Database\Factories\PropertyFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Бренды
        Brand::factory(20)->create();

        // Характеристики для товаров
        $properties = PropertyFactory::new()->count(10)->create();

        // Создание продуктов (каждому будет присвоено рандомно от 1 до 3 категорий)
        Category::factory(10)
            ->has(
                Product::factory(rand(5, 15))
                    ->hasAttached($properties, function () {
                        // Так как передана функция - для каждого  товара будет разные значения характиристики, а не одинковые (как в случае с массивом)
                        return [
                            'value' => ucfirst(fake()->word())
                        ];
                    })
            )
            ->create();
    }
}
