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


Route::get('add/', array('as' => 'addRealEstate', 'uses' => 'RealEstateController@create'));
Route::post('add/',array( 'uses' => 'RealEstateController@store'));
Route::get('/', array('as' => 'showRealEstate', 'uses' => 'RealEstateController@index'));
Route::pattern('id', '[0-9]+');
Route::get('/{id}', array ('as' => 'viewRealEstate', 'uses' => 'RealEstateController@show'));

Route::get('about-us' , function(){
	return View::make('website.about');
});
Route::get('how-to-use' , function(){
	return View::make('website.how');
});
Route::get('feedback' , function(){
	return View::make('website.feedback');
});


// Where to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));
// Processing the form
Route::post('login', array('as' => 'login','uses' => 'HomeController@doLogin'));
// Logging out
Route::get('logout', array('as' => 'logout', 'uses' => 'HomeController@doLogout'));
// Profile route
Route::get('profile', array('as' => 'profile', 'uses' => 'UserController@index'));