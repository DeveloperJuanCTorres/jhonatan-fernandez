<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tienda', [App\Http\Controllers\HomeController::class, 'tienda'])->name('tienda');
Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'contact'])->name('contacto');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeitem');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
