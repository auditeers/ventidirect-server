<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, $slug = "") 
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $products = Product::where('category_id', $category->id);

        if(!empty($request->input('price_min'))) {
            $products = $products->where('price', ">", $request->input('price_min'));
        }

        if(!empty($request->input('price_max'))) {
            $products = $products->where('price', "<", $request->input('price_min'));
        }


        $products = $products->paginate(10);

        return view('category', [
            "category" => $category,
            "products" => $products,
        ]);
    }
}
