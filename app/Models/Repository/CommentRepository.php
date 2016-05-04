<?php

namespace App\Models\Repository;


interface CommentRepository 
{
	
    function addComment( $data );
    function getAllCommentOfImage( $data );
    function deleteComment( $comment_id );
}
?>