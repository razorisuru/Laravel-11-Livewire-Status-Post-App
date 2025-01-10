<?php

namespace App\Livewire;

use Livewire\Component;
use razorisuru\ShoppingCart\Cart;
use Illuminate\Support\Facades\Auth;

class CartCounter extends Component
{
    protected $listners = ['cartUpdated' => 'render'];

    protected $cart;

    public function __construct()
    {
        $this->cart = new Cart(); // Initialize an instance of the Cart class
    }
    public function render()
    {
        $cartCount = $this->cart->count(Auth::user()->id);
        return view('livewire.cart-counter', compact('cartCount'));
    }
}
