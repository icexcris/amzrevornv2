<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $table = 'videos';
    protected $fillable = ['lang', 'title', 'slug', 'video', 'description', 'author', 'category_id'];

    public function getTags(){
        return $this->hasMany('App\Models\VideoTags', 'post_id', 'id');
    }

    public function getComments(){
        return $this->hasMany('App\Models\Comments', 'post_id', 'id');
    }

    public function createdBy()
    {
    	return $this->hasOne('App\User', 'id', 'author');
    }

    public function getCategory(){
        return $this->hasMany('App\Models\VideoCategory', 'id', 'category_id');
    }

}
