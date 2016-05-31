<?php
namespace App\Models\Service;

use App\Models\Repository\ImageFacade;

use App\Models\Entities\Image;
use DB;
use App\Models\Repository\LikeFacade;
use App\Models\Repository\CommentFacade;

/**
* 
*/
class ImageService implements ImageServiceInterface
{
	// Process data before add to database
	/**
	 *Add photo to database
	 *@param image  infor 
	 *@return images created
	 **/
	function addPhoto( $image )
	{
		if (!empty( $image)) {	
			return $image_inserted = ImageFacade::addImage( $image );
		}
	}
	/**
	 *Delete photo on database
	 *@param images id
	 *@return
	 */
	public function deletePhoto( $image_id )
	{

		$del_like = $this->deleteAllLikeCommentNotifiOfImage( $image_id, "likes");
		$del_comment = $this->deleteAllLikeCommentNotifiOfImage( $image_id, "comments");

		$result = DB::table('images')->where('id', '=', $image_id)->delete();
		return $result;
	}

	public function deleteAllLikeCommentNotifiOfImage($image_id, $table)
	{
		$noti = DB::table($table)->select("notication_id")->where("image_id", $image_id )->get();
		$del = DB::table($table)->where("image_id", $image_id)->delete();
		if ($noti) {
			foreach ($noti as $key => $value) {
				DB::table("notications")->where("id", (int) $value->notication_id )->delete();
			}
		}
		
	}
	public function getAllPhoto( $user_id )
	{
		return ImageFacade::getAllPhoto ( $user_id );
	}

	public function getPhotoOfUser($user_id)
	{
		return ImageFacade::getPhotoOfUser ($user_id);
	}
	public function getPhotoById($image_id)
	{
		if(!empty($image_id)){
			return $image = ImageFacade::getPhotoById($image_id);
		}
	}
	public function findIdUserOfImage($image)
	{
		return ImageFacade::findIdUserOfImage($image);
	}
	public function getAllUserFollow($user_id)
	{
		$result = DB::table("follows")->join("users", "users.id", "=", "follows.user_followed_id")
								      ->select("user_followed_id", "users.last_name as user_lastname", "users.first_name as user_firstname", "users.avatar as user_avatar")->where("user_follower_id", $user_id)->get();


		foreach ($result as $key => $value) {
			$value->image =  $this->getImagesByUserId( $value->user_followed_id );
		}
		return $result;
	}
	public function getImagesByUserId( $user_id )
	{
		$result = DB::table("images")->select( "images.*")
									 ->where("user_id", $user_id)
									 ->get();

		return $result;
	}
	public function getImagesByCategory($category_id)
	{
		return $result = DB::table("images")->where("kind_id", $category_id)->get();
	}
}

?>