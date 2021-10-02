<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AddStoreController;

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

// Route::get('/', function () {
//     return view('welcome');
    

// });

Route::view('/' ,'welcome');

Route::get('/', [StoreController::class, 'storecarousel']);

Auth::routes();


Route::middleware('auth')->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/about_us', 'about_us');
Route::view('/store', 'store/store')->middleware('auth');
Route::view('/addstore', 'store/add_store');
Route::view('/addcoupon', 'coupon/add_coupon');
Route::view('/addcategory', 'category/add_category');


Route::post('/addstore', [StoreController::class, 'AddStore']);
Route::get('/store', [StoreController::class, 'ShowStores']);
Route::get('/deletestore/{id}',[StoreController::class, 'deletestore']);
Route::get('/editstore/{id}',[StoreController::class, 'EditStore']);
Route::post('/editstore', [StoreController::class, 'updatestore']);
Route::get('/addstore', [StoreController::class, 'DisplayCategory']);


Route::post('/addcoupon', [StoreController::class, 'AddCoupon']);
Route::get('/coupon', [StoreController::class, 'ShowCoupon']);
Route::get('deletecoupon/{id}',[StoreController::class, 'deletecoupon']);
Route::get('/editcoupon/{id}',[StoreController::class, 'EditCoupon']);
Route::post('/editcoupon', [StoreController::class, 'updatecoupon']);

Route::post('/addcategory', [StoreController::class, 'AddCategory']);
Route::get('/addcategory', [StoreController::class, 'ShowCategory']);
Route::get('/editcategory/{id}',[StoreController::class, 'EditCategory']);
Route::get('/deletecategory/{id}',[StoreController::class, 'deletecategory']);



Route::get('/assigncoupon/{id}',[StoreController::class, 'AssignCoupon']);
Route::post('/assigncoupon', [StoreController::class, 'AssignCouponToStore']);


});

Route::get('/allstores', [StoreController::class, 'displayAllStores']);
Route::view('/deals/{id}', 'store/deals');
Route::get('/deals/{id}',[StoreController::class, 'DisplayStoreCoupons']);

Route::get('/deleteAssignedCoupon/{id}',[StoreController::class, 'deleteAssignedCoupon']);
Route::get('/allcategory', [StoreController::class, 'displayAllCategories']);
Route::get('/categorywise_stores/{category}', [StoreController::class, 'categorywiseStores']);


Route::view('/privacy_policy', 'links/privacy_policy');
Route::view('/contact_us', 'links/contact_us');