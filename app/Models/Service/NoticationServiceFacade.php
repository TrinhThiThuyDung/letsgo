<?php

namespace App\Models\Service;

use Illuminate\Support\Facades\Facade;

class NoticationServiceFacade extends Facade
{
    
	protected static function getFacadeAccessor() { 
		return 'App\Models\Service\NoticationerviceInterface'; 
	}
}
?>