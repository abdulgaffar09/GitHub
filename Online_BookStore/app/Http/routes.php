<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('bookMain', 'HomeBookController@index');
Route::get('loginfn', 'HomeBookController@loginfn');
// Route::get('loginUser', 'LoginController@index');

//Route::get('loginfn/{uid}', ['as' => 'loginUser.index', 'uses' => 'LoginController@index']);
// Route::get('login', function() {
//   return View::make('login');
// });matter enti??
//
// Route::post('login', array('uses'=>'HomeBookController@loginfn'));
Route::get('login','LoginControllerNew@login');
Route::get('Mydashboard','DashController@MyDashBoard');
Route::get('Mydashboard/{ Users_Book }/update','DashController@update');
Route::get('general','DashController@general');
Route::get('History','DashController@History');
Route::get('Upload','DashController@Upload');
Route::get('Register','RegistrationController@index');
Route::post('Register/store','RegistrationController@store');
Route::get('logout','LogoutController@index');
Route::post('uploadbook', 'UploadController@upload');
