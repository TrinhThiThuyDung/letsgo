<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service\FollowServiceFacade;
use App\Models\Service\ImageServiceFacade;

class FollowController extends Controller
{
	public function __construct(Request $request)
	{
		$this->user_id = $request->session()->get('id');
	}

	/*=================check user follow user =======================*/
    public function checkFollow(Request $request)
    {
    	$data = $request->data;

    	$data['user_id'] = $this->user_id;

        $image_user_id = ImageServiceFacade::findIdUserOfImage( $data['image_id']);

        if ((int)$image_user_id == (int)$this->user_id) {
            return response()->json(['follow' => "duplicate id"]);
        }

    	$result = FollowServiceFacade::checkFollow( $data );

    	if ($result) {
    		return response()->json([ 'follow' => "following" ]);
    	}
    	return response()->json( ['follow' => "follow" ] );
    }
    /*====================== user follow user ==========================*/
    public function addFollow(Request $request)
    {
    	$data = $request->data;
    	$data['user_id'] = $this->user_id;

    	$result = FollowServiceFacade::addFollow( $data );
    	if ($result) {
    		return response()->json(['result' => 'OK']);
    	}
    	return response()->json([ 'result' => 'error']);

    }
    public function deleteFollow(Request $request)
    {
    	$data['user_image_id'] = $request->user_id;
    	$data['user_id'] = $this->user_id;

    	$result = FollowServiceFacade::deleteFollow( $data );
    	
    	if ($result) {
    		return response()->json(['result' => 'OK']);
    	}
    	return response()->json(['result' => 'error']);
    }
}
