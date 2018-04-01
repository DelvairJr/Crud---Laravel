<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/produtos', 'ProdutoController@listProducts' );
Route::get( '/produtos/show{id}', 'ProdutoController@show' );
Route::get( '/produtos/create', 'ProdutoController@create' );
Route::get( '/produtos/destroy{id}', 'ProdutoController@destroy' );
Route::post( '/produtos/update', 'ProdutoController@update' );
