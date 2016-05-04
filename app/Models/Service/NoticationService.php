<?php

namespace App\Models\Service;

use App\Models\Repository\NoticationFacade;


class NoticationService implements NoticationServiceInterface
{
	public function getNoticationOfUser( $user_id )
	{
		return NoticationFacade::getNoticationOfUser ($user_id);
	}
}
?>