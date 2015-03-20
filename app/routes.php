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

route::pattern('id','[1-9][0-9]*');

Route::when('*','csrf',['post']);

App::missing(function($exeception){
	return Response::view('error',array(),404);
});
foreach (File::allFiles(__DIR__.'/routes') as $partials){
	require_once $partials->getPathname();
}
