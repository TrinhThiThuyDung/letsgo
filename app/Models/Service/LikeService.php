<?php

namespace App\Models\Service;

use App\Models\Repository\LikeFacade;
use App\Models\Entities\Like;
use App\Models\Repository\NoticationFacade;
use App\Models\Repository\ImageFacade;
use DB;

class LikeService implements LikeServiceInterface
{
	
	/**
	 * add Like
	 */
    public function addLike( $data )
    {
      if ($data) {
        $user_id_image = (int)ImageFacade::findIdUserOfImage( $data['image_id' ]);
        if ( $user_id_image !== (int)$data['user_id'] ) {
          $notiInfor = [
            'user_from_id'  => $data['user_id'],
            'user_to_id'    => $user_id_image,
            'kind'          => "like",
            'seen'          => 0
        ];
        $noti = NoticationFacade::createNotication( $notiInfor );
      }
      if (isset( $noti)) {
          $data['noti_id']  = $noti['id'];
      }else{
        $data['noti_id']  = null;
      }
      $like =  LikeFacade::addLike( $data );  
      return $like;  
    }
    return false;
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
    public function getPhotoUserLike($user_id)
    {
      return LikeFacade::getPhotoUserLike($user_id);
    }
}
