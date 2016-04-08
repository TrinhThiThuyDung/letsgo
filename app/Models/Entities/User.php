<?php
/**
 * 
 */

namespace App\Models\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 class User extends Model
 {
 	 use SoftDeletes;
 	
 	protected $label = "User";

 	protected $fillable = [
 		'id',
 	    'last_name',
 	    'first_name',
 	    'email',
 	    'password',
 	    'phone',
 	    'gender',
 	    'address',
 	    'birthday',
 	    'avatar',
 	    'position'
 	    ];

   //Cac quan he se co voi cac model khac
 	   /* public function posts()
    {
        return $this->hasMany('Post', 'POSTED');
    }*/
}

?>

