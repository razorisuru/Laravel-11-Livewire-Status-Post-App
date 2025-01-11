<?php

namespace App\Livewire;

use Livewire\Component;
use razorisuru\ShoppingCart\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class CartCounter extends Component
{
    protected $listners = ['cartUpdated' => 'render'];

    protected $cart;

    public $cartCount;

    public $cartTotal;

    public function __construct()
    {
        $this->cart = new Cart(); // Initialize an instance of the Cart class
    }
    #[On('cartUpdated')]
    public function render()
    {
        $this->cartCount = $this->cart->countProducts(Auth::user()->id);
        $cart = $this->cart->getAll(Auth::user()->id);
        $this->cartTotal = $this->cart->total(Auth::user()->id);
        return view('livewire.cart-counter', compact('cart'));
    }

    public function removeFromCart($item_id)
    {
        $this->cart->remove(Auth::user()->id, $item_id);
        $this->dispatch('cartUpdated');
    }
}
