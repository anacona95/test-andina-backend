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

Route::get('/products','App\Http\Controllers\ProductoController@index');//mostrar todos los productos
Route::post('/products','App\Http\Controllers\ProductoController@store');//crear un producto
Route::put('/products/{id}','App\Http\Controllers\ProductoController@update');//actualizar un producto
Route::delete('/products/{id}','App\Http\Controllers\ProductoController@destroy');//eliminar un producto
Route::get('/cities','App\Http\Controllers\CiudadController@index');//mostrar todas las ciudades
