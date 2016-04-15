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


