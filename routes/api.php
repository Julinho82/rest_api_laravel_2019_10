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

/*
cliente
*/
Route::get('clientes','ClienteControler@getClientes');

Route::get('clientes/{id}','ClienteControler@getClientesById');

/* 
Categoria
*/
Route::get('categorias','CategoriaControler@getCategorias');

Route::get('categorias/{id}','CategoriaControler@getCategoriaById');


/*
Modo_pago
*/

Route::get('modopagos','ModoPagoControler@getModoPagos');
Route::get('modopagos/{id}','ModoPagoControler@getModoPagoId');




