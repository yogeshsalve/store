<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/store', 'store/store');
Route::view('/addstore', 'store/add_store');
Route::view('/addcoupon', 'coupon/add_coupon');

// Route::post('/addstore', [StoreController::class, 'AddStore']);

Route::post('/addstore', [StoreController::class, 'AddStore']);
Route::get('/store', [StoreController::class, 'ShowStores']);
Route::get('/deletestore/{id}',[StoreController::class, 'deletestore']);
Route::get('/editstore/{id}',[StoreController::class, 'EditStore']);
Route::post('/editstore', [StoreController::class, 'updatestore']);


Route::post('/addcoupon', [StoreController::class, 'AddCoupon']);
Route::get('/coupon', [StoreController::class, 'ShowCoupon']);
Route::get('deletecoupon/{id}',[StoreController::class, 'deletecoupon']);
Route::get('/editcoupon/{id}',[StoreController::class, 'EditCoupon']);
Route::post('/editcoupon', [StoreController::class, 'updatecoupon']);