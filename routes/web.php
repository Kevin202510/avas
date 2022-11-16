<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home')->middleware('auth');
Route::get('/customer', function () { return view('customer.customerHome'); })->name('Customer Home')->middleware('auth');
Route::get('/menus', function () { return view('customer.pages.menu.index'); })->name('Menus');
Route::get('/book-tables', function () { return view('customer.pages.tables.index'); })->name('Tables');
Route::get('/carts', function () { return view('customer.pages.cart.index'); })->name('Cart')->middleware('auth');
Route::get('/categories', function () { return view('admin.pages.categories.index'); })->name('Categories')->middleware('auth');
Route::get('/products', function () { return view('admin.pages.products.index'); })->name('Meals')->middleware('auth');
