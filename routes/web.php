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

Route::get('/','HomeController@index');
Route::get('/inativos','HomeController@inativo');


Route::prefix('produtos')->group(function(){
    // Route::get('/','ProdutoController@index');
    Route::get('create','ProdutoController@create');
    Route::post('/','ProdutoController@store');

    //rotas para editar e atualizar
    Route::get('{id}/edit', 'ProdutoController@edit');
    Route::put('{id}', 'ProdutoController@update');

    //rota para inativar
    Route::delete('{id}', 'ProdutoController@destroy');
});
//---------------------------------------------------
Route::prefix('clientes')->group(function(){
    // Route::get('/','ClienteController@index');
    Route::get('create', 'ClienteController@create');
    Route::post('/','ClienteController@store');

    // rotas para editar e atualizar
    Route::get('{id}/edit', 'ClienteController@edit');
    Route::put('{id}', 'ClienteController@update');

    // rota para inativar
    Route::delete('{id}', 'ClienteController@destroy');

});

Route::prefix('compras')->group(function() {
    Route::get('create', 'CompraController@create');
    Route::get('/home/{id}','CompraController@listar');
    Route::post('/', 'CompraController@store');
    Route::get('/detalhar','CompraController@show');
});

