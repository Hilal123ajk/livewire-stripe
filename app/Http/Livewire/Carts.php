<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use Auth;

class Carts extends Component
{
    public $cart_items;
    public $products;
    public $price;
    public $product;

    public function cartdata()
    {
        $this->totalPrice = 0;

        $this->cart_items = Cart::where('customer_id', Auth::id())->with('product')->get();

        $this->products = $this->cart_items;

        foreach($this->products as $product)
        {
            $this->totalPrice = $this->totalPrice + ($product->product->price * $product->quantity);
        }
    }

    public function removeFromCart($id)
    {
        Cart::find($id)->delete();

        $this->dispatchBrowserEvent("swal:remove");
    }

    // public function checkout($id)
    // {

    //     $this->product = Product::find($id);

    //     \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        
    //     $checkout_session = \Stripe\Checkout\Session::create([
    //         'line_items' => [[
    //             'price_data' => [
    //                 'currency' => 'usd',
    //                 'product_data' => [
    //                     'name' => $this->product->name
    //                 ],
    //                 'unit_amount' => intval($this->product->price * 100)
    //             ],
    //             'quantity' => 1
    //         ]],
    //         'mode' => 'payment',
    //         'success_url' => route('success'),
    //         'cancel_url' => route('cancel'),
    //       ]);

    //       return redirect()->to($checkout_session->url);

    // }

    public function render()
    {
        $this->cartdata();
        return view('livewire.carts')->layout('layout.app');
    }
}
