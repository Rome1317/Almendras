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

Route::get('/login', function () {
    return view('login');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/shopping_cart', function () {
    return view('shopping_cart');
});

Route::get('/roles_management', function () {
    return view('roles_forms');
});

Route::get('/articles_management', function () {
    return view('articles_forms');
});