<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('client.index');
});
Route::get('/shop', function () {
    return view('client.shop');
});
Route::get('/checkout', function () {
    return view('client.checkout');
});
Route::get('/shopping_cart', function () {
    return view('client.shoppingcart');
});
Route::get('/about', function () {
    return view('client.about');
});


Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/admin', function () {
    return view('admin.index');
});
