<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    public $table = 'post_categories';
    protected $fillable = ['post_id', 'category_id'];
    public $timestamps = false;

    public function info()
    {
    	return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
