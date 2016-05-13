<?php

namespace App\Models\Repository;


interface ImageRepository 
{
	function addImage( $image );	
	function findIdUserOfImage( $image_id );
	function getAllPhoto( );
	function getPhotoOfUser($user_id);
	
}
?>