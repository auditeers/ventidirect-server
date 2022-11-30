<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug = "") 
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->take(5)->get();

        return view('product', [
            "product" => $product,
            "related_products" => $related_products,
        ]);
    }
}
