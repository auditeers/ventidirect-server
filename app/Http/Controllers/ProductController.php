<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug = "") 
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('product', ["product" => $product]);
    }
}
