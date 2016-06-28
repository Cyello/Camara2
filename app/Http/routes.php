<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['as' => 'group.', 'prefix' => 'inicio'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CamaraController@index']);
    Route::get('/cria', ['as' => 'create', 'uses' => 'CamaraController@create']);
    Route::post('/salva', ['as' => 'store', 'uses' => 'CamaraController@store']);
    Route::get('/edita/{id}', ['as' => 'edit', 'uses' => 'CamaraController@edit']);
    Route::post('/atualiza/{id}', ['as' => 'update', 'uses' => 'CamaraController@update']);
    Route::get('/remove/{id}', ['as' => 'destroy', 'uses' => 'CamaraController@destroy']);
    Route::get('/vereador/{id}', ['as' => 'show', 'uses' => 'CamaraController@show']);
    Route::get('/cronometro/{id}', ['as' => 'crono', 'uses' => 'CamaraController@crono']);
    Route::get('/vereador/{id}/projeto/{id2}', ['as' => 'mostra', 'uses' => 'ProjetoController@show']);
});


	


