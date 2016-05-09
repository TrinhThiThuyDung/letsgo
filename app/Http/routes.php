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
		/*====================== PHOTO =========================*/
		/*
		 * Show photo after login
		 */
		Route::get('/photo',[ 
							'as'=>'web/photo', 
							'uses'=>'PhotoController@getPhotoPage']
		);
		/*
		 * Upload image
		 */
		Route::post('/photo/upload',[ 
							'as'=>'web/photo/upload', 
							'uses'=>'PhotoController@uploadPhoto']
		);
		/*
		 * Delete image
		 */
		Route::delete('/photo/delete/{album_name}/{id}/{name}',[ 
							'as'=>'web/photo/delete', 
							'uses'=>'PhotoController@deletePhoto']
		);

		/*====================== LIKE ACTION =========================*/
		Route::post('/photo/action/checkLike', [ 
							'as' => 'web/photo/action/checkLike', 
							'uses' => 'LikeController@checkLike']
		);
		Route::post('/photo/action/getTotalLike', [ 
							'as' => 'web/photo/action/getTotalLike', 
							'uses' => 'LikeController@getTotalLike']
		);
		Route::post('/photo/action/like', [ 
							'as' => 'web/photo/action/like', 
							'uses' => 'LikeController@addLike']
		);
		Route::delete('/photo/action/dislike/{image_id}', [ 
							'as' => 'web/photo/action/dislike', 
							'uses' => 'LikeController@deleteLike']
		);

		/*====================== FOLLOW ACTION =========================*/
		Route::post('/photo/action/checkFollow', [ 
							'as' => 'web/photo/action/checkFollow', 
							'uses' => 'FollowController@checkFollow']
		);

		Route::post('/photo/action/follow', [ 
							'as' => 'web/photo/action/follow', 
							'uses' => 'FollowController@addFollow']
		);

		Route::delete('/photo/action/unfollow/{image_id}', [ 
							'as' => 'web/photo/action/unfollow', 
							'uses' => 'FollowController@deleteFollow']
		);

		/*====================== FOLLOW ACTION =========================*/
		Route::post('/photo/action/checkFollow', [ 
							'as' => 'web/photo/action/checkFollow', 
							'uses' => 'FollowController@checkFollow']
		);

		Route::post('/photo/action/follow', [ 
							'as' => 'web/photo/action/follow', 
							'uses' => 'FollowController@addFollow']
		);

		Route::delete('/photo/action/unfollow/{image_id}', [ 
							'as' => 'web/photo/action/unfollow', 
							'uses' => 'FollowController@deleteFollow']
		);
		/*====================== FOLLOW ACTION =========================*/
		Route::post('/photo/action/getComment', [ 
							'as' => 'web/photo/action/getComment', 
							'uses' => 'CommentController@getComment']
		);

		Route::post('/photo/action/comment', [ 
							'as' => 'web/photo/action/comment', 
							'uses' => 'CommentController@addComment']
		);

		Route::delete('/photo/action/deleteComment/{comment_id}', [ 
							'as' => 'web/photo/action/deleteComment', 
							'uses' => 'CommentController@deleteComment']
		);
		/*========================= PROFILE USER ============================*/
		Route::get('/user/profile/{user_id}',[
				'as'	=> 'web/user/profile',
				'uses'	=> 'UserController@getProfileUser'
			]);
		/*
		 * Sign out
		 *
		 */
		Route::get('/auth/logout','AuthController@getLogoutWeb' );
	});
});

Route::group(['prefix' => 'mobile'] , function(){
	Route::group( ['middleware' => ['auth.mobile']], function($routes){
		Route::get('/', array( 'as' => 'mobileIndex' , 'uses' => 'MainController@getMobileIndex'));
			/*
		 * Upload image
		 */
		Route::post('/photo/upload',[ 'as'=>'mobile/photo/upload', 'uses'=>'PhotoController@uploadPhoto']);
		/*
		 * Delete image
		 */
		Route::delete('/photo/delete/{album_name}/{id}/{name}',[ 'as'=>'mobile/photo/delete', 'uses'=>'PhotoController@deletePhoto']);
		/**
		 *Process action like images
		 */
		Route::post('/photo/action/like', [ 'as' => 'mobile/photo/action/like', 'uses' => 'LikeController@addLike']);
		Route::post('/photo/action/dislike', [ 'as' => 'mobile/photo/action/dislike', 'uses' => 'LikeController@deleteLike']);

		Route::post('/photo/action/checkLike', [ 
							'as' => 'mobile/photo/action/checkLike', 
							'uses' => 'LikeController@checkLike']
		);


	});
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
	Route::post('/auth/signin',[ 'as' => 'login' , 'uses' => 'AuthController@postLogin']);

Route::get('/', function(){
	return redirect()->route('webIndex');
});

Route::get('/error/500', function(){
	return view("errors/500");
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


