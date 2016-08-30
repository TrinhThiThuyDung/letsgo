<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Socialite;

use App\Models\Service\SocialAccountService;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        Socialite::driver('facebook')->stateless()->user();
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user); var_dump($providerUser);

        return redirect()->to('web/home');



        
    }
}
