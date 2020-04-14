<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//route pour consommer mon API produits
Route::get('produits', 'ProduitController@index');//->name('produits.index');

//Route::get('produits', 'ProduitController@show')->name('produits.show');

Route::get('/store', function () {
    return view('produits.index');
});

//Route::get('store', 'ApiController@store');
//Route::get('store', 'ApiController@produits');

