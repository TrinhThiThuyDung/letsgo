<?php

namespace App\Models\Repository;


interface SocialAccountRepository 
{
	function checkFacebookAccount($social_id, $kind_social);
	function addNewSocialAccount( $providerUser , $kind_social );
}
?>