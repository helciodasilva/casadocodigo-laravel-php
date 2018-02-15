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
Route::get("/produtos/remove/{id}", "ProdutoController@remove");

Route::get("/produtos/json", "ProdutoController@listaJson");

Route::post("/produtos/adiciona", "ProdutoController@adiciona");

Route::get("/produtos/novo", "ProdutoController@novo");

Route::get("/produtos/mostra/{id}", "ProdutoController@mostra")->where("id", "[0-9]+");

Route::get("/produtos", "ProdutoController@lista");

Route::get('/', function () {
    return "<h1>Primeira lógica com Laravel</h1";
});

Route::get('/outra', function () {
    return "<h1>Outra lógica com Laravel</h1";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/autenticar', 'LoginController@login');
