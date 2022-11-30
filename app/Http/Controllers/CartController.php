<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart_items = \Cart::getContent();

        return view('cart_edit', [
            "cart_items" => $cart_items,
        ]);
    }


    public function add(Int $product_id)
    {
        $product = Product::findOrFail($product_id);
        $cart_item_id = Str::random(9);

        \Cart::add([
            'id' => $cart_item_id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => 'App\Models\Product'
        ]);

        return back()->with('cart', 'added');

    }

    public function delete(Int $cart_item_id)
    {

       \Cart::remove($cart_item_id);

       return back()->with('cart', 'deleted');

    }



}
