<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategories extends Model
{
    protected $table = 'news_categories';
    protected $fillable = ['name','description', 'icon', 'slug', 'parent',];
}
