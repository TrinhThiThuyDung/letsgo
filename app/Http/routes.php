<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/home-image', function () {
    return view('home-image');
});

Route::get('/private/', function () {
    return view('private');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*
 * sign in 
 *
 */
Route::get('/auth/signin','AuthController@getLogin');
Route::post('/auth/signin','AuthController@postLogin');


/*
 * Sign out
 *
 */
Route::get('/auth/logout','AuthController@getLogout');

/*
 * Dang ky new user
 *
 */

Route::get('/auth/register','AuthController@getRegister');
Route::post('/auth/register','AuthController@postRegister');
