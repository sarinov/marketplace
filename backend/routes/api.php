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



// Route::get('/products', 'App\Http\Controllers\ProductsController@index');
Route::get('/products', 'App\Http\Controllers\ProductsController@show');
Route::post('/products', 'App\Http\Controllers\ProductsController@store');
Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@single');
Route::put('/products/{id}', 'App\Http\Controllers\ProductsController@update');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductsController@destroy');

Route::get('/carts', 'App\Http\Controllers\CartsController@index');
Route::post('/carts', 'App\Http\Controllers\CartsController@store');
Route::put('/carts/{id}', 'App\Http\Controllers\CartsController@update');
Route::delete('/carts/{id}', 'App\Http\Controllers\CartsController@destroy');

Route::get('/favorites', 'App\Http\Controllers\FavoritesController@index');
Route::post('/favorites', 'App\Http\Controllers\FavoritesController@store');
Route::put('/favorites/{id}', 'App\Http\Controllers\FavoritesController@update');
Route::delete('/favorites/{id}', 'App\Http\Controllers\FavoritesController@destroy');

Route::get('/comments', 'App\Http\Controllers\CommentsController@index');
Route::post('/comments', 'App\Http\Controllers\CommentsController@store');
Route::put('/comments/{id}', 'App\Http\Controllers\CommentsController@update');
Route::delete('/comments/{id}', 'App\Http\Controllers\CommentsController@destroy');

Route::get('/shops', 'App\Http\Controllers\ShopsController@index');
Route::post('/shops', 'App\Http\Controllers\ShopsController@store');
Route::put('/shops/{id}', 'App\Http\Controllers\ShopsController@update');
Route::delete('/shops/{id}', 'App\Http\Controllers\ShopsController@destroy');



