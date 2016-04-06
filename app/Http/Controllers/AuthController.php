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
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * get Login for user.
     * @param $request
     * @return void
     */

    public function getLogin(Request $request)
    {
        if (($request->session()->has('id'))==true) {
            return redirect('/');
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
            
            /*if ($result=="0") {
                return redirect('/auth/signin')->withErrors("This email incorect!")->withInput();
                
            }
           if($result=="-1"){
            return redirect('/auth/signin')->withErrors("Password is wrong!")->withInput();
           }
*/
             $request->session()->push('user.id',$result);
             //$request->session()->push('user.name',$result);
            return redirect('/');
           
    
    }

    /**
     * get sign up for user.
     * @param $request
     * @return void
     */
    public function getRegister(Request $request)
    {
        if (($request->session()->has('id'))==true) {
            return redirect('/');
        }
        return view('users.register');
    }
/* public function getTest(Request $request)
    {
      Album::insertGetId(['id_user' => 1, 'id_kind' => 1]);
    }*/
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
            return redirect('register')->withErrors(array("already_email" => "This email alrealy use!"))->withInput();
        }
        $request->session()->push('user.id', $result['id']);
        $request->session()->push('user.name', $result['user_name']);
     
        return redirect('/photo');
           
    }

    /**
     * Logout function
     */

    public function getLogout(Request $request)
    {

        $request->session()->flush();
        return redirect('/auth/signin');
    }
}
