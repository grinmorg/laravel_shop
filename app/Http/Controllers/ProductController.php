<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Product $product)
    {

        $product->load(['optionValues.option']);

        $options = $product->optionValues->sortBy('title')->mapToGroups(function($item, $key) {
            return [
                $item->option->title => $item
            ];
        });

        // Просмотренные товары
        $also_products = [];
        if (session()->has('also')) {
            // Получаем товары, исключая текущий
            $also_products = Product::query()->whereIn( 'id', session()->get('also') )->where('id', '!=', $product->id)->get();
        }

        // При заходе на страницу товара - сохраняем товар в сессии для блока Просмотренные товары
        session()->put('also.' . $product->id, $product->id);

        return view('product.show', [
            'product' => $product,
            'options' => $options,
            'also_products' => $also_products
        ]);
    }
}
