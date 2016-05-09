<?php
namespace App\Models\Service;

use App\Models\Repository\ImageFacade;
use App\Models\Repository\AlbumFacade;

use App\Models\Entities\Image;
use DB;

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

			$album = AlbumFacade::checkExitsAlbumOrCreate( $id_user , $album );

			$result_create = ImageFacade::addImage($id_user , $images_name , $album );

			return $result_create;
		}
		
	}
	/**
	 *Delete photo on database
	 *@param images id
	 *@return
	 */
	public function deletePhoto($images_id)
	{
		$result = DB::table('images')->where('id', '=', $images_id)->delete();
		return $result;
	}
	public function getAllPhoto()
	{
		return ImageFacade::getAllPhoto ();
	}

	function getPhotoOfUser($user_id)
	{
		return ImageFacade::getPhotoOfUser ($user_id);
	}
}

?>