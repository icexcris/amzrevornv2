<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoTags extends Model
{
    //post_tags
    public $table = 'video_tags';
    protected $fillable = ['post_id', 'tag'];
}
