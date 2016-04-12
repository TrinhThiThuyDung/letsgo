<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\User;
use Illuminate\Database\Eloquent\Model;


 class UserRepositoryEloquent extends BaseRepository implements UserRepository
 {

 	 public function model()
    {
        return 'App\Models\Entities\User';
    }


 	/**
	 * Kiem tra dang nhap cua user
	 * @param array user: mang du lieu truyen vao bao gom "email"va "password" cua user truyem len
	 * @return 
	 **/

 	public function checkLogin($user){
 		
 		if (! empty($user)) {
 			$where = array(
 				'email' 	=> $user['email'],
 				'password' 	=> md5($user['password']);
 				);
 			$check_user = User::where( $where )->first();
 			if ( $check_user == null ) {
 				return null;
 			}
 			else {
 				$user_name = $user['last_name']." ".$user['first_name'];   //tao user name cho user de luu vao session

 				$result_create_user = array('id' => $user['id'], 'user_name' => $user_name);

 				return $result_create_user; //return id and username if account correct
 			} 
 		}
 	}

 	
 	/**
	 * Tao mot user moi
	 * @param $user: du lieu data cua user
	 * @return ket qua cua create (user data)
	 **/

 	public function createUser($user)
 	{
 		if(! empty($user) ){
 			$check_user = User::where('email' , '=' , $user['email']);
 		
 		 		if ($check_user != null ) {
 		 			return null;
 		 		}
 		 		
 		 		$result_create = User::insertGetId([
 									'last_name'=>$user['last_name'],
 									'first_name'=>$user['first_name'],
 									'email'=>$user['email'],
 									'password'=>bcrypt($user['password']),
 								]);
 		 		return $result_create;
 		 	}
 		 }

}

?>