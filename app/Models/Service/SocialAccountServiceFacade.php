<?php
namespace App\Models\Service;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class SocialAccountServiceFacade extends Facade
{
	
	protected static function getFacadeAccessor() { 
		return 'App\Models\Service\SocialAccountServiceInterface'; 
	}
}
?>