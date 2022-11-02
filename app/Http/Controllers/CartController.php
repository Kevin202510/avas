<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart=Cart::where('user_id','=',$request->customer_id)->whereNull('deleted_at')->get();
        return response()->json($cart);
    }

    public function list(Request $request)
    {
        $cart = Cart::whereNull('deleted_at')->get();
        return $cart;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $cart=Cart::create($input); 
        return response()->json($cart);
    }

    public function update(Request $request, Cart $cart)
    {
        $input = $request->all();
        $cart->update($input);
        return response()->json($cart, 200);
    }

    public function destroy(Cart $cart)
    {
        $cart->deleted_at = Carbon::now();
        $cart->update();
        return response()->json(array('success'=>true));
    }
}
