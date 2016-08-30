<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = [
    			'id',
    			'user_id', 
    			'provider_user_id', 
    			'provider',
    			'created_at',
    			'update_at'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
