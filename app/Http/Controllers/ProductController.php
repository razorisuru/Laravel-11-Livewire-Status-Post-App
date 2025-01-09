<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use razorisuru\ShoppingCart\Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = app(Cart::class);
        $cart->add(1, 2, 100, ['color' => 'red']);
        $cart->add(2, 2, 100, ['color' => 'green']);
        $cart->update(2, 4);
        // $cart->remove(1);
        $total = $cart->total();
        return response()->json(['cart' => $cart->getAll(), 'total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function destroy(Product $product)
    {
        //
    }
}
