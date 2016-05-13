<?php
/**
 * 
 */

namespace App\Models\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

 class User extends Model
 {
 	
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
 	    'position',
 	    'created_at',
 	    'updated_at'
 	    ];

   //Cac quan he se co voi cac model khac
 	public function images()
    {
        return $this->hasMany('Image');
    }
    public function likes()
    {
    	return $this->hasMany('Like');
    }
    public function follows()
    {
    	return $this->hasMany('Follow');
    }
    public function comments()
    {
        return $this->hasMany('Comment');
    }
}

?>


