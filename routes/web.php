<?php


use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/create', 'ProdutosController@create');
Route::post('produtos/create', 'ProdutosController@store')->name('registrar_produto');
