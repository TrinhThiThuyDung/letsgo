<?php

namespace App\Models\Repository;


interface UserRepository 
{
	
    function checkLogin($data);
    function createUser($user);
 
    function getInforUser( $user_id );

    function getAllInforUser( $user_id );

    function getInforActivityOfUser( $user_id );

    function updateProfile($user_id, $data );
}
?>