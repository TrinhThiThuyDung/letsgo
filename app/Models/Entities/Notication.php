<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Notication extends Model
{
     protected $label = "Notication";

     protected $fillable = [
    	'id',
    	'user_from_id',
    	'user_to_id',
    	'comment_id',
    	'follow_id',
        'image_id',
        'like_id',
    	'seen',
    	'created_at',
    	'updated_at',
    ];
/**
 *Define relationship inverse  with User model
 */
   
    public function users()
    {
    	return $this->belongs('User');
    }
   
}
