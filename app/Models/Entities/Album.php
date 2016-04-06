<?php
/**
 * 
 */

namespace App\Models\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 class Album extends Model
 {
 	 use SoftDeletes;
 	
 	protected $label = "Album";

 	protected $fillable = [
 		'id',
 	    'id_user',
 	    'id_kind',
 	    'time_post',
 	    'title'
 	  
 	    ];

   //Cac quan he se co voi cac model khac
 	   /* public function posts()
    {
        return $this->hasMany('Post', 'POSTED');
    }*/
}

?>


