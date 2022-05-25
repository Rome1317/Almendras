<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Roles
Route::get('roles/all','App\Http\Controllers\RolesController@getAllRoles')->name('getall.roles');
Route::post('roles/create','App\Http\Controllers\RolesController@createRole')->name('create.roles');
Route::get('roles/edit/{id}','App\Http\Controllers\RolesController@editRole')->name('edit.roles');
Route::post('roles/update/{id}','App\Http\Controllers\RolesController@updateRole')->name('update.roles');

// Users
Route::get('users/all','App\Http\Controllers\UsersController@getAllUsers')->name('getall.users');
Route::post('users/create','App\Http\Controllers\UsersController@createUser')->name('create.users');
Route::post('users/login','App\Http\Controllers\UsersController@loginUser')->name('login.users');
Route::post('users/logout','App\Http\Controllers\UsersController@logoutUser')->name('logout.users');
Route::post('users/update/{email}', 'App\Http\Controllers\UsersController@updateUser')->name('update.users');

// Article
Route::post('articles/create','App\Http\Controllers\ArticlesController@createArticle')->name('create.articles');
Route::get('/articles/edit/{article}', 'App\Http\Controllers\ArticlesController@editArticle')->name('edit.articles');
Route::post('articles/update/{article}','App\Http\Controllers\ArticlesController@updateArticle')->name('update.articles');

// Favorite
Route::post('favorites/create/{article}','App\Http\Controllers\FavoritesController@createFavorite')->name('create.favorites');
Route::post('favorites/delete/{favorite}','App\Http\Controllers\FavoritesController@deleteFavorite')->name('delete.favorites');

// Order
Route::post('order/create','App\Http\Controllers\OrdersController@createOrder')->name('create.orders');

// Countries
Route::get('countries/all','App\Http\Controllers\CountriesController@getAllCountries')->name('getall.countries');

