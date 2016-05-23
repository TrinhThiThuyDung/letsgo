<?php

namespace App\Models\Repository;


interface ImageRepository 
{
	function addImage( $image );	
	function findIdUserOfImage( $image_id );
	function getAllPhoto( $user_id );
	function getPhotoOfUser($user_id);
	function getPhotoById( $image_id );
	
}
?>