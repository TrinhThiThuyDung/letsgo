<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\Image;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Filesystem\Filesystem;
/**
* 
*/
class ImageRepositoryEloquent extends BaseRepository implements ImageRepository
{
	function addImage($id_user , $images_name , $album_id)
	{
		$path = 'upload/'.$id_user;
		$filesystem = new Filesystem();

		if (!$filesystem->exists($path)){
			if ( !$filesystem->makeDirectory($path) ){
				return null;
			}	
		}
		
		$result_create = Image::create([
			'album_id' 	=> $album_id,
			'name'		=> $images_name,
			'url'		=> $path."/".$images_name
			]);

		return $result_create;
	}
}


?>