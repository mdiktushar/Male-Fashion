<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cart_item extends Component
{
    public $cart;
    /**
     * Create a new component instance.
     */
    public function __construct($cart)
    {
        //
        $this->cart = $cart;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart_item');
    }
}
