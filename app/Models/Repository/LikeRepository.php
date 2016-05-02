<?php

namespace App\Models\Repository;


interface LikeRepository
{
    function addLike( $data );
    function deleteLike( $data );
    function checkLike( $data );
}
