<?php

namespace App\Models\Repository;

use App\Models\Entities\Follow;
use Illuminate\Database\Eloquent\Model;
use DB;

class FollowRepositoryEloquent implements FollowRepository
{
    public function checkFollow( $data )
    {
    	$result = Follow::where([
    		['user_follower_id',(int) $data['user_id']],
    		['user_followed_id',(int) $data['user_id_image']]
    		])->get();
    	if (count($result) == 0) {
    		return false;
    	}
    	return true;
    }

    public function addFollow( $data )
    {
        $result = Follow::create([
            'user_follower_id'      => (int)$data['user_id'],
            'user_followed_id'      => (int)$data['user_id_image'],
            'notication_id'         => (int)$data['noti_id']
        ]);
        
        return $result;
    }

    public function deleteFollow( $data )
    {
       $result = Follow::where([
             ['user_follower_id' , (int)$data['user_id']],
             ['user_followed_id' , (int)$data['user_id_image']]
        ])->delete();
       return $result;
    }

    public function getUserFollow($user_id)
    {
        $result = DB::table("follows")
                   ->join("users", "users.id", '=', "user_followed_id")
                   ->where("follows.user_follower_id", $user_id )
                   ->select ("users.id", "users.last_name", "users.first_name", "users.avatar")
                   ->get();
        return $result;
    }

}
?>