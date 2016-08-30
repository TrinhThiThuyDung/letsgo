<?php
namespace App\Models\Service;

use App\Models\Repository\SocialAccountFacade;
use App\Models\Entities\SocialAccount;
/*use App\Models\Repository\ImageFacade;
use App\Models\Repository\NoticationFacade;*/
use DB;
use Laravel\Socialite\Contracts\User as ProviderUser;
/**
* 
*/
class SocialAccountService implements SocialAccountServiceInterface
{
	 public function createOrGetUser(ProviderUser $providerUser)
	 {
	 	var_dump($providerUser);die;
	 	$account = SocialAccountFacade::checkFacebookAccount( $providerUser->getId() , "facebook" );
	 	

        if ($account) {
            return $account->user;
        } else {

            return $user = SocialAccountFacade::addNewSocialAccount( $providerUser, "facebook" );

        }
	 }
}

?>