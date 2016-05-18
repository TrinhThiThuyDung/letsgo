<?php

namespace App\Models\Repository;

use App\Models\Entities\Like;
use Illuminate\Database\Eloquent\Model;
use DB;


class LikeRepositoryEloquent implements LikeRepository
{
    public function addLike( $data )
    {
    	$like = Like::create([
    		'user_id' => (int)$data['user_id'],
    		'image_id' => (int)$data['image_id']
    		]);

    	return $like;
    }
    public function checkLike( $data )
    {
    	$result = Like::where([
    								['image_id', (int)$data['image_id']],
    								[ 'user_id' , (int)$data['user_id']]
    										
    						])->get();
    	if (count( $result) == 0) {
    		return false;
    	}
    	return true;
    }
    public function deleteLike($data)
    {
        $result = Like::where([
                                    ['image_id', (int)$data['image_id']],
                                    [ 'user_id' , (int)$data['user_id']]
                                            
                            ])->delete();
        return $result;
    }
    public function getTotalLike( $data )
    {
        $total = Like::where('image_id' , $data['image_id'])
                     ->count();
        

        return $total;
    }
    function getPhotoUserLike($user_id)
    {
        $result = DB::table("images")
                    ->join("likes", "likes.image_id", '=', 'images.id')
                    ->join("users", "images.user_id", '=', "users.id")
                    ->select("images.*", "users.id as user_id", "users.last_name as user_lastname", "users.first_name as user_firstname", "users.avatar as avatar")
                    ->where("likes.user_id", $user_id)
                    ->orderBy ("likes.created_at", 'desc')
                    ->get();
        return $result;
    }
}
