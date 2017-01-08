<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['lang', 'title', 'slug', 'picture', 'description', 'author', 'status', 'type'];

    public function getTags(){
        return $this->hasMany('App\Models\PostTags', 'post_id', 'id');
    }

    public function getComments(){
        return $this->hasMany('App\Models\Comments', 'post_id', 'id');
    }

    public function createdBy()
    {
    	return $this->hasOne('App\User', 'id', 'author');
    }

    public function getVotes(){
        return $this->hasMany('App\Models\PostVotes', 'post_id', 'id');
    }

     public function getCategory(){
        return $this->hasMany('App\Models\Category', 'id', 'id');
    }   

}
