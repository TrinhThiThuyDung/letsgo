<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $label = "Follow";

 	protected $fillable = [
 		'id',
 	    'user_flower_id',
 	    'user_followed_id',
 	    'created_at',
 	    'updated_at'
 	  
 	    ];

   //Cac quan he se co voi cac model khac

    public function users()
    {
    	return $this->belongsTo("User");
    }
}
