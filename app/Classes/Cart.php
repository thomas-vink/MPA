<?php

namespace App\Classes;

use function Couchbase\defaultDecoder;
use Illuminate\Support\Facades\Session;
use App\Product;

class Cart
{


    public static function addProductToSession($product)
    {
        $currentCart = session('cart');
        $cart = array();

        if (isset($currentCart)) {
            if (array_key_exists($product->id, $currentCart)) {
                $newAmount = $currentCart[$product->id]+ 1;
                $currentCart[$product->id] = $newAmount;
                session(['cart' => $currentCart]);
            } else {
                $Cart = $currentCart + array ($product->id =>1);
                session(['cart' => $Cart]);
            }
        }
        else{
            $CartNew = array($product->id => 1);
            session(['cart' => $CartNew]);
        }
        return redirect('/');
    }


    public static function changeAmountSession($product, $amount)
    {
        $currentSession = session('cart');
        if ($amount >= 1){
            $currentSession[$product->id] = $amount;
            session(['cart' => $currentSession]);
        }
        else{
            unset($currentSession[$product->id]);
            session(['cart' => $currentSession]);
        }
        return Redirect('/cart');
    }

    public static function deleteFromSession($product)
    {
        $currentSession = session('cart');
        unset($currentSession[$product->id]);
        session(['cart' => $currentSession]);
        return Redirect('/cart');
    }

}
