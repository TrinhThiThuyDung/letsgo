<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $label = "Image";

    protected $fillable = [
    	'id',
    	'album_id',
    	'name',
    	'url',
    	'created_at',
    	'updated_at'
    	
    ];
/**
 *Define relationship inverse  with User model
 */
   
    public function albums()
    {
    	return $this->belongsTo('Album');
    }
    public function likes()
    {
        return $this->hasMany('Like');
    }
}
