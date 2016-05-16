<?php

namespace App\Models\Service;


interface NoticationServiceInterface
{
   function getNoticationOfUser ($user_id);
   function setSeenNotication( $noti_id );
}
?>