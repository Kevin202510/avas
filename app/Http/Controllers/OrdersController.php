<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function index()
    {
        $orders=Orders::whereNull('deleted_at')->get();
        return response()->json($orders);
    }

    public function list(Request $request)
    {
        $orders = Orders::whereNull('deleted_at')->get();
        return $orders;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $orders=Orders::create($input); 
        return response()->json($orders);
    }

    public function update(Request $request, Orders $orders)
    {
        $input = $request->all();
        $orders->update($input);
        return response()->json($orders, 200);
    }

    public function destroy(Orders $orders)
    {
        $orders->deleted_at = Carbon::now();
        $orders->update();
        return response()->json(array('success'=>true));
    }
}
