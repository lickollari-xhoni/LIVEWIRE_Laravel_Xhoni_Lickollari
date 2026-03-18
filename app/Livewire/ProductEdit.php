<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Validate;

class ProductEdit extends Component
{

    public Product $product;

    #[Validate]
    public $name;

    #[Validate]
    public $pages;

    #[Validate]
    public $year;

    protected function rules()
    {
        return [
            'name' => 'required',
            'pages' => 'integer',
            'year' => 'integer',
        ];
    }

    protected function messages()
    {
        return [
            'name' => 'Il nome è obbligatorio.',
            'pages' => 'Le pagine devono essere un numero intero.',
            'year' => 'L\'anno deve essere un numero intero.',
        ];
    }

    public function update()
    {

        $this->validate();

        Product::create([
            'name' => $this->name,
            'pages' => $this->pages,
            'year' => $this->year
        ]);

        session()->flash('success', 'Prodotto aggiunto con sucecsso!');
        $this->reset('name', 'pages', 'year');
    }

    public function mount()
    {
        $this->name = $this->product->name;
        $this->pages = $this->product->pages;
        $this->year = $this->product->year;
    }

    public function render()
    {
        return view('livewire.product-edit');
    }
}
