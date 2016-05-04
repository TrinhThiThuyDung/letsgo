<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service\LikeServiceFacade;

class LikeController extends Controller
{
	public function __construct(Request $request)
	{
		$this->user_id = $request->session()->get('id');
	}
	/**
	 *process when user click like images
	 */
    public function addLike(Request $request)
    {
    	$data = $request->data;

    	$data['user_id'] = $this->user_id;
    	$like = LikeServiceFacade::addLike($data);

    	if ($like) {
    		return response()->json($like);
    	}
    }

    public function deleteLike(Request $request)
    {
    	$data['image_id'] = $request->image_id;

    	$data['user_id'] = $this->user_id;
    	$like = LikeServiceFacade::deleteLike($data);

    	if ($like) {
    		return response()->json($like);
    	}
    }
    public function checkLike(Request $request)
    {
    	$data = $request->data;

    	$data['user_id'] = $this->user_id;

    	$result = LikeServiceFacade::checkLike( $data );

    	if ($result) {
    		return response()->json(['love' => true]);
    	}
    	return response()->json(['love' => false ]);

    }
    public function getTotalLike(Request $request)
    {
        $data = $request->data;

        $result = LikeServiceFacade::getTotalLike( $data );

        if ($result) {
            return response()->json([
                'result'    => 'OK',
                'total'     => $result
            ]);
        }
        return response()->json(['result'   => 'error']);
    }
}
