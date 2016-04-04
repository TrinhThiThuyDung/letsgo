<?php
/**
 * 
 */

namespace App\Models\Entities;

use Vinelab\NeoEloquent\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;
use NeoEloquent;

 class User extends NeoEloquent
 {
 	
 	use SoftDeletes;
 	
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

   //Cac quan he se co voi cac model khac
 	   /* public function posts()
    {
        return $this->hasMany('Post', 'POSTED');
    }*/
}

?>


