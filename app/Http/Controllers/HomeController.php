<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = Category::query()->homePage()->get();
        $products = Product::query()->homePage()->get();

        return view('home', compact('categories', 'products'));
    }
}
