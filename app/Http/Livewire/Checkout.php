<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Payment;
use Auth;

class Checkout extends Component
{
    public $name;
    public $email;
    public $address;
    public $city;
    public $state;
    public $postal;
    public $lineItems = [];
    public $products;
    public $total_price;

    protected $rules = [
        'name' => 'required|min:3|max:15',
        'email' => 'required|email',
        'address' => 'required|min:5|max:25',
        'city' => 'required|min:3',
        'postal' => 'required',
        'state' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        $this->products = Cart::where('customer_id', Auth::id())->with('product')->get();
        // dd($this->products->toArray());

        // Specify Items Details 
        foreach ($this->products as $product) 
        {
            $this->total_price += ($product->product->price) * $product->quantity;

            $this->lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->product->name
                    ],
                    'unit_amount' => intval($product->product->price * 100)
                ],
                'quantity' => $product->quantity
            ];
        }
        

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        
        $session = \Stripe\Checkout\Session::create([
            'line_items' => $this->lineItems,
            'mode' => 'payment',
            'success_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('cancel'),
        ]);
 
          

        $payment = new Payment();
        $payment->status = 'paid';
        $payment->total_price = $this->total_price;
        $payment->session_id = $session->id;
        $payment->payment_detail = serialize(['user_name' => $this->name, 'user_email' => $this->email, 'currency' => $session->currency, 'city' => $this->state, 'address' => $this->address]);
        $payment->save();

        return redirect()->to($session->url);
    }

    public function render()
    {
        return view('livewire.checkout')->layout('layout.app');
    }
}
