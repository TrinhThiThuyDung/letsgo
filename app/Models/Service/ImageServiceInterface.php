<?php

namespace App\Models\Service;

interface ImageServiceInterface{
	/*Add Photo*/
	function addPhoto( $id_user , $images_name , $album );
	
}
?>