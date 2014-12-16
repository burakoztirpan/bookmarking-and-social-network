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

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@showWelcome'));
Route::post('/loginuser','HomeController@loginUser');


// Route::filter('auth', function()
// {
//     if (Auth::check())
//     {
//     	dd('tamamdır');
//     }
//     else{
//     	dd('login Ol');
//     }
// });

// Route::group(array('before' => 'auth'), function()
// {
Route::resource('user', 'UserController');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController');
Route::get('/logout', 'HomeController@logoutUser');
// });



