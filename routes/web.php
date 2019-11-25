<?php


//Route::get('/', ['uses'=>'Controller@homepage']);
//Route::get('/cadastro',['uses'=>'Controller@cadastro']);
//rota para login
Route::get('/login',['uses'=>'Controller@fazerLogin']);
Route::post('/login',['as'=>'user.login','uses'=>'DashboardController@auth']);
Route::get('/dashboard',['as'=>'user.dashboard','uses'=>'DashboardController@index']);

//Route::get('/user', ['as' => 'user.index','uses' => 'UsersController@index']);
Route::resource('user', 'UsersController');
Route::resource('produtos','ProdutosController');
//Route::resource('relatorios','RelatorioController');

Route::resource('pedidos','PedidosController');
//Route::resource('lanches','LanchesController');
Route::get('finalizar',['as'=>'pedidos.finalizar','uses'=>'PedidosController@finalizar']);                           






/*
Route::get('/', function () {
    return view('welcome');
});
*/
