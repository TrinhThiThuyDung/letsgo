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
}


?>