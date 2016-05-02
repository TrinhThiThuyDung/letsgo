<?php

namespace App\Models\Repository;

use Illuminate\Support\Facades\Facade;

class NoticationFacade extends Facade
{
    
	protected static function getFacadeAccessor()
	{
		return 'App\Models\Repository\NoticationRepository';
	}
	
}
