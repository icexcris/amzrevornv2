<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $table = 'videos';
    protected $fillable = ['lang', 'title', 'slug', 'video', 'description', 'author'];
}
