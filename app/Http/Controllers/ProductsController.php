<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products=Products::whereNull('deleted_at')->get();
        return response()->json($products);
    }

    public function selectmenu(Request $request)
    {
        $products=Products::where('category_id','=',$request->category_id)->whereNull('deleted_at')->get();
        return response()->json($products);
    }

    public function list(Request $request)
    {
        $products = Products::whereNull('deleted_at')->get();
        return $products;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $products=Products::create($input); 
        return response()->json($products);
    }

    public function update(Request $request, Products $products)
    {
        $input = $request->all();
        $products->update($input);
        return response()->json($products, 200);
    }

    public function destroy(Products $products)
    {
        $products->deleted_at = Carbon::now();
        $products->update();
        return response()->json(array('success'=>true));
    }
}
