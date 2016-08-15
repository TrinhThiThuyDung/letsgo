<?php

/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\Comment;
use Illuminate\Database\Eloquent\Model;
use DB;
/**
* 
*/
class CommentRepositoryEloquent implements CommentRepository
{

   public function addComment( $data )
   {
   	 	$created = Comment::create([
   	 			'user_id'	      => $data['user_id'],
   	 			'image_id'	      => $data['image_id'],
               'notication_id'   => $data['noti_id'],
   	 			'content'	      => $data['content']
   	 	]);
         $user = DB::table("users")->select("last_name", "first_name", "avatar")->where("id", $data['user_id'])->get();
         $username = $user[0]->last_name." ".$user[0]->first_name;
        
         $created['username'] = $username;
         $created['avatar']   = $user[0]->avatar;
         $created['image_id'] = $data['image_id'];
         $created['user_id'] = $data['user_id'];
         
   	 	return $created;
   }
   public function getAllCommentOfImage($image_id)
   {
   		$all_comment = Comment::join ('users', 'comments.user_id', '=', 'users.id')
   							  ->where( 'comments.image_id' , $image_id)
   							  ->orderBy('comments.created_at', 'desc')
   							  ->select( 'users.last_name', 'users.first_name', 'users.avatar','comments.id' ,'comments.content', 'comments.user_id', 'comments.created_at' )
   							  ->get();

   	    return $all_comment;
   }

   public function deleteComment( $comment_id )
   {
      $comment_deleted = Comment::where( 'id' , $comment_id )
                                 ->delete();

      return $comment_deleted;
   }
}
?>