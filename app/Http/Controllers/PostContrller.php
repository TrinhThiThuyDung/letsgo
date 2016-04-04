<?php
namespace App\Http\Controllers;

/**
* 
*/
use Illuminate\Http\Request;
//use App\Http\Requests;

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

    

	public function postNewStatus(Request $request)
	{

		if (($request->session()->has('id'))==false){
			return redirect('/auth/signin');
		}
		$my_name = $request->session()->get('user.name');
		var_dump($my_name);
		return view('home');
		
	}
}
?>