<?php namespace App\Models\Service;

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

		$select = array(' id ' );
		$result = UserFacade::findByProperty( $select , 'email' , $user['email'] , 'User' );
		
		if ( count($result) > 0 ) {
			return null;
		}
		/*$result = UserFacade::where('email' , '=' ,  $user['email'] )->get();

		if($result != null){
			return null;
		}*/

 		$user = UserFacade::createUser($user);

 		$user_name = $user['last_name']." ".$user['first_name'];               //tao user name cho user de luu vao session

 		$result_create_user = array('id' => $user['id'], 'user_name' => $user_name);

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

}
?>