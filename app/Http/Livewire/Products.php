<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    

    public function render()
    {
        return view('livewire.products')->layout('layout.app');
    }
}
