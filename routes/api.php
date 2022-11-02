<?php

use Illuminate\Http\Request;
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
    Route::get('/', 'CategoriesController@index');
    Route::get('/list', 'CategoriesController@list');
    Route::post('/save', 'CategoriesController@save'); 
    Route::put('/{categories}/update', 'CategoriesController@update');
    Route::delete('/{categories}/destroy', 'CategoriesController@destroy');  
});

Route::prefix('/products')->group(function() 
{
    Route::get('/', 'ProductsController@index');
    Route::post('/selectmenu', 'ProductsController@selectmenu');
    Route::post('/save', 'ProductsController@save'); 
    Route::put('/{products}/update', 'ProductsController@update');
    Route::delete('/{products}/destroy', 'ProductsController@destroy');  
});

Route::prefix('/carts')->group(function() 
{
    Route::get('/{customer_id}', 'CartController@index');
    Route::post('/selectmenu', 'CartController@selectmenu');
    Route::post('/save', 'CartController@save'); 
    Route::put('/{carts}/update', 'CartController@update');
    Route::delete('/{carts}/destroy', 'CartController@destroy');  
});
