<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Validate;


class ProductCreate extends Component
{
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

    public function store()
    {

        $this->validate();

        // Product::create([
        //     'name' => $this->name,
        //     'pages' => $this->pages,
        //     'year' => $this->year
        // ]);

        session()->flash('success', 'Prodotto aggiunto con sucecsso!');
        $this->reset('name', 'pages', 'year');
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
