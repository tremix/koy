<?php

class PostController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// public function show()
	// {
	// 	$post	= new StdClass();
	// 	$post->title = 'Mypost Title';

	// 	return View::make('post.show')->with('post',$post);
	// }

	public function listing()
	{
		return View::make('post.listing');
	}

	public function single($id)
	{
		return View::make('post.single')->with('id', $id);
	}

	public function update($id)
	{
		dd($_POST);
	}
}