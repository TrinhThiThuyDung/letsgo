<?php

namespace App\Models\Repository;


interface NoticationRepository
{
    function createNotication( $notiInfor );
    function getNoticationOfUser ($user_id);
}
