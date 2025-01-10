<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use razorisuru\ShoppingCart\Cart;

class ProductController extends Controller
{
    protected $cart;

    public function __construct()
    {
        $this->cart = new Cart(); // Initialize an instance of the Cart class
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        return response()->json(['cart' => $this->cart->getAll(1),]);
        // dd($cart->getAll(1), $total);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->cart->add(1, 1, 2, 210, ['color' => 'red']);
        // $this->cart->add(1, 1, 3, 200,['color' => 'green']);

        return response()->json(['cart' => $this->cart->getAll(1)]);
        // dd(session()->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {

        $this->cart->clear($id);
        return response()->json(['cart' => "deleted"]);
    }
}
