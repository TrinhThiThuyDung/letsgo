<?php

namespace App\Models\Service;

interface UserServiceInterface{
	/**
	 *
	 *check login user
	 */
	function authenticate ($user);
	
	/**
	 *
	 *create new user
	 */
	function createNewUser($new_user);
	/**
	 *
	 *
	 */
	function getInforUser( $id_user );

	/**
	 *
	 *
	 */
	function getAllInforUser( $id_user );

	function getInforActivityOfUser ($user_id);

	function updateProfile ( $user_id ,$user_update);

	function updateAvatar( $user_id , $new_url );
}
?>