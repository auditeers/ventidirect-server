<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, $slug = "") 
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $products = $category->products();

        if(!empty($request->input('price_min'))) {
            $products = $products->where('price', ">=", $request->input('price_min'));
        }

        if(!empty($request->input('price_max'))) {
            $products = $products->where('price', "<=", $request->input('price_min'));
        }


        $products = $products->orderBy('image', 'DESC')->paginate(10);

        return view('category', [
            "category" => $category,
            "products" => $products,
        ]);
    }
}
