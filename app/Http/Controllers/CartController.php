<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function addProduct($id): RedirectResponse
    {
        $product = Product::find($id);
        $oldCart = Session('cart');

        $newCart = new Cart($oldCart);
        $newCart->addToCart($id, $product);
        Session::put('cart', $newCart);

        return back();
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('cart', ['product' => $product]);
    }

    public function deleteProduct($id): RedirectResponse
    {
        $product = Product::find($id);
        $oldCart = Session('cart');

        $newCart = new Cart($oldCart);
        $newCart->removeProduct($id, $product, 1);
        Session::put('cart', $newCart);

        return back();
    }

    public function deleteAllProduct($id): RedirectResponse
    {
        $product = Product::find($id);
        $oldCart = Session('cart');

        $newCart = new Cart($oldCart);
        $newCart->removeProduct($id, $product, -1);
        Session::put('cart', $newCart);

        return back();
    }

    public function clearCart(): RedirectResponse
    {
        Session::forget('cart');
        return redirect()->route('cart');
    }
}
