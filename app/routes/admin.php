<?php

Route::get('login','AuthController@index')->before('guest');
Route::get('inscription','AuthController@inscription')->before('guest');
Route::get('logout','AuthController@logout');

Route::group(['prefix'=>'admin', 'before'=>['Auth','teacher']], function(){

//dashboard Controller
    Route::any('dashboard','DashboardController@index');
    Route::get('/','DashboardController@index');
    Route::get('fiches','DashboardController@fiches');
    Route::get('articles','DashboardController@articles');
    Route::get('commentaires','DashboardController@commentaires');
    Route::get('pages','DashboardController@pages');
    Route::get('eleves','DashboardController@eleves');

//post Controller (CRUD)

    Route::get('post/create','PostController@postCreate');
    Route::post('post','PostController@store');

    Route::get('post/{id}/edit','PostController@postEdit');

    Route::get('trash','DashboardController@trash');

    Route::post('post/status','PostController@changeStatus');
    Route::post('post/commentsStatus','PostController@changeCommentsStatus');

    Route::post('creerFiches','PostController@creerFiches');
    Route::post('fichesEtape','PostController@fichesEtape');

    Route::Resource('post','PostController');
});

