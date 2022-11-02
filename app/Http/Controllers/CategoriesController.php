<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Categories::whereNull('deleted_at')->get();
        return response()->json($categories);
    }

    public function list(Request $request)
    {
        $categories = Categories::whereNull('deleted_at')->get();
        return $categories;
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $categories=Categories::create($input); 
        return response()->json($categories);
    }

    public function update(Request $request, Categories $categories)
    {
        $input = $request->all();
        $categories->update($input);
        return response()->json($categories, 200);
    }

    public function destroy(Categories $categories)
    {
        $categories->deleted_at = Carbon::now();
        $categories->update();
        return response()->json(array('success'=>true));
    }
}
