<?php

namespace App\View\Components;

use Darryldecode\Cart\Cart;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $cart_items = Cart::getContent();

        return view('components.header', [
            "cart_items" => $cart_items
        ]);
    }
}
