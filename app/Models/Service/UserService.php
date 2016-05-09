<?php 

namespace App\Models\Service;

use App\Models\Repository\UserFacade;
use App\Models\Entities\User;
/**
* 
*/
class UserService implements UserServiceInterface
{
	/**
	 * Kiem tra sau do tao new user neu user do chua tung dang ki vao he thong 
	 * @param $user: bao gom cac du lieu ma nguoi dng dang ki: email, last name, first name, password
	 * @return null: neu user da ton tai.
	 *		   array: id va user name
	 **/
	function createNewUser($user){

 		$user_id_created = UserFacade::createUser($user);

 		if ($user_id_created == null) {
 			return null;
 		}

 		$user_name = $user['last_name']." ".$user['first_name'];               //tao user name cho user de luu vao session

 		$result_create_user = array('id' => $user_id_created, 'user_name' => $user_name);

 		return $result_create_user;
		
 	}

 	/**
	 * Kiem tra thong tin dang nhap cua user 
	 * @param $user: bao gom cac du lieu ma nguoi dng dang ki: email, last name, first name, password
	 * @return null: khong ton tai  user.
	 *		   array: id va user name
	 **/
 	function authenticate($user)
 	{
 		return $result = UserFacade::checkLogin($user);
 	}

 	/**
 	 *
 	 *
 	 */
 	function getInforUser( $id_user )
 	{
 		return $infor = UserFacade::getInforUser( $id_user );	
 	}
 	/**
 	 *
 	 *
 	 */
 	function getAllInforUser( $user_id )
 	{
 		return UserFacade::getAllInforUser($user_id);
 	}

 	function getInforActivityOfUser($user_id)
 	{
 		return UserFacade::getInforActivityOfUser( $user_id );
 	}
}
?>