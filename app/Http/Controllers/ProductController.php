<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('index', compact('products'));
    }

    public function get($id): JsonResponse
    {
        $product = DB::table('products')->find($id);
        return response()->json($product);
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->categy = $request->categy;
        $product->desc = $request->desc;
        $product->save();
        return response()->json($product);
    }

    public function update(Request $request)
    {

    }

    public function delete($id)
    {

    }

    public function search($text)
    {

    }
}
