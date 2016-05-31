<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Service\ImageServiceFacade;
use App\Models\Service\LikeServiceFacade;
use App\Models\Service\UserServiceFacade;
use App\Models\Service\FollowServiceFacade;

use App\Http\Controllers\PhotoController;

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
    public function getProfileUserMobile(Request $request)
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
        return reponse()->json ([ 'data'=> $data ]);
    }
    public function updateProfile(Request $request)
    {
        $user_update = $request->user;

        $data_update = [];
        $data_update = $this->updateDataProfile($user_update);

        if (!empty($data_update)) {
            $result = $user_updated = UserServiceFacade::updateProfile($this->user_id, $data_update );
            if ($result) {
                return response()->json( ['status'   => 'sucess']);
            }
            return response()->json(['status'   => 'error']);
        }
        return response()->json( ['status' => 'nothing' ]);
    }
    protected function updateDataProfile($user_update)
    {
        $data_update = [];
         if ($user_update['last_name'] !== '') {
            $data_update['last_name'] = $user_update['last_name'];
        }
        if ($user_update['first_name'] !== '') {
            $data_update['first_name'] = $user_update['first_name'];
        } 
        if ($user_update['phone'] !== '') {
            $data_update['phone'] = $user_update['phone'];
        }
        if ($user_update['address'] !== '') {
            $data_update['address'] = $user_update['address'];
        }
        if ($user_update['birthday'] !== '') {
            $data_update['birthday'] = $user_update['birthday'];
        }
        if ($user_update['position'] !== '') {
            $data_update['position'] = $user_update['position'];
        }
        if (isset($user_update['gender'])) {
            $data_update['gender'] = $user_update['gender'];
        }
        return $data_update;
    }
    public function updateAvatar(Request $request)
    {
      
        if ($request->hasFile("avatar")) {
            $image = $request->file("avatar");

            $image_name = $image->getClientOriginalName();
            $path = base_path().'/public/upload/'.$this->user_id;
       
            $image->move( $path, $image_name);
            
            $url = '/upload/'.$this->user_id."/".$image_name;
            $result = UserServiceFacade::updateAvatar( $this->user_id , $url );

            return redirect()->route('web/user/profile', [$this->user_id]);
        }
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
