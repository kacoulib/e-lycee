<?php

Route::get('/', 'BlogController@index');
Route::get('isd-mali', 'BlogController@isdMali');
Route::get('isd-mali/presentation', 'BlogController@presentation');
Route::get('isd-mali/information-pratique', 'BlogController@information');
Route::get('formation/licences', 'BlogController@licences');
Route::get('formation/masters', 'BlogController@masters');
Route::get('formation/doctorat', 'BlogController@doctorat');
Route::get('formation/formation-continues', 'BlogController@continues');
Route::get('lycee', 'BlogController@lycee');
Route::get('contact', 'BlogController@contact');

Route::get('single/{id}', 'BlogController@show');
Route::post('comment',['as' => 'comment', 'uses' => 'BlogController@store']);
