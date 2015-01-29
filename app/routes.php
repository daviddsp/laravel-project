<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('cristalab', function()
{
	return View::make('cristalab');
});

Route::get('hello/{usuario}', function($usuario)
{
	return "Hola $usuario";
});

Route::get('tags/{tag}',function($tag)
{
	return "You are browsing $tag tag";
});

Route::get('user/edit/{id}', function($id)
{
	return "You are editing the user with the ID #$id";
})
	->where('id', '[0-9]+');

Route::get('pasta-with-meatballs/{id_table}, {type}', array('as' => 'pasta_meatballs', 'uses' =>
	'ItalianController@pastaWithMeatBalls'))->where('id_table', '[0-9]+');

Route::get('table/{id}', array('as' => 'table', 'uses' => 'tableController@index'))->where('id', '[0-9]+'); //etc…

Route::get('template/{id}', 'TemplateController@showIndex');

Route::resource('admin/users', 'admin_UsersController');
//Route::resource('admin/users/create', 'admin_UsersController@create');
//Route::resource('admin/users/show', 'admin_UsersController@store');
