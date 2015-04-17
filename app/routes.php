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

/*Route::get('post/listing', array('uses' => 'PostController@listing', 'as' => 'get.post.listing'));

Route::get('post/{id}', array('uses' => 'PostController@single', 'as' => 'get.post.single', 'before' => 'auth' ))->where(array('id' => '[1-9][0-9]*'));

Route::post('post/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*'));

Route::get('login', function(){
    return "login Page";
});*/

/*Route::group(array('before' => 'auth'), function(){
    Route::get('post/listing', array('uses' => 'PostController@listing', 'as' => 'get.post.listing'));

    Route::get('post/{id}', array('uses' => 'PostController@single', 'as' => 'get.post.single', 'before' => 'auth' ))->where(array('id' => '[1-9][0-9]*'));

    Route::post('post/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*'));
});*/

Route::group(array('prefix' => 'admin'), function(){
    Route::get('post/listing', array('uses' => 'PostController@listing', 'as' => 'get.post.listing'));

    Route::get('post/{id}', array('uses' => 'PostController@single', 'as' => 'get.post.single' ))->where(array('id' => '[1-9][0-9]*'));

    Route::post('post/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*'));
});

Route::get('login', function(){
    return "Login Page";
});

Route::resource('user', 'UserController', array('only' => array('edit', 'update', 'destroy')));

Route::resource('user', 'UserController');