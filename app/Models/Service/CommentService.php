<?php
namespace App\Models\Service;

use App\Models\Repository\CommentFacade;
use App\Models\Entities\Comment;
use App\Models\Repository\ImageFacade;
use App\Models\Repository\NoticationFacade;
/**
* 
*/
class CommentService implements CommentServiceInterface
{
	
	public function addComment( $data )
	{
		$comment = CommentFacade::addComment ($data );
		if ($comment) {
			$user_image_id = ImageFacade::findIdUserOfImage($data['image_id']);

			$notiCreate = [
				'user_from_id' 	=> $data['user_id'],
				'user_to_id'	=> $user_image_id,
				'kind_noti_id'	=> $comment['id'],
				'kind'			=> 'comment',
				'seen'			=> 0
			];
			NoticationFacade::createNotication ($notiCreate);

			return $comment;
		}
	}

	public function getAllCommentOfImage($data)
	{
		return $all_comment = CommentFacade::getAllCommentOfImage ($data);

	}
	public function deleteComment($comment_id)
	{
		return $comment_deleted = CommentFacade::deleteComment( $comment_id );
	}
}

?>