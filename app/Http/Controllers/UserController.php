<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Service\ImageServiceFacade;
use App\Models\Service\LikeServiceFacade;
use App\Models\Service\UserServiceFacade;
use App\Models\Service\FollowServiceFacade;


class UserController extends Controller
{
    protected $user_id;

    public function __construct(Request $request)
    {
    	if ($request->session()->get('id')) {
    		$this->user_id = $request->session()->get('id');
    	}
    	
    }

    public function getProfileUser(Request $request)
    {
        $user_id = $request->user_id;
        $photo_of_user = $this->getPhotoOfUser ($user_id );
        $photo_user_like = $this->getPhotoUserLike($user_id );
        $user_infor_activity = $this->getInforActivityOfUser($user_id );
        $user_all_infor = $this->getAllInforUser($user_id );
        $user_follow = $this->getUserFollow($user_id );


        $data = [
            'user_photo'    => $photo_of_user,
            'user_like'     => $photo_user_like,
            'user_activity' => $user_infor_activity,
            'user_all_infor'=> $user_all_infor,
            'user_follow'   => $user_follow  
        ];

    	return view("profile")->with( 'data', $data );
    }
    protected function getPhotoOfUser ($user_id )
    {
        return ImageServiceFacade::getPhotoOfUser ($user_id );
    }
    protected function getPhotoUserLike($user_id )
    {
        return LikeServiceFacade::getPhotoUserLike($user_id );
    }
    protected function getInforActivityOfUser($user_id )
    {
        return  UserServiceFacade::getInforActivityOfUser($user_id );
    }
    protected function getUserFollow($user_id )
    {
        return  FollowServiceFacade::getUserFollow($user_id );
    }
    protected function getAllInforUser($user_id )
    {
        return UserServiceFacade::getAllInforUser($user_id );
    }

}
