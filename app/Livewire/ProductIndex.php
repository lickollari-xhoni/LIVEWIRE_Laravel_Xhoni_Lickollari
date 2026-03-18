<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product-index', compact('products'));
    }
}
