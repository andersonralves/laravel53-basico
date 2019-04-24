<?php

Route::get('/painel/produtos/testes', 'Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace'=>'Site'], function() {
    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaop');

    Route::get('/contato', 'SiteController@contato');
    Route::get('/', 'SiteController@index');
});
