<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create()
    {
        /*$userId = Auth::user()->id;
        $order = new Order();
        $order->user_id = DB::table('users')->find($userId)->id;
        $order->dateOrdered = date('Y-m-d H:i:s', time());
        $order->dateRequired = date('Y-m-d H:i:s', time());
        $order->status = "Đang xử lý";
        $order->save();

        foreach (Session('cart')->items as $item) {
            $order->products()->attach($item['item']['id'], ['amount'=>$item['totalQty']]);
            dump($item['item']['name']);
        }*/

        return response()->json("OK");

    }
}
