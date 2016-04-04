<?php
namespace App\Models;

use NeoEloquent;

use Vinelab\NeoEloquent\Eloquent\SoftDeletes;

/**
* 
*/
class User extends NeoEloquent
{
	
	protected $label = "User";

	protected $fillable = [
	'last_name',
	'first_name',
	'email',
	'password',
	'phone',
	'gender',
	'address'
	];

	public function createNewUser ($user){

		$success = User::create([
			'last_name'=>$user['l_name'],
			'first_name'=>$user['f_name'],
			'email'=>$user['email'],
			'password'=>md5($user['password']),
			'gender'=>'female'
			]);

		
		return $success;
	}
	public function checkLogin($user){
		$user = User::find()
	}
}
?>