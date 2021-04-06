<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        $products = DB::table('products')->get();
        return view('shop', compact('products'));
    }

    public function cart()
    {
        $cart = Session('cart');
        return view('cart', compact('cart'));
    }

    public function account()
    {
    }

    public function checkout()
    {
        $cart = Session('cart');
        return view('checkout', compact('cart'));
    }
}
