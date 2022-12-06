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
            'attributes' => [
                "image" => $product->image,
                "product_id" => $product->id
            ],
            'associatedModel' => $product
        ]);

        return back()->with('cart', 'added');

    }

    public function delete(String $cart_item_id)
    {

       \Cart::remove($cart_item_id);

       return back()->with('cart', 'deleted');

    }


    public function order_details()
    {
        $cart_items = \Cart::getContent();

        return view('order_form_details', [
            "cart_items" => $cart_items,
        ]);
    }


    public function save_order_details()
    {
        
        return redirect('/cart/order/bezorging');
    }

    
    
    public function order_delivery()
    {
       
        return view('order_form_delivery', [
            
        ]);
    }

    public function save_order_delivery()
    {
        exit('ok la');
        return redirect('/cart/order/overzicht');
    }



    public function order_overview()
    {
        return view('order_form_overview', [
            
        ]);
    }

    public function save_order_overview()
    {
        return redirect('cart/order/done');
    }

     public function order_done()
    {
        return view('order_form_done', [
            
        ]);
    }



}
