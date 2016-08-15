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
    		'image_id' => (int)$data['image_id'],
            'notication_id' => $data['noti_id']
    		]);
        $name = DB::table("users")->select("last_name", "first_name")->where("id", "=", (int)$data['user_id'])->get();

        $like['username'] = $name[0]->last_name." ".$name[0]->first_name;
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

        return (int)$data['user_id'];
    }
    public function getTotalLike( $data )
    {
        $total = Like::join("users", "users.id", "=" , "likes.user_id")
                        ->select("likes.user_id", "users.last_name as user_lastname", "users.first_name as user_firstname", "likes.created_at")
                        ->where('likes.image_id' , $data['image_id'])
                        ->orderBy("likes.created_at", "desc")
                        ->get();
        

        return $total;
    }
    public function getLike( $image_id )
    {
            $totalLike = DB::table("likes")
                            ->join("users", "likes.user_id", "=" , "users.id")
                            ->where("image_id", "=" , $image_id)
                            ->select("likes.id", "likes.user_id", "users.last_name", "users.first_name")
                            ->orderBy("likes.created_at","desc")
                            ->get();
            return $totalLike;
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
