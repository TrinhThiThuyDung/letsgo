<?php
namespace App\Models\Repository;

use App\Models\Entities\SocialAccount;
use App\Models\Entities\User;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class SocialAccountRepositoryEloquent implements SocialAccountRepository
{
	public function checkFacebookAccount($social_id, $kind_social)
	{
		return $account = SocialAccount::whereProvider($kind_social)
            							->whereProviderUserId()
            							->first($social_id);
	}

	public function addNewSocialAccount($providerUser, $kind_social )
	{
		$account = new SocialAccount([
                'provider_user_id' => $providerUser->getID(),
                'provider' => $kind_social
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'last_name' => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
	}
} 
?>