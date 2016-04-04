<?php

namespace App\Models\Repository;


interface UserRepository 
{
	
    function checkLogin($data);
    function createUser($user);
    
}
?>