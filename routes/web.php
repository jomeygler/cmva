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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/funcionario', 'FuncionarioController' );
Route::get('/funcionario/{id}/ConfirmaD', 'FuncionarioController@ConfirmaD');
Route::get('/funcionario/{funcionario}/eventos/create', 'EventoController@create');
Route::post('/funcionario/{funcionario}/eventos', 'EventoController@store');
Route::resource('/departamento', 'DepartamentoController' );
Route::resource('/tipoevento', 'TipoeventoController' );
//
