<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $label = "Comment";

 	protected $fillable = [
 		'id',
 	    'user_id',
 	    'image_id',
 	    'notication_id',
 	    'content',
 	    'created_at',
 	    'updated_at'
 	  
 	    ];

   //Cac quan he se co voi cac model khac
 	public function images()
    {
        return $this->belongsTo('Image');
    }

    public function users()
    {
    	return $this->belongsTo("User");
    }
    public function notications()
    {
    	return $this->hasOne("Notication");
    }
}
