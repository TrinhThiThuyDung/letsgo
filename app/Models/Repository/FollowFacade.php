<?php
namespace App\Models\Repository;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class FollowFacade extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return 'App\Models\Repository\FollowRepository';
	}
}
?>