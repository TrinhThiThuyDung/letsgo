<?php
namespace App\Models\Service;

use App\Models\Repository\ImageFacade;

use App\Models\Entities\Image;
use DB;
use App\Models\Repository\LikeFacade;
use App\Models\Repository\CommentFacade;
use App\Models\Repository\FollowFacade;

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

		$result = DB::table('images')->where('id', '=', (int)$image_id)->delete();
		return $result;
	}

	public function deleteAllLikeCommentNotifiOfImage($image_id, $table)
	{
		$noti = DB::table($table)->select("notication_id")->where("image_id", $image_id )->get();
		$del = DB::table($table)->where("image_id","=", $image_id)->delete();
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
	public function getAllPhotoUserFollow($user_id)
	{
		$followed = FollowFacade::getIdUserFollow($user_id);
		
		unset($followed[count($followed) - 1]);

		$images = DB::table("images")->join("users", "users.id", "=", "images.user_id")
									 ->whereIn("images.user_id", $followed)
									 ->select("images.*", "users.last_name as user_lastname", "users.first_name as user_firstname", "users.avatar as avatar")
									 ->orderBy('images.created_at', 'desc')
									 ->get();
		$i = 0;

		while ($i < count($images)) {
			$totalLike = LikeFacade::getLike( $images[$i]->id );

			$totalComment = CommentFacade::getAllCommentOfImage($images[$i]->id);

			if (!empty($totalLike)) {
				$images[$i]->likeTotal = [];
				$images[$i]->likeTotal = $totalLike;
			}
			if (count($totalComment) > 0) {
				$images[$i]->commentTotal = $totalComment;
			}
			$i++;
		}

		return $images;
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
		if ($category_id == 1) {
			$result = DB::table("images")->join("users", "images.user_id", "=", "users.id")
											->select("images.*", "users.last_name as user_lastname", 'users.first_name as user_firstname', 'users.avatar as avatar')
											->orderBy("created_at", "desc")
											->get();
			return $result;
		}
		return $result = DB::table("images")->join("users", "images.user_id", "=", "users.id")
											->select("images.*" , "users.last_name as user_lastname", 'users.first_name as user_firstname',  'users.avatar as avatar')
											->where("kind_id", $category_id)
											->orderBy("created_at", "desc")
											->get();
	}
	public function getPhotoByCategory()
	{
		$photo = [];
		$photo['all'] = $this->getImagesByCategoryLimit(1);
		$photo['animal'] = $this->getImagesByCategoryLimit(2);
		$photo['people'] = $this->getImagesByCategoryLimit(3);
		$photo['life'] 	= $this->getImagesByCategoryLimit(4);
		$photo['nature'] = $this->getImagesByCategoryLimit(5);
		$photo['discovery'] = $this->getImagesByCategoryLimit(6);

		return $photo;

	}
	protected function getImagesByCategoryLimit($kind_id)
	{
		$images = DB::table("images")->join("users", "images.user_id", "=", "users.id")
						   ->select("images.*", "users.last_name as user_lastname", 'users.first_name as user_firstname')
							->where("images.kind_id", $kind_id)
							->take(9)
							->orderBy("created_at", "desc")
							->get();

		return $images;
	}

	public function countTotalPhoto( $user_id )
	{
		$count = DB::table("images")->where("user_id", $user_id)->count();
		
		return $count;
	}
}

?>