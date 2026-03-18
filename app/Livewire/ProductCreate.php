<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;


class ProductCreate extends Component
{
    public $name;
    public $pages;
    public $year;

    public function store()
    {
        Product::create([
            'name' => $this->name,
            'pages' => $this->pages,
            'year' => $this->year
        ]);
        
        session()->flash('success', 'Prodotto aggiunto con sucecsso!');
        $this->reset('name', 'pages', 'year');
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
