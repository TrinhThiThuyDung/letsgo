<?php

namespace App\Models\Service;

use App\Models\Repository\FollowFacade;
use App\Models\Entities\Follow;
use App\Models\Repository\ImageFacade;
use App\Models\Repository\NoticationFacade;

class FollowService implements FollowServiceInterface
{
    public function checkFollow( $data )
    {
    	$data['user_id_image'] = $this->getUserIdOfImage( $data['image_id']);

    	return $result = FollowFacade::checkFollow( $data );
    }

    public function addFollow( $data )
    {
    	$data['user_id_image'] = $this->getUserIdOfImage( $data['image_id']);

      $follow = FollowFacade::addFollow( $data );

    	$notiInfor = [
  			'user_from_id' 		=> $data['user_id'],
  			'user_to_id'		=> $data['user_id_image'],
  			'kind_noti_id'		=> $follow['id'],
  			'kind'				=> "follow",
  			'seen'				=> 0
  		];

  		$this->createNotication ($notiInfor);
    	return $follow;
    }

    public function deleteFollow( $data )
    {
    	$data['user_id_image'] = $this->getUserIdOfImage( $data['image_id']);

    	return $result = FollowFacade::deleteFollow( $data );
    	
    }
    protected function getUserIdOfImage( $image_id )
    {
    	return ImageFacade::findIdUserOfImage( $image_id );
    }

    protected function createNotication(  $notiInfor )
    {
      return NoticationFacade::createNotication( $notiInfor );
    }
}
?>