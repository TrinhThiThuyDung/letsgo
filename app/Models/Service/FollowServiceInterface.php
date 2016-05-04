<?php
namespace App\Models\Service;

interface FollowServiceInterface
{
	function checkFollow( $data );
	function addFollow( $data );
	function deleteFollow( $data );
}
?>