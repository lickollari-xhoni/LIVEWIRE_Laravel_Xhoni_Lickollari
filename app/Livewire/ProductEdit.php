<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Validate;

class ProductEdit extends Component
{
    #[Validate]
    public $name;

    #[Validate]
    public $pages;

    #[Validate]
    public $year;

    public function mount()
    {
        // Logica di inizializzazione, se necessaria
    }

    public function render()
    {
        return view('livewire.product-edit');
    }
}
