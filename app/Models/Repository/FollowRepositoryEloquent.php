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
             ['user_followed_id' , (int)$data['user_image_id']]
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
    public function getFollow( $user_id )
    {
        $user_follow = $this->getIdUserFollow( $user_id );
    
        $follow = DB::table("users")
                    ->whereNotIn("users.id",$user_follow)
                    ->select("users.id as user_id", "users.last_name as user_lastname", "users.first_name as user_firstname", "users.avatar as avatar")
                    ->orderByRaw('RAND()')
                    ->take(12)
                    ->get();
            if (count($follow) < 3) {
                $total = count($follow);
            } else { $total = 3; }
        for ($i=0; $i < $total; $i++) { 
            $follow[$i]->image = [];
            $follow[$i]->image = ImageFacade::getPhotoOfUser( $follow[$i]->user_id );
        }
       return $follow;
    }
    public function getIdUserFollow($user_id)
    {
        $result = DB::table("follows")
                   ->where("follows.user_follower_id", $user_id )
                   ->select ("follows.user_followed_id")
                   ->get();
        $result_2 = [];
        for ($i = 0; $i < count($result); $i++) { 
            $result_2[$i] = (int)$result[$i]->user_followed_id;
        }
        $result_2[$i] = (int)$user_id;
        return $result_2;
    }
}
?>