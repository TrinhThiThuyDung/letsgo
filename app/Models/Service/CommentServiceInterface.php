<?php

namespace App\Models\Service;

interface CommentServiceInterface
{
	function addComment ( $data );
	function getAllCommentOfImage( $data );
	function deleteComment( $comment_id );
}
?>