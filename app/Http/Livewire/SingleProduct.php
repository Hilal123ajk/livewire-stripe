<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Auth;

class SingleProduct extends Component
{
    public $product_id;
    public $product;
    public $productId;
    public $customerId;
    public $quantity;
    public $cartItem;

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->quantity = 1;
    }

    public function submit($id)
    {
        $this->customerId = Auth::id();

        $item_exists = Cart::where('product_id', $id)->where('customer_id', Auth::id())->first();

        if($item_exists)
        {
            $item_exists->update([
                'quantity' => $this->quantity
            ]);

            $this->dispatchBrowserEvent("swal:cart");
            return redirect('/cart');
        }else
        {
            $this->cartItem = Cart::create([
                'product_id' => $this->product->id,
                'customer_id' => $this->customerId,
                'quantity' => $this->quantity
            ]);

            if($this->cartItem)
            {
                $this->dispatchBrowserEvent("swal:cart");
                return redirect('/cart');
            }
        }

        

        
    }

    public function render()
    {
        return view('livewire.single-product')->layout('layout.app');
    }
}
