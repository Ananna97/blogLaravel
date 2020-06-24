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

Route::group(['middleware' => ['web']], function () {

	// Registration Routes
	Route::post('auth/register', ['as' => '', 'uses' => 'Auth\RegisterController@register']);
	Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);

	// Authentication Routes
	Route::post('auth/login', ['as' => '', 'uses' => 'Auth\LoginController@login']);
	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
	Route::post('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

	// Password Reset Routes
	Route::get('password/reset/{token?}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
	Route::post('password/reset', ['as' => 'password.update', 'uses' => 'Auth\ResetPasswordController@reset']);
	
	//Forgot Password Routes
	Route::get('password/request', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
	Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);

	//Confirm New Password Route
	Route::get('password/confirm', ['as' => 'password.confirm', 'uses' => 'Auth\ConfirmPasswordController@showConfirmForm']);
	Route::post('password/confirm', ['as' => 'password.confirm', 'uses' => 'Auth\ConfirmPasswordController@confirm']);

	//Pages Routes
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('contact', 'PagesController@getContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::get('/home', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');

	// Categories
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
	Route::resource('tags', 'TagController', ['except' => ['create']]);

});



