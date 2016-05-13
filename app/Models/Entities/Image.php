<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $label = "Image";

    protected $fillable = [
    	'id',
    	'user_id',
        'kind_id',
    	'name',
        'size',
        'resize_1',
        'resize_2',
    	'url',
        'describe',
        'location',
    	'created_at',
    	'updated_at'
    	
    ];
/**
 *Define relationship inverse  with User model
 */
   
    public function users()
    {
    	return $this->belongsTo('User');
    }
    public function kinds()
    {
        return $this->belongsTo("Kind");
    }
    public function likes()
    {
        return $this->hasMany('Like');
    }
    public function comments()
    {
        return $this->hasMany('comment');
    }
}
