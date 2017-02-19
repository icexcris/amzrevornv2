<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['post_id', 'user_id', 'content', 'picture', 'status', 'type'];

	public function createdBy()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
