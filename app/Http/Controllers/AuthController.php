<?php

namespace App\Http\Controllers;

use App\Models\Service\UserServiceFacade;

use Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('guest', ['except' => 'getLogout']);*/
    }

    /**
     * get Login for user.
     * @param $request
     * @return void
     */

    public function getLogin(Request $request)
    {
        if (($request->session()->has('id'))) {
            return redirect('/photo');
        }
        return view('users.login');
    }

    /**
     * post Login for user.
     * @param $request from form
     * @return redirect
     */

    public function postLogin(Request $request)
    {
            $user = $request->all();

            $result = UserServiceFacade::authenticate($user);
            
            if ( $result == 0 ) {
                return response()->json([ 'status'=>'error' , 'error' => 'Wrong Email!']);
                
            }
            else if( $result == -1 ){
                return response()->json([ 'status'=>'error' , 'error' => 'Wrong Password!']);
            }
            
            $request->session()->push('id', $result['id']);
            $request->session()->push('name', $result['user_name']);

            $messageResponse = ['status'=>'success' , 'id' => $result['id'] , 'name' => $result['user_name'] ];

            if (!$user['remember_me']) {
                return response()->json($messageResponse);
            }
            return response()->json($messageResponse)->withCookie('id', $result['id']);
    
    }

    /**
     * get sign up for user.
     * @param $request
     * @return void
     */
    public function getRegister(Request $request)
    {
        if (($request->session()->has('id'))) {
            return redirect('/');
        }
        return view('users.register');
    }

    /**
     * post sign up for user.
     * @param $request from form chua data thong tin user dang ki moi
     * @return redirect: home: neu dang ki thanh cong
     *                   sign up: quay lai voi thong bao loi neu dang ki that bai
     */
    public function postRegister(Request $request)
    {
        $user = $request->all();
        
        $result = UserServiceFacade::createNewUser($user);
        
        if ( $result == null ) {
            return response()->json(['status'=>'error' , 'error' => 'Email này đã có người đăng ký, hãy chọn cho mình email khác :)']);
        }
        $request->session()->push('id', $result['id']);
        $request->session()->push('name', $result['user_name']);
        
        $messageResponse = ['status'=>'success' , 'id' => $result['id'] , 'name' => $result['user_name']];

        return response()->json($messageResponse);
           
    }

    /**
     * Logout function
     */

    public function getLogout(Request $request)
    {

        $request->session()->flush();
        if($request->hasCookie("id"))
           $request->cookie("id" , null, 0);
        return response()->json([ 'status'=>'success' , 'content'=> 'logout susscess']);
    }
}
