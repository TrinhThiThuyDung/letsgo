<?php
namespace App\Models\Service;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class UserServiceFacade extends Facade
{
	
	protected static function getFacadeAccessor() { 
		return 'App\Models\Service\UserServiceInterface'; 
	}
}
?>