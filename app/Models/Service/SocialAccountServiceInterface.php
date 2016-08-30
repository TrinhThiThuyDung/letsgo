<?php

namespace App\Models\Service;

use Laravel\Socialite\Contracts\User as ProviderUser;

interface SocialAccountServiceInterface
{
	function createOrGetUser(ProviderUser $providerUser);
}
?>