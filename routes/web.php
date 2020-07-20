<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'MainController@index');

Route::get('/deputados', 'MainController@deputados');

Route::get('/deputados/{id}/from={from}', 'DeputadoController@view');

Route::get('/deputados/{id}', 'DeputadoController@view');

Route::get('/deputados/{id}/importar', 'DespesaController@importDespesaRetDeputado');

Route::get('/despesas', 'DespesaController@viewDespesas');

Route::get('/despesas/{id}', 'DespesaController@view');

Route::get('/importar/deputados', 'DeputadoController@importDeputados');

Route::get('/importar/despesas/{id}', 'DespesaController@importDespesaId');

Route::get('/importar/despesas', 'DespesaController@importDespesas');

Route::get('/deletar', 'MainController@deleteData');
