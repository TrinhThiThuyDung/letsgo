<?php

namespace App\Models\Repository;


interface FollowRepository 
{
	function checkFollow( $data );
	function addFollow( $data );
	function deleteFollow( $data );
}
?>