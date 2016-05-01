<?php
/**
 * 
 */

namespace App\Models\Entities;


use Illuminate\Database\Eloquent\Model;

 class Album extends Model
 {

 	protected $label = "Album";

 	protected $fillable = [
 		'id',
 	    'user_id',
 	    'kind_id',
 	    'name',
 	    'describe',
 	    'url',
 	    'created_at',
 	    'updated_at'
 	  
 	    ];

   //Cac quan he se co voi cac model khac
 	public function images()
    {
        return $this->hasMany('Image');
    }

    public function users()
    {
    	return $this->belongsTo("User");
    }
}

?>


