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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
/*Route::get('/products', function () {
    return view('products');
});*/
Route::get('/single-product', function () {
    return view('single-product');
});

Route::get('/account', function () {
    return view('account');
});
Route::resource('/products',\App\Http\Controllers\ProductController::class);
Route::resource('/users',\App\Http\Controllers\UserController::class);