<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCreate extends Component
{
    public $name;
    public $pages;
    public $year;

    public function render()
    {
        return view('livewire.product-create');
    }
}
