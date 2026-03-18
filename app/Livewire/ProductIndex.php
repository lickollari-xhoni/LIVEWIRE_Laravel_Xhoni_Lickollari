<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $search = '';

    public function delete(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Prodotto eliminato con sucecsso!');
    }
    public function render()
    {
        if ($this->search) {
            $products = Product::where('name', 'LIKE', '%' . $this->search . '%')->get();
        } else {
            $products = Product::all();
        }

        return view('livewire.product-index', compact('products'));
    }
}