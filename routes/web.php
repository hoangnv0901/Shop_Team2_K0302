<?php

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
    return view('client.views.index');
});
Route::get('/login', function () {
    return view('client.views.login');
});
Route::get('/signup', function () {
    return view('client.views.signup');
});
Route::get('/checkout', function () {
    return view('client.views.checkout');
});
Route::get('/checkout2', function () {
    return view('client.views.checkout2');
});
Route::get('/edit', function () {
    return view('client.views.edit');
});
Route::get('/info', function () {
    return view('client.views.info');
});
Route::get('/product', function () {
    return view('client.views.product');
});
Route::get('/product-type', function () {
    return view('client.views.product_type');
});
Route::get('/search', function () {
    return view('client.views.search');
});
Route::get('/search-fail', function () {
    return view('client.views.search-fail');
});
Route::get('/cart', function () {
    return view('client.views.cart');
});