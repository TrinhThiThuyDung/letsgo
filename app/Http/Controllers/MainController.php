<?php
namespace App\Http\Controllers;

/**
* 
*/
use Illuminate\Http\Request;


class MainController extends Controller
{
	 /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    

	public function getIndex(Request $request)
	{

        if (!$request->session()->has("id")) {
            if($request->cookie("id") == null ){
              	return view("index");
            }else{
                $request->session()->push('id', $request->cookie("id"));
                return redirect()->route("/photo");
            }
        }
        return redirect()->route("/photo");
		
	}
}
?>