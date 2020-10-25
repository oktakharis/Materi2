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
    return view('page.index');
});

Route::get('index', function () {
    return view('page.index');
});

Route::get('blog', function () {
    return view('page.blog');
});

Route::get('cart', function () {
    return view('page.cart');
});

Route::get('category', function () {
    return view('page.category');
});

Route::get('checkout', function () {
    return view('page.checkout');
});

Route::get('confirmation', function () {
    return view('page.confirmation');
});

Route::get('contact', function () {
    return view('page.contact');
});

Route::get('elements', function () {
    return view('page.elements');
});

Route::get('login', function () {
    return view('page.login');
});

Route::get('single-blog', function () {
    return view('page.single-blog');
});

Route::get('single-product', function () {
    return view('page.single-product');
});

Route::get('tracking', function () {
    return view('page.tracking');
});


