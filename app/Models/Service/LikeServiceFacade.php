<?php

namespace App\Models\Service;

use Illuminate\Support\Facades\Facade;

class LikeServiceFacade extends Facade
{
    
	protected static function getFacadeAccessor() { 
		return 'App\Models\Service\LikeServiceInterface'; 
	}
}
