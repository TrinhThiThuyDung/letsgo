<?php
namespace App\Http\Controllers;

/**
* 
*/
use Illuminate\Http\Request;
//use App\Http\Requests;

class PhotoController extends Controller
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

		if (($request->session()->has('user.id'))==false){
			return redirect('/auth/signin');
		}
		/*$my_name = session()->get('user.name');*/
		
		/*return view('home')->with('my_name',$my_name);*/
		return view('photo');
		
	}
}
?>