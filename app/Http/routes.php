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
Route::get('teste','testeController@eliandro');
Route::get('post','postController@index');
Route::get('cadastro','cadastroController@index');
Route::get('/',function(){
	return View::make('layout/layout');
});

