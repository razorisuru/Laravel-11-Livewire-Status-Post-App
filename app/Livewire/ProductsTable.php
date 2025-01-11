<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use razorisuru\ShoppingCart\Cart;
use Illuminate\Support\Facades\Auth;

class ProductsTable extends Component
{
    public $products;
    protected $cart;

    public array $quantity = [];


    public function mount()
    {
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function __construct()
    {
        $this->cart = new Cart(); // Initialize an instance of the Cart class
        // dd($cartCount = $this->cart->count(Auth::user()->id));
    }


    public function render()
    {
        // $cart = $this->cart->getAll(Auth::user()->id);
        return view('livewire.products-table');
    }

    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);
        // dd($this->quantity[$product_id]);
        $this->cart->add(Auth::user()->id, $product_id, $this->quantity[$product_id], $product->price, ['name' => $product->name]);
        $this->dispatch('cartUpdated');

    }
}
