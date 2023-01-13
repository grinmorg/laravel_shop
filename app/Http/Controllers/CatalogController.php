<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __invoke(?Category $category)
    {

        $brands = Brand::query()
            ->select(['id', 'title'])
            ->has('products')
            ->get();

        // убрал search() чтобы отключить Scout поиск
        $products = Product::query()
            ->select(['id', 'slug', 'title', 'text', 'price', 'thumbnail'])
            ->when(request('s'), function (Builder $q) {
                $q->whereFullText(['title', 'text'], request('s'));
            })
            ->when($category->exists, function (Builder $q) use ($category) {
                // получение товаров из нужной категории
                $q->whereRelation(
                    'categories',
                    'categories.id',
                    '=',
                    $category->id
                );
            })
            ->filtered()
            ->sorted()
            ->paginate(9);

        $categories = Category::query()
            ->select(['id', 'title', 'slug'])
            ->has('products')
            ->get();

        return view('catalog.index', [
            'products' => $products,
            'categories' => $categories,
            'category' => $category,
            'brands' => $brands
        ]);
    }
}
