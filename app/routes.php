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

/*Route::get('/', 'HomeController@showWelCome');
Route::get('post', 'PostController@show');
/*Route::get('/post/listing', 'PostController@listing');
Route::get('/post/single', 'PostController@single');

Route::get('/post/listing', array('uses' => 'PostController@listing', 'as' => 'post.listing'));
Route::get('/blog/single', array('uses' => 'PostController@single', 'as' => 'post.single'));
*/
/*Route::get('/post/listing', array('uses' => 'PostController@listing', 'as' => 'post.listing'));
Route::get('/blog/single/{id}', array('uses' => 'PostController@single', 'as' => 'post.single'))->where('id' , '[1-9][0-9]*');*/

Route::get('/blog/single/{id}/{slug}', array('uses' => 'PostController@single', 'as' => 'get.post.single'))->where(array('id' => '[1-9][0-9]*', 'slug' => '[a-zA-Z0-9-_]+'));

Route::post('/blog/single/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*'));

