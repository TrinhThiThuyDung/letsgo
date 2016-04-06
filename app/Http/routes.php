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
Route::group(['middleware' => ['web']], function () {

/*
 * Show photo after login
 */
Route::get('/photo','PhotoController@getIndex');
/*
 * Sign out
 *
 */
Route::get('/auth/logout','AuthController@getLogout' );
/*
 * Dang ky new user
 *
 */

Route::get('/auth/register','AuthController@getRegister');
Route::post('/auth/register','AuthController@postRegister');


});

/*
 * sign in 
 *
 */
/*Route::get('/auth/signin', ['as' => 'login' ,'uses' =>  'AuthController@getLogin']);*/
/*Route::post('/auth/signin',['uses' => 'AuthController@postLogin' , 'as' => 'login']);*/
Route::get('/auth/signin',  'AuthController@getLogin')->name('profile');
Route::get('/', function () {
    return view('index');
});


/*Route::get('/test','AuthController@getTest');*/
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


