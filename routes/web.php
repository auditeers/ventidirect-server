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

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


// Cats
Route::get('/producten/{slug}', [App\Http\Controllers\CategoryController::class, 'show']);

// Products
Route::get('/product/{slug}', [App\Http\Controllers\ProductController::class, 'show']);

// Pages
Route::get('/service/{slug}', [App\Http\Controllers\PageController::class, 'show']);

// Cart routes
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('/cart/add/{product_id}', [App\Http\Controllers\CartController::class, 'add']);
Route::get('/cart/delete/{cart_id}', [App\Http\Controllers\CartController::class, 'delete']);

// ordering process
Route::get('/cart/order/details', [App\Http\Controllers\CartController::class, 'order_details']);
Route::post('/cart/order/details', [App\Http\Controllers\CartController::class, 'save_order_details']);

Route::get('/cart/order/bezorging', [App\Http\Controllers\CartController::class, 'order_delivery']);
Route::post('/cart/order/bezorging', [App\Http\Controllers\CartController::class, 'save_order_delivery']);

Route::get('/cart/order/overzicht', [App\Http\Controllers\CartController::class, 'order_overview']);
Route::post('/cart/order/overzicht', [App\Http\Controllers\CartController::class, 'save_order_overview']);

Route::get('/cart/order/done', [App\Http\Controllers\CartController::class, 'order_done']);