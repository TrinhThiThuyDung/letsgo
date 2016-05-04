<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service\FollowServiceFacade;

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

    	$result = FollowServiceFacade::checkFollow( $data );

    	if ($result) {
    		return response()->json([ 'follow' => true ]);
    	}
    	return response()->json( ['follow' => false ] );
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
    	$data['image_id'] = $request->image_id;
    	$data['user_id'] = $this->user_id;

    	$result = FollowServiceFacade::deleteFollow( $data );
    	
    	if ($result) {
    		return response()->json(['result' => 'OK']);
    	}
    	return response()->json(['result' => 'error']);
    }
}
