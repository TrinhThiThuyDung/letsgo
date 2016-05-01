<?php

namespace App\Models\Service;

interface ImageServiceInterface{
	/*Add Photo*/
	function addPhoto( $id_user , $images_name , $album );
	/*Delete Photo*/
	function deletePhoto( $images_id );
	/*get All photo*/
	function getAllPhoto();
	
}
?>