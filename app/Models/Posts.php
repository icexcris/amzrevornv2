<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $table = 'posts';
    protected $fillable = ['lang', 'title', 'slug', 'picture', 'description', 'author', 'status'];

    public function createdBy()
    {
    	return $this->hasOne('App\User', 'id', 'author');
    }

    public function categories()
    {
    	return $this->hasMany('App\Models\PostCategory', 'post_id', 'id');
    }
}
