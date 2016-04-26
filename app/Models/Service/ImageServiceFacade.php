<?php
namespace App\Models\Service;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class ImageServiceFacade extends Facade
{
	
	protected static function getFacadeAccessor() { 
		return 'App\Models\Service\ImageServiceInterface'; 
	}
}
?>