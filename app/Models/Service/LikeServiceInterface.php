<?php

namespace App\Models\Service;


interface LikeServiceInterface
{
    function addLike( $data );
    function checkLike( $data );
    function deleteLike( $data );
}
