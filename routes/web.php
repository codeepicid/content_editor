<?php

Route::get('/', function () {
    return redirect('v/home');
});

Route::get('auth/login','AuthController@login');
Route::post('auth/login','AuthController@loginproses');
Route::get('auth/logout','AuthController@logout');

Route::get('home','PatsController@index');
Route::get('gallery','PatsController@gallery');
Route::get('service','PatsController@service');
Route::get('about','PatsController@about');
Route::get('order','PatsController@order');
Route::get('contact','PatsController@contact');

Route::group(['middleware' => ['signin']], function () {
	Route::get('v/home','HomeController@index');
	Route::get('v/profile/edit','HomeController@editprofile');
    Route::put('v/profile/update','HomeController@updateprofile');
	Route::resource('v/post','PostController');
	Route::resource('v/post/{idpost}/comment','CommentController');
	Route::resource('v/gallery','GalleryController');
	Route::resource('v/review','ReviewController');
	Route::resource('v/user','UserController');
});

Route::get('api/listcategory','PostController@listcategory');