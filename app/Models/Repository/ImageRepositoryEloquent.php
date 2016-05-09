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
class ImageRepositoryEloquent extends BaseRepository implements ImageRepository
{
	/**
	 *add Photo to Images table
	 *@param id of user, image name and album information
	 *@return recored created
	 */
	function addImage($id_user , $images_name , $album )
	{
		
		$result_create = Image::create([
			'album_id' 	=> $album['id'],
			'name'		=> $images_name,
			'url'		=> $album['url']."/".$images_name
			]);

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
								->join('albums', 'images.album_id', '=', 'albums.id')
								->where('images.id' , '=' , $image_id)
								->select('albums.user_id')
								->get();

		return $user_id_image[0]->user_id;
	}

	public function getAllPhoto()
	{
		$images = DB::table("images")
					->join( 'albums', 'images.album_id', '=', 'albums.id' )
					->join( 'users', 'albums.user_id', '=', 'users.id')
					->select('users.id', 'users.last_name', 'users.first_name','albums.name', 'albums.describe', 'images.*')
					->orderBy('images.created_at', 'desc')
					->get();
		return $images;
	}

	public function getPhotoOfUser($user_id)
	{
		$result = DB::table("albums")
					->select("id", "name")
					->where("albums.user_id", $user_id)
					->orderBy("created_at", "desc")
					->get();
		$array_photo = [];
		foreach ($result as $key => $value) {
			array_push($array_photo, [ 'album_name' => $value->name , $this->getPhotoByAlbumID($value->id) ]);
		}
		return $array_photo;
	}

	protected function getPhotoByAlbumID($album_id)
	{
		return $result = DB::table("albums")
							->join("images", 'images.album_id', '=', 'albums.id')
							->select("images.*", "albums.describe","albums.name as album_name", "albums.user_id")
							->where("albums.id", $album_id)
							->get();
	}
}


?>