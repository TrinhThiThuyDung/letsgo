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
		$path = 'images/file-upload/'.$id_user;
		$filesystem = new Filesystem();

		if (!$filesystem->exists($path)){
			if ( !$filesystem->makeDirectory($path) ){
				return null;
			}	
		}
		
		$result_create = Image::create([
			'album_id' 	=> $album_id,
			'name'		=> $images_name,
			'url'		=> $path
			]);

		if ($result_create) {
			return true;
		}
		return false;
	}
}


?>