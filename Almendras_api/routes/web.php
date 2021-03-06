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

# LOGIN
Route::get('/ph', 'App\Http\Controllers\UsersController@index')->name('index');

# MAIN
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('index');

# LOGIN
Route::get('/login', 'App\Http\Controllers\UsersController@index')->name('index');
#Route::post('/createUser', 'App\Http\Controllers\UsersController@createUser')->name('createUser');
#Route::post('/loginUser', 'App\Http\Controllers\UsersController@loginUser')->name('loginUser')

# ACCOUNT
Route::get('/account', 'App\Http\Controllers\OrdersController@index')->name('index');

# SHOPPING CART
Route::get('/shopping_cart', 'App\Http\Controllers\FavoritesController@index')->name('index');

# ROLES MANAGEMENT
Route::get('/roles_management', 'App\Http\Controllers\RolesController@index')->name('index');

# ATICLE MANAGEMENT
Route::get('/articles_management', 'App\Http\Controllers\ArticlesController@index')->name('index');

