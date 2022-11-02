<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Sales;

class SalesController extends Controller
{
    public function index()
    {
        $sales=Sales::whereNull('deleted_at')->get();
        return response()->json($sales);
    }

    public function list(Request $request)
    {
        $sales = Sales::whereNull('deleted_at')->get();
        return $sales;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $sales=Sales::create($input); 
        return response()->json($sales);
    }

    public function update(Request $request, Sales $sales)
    {
        $input = $request->all();
        $sales->update($input);
        return response()->json($sales, 200);
    }

    public function destroy(Sales $sales)
    {
        $sales->deleted_at = Carbon::now();
        $sales->update();
        return response()->json(array('success'=>true));
    }
}
