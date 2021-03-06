<?php

namespace App\Models\Service;

interface ImageServiceInterface{
	/*Add Photo*/
	function addPhoto( $images  );
	/*Delete Photo*/
	function deletePhoto( $image_id );
	/*get All photo*/
	function getAllPhoto( $user_id );
	function getPhotoOfUser($user_id);
	function getPhotoById( $image_id );
	function findIdUserOfImage($image_id);
	function getAllPhotoUserFollow($user_id);
	function getImagesByCategory($category_id);
	function getPhotoByCategory();
	function countTotalPhoto( $user_id );
	
}
?>