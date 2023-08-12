<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Auth;

class ShowCart extends Component
{
    // Cart Items Counter

    public $counter;
    public $cartItems;

    public function mount()
    {
        $this->counter = 0;
        $this->cartItems = Cart::where('customer_id', Auth::id())->with('product')->get();

        $this->counter = $this->cartItems->count();

        // dd($this->counter);
    }

    public function render()
    {
        return view('livewire.show-cart');
    }
}
