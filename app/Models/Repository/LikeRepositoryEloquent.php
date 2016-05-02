<?php

namespace App\Models\Repository;

use App\Models\Entities\Like;
use Illuminate\Database\Eloquent\Model;



class LikeRepositoryEloquent extends BaseRepository implements LikeRepository
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
}
