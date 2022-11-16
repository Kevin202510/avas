<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CartsController extends Controller
{
    public function index(Request $request)
    {
        $carts=Carts::where('user_id','=',$request->customer_id)->whereNull('deleted_at')->get();
        return response()->json($carts);
    }

    public function list(Request $request)
    {
        $carts = Carts::whereNull('deleted_at')->get();
        return $carts;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $carts=Carts::create($input); 
        return response()->json($carts);
    }

    public function update(Request $request, Carts $carts)
    {
        $input = $request->all();
        $carts->update($input);
        return response()->json($carts, 200);
    }

    public function destroy(Carts $carts)
    {
        $carts->deleted_at = Carbon::now();
        $carts->update();
        return response()->json(array('success'=>true));
    }
}
