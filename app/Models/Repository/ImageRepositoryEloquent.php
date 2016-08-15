<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\Image;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repository\LikeFacade;

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
		$numTotalPost = $this->countNumPostTowWeek();

		$images = DB::table("images")
					->join( 'users', 'images.user_id', '=', 'users.id')
					->leftJoin('likes' , function ($join)  use ($user_id){
            			$join->on( 'images.id', '=' ,'likes.image_id')
                 			 ->where('likes.user_id','=', $user_id );
        			})
					->select('users.id as user_id', 'users.last_name as user_lastname', 'users.first_name as user_firstname', 'users.avatar as avatar', 'likes.id as like_id','likes.user_id as userLikeId', 'images.*')
					->orderBy('images.created_at', 'desc')
					->take($numTotalPost)
					->get();
		$i = 0;

		while ($i < $numTotalPost) {
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

	private function countNumPostTowWeek(){

		$today = strtotime("now");
		$two_week_ago = strtotime("-2 weeks", $today);
		$date = date('Y-m-d', $two_week_ago);

		$numTotal = DB::table("images")
				->where("created_at","<", $date)
				->count();
		return $numTotal;
	}

	public function getPhotoOfUser($user_id)
	{
		$result = DB::table("images")
					->where("user_id", $user_id)
					->orderBy("created_at", "desc")
					->get();
	
		return $result;
	}
	public function getPhotoById($image_id)
	{
		$image = DB::table('images')->where('id', '=', $image_id)->get();

		return $image;
	}
}


?>