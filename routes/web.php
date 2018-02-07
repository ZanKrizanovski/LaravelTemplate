<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

#Route::get('URL', 'controler_class/file_name@method');

#Routes POST TextController 
Route::post('submitted', 'TextController@postForm');

// authentication routes
Route::get('auth/login', ['as'=>'login' , 'uses'=>'Auth\LoginController@showLoginForm']);
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');


// Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
// Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
// Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);



// registration routes
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');

// Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
// Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);﻿




Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog', ['uses'=>'BlogController@getIndex', 'as'=>'blog.index']);
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::get('index', 'PagesController@getIndex');

Route::resource('posts','PostController'); 