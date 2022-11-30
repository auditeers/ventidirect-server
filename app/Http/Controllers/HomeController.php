<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cats = Category::whereNull('parent_id')->get();

        $popular = Product::whereNotNull('image')->whereNot('image', 'default-product.png')->inRandomOrder()->take(5)->get();

        return view('home', [
            "cats" => $cats,
            "popular" => $popular
        ]);
    }
}
