<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/categories')->group(function() 
{
    Route::get('/', [CategoriesController::class,'index']);
    Route::get('/list', [CategoriesController::class,'list']);
    Route::post('/save', [CategoriesController::class,'save']); 
    Route::put('/{categories}/update', [CategoriesController::class,'update']);
    Route::delete('/{categories}/destroy', [CategoriesController::class,'destroy']);  
});

Route::prefix('/products')->group(function() 
{
    Route::get('/', [ProductsController::class,'index']);
    Route::post('/selectmenu', [ProductsController::class,'selectmenu']);
    Route::get('/list', [ProductsController::class,'list']);
    Route::post('/save', [ProductsController::class,'save']); 
    Route::put('/{categories}/update', [ProductsController::class,'update']);
    Route::delete('/{categories}/destroy', [ProductsController::class,'destroy']);  
});

Route::prefix('/carts')->group(function() 
{
    Route::get('/{customer_id}', [CartsController::class,'index']);
    Route::get('/list', [CartsController::class,'list']);
    Route::post('/save', [CartsController::class,'save']); 
    Route::put('/{categories}/update', [CartsController::class,'update']);
    Route::delete('/{categories}/destroy', [CartsController::class,'destroy']);    
});
