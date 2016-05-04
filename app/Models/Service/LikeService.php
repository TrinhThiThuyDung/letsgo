<?php

namespace App\Models\Service;

use App\Models\Repository\LikeFacade;
use App\Models\Entities\Like;
use App\Models\Repository\NoticationFacade;
use App\Models\Repository\ImageFacade;

class LikeService implements LikeServiceInterface
{
	
	/**
	 * add Like
	 */
    public function addLike( $data )
    {

    	$like =  LikeFacade::addLike( $data );

    	$user_id_image = ImageFacade::findIdUserOfImage( $data['image_id' ]);
  		
  		$notiInfor = [
  			'user_from_id' 		=> $data['user_id'],
  			'user_to_id'		=> $user_id_image,
  			'kind_noti_id'		=> $like['id'],
  			'kind'				=> "like",
  			'seen'				=> 0
  		];

  		NoticationFacade::createNotication( $notiInfor );
  		
  		return $like;
    }

    public function checkLike( $data )
    {
    	return LikeFacade::checkLike( $data );
    }

    public function deleteLike($data)
    {
      return LikeFacade::deleteLike( $data );
    }

    public function getTotalLike($data)
    {
      return LikeFacade::getTotalLike( $data );
    }
}
