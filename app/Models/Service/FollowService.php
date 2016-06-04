<?php

namespace App\Models\Service;

use App\Models\Repository\FollowFacade;
use App\Models\Entities\Follow;
use App\Models\Repository\ImageFacade;
use App\Models\Repository\NoticationFacade;
use DB;

class FollowService implements FollowServiceInterface
{
    public function checkFollow( $data )
    {
    	$data['user_id_image'] = $this->getUserIdOfImage( $data['image_id']);

    	return $result = FollowFacade::checkFollow( $data );
    }

    public function addFollow( $data )
    {
      if ($data) {
          $data['user_id_image'] = $this->getUserIdOfImage( $data['image_id']); //get id of user of image
          $notiInfor = [
          'user_from_id'    => $data['user_id'],
          'user_to_id'      => $data['user_id_image'],
          'kind'            => 'follow',
          'seen'            => 0
        ];

        $noti = $this->createNotication ($notiInfor); //create new notication
        if ($noti) {
          $data['noti_id']   = $noti['id'];

          $follow = FollowFacade::addFollow( $data );
          if (!$follow) {
            DB::table("notications")->where("id", $noti['id'])->delete();
            return false;
          }
           return $follow;
        }
      }
    }

    public function deleteFollow( $data )
    {

    	$data['user_id_image'] = $this->getUserIdOfImage( $data['image_id']);

      $noti = DB::table("follows")->select("notication_id")->where([
                                                              ["user_follower_id", (int) $data['user_id']],
                                                              ["user_followed_id", (int) $data['user_id_image']]
                                                          ])->get();
    	$result = FollowFacade::deleteFollow( $data );

      if ($noti) {
        DB::table("notications")->where("id", $noti[0]->notication_id)->delete();
      }
      return $result;
    	
    }
    protected function getUserIdOfImage( $image_id )
    {
    	return ImageFacade::findIdUserOfImage( $image_id );
    }

    protected function createNotication(  $notiInfor )
    {
      return NoticationFacade::createNotication( $notiInfor );
    }

    public function getUserFollow( $user_id )
    {
      return FollowFacade::getUserFollow( $user_id );
    }
}
?>