<?php
namespace App\Models\Service;

interface FollowServiceInterface
{
	function checkFollow( $data );
	function addFollow( $data );
	function deleteFollow( $data );
	function getUserFollow( $user_id );

	function countUserFollow( $user_id ); //lấy những người mà mình theo dõi
	function countFollower( $user_id );   //đếm số người theo dõi mình
	function getFollow( $user_id );
}
?>