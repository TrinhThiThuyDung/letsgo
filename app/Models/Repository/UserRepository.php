<?php

namespace App\Models\Repository;


interface UserRepository 
{
	
    function checkLogin($data);
    function createUser($user);
    function getInfor($id_user);
    function getInforUser( $user_id );
}
?>