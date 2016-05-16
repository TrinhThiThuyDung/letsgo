<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*use App\Http\Requests;*/
use App\Models\Service\NoticationServiceFacade;

class NoticationController extends Controller
{
    public function __construct(Request $request)
    {
    	$this->user_id = $request->session()->get('id');
    }

    public function setSeen(Request $request)
    {
    	$noti_id = (int)$request->all()['noti_id'];
    	$result = NoticationServiceFacade::setSeenNotication( $noti_id );
    	if ($result) {
    		return response()->json(['result' => 'OK']);
    	}
    	return response()->json(['result' => 'error']);
    }
}
