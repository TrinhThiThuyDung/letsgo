<?php

namespace App\Models\Repository;

use App\Models\Entities\Notication;
use Illuminate\Database\Eloquent\Model;
use DB;

class NoticationRepositoryEloquent extends BaseRepository implements NoticationRepository
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
        $result = Notication::join( 'users', 'notications.user_from_id','=', 'users.id' )
                            ->where ([
                                ['notications.user_to_id'   , (int)$user_id ],
                                ['notications.seen'         , '0'           ]
                            ])
                            ->select( 'users.id', 'users.last_name', 'users.first_name', 'users.avatar', 'notications.*')
                            ->orderBy('notications.created_at', 'desc')
                            ->get();
        return $result;
    }
    protected function getNoticationSeen( $user_id )
    {
        $result = Notication::join( 'users', 'notications.user_from_id' ,'=', 'users.id')
                            ->select( 'users.id', 'users.last_name', 'users.first_name', 'users.avatar', 'notications.*')
                            ->where ([
                                ['notications.user_to_id'   , (int) $user_id ],
                                ['notications.seen'         , '1'          ]
                            ])
                             ->orderBy('notications.created_at', 'desc')
                            ->get();
        return $result;
    }
}
