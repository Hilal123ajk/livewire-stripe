<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Home;
use App\Http\Livewire\Register;
use App\Http\Livewire\Login;
use App\Http\Livewire\Products;
use App\Http\Livewire\Success;
use App\Http\Livewire\Carts;
use App\Http\Livewire\SingleProduct;
use App\Http\Livewire\Checkout;


Route::get('/', Home::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::get('/logout', function () {
    Auth::logout();

    return redirect('/login');
})->middleware('auth');

Route::get('/products', Products::class)->name('products');
Route::get('/product/{id}', SingleProduct::class)->name('product')->middleware('auth');

Route::get('/cart', Carts::class)->name('cart')->middleware('auth');
Route::get('/checkout-form', Checkout::class)->name('checkout')->middleware('auth');

Route::get('/success', Success::class)->name('success');
Route::get('/cancel', Products::class)->name('cancel');