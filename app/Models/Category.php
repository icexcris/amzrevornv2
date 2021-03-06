<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    protected $fillable = ['name','description', 'icon', 'slug', 'parent',];
     public $timestamps = false;
     
      public function parentitem()
    {
     	return $this->belongsTo('App\Models\Category','parent');
    }
}
