<?php

namespace App\Models\Repository;

use Illuminate\Support\Facades\Facade;

class LikeFacade extends Facade
{
    protected static function getFacadeAccessor()
	{
		return 'App\Models\Repository\LikeRepository';
	}
}
