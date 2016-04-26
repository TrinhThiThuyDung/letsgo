<?php
namespace App\Models\Service;

use App\Models\Repository\ImageFacade;
use App\Models\Repository\AlbumFacade;

use App\Models\Entities\Image;

/**
* 
*/
class ImageService implements ImageServiceInterface
{
	// Process data before add to database
	/**
	 *Add photo to album
	 *@param id of user, name of image and infor of album
	 *@return true if add success and false for lost
	 **/
	function addPhoto( $id_user , $images_name , $album )
	{
		/*check exits of album*/

		if (!empty( $album)) {
			/*if not exits and name null auto create name for album is 'Unknown Album'*/
			if ($album['album_name'] == '') {
				$album['album_name'] = 'Unknown Album';
			}
			$album_id = AlbumFacade::checkExitsAlbumOrCreate( $id_user , $album );

			$result_create = ImageFacade::addImage($id_user , $images_name , $album_id);

			return $result_create;
		}
		
	}
}

?>