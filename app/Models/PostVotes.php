<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostVotes extends Model
{
    //post_tags
    public $table = 'post_votes';
    protected $fillable = ['post_id', 'user_id','type'];
}
