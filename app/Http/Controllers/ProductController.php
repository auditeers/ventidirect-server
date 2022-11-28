<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug = "") 
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $product->pros = json_decode($product->pros);
        $product->cons = json_decode($product->cons);


        return view('product', ["product" => $product]);
    }
}
