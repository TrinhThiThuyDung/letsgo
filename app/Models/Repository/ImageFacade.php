<?php
namespace App\Models\Repository;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class ImageFacade extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return 'App\Models\Repository\ImageRepository';
	}
}
?>