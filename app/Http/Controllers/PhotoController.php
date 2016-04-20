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

    

	public function getPhotoPage(Request $request)
	{

        return view("photo");
		
	}
}
?>