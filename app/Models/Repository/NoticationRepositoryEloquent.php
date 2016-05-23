<?php

namespace App\Models\Repository;

use App\Models\Entities\Notication;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Repository\ImageFacade;

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
        $limit = $this->countTotalNotiNotSeen($user_id);

        if ($limit == 0 ) {
            $limit = 10;
            $noti_seen = $this->getNoticationSeen ($user_id , $limit );

        }elseif ($limit > 0 && $limit <10) {

            $noti_not_seen = $this->getNoticationNotSeen ( $user_id );
            $noti_seen = $this->getNoticationSeen ( $user_id, 10 - $limit );
    
        }else{
            $noti_not_seen = $this->getNoticationNotSeen ( $user_id );
            $noti_seen = $this->getNoticationSeen ( $user_id, 1 );
        }
    	if (!isset( $noti_not_seen) ){
            $noti_not_seen =  array();
        }
        $noti = [   'noti_seen'        =>  $noti_seen,
                    'noti_not_seen'    => $noti_not_seen  ];
       /* var_dump($noti);die;*/
        return $noti;
    }

    protected function getNoticationNotSeen ( $user_id   )
    {
        if(!empty( $user_id)){
        $result = DB::table("notications")->join("users", "users.id", "=", "notications.user_from_id")
                            ->leftJoin("likes", "notications.id", "=", 'likes.notication_id')
                            ->leftJoin("comments", 'notications.id', '=', 'comments.notication_id')
                            ->leftJoin('follows', 'notications.id','=', 'follows.notication_id')
                            ->where ([
                                ['notications.user_to_id'   , (int)$user_id ],
                                ['notications.seen'         , '0'           ]
                            ])
                            ->select('users.last_name as user_lastname','users.first_name as user_firstname', 'users.avatar as user_avatar' , 'notications.*', 'likes.id as like_id', 'likes.image_id as image_like_id' ,'comments.id as comment_id', 'comments.image_id as image_comment_id', 'follows.id as follow_id')
                            ->orderBy('notications.created_at', 'desc')
                            ->get();
        $noti_not_seen  = $this->getAllNotifiInfor( $result );
        return $noti_not_seen ;
    }
    }
    protected function getNoticationSeen( $user_id , $limit)
    {
        $result = DB::table("notications")->join("users", "users.id", "=", "notications.user_from_id")
                            ->leftJoin("likes", "notications.id", "=", 'likes.notication_id')
                            ->leftJoin("comments", 'notications.id', '=', 'comments.notication_id')
                            ->leftJoin('follows', 'notications.id','=', 'follows.notication_id')
                            ->select('users.last_name as user_lastname','users.first_name as user_firstname', 'users.avatar as user_avatar' , 'notications.*',  'likes.id as like_id', 'likes.image_id as image_like_id', 'comments.id as comment_id', 'comments.image_id as image_comment_id', 'follows.id as follow_id')
                            ->where ([
                                ['notications.user_to_id'   , (int) $user_id ],
                                ['notications.seen'         , '1'          ]
                            ])
                            ->orderBy('notications.created_at', 'desc')
                            ->take($limit)
                            ->get();

        $noti_seen  = $this->getAllNotifiInfor( $result );
       
        return $noti_seen;
    }
    protected function countTotalNotiNotSeen($user_id)
    {
        return $total = Notication::where([
                            ['user_to_id', (int)$user_id],
                            ["notications.seen" , "0"]    
                        ])->count();
    }
    protected function getAllNotifiInfor($noti)
    {
        foreach ($noti as $key => $value) {
            if ($value->kind === "like") {
                    $image_like = ImageFacade::getPhotoById( $value->image_like_id)[0];

                    unset( $value->comment_id, $value->follow_id , $value->image_comment_id);
                   
                    $value->image_url   = $image_like->url."/".$image_like->resize_2;

            }elseif ($value->kind === "comment") {

                    $image_comment = ImageFacade::getPhotoById( $value->image_comment_id )[0];
                    unset( $value->like_id, $value->follow_id , $value->image_like_id);

                    $value->image_url   = $image_comment->url."/".$image_comment->resize_2;
            }elseif ($value->kind === "follow") {
                 unset( $value->like_id, $value->comment_id , $value->image_like_id, $value->image_comment_id );
            }
        }
        return $noti;
    }
}
