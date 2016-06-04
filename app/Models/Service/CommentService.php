<?php
namespace App\Models\Service;

use App\Models\Repository\CommentFacade;
use App\Models\Entities\Comment;
use App\Models\Repository\ImageFacade;
use App\Models\Repository\NoticationFacade;
use DB;
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
			if (isset( $noti )) {
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
		$noti = DB::table("comments")->select("notication_id")->where("id", $comment_id)->get();

		$comment_deleted = CommentFacade::deleteComment( $comment_id );

		if ($noti) {
			DB::table("notications")->where("id", $noti[0]->notication_id)->delete();
		}
		return $comment_deleted;
	}
}

?>