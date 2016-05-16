<?php

namespace App\Models\Repository;

use App\Models\Entities\Notication;
use Illuminate\Database\Eloquent\Model;
use DB;

class NoticationRepositoryEloquent implements NoticationRepository
{
     public function model()
    {
        return 'App\Models\Entities\User';
    }

    public function createNotication( $notiInfor )
    {
    	$noti_created = Notication::create( $notiInfor );

    	return $noti_created;
    }
    public function getNoticationOfUser($user_id)
    {
    	$noti_not_seen = $this->getNoticationNotSeen ( $user_id );
        $noti_seen = $this->getNoticationSeen ($user_id );

        $noti = [   'noti_seen'        =>  $noti_seen,
                    'noti_not_seen'    => $noti_not_seen  ];
                    
        return $noti;
    }

    protected function getNoticationNotSeen ( $user_id )
    {
        if(!empty( $user_id)){
        $result = DB::table("notications")->join( 'users', 'notications.user_from_id','=', 'users.id' )
                            ->leftJoin("likes", "notications.like_id", "=", 'likes.id')
                            ->leftJoin("comments", 'notications.comment_id', '=', 'comments.id')
                            ->leftJoin('follows', 'notications.follow_id','=', 'follows.id')
                            ->leftJoin("images", 'notications.image_id', '=' ,'images.id')
                            ->where ([
                                ['notications.user_to_id'   , (int)$user_id ],
                                ['notications.seen'         , '0'           ]
                            ])
                            ->select( 'users.id as user_id', 'users.last_name as user_lastname', 'users.first_name as user_firstname', 'users.avatar as user_avatar', 'images.url as image_url', 'images.resize_2 as image_name', 'notications.*')
                            ->orderBy('notications.created_at', 'desc')
                            ->get();
        return $result;
    }
    }
    protected function getNoticationSeen( $user_id )
    {
        $result = DB::table("notications")->join( 'users', 'notications.user_from_id' ,'=', 'users.id')
                            ->leftJoin("likes", "notications.like_id", "=", 'likes.id')
                            ->leftJoin("comments", 'notications.comment_id', '=', 'comments.id')
                            ->leftJoin('follows', 'notications.follow_id','=', 'follows.id')
                            ->leftJoin("images", 'notications.image_id', '=' ,'images.id')
                            ->select( 'users.id as user_id', 'users.last_name as user_lastname', 'users.first_name as user_firstname', 'users.avatar as user_avatar','images.url as image_url', 'images.resize_2 as image_name', 'notications.*')
                            ->where ([
                                ['notications.user_to_id'   , (int) $user_id ],
                                ['notications.seen'         , '1'          ]
                            ])
                            ->orderBy('notications.created_at', 'desc')
                            ->get();
        return $result;
    }
}
