<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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

Route::get('adminindex', [HomeController::class, 'showBeranda']);

Route::get('user-profile', [HomeController::class, 'showUser']);

Route::get('sign-up', [HomeController::class, 'showRegistrasi']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('games/filter', [GameController::class, 'filter']);
    Route::resource('games', GameController::class);
    Route::resource('user', UserController::class);
});


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

