<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    use \Cart;

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
