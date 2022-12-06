<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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


    public function save_order_details(Request $request)
    {
        $input = $request->all();

        $rules = [
            'firstname' => 'required|min:2|max:255',
            'lastname' => 'required|min:2|max:255',
            'zip' => 'required|min:6|max:7',
            'streetnr' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'street' => 'required',
        ];

        $messages = [
            'required' => 'Je hebt geen :attribute ingegeven.',
            'min' => 'Je opgegeven :attribute is te kort.',
            'max' => 'Je opgegeven :attribute is te lang.'
        ];

        $attributes = [
            'firstname' => 'voornaam',
            'lastname' => 'achternaam',
            'zip' => 'postcode',
            'streetnr' => 'huisnummer',
            'email' => 'e-mail adres',
            'phone' => 'telefoonnummer',
            'city' => 'plaatsnaam',
            'street' => 'straatnaam',
        ];

        $validator = Validator::make($input, $rules, $messages, $attributes)->validate();

        // all valid create the customer
        $customer = Customer::updateOrCreate(
            [
                'email' => $input['email']
            ],
            [
                'firstname' => $input['firstname'], 
                'lastname' => $input['lastname'], 
                'zip' => $input['zip'], 
                'streetnr' => $input['streetnr'], 
                'email' => $input['email'], 
                'phone' => $input['phone'], 
                'city' => $input['city'], 
                'streetaddition' => $input['streetaddition'], 
                'street' => $input['street'],
                'password' => Hash::make(Str::random(40))
            ]
        );

        return redirect('/cart/order/bezorging')->with('customer_id', $customer->id);
    }

    
    
    public function order_delivery(Request $request)
    {
        if(empty($request->session()->get('customer_id'))) {
            return redirect('/cart/order/details');
        }

        $cart_items = \Cart::getContent();

        return view('order_form_delivery', [
            "cart_items" => $cart_items,
        ]);
    }

    public function save_order_delivery(Request $request)
    {
        $input = $request->all();

        $rules = [
            'delivery' => 'required',
        ];

        $messages = [
            'delivery.required' => 'Kies een bezorgmethode.',
        ];

        

        $validator = Validator::make($input, $rules, $messages)->validate();

        
        
        // all valid create the order
        $order_code = date('Y') . "-" . date('u') . "-" . strtoupper(Str::random(4));
        $cart_total = (float)\Cart::getTotal();

        $order = Order::create(
            [
                'customer_id' => $input['customer_id'], 
                'code' => $order_code, 
                'shipping_date' => date('Y-m-d'), 
                'subtotal' => number_format($cart_total, 2, '.', ''), 
                'total' => number_format($cart_total, 2, '.', ''), 
            ]
        );

        // add cart to order and empty cart
        $cart_items = \Cart::getContent();

        foreach($cart_items as $cart_item) {

            $order->products()->attach($cart_item->attributes["product_id"], [
                'price' => $cart_item->price,
                'quantity' => $cart_item->quantity,
                'product_name' => $cart_item->name,
            ]);

            // remove from cart
            \Cart::remove($cart_item->id);
        }

        return redirect('/cart/order/overzicht')->with('order_id', $order->id);
    }



    public function order_overview(Request $request)
    {
        // check the order
        if(empty($request->session()->get('order_id'))) {
            return redirect('/cart/order/bezorging');
        }

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
