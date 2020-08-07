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

Auth::routes();

//ADMIN 


Route::prefix('admin')->group(function () {
    // Dashboard route
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('admin', 'AdminController@index');

    // Login routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password reset routes
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email',['as'=>'admin.password.email', 'uses'=> 'Auth\AdminForgotPasswordController@sendResetLinkEmail']);
    Route::get('/password/reset/{token}',['as'=>'admin.password.reset', 'uses'=> 'Auth\AdminResetPasswordController@showResetForm']);
    Route::post('/password/reset', ['as'=>'admin.password.update', 'uses'=> 'Auth\AdminResetPasswordController@reset']);

});


//USER

Route::group(['middleware' => ['web']], function () {

	// Registration Routes
	Route::post('auth/register', ['as' => '', 'uses' => 'Auth\RegisterController@register']);
	Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);

	// Authentication Routes
	Route::post('auth/login', ['as' => '', 'uses' => 'Auth\LoginController@login']);
	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
	Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

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
    Route::post('contact', 'PagesController@postContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::get('/home', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');

	// Categories
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
	Route::post('comments/{category_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::resource('tags', 'TagController', ['except' => ['create']]);

	// Comments
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

	//Search

	Route::get('/search','BlogController@search')->name('search');

});



