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
Route::get('/test', function(){
	return view("test");
});
Route::group(['prefix' => 'web'], function(){
	Route::get('/', array( 'as'=>'webIndex' , 'uses'=> 'MainController@getIndex' ));
	Route::get('/photo/show/images/{category_name}',[
						'as'	=> 'web/photo/show/images/',
						'uses'	=> 'PhotoController@getShowPhotosByCategory']
	);
	Route::post('/photo/show/images/{category_name}',[
						'as'	=> 'web/photo/show/images/',
						'uses'	=> 'PhotoController@postShowPhotosByCategory']
	);

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
		Route::delete('/photo/delete/{image_id}',[ 
							'as'=>'web/photo/delete', 
							'uses'=>'PhotoController@deletePhoto']
		);
		Route::get('/photo/show/{image_id}',[
							'as'	=> 'web/photo/show/',
							'uses'	=> 'PhotoController@showPhoto']
		);
		Route::get('/photo/show/user/follow/',[
							'as'	=> 'web/photo/show/user/follow/',
							'uses'	=> 'PhotoController@showPhotoUserFollow']
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

		/*====================== COMMENT ACTION =========================*/
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
		/*====================== NOTIFICATION ===============================*/
		Route::post('/notication/setSeen', [
							'as'	=> 'web/notication/setSeen',
							'uses'	=> 'NoticationController@setSeen']
		);
		/*====================== DOWNLOAD ===============================*/
		Route::get('/photo/action/download/{image_id}', [
							'as'	=> 'web/photo/action/download',
							'uses'	=> 'PhotoController@downloadPhoto']
		);
		/*========================= PROFILE USER ============================*/
		Route::get('/user/profile/{user_id}',[
				'as'	=> 'web/user/profile',
				'uses'	=> 'UserController@getProfileUser']
		);
		Route::post('/user/profile/update',[
				'as'	=> 'web/user/profile/update',
				'uses'	=> 'UserController@updateProfile']
		);
		Route::post('/user/profile/update/avatar',[
				'as'	=> 'web/user/profile/update/avatar',
				'uses'	=> 'UserController@updateAvatar']
		);
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
		
		/*================================= PHOTO ==================================*/
		
		/*
		 * Show photo after login
		 */
		Route::get('/photo',[ 
							'as'=>'mobile/photo', 
							'uses'=>'PhotoController@getMobilePhotoPage']
		);
		/*
		 * Upload image
		 */
		Route::post('/photo/upload',[ 
							'as'=>'mobile/photo/upload', 
							'uses'=>'PhotoController@uploadPhoto']
		);
		/*
		 * Delete image
		 */
		Route::delete('/photo/delete/{album_name}/{id}/{name}',[ 
							'as'=>'mobile/photo/delete', 
							'uses'=>'PhotoController@deletePhoto']
		);

		/*====================== LIKE ACTION =========================*/
		Route::post('/photo/action/checkLike', [ 
							'as' => 'mobile/photo/action/checkLike', 
							'uses' => 'LikeController@checkLike']
		);
		Route::post('/photo/action/getTotalLike', [ 
							'as' => 'mobile/photo/action/getTotalLike', 
							'uses' => 'LikeController@getTotalLike']
		);
		Route::post('/photo/action/like', [ 
							'as' => 'mobile/photo/action/like', 
							'uses' => 'LikeController@addLike']
		);
		Route::delete('/photo/action/dislike/{image_id}', [ 
							'as' => 'mobile/photo/action/dislike', 
							'uses' => 'LikeController@deleteLike']
		);

		/*====================== FOLLOW ACTION =========================*/
		Route::post('/photo/action/checkFollow', [ 
							'as' => 'mobile/photo/action/checkFollow', 
							'uses' => 'FollowController@checkFollow']
		);

		Route::post('/photo/action/follow', [ 
							'as' => 'mobile/photo/action/follow', 
							'uses' => 'FollowController@addFollow']
		);

		Route::delete('/photo/action/unfollow/{image_id}', [ 
							'as' => 'mobile/photo/action/unfollow', 
							'uses' => 'FollowController@deleteFollow']
		);

		/*====================== COMMENT ACTION =========================*/
		Route::post('/photo/action/getComment', [ 
							'as' => 'mobile/photo/action/getComment', 
							'uses' => 'CommentController@getComment']
		);

		Route::post('/photo/action/comment', [ 
							'as' => 'mobile/photo/action/comment', 
							'uses' => 'CommentController@addComment']
		);

		Route::delete('/photo/action/deleteComment/{comment_id}', [ 
							'as' => 'mobile/photo/action/deleteComment', 
							'uses' => 'CommentController@deleteComment']
		);
		/*========================= PROFILE USER ============================*/
		Route::get('/user/profile/{user_id}',[
				'as'	=> 'mobile/user/profile',
				'uses'	=> 'UserController@getProfileUserMobile']
		);
		Route::post('/user/profile/update',[
				'as'	=> 'web/user/profile/update',
				'uses'	=> 'UserController@updateProfile']
		);
		Route::get('/photo/show/user/follow/',[
							'as'	=> 'mobile/photo/show/user/follow/',
							'uses'	=> 'PhotoController@showPhotoUserFollowMobile']
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


