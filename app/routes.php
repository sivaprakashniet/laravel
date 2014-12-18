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

Route::get('/', function()
{
	return View::make('index');
});
// chectk condition for logged in user
/*Route::filter('guest', function()
{
        if (Auth::check()) 
                return Redirect::route('home')
                        ->with('flash_notice', 'You are already logged in!');
});
*/
Route::resource('/blogs', 'BlogController');
Route::controller('users', 'UsersController');