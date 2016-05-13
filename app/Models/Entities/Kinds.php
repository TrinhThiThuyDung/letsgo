<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Kinds extends Model
{
    protected $label = "Kind";

     protected $fillable = [
    	'id',
    	'name',
    	'describe',
    	'created_at',
    	'updated_at',
    ];
/**
 *Define relationship inverse  with User model
 */
   
    public function images()
    {
    	return $this->hasMany('Image');
    }
}
