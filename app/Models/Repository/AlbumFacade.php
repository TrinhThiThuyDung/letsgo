<?php
namespace App\Models\Repository;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class AlbumFacade extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return 'App\Models\Repository\AlbumRepository';
	}
}
?>