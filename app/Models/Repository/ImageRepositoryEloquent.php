<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\Image;
use Illuminate\Database\Eloquent\Model;
use DB;
/**
* 
*/
class ImageRepositoryEloquent implements ImageRepository
{
	/**
	 *add Photo to Images table
	 *@param image
	 *@return recored created
	 */
	function addImage( $image )
	{
		
		$result_create = Image::create( $image );

		return $result_create;
	}
	/**
	 * find user id of image 
	 *@param Image id
	 *@return user id
	 */
	function findIdUserOfImage( $image_id )
	{
		
		$user_id_image = DB::table('images')
								->where('id' , '=' , $image_id)
								->select('user_id')
								->get();

		return $user_id_image[0]->user_id;
	}

	public function getAllPhoto( $user_id )
	{

		$images = DB::table("images")
					->join( 'users', 'images.user_id', '=', 'users.id')
					->leftJoin('likes' , function ($join)  use ($user_id){
            			$join->on( 'images.id', '=' ,'likes.image_id')
                 			 ->where('likes.user_id','=', $user_id );
        			})
					->select('users.id as user_id', 'users.last_name as user_lastname', 'users.first_name as user_firstname', 'users.avatar as avatar', 'likes.id as like_id', 'images.*')
					->orderBy('images.created_at', 'desc')
					->get();
		return $images;
	}

	public function getPhotoOfUser($user_id)
	{
		$result = DB::table("images")
					->where("user_id", $user_id)
					->orderBy("created_at", "desc")
					->get();
	
		return $result;
	}
}


?>