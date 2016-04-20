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

Route::group(['prefix' => 'web'], function(){
	Route::get('/', array( 'as'=>'webIndex' , 'uses'=> 'MainController@getIndex' ));


	Route::group(['middleware' => ['auth']], function ($routes) {
		/*
		 * Show photo after login
		 */
		Route::get('/photo','PhotoController@getPhotoPage');
		

	});
});

Route::group(['prefix' => 'mobile'] , function(){
	Route::get('/', array( 'as' => 'homeIndex' , 'uses' => 'MainController@getMobileIndex'));
});
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

	/*
	 * sign in 
	 *
	 */
	Route::get('/auth/signin', ['as' => 'login' ,'uses' =>  'AuthController@getLogin']);
	Route::post('/auth/signin',['uses' => 'AuthController@postLogin' , 'as' => 'login']);

Route::get('/', function(){
	return redirect()->route('webIndex');
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


