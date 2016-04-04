<?php

namespace App\Models\Service;

interface UserServiceInterface{
	/*check login user*/
	function authenticate ($user);
	
	/*create new user*/
	function createNewUser($new_user);
}
?>