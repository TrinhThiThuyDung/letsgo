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
    		['user_flower_id',(int) $data['user_id']],
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
            'user_flower_id'      => (int)$data['user_id'],
            'user_followed_id'      => (int)$data['user_id_image']
        ]);
        
        return $result;
    }

    public function deleteFollow( $data )
    {
       $result = Follow::where([
             ['user_flower_id' , (int)$data['user_id']],
             ['user_followed_id' , (int)$data['user_id_image']]
        ])->delete();
       return $result;
    }
}
?>