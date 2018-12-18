<?php

namespace App\Http\Controllers;

use App\Product;
use App\Classes\Cart;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cart.index', ['cart' => session('cart'), 'product' => product::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        dd($product);
        return Cart::addProductToSession($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $amount = $request->input('quantity');
        return Cart::changeAmountSession($product,$amount);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       return Cart::deleteFromSession($product);
    }
}
