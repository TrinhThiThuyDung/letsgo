<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
     protected $label = "Like";

     protected $fillable = [
    	'id',
    	'user_id',
    	'image_id',
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
    public function images()
    {
    	return $this->belongs('Image');
    }
}
