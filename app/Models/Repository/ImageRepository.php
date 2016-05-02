<?php

namespace App\Models\Repository;


interface ImageRepository 
{
	function addImage($id_user , $images_name , $album_id);	
	function findIdUserOfImage( $image_id );
}
?>