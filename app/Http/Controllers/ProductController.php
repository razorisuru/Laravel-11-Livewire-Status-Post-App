<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use razorisuru\ShoppingCart\Cart;
use Illuminate\Support\Facades\Auth;

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
        $products = Product::all();

        return view('products', compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->cart->add(1, 1, 2, 210, ['color' => 'red']);
        // $this->cart->add(1, 1, 3, 200,['color' => 'green']);
        // $this->cart->clear(Auth::user()->id);
        // $this->cart->clear(1);
        return response()->json(['cart' => $this->cart->getAll(Auth::user()->id)]);
        // dd(session()->all());

        // $test = [
        //     "cart" => [
        //         "10" => [
        //             "user_id" => 1,
        //             "item_id" => 10,
        //             "quantity" => 5,
        //             "price" => "299.95",
        //             "attributes" => [
        //                 "name" => "Monitor",
        //             ],
        //         ],
        //         "9" => [
        //             "user_id" => 1,
        //             "item_id" => 9,
        //             "quantity" => 1,
        //             "price" => "39.99",
        //             "attributes" => [
        //                 "name" => "Mouse",
        //             ],
        //         ],
        //         "5" => [
        //             "user_id" => 1,
        //             "item_id" => 9,
        //             "quantity" => 1,
        //             "price" => "39.99",
        //             "attributes" => [
        //                 "name" => "Mouse",
        //             ],
        //         ],
        //         "8" => [
        //             "user_id" => 1,
        //             "item_id" => 8,
        //             "quantity" => 1,
        //             "price" => "79.99",
        //             "attributes" => [
        //                 "name" => "Keyboard",
        //             ],
        //         ],
        //     ],
        // ];

        // return response()->json(count($test['cart']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->cart->add(Auth::user()->id, 1, 2, 210, ['color' => 'red']);
        return response()->json(['cart' => $this->cart->getAll(Auth::user()->id)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json(['cart' => $this->cart->getAll(Auth::user()->id)]);
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
        $this->cart->update(1, 5, 4);
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
