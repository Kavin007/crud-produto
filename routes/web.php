<?php

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

// Route::get('/inativo','ProdutoController@inativo');

// Route::prefix('produtos')->group(function(){
//     Route::get('/','ProdutoController@create');
// });

Route::prefix('clientes')->group(function(){

    Route::get('/', 'ClienteController@index');
    Route::get('create', 'ClienteController@create');
    Route::post('/','ClienteController@store');

    // rotas para editar e atualizar
    Route::get('{id}/edit', 'ClienteController@edit');
    Route::put('{id}', 'ClienteController@update');

    // rota para inativar
    Route::delete('{id}', 'ClienteController@destroy');

});
