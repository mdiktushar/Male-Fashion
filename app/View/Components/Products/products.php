<?php

namespace App\View\Components\Products;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class products extends Component
{
    public $products;
    /**
     * Create a new component instance.
     */
    public function __construct($products)
    {
        //
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.products');
    }
}
