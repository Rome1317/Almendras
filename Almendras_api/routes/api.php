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

// Users
Route::get('users/all','App\Http\Controllers\UsersController@getAllUsers')->name('getall.users');
Route::post('users/create','App\Http\Controllers\UsersController@createUser')->name('create.users');

// Countries
Route::get('countries/all','App\Http\Controllers\CountriesController@getAllCountries')->name('getall.countries');