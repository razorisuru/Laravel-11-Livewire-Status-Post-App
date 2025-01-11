<?php

namespace App\Livewire;

use Livewire\Component;
use razorisuru\ShoppingCart\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class CartCounter extends Component
{
    protected $listeners = ['cartUpdated' => 'render'];
    public $isCartOpen = false;
    protected $cart;

    public $cartMat;

    public $cartCount;

    public $cartTotal;

    public $loading;

    public function __construct()
    {
        $this->cart = new Cart(); // Initialize an instance of the Cart class
    }

    #[On('cartUpdated')]
    public function render()
    {
        $this->cartCount = $this->cart->countProducts(Auth::user()->id);
        $this->cartMat = $this->cart->getAll(Auth::user()->id);
        $this->cartTotal = $this->cart->total(Auth::user()->id);
        return view('livewire.cart-counter');
    }

    public function removeFromCart($item_id)
    {
        $this->cart->remove(Auth::user()->id, $item_id);
        $this->dispatch('cartUpdated');
    }

    public function checkout()
    {
        $this->loading = true;
    }

    public function toggleCart()
    {
        $this->isCartOpen = !$this->isCartOpen;
    }

    public function closeCart()
    {
        $this->isCartOpen = false;
    }
}
