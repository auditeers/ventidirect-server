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

        $popular = Product::whereNotNull('image')->random(5);

        return view('home', [
            "cats" => $cats,
            "popular" => $popular
        ]);
    }
}
