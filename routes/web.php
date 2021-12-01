<?php

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/login', function(){
    return view('login');
});
Route::get('/logout', function(){
    Session::forget('user');
    return redirect('login');
});
Route::view("/register", 'register');
Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::get("/search", [ProductController::class, 'search']);
Route::POST("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get("/cartlist", [ProductController::class, 'cartList']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("ordernow", [ProductController::class, 'orderNow']);
Route::POST("/orderplace", [ProductController::class, 'orderPlace']);
Route::get("myorders", [ProductController::class, 'myOrders']);
Route::POST("directorder", [ProductController::class, 'directOrder']);
Route::POST("directorderplace", [ProductController::class, 'directOrderPlace']);



