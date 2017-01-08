<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTags extends Model
{
    //post_tags
    public $table = 'post_tags';
    protected $fillable = ['post_id', 'tag'];
}
