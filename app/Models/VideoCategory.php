<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $table = 'videos_categories';
    protected $fillable = ['name','description', 'icon', 'slug', 'parent',];
}
