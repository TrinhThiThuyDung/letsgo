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
    	$result = Notication::where( 'user_to_id' ,$user_id )->get();
    }
}
