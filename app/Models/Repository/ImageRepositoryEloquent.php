<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\Image;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ImageRepositoryEloquent extends BaseRepository implements ImageRepository
{
	function addImage($id_user , $images_name , $album )
	{
		
		$result_create = Image::create([
			'album_id' 	=> $album['id'],
			'name'		=> $images_name,
			'url'		=> $album['url']."/".$images_name
			]);

		return $result_create;
	}
}


?>