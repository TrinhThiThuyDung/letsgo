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

		if ($data) {
			$user_image_id = (int)ImageFacade::findIdUserOfImage($data['image_id']);
			if ($user_image_id !== (int)$data['user_id']) {
				$notiCreate = [
				'user_from_id' 	=> $data['user_id'],
				'user_to_id'	=> $user_image_id,
				'kind'			=> 'comment',
				'seen'			=> 0
			];
			
			$noti = NoticationFacade::createNotication ($notiCreate);
			}
			if ($noti) {
				$data['noti_id'] = $noti['id'];
			}else{
				$data['noti_id'] = null;
			}
			$comment = CommentFacade::addComment ($data );
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