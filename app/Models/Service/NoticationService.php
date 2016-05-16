<?php

namespace App\Models\Service;

use App\Models\Repository\NoticationFacade;
use DB;

class NoticationService implements NoticationServiceInterface
{
	public function getNoticationOfUser( $user_id )
	{
		return NoticationFacade::getNoticationOfUser ($user_id);
	}
	public function setSeenNotication($noti_id)
	{
		return $result = DB::table("notications")->where("id", $noti_id)->update(['seen'	=> '1']);
	}
}
?>