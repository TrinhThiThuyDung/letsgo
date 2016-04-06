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
 		
 		//$result_user = array('id' => $result['id'] );
 		return $result['id'];
 		/*if($result==null){
 			return "0";   //khong ton tai user.
 		}
 		
 		$password = md5($user['password']);
 		

 		if ($password!=$result['password']) {
 			return "-1";
 		}
 		$user_name = $result['first_name']." ". $result['last_name'];
 		return $user_name;*/
 	}

 	
 	/**
	 * Tao mot user moi
	 * @param $user: du lieu data cua user
	 * @return ket qua cua create (user data)
	 **/

 	public function createUser($user)
 	{
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

?>