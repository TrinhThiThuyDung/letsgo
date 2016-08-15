<?php

namespace App\Models\Repository;


interface FollowRepository 
{
	function checkFollow( $data );
	function addFollow( $data );
	function deleteFollow( $data );
	function getUserFollow( $user_id);
	function getFollow( $user_id );
}
?>