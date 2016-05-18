<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\User;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Repository\LikeFacade;
use App\Models\Repository\ImageFacade;

 class UserRepositoryEloquent implements UserRepository
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
 		);
 			$check_user = User::where( $where )->first();
 			if ( $check_user == null ) {
 				return 0;
 			}
 			else {

 				if( !(password_verify( $user["password"] , $check_user->password ))) {
 					return -1;
 				}

 				$user_name = $check_user->last_name." ".$check_user->first_name;   //tao user name cho user de luu vao session

 				$result_check_user = array('id' => $check_user->id , 'user_name' => $user_name);

 				return $result_check_user; //return id and username if account correct
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
 			$check_user = User::where('email' , '=' , $user['email'])->first();
 		
 		 		if ($check_user != null ) {
 		 			return null;
 		 		}
 		 		
 		 		$result_create = User::create([
 									'last_name'		=>$user['last_name'],
 									'first_name'	=>$user['first_name'],
 									'email'			=>$user['email'],
 									'password'		=>password_hash( $user['pass'] , PASSWORD_BCRYPT),
 									'avatar'		=> "/images/avatar/default-avatar.jpg"
 								]);
 		 		return $result_create;
 		 	}
 	}

 	/**
 	 *Get infor user view on nav bar
 	 *@param id of user
 	 *@return user infor contain data: avatar, name, postion 
 	 */
 	public function getInforUser( $id_user )
 	{
 		if (!empty($id_user)) {
 			$infor = DB::table('users')->select( 'avatar' , 'position', 'last_name', 'first_name')->where('id' , '=' , $id_user)->first();
 			
 			if ($infor) {
 				return $infor;
 			}
 			return null;
 		}
 	}

 	public function getAllInforUser( $user_id )
 	{
 		if (!empty($user_id)) {
 			$result = DB::table("users")
 						->select("id", "last_name", "first_name", "avatar", "position", "address", "gender", "birthday", "created_at")
 						->where("id", $user_id)
 						->get();

 			return $result;
 		}
 	}

 	public function getInforActivityOfUser($user_id)
 	{
 		if (!empty($user_id)) {
 			
 			$count_like = $this->countLikeOfUser( $user_id );

 			$count_image_uploaded = $this->countImageUploaded ($user_id);

 			$result = [ 'like' => $count_like, 'images' => $count_image_uploaded];
 		
 			return $result;
 		}
 	}

 	protected function countLikeOfUser($user_id)
 	{
 		$result = DB::table("likes")
 					->where("user_id", $user_id)
 					->count();
 		return $result;
 	}
 	protected function countImageUploaded($user_id)
 	{
 		$result = DB::table("images")
 					->where("user_id", $user_id)
 					->count();
 		return $result;
 	}

 	public function updateProfile($user_id, $data)
 	{
 		return $result = User::where('id', $user_id)->update( $data );
 	}
}

?>