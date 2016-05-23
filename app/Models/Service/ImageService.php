<?php
namespace App\Models\Service;

use App\Models\Repository\ImageFacade;

use App\Models\Entities\Image;
use DB;

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
	public function deletePhoto($image_id)
	{
		$result = DB::table('images')->where('id', '=', $image_id)->delete();
		return $result;
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
}

?>