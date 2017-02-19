<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Controllers\Controller;

use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    public function index(Category $c)
    {
    	$categories = $c->with('parentitem')->get();
    	$page = 'categories';
    	return view('admin.categories.index', compact('categories', 'page'));
    }

    public function create(Category $c)
    {
    	$categories = $c->get();
    	$page = 'categories';
    	return view('admin.categories.create', compact('categories', 'page'));
    }

    public function store(AddCategoryRequest $cr, Category $c)
    {
    	//upload icon

    	$c->create([
    		'name' => $cr->input('name'),
    		'slug' => str_slug($cr->input('name'), '-'),
            'description' => $cr->input('description'),
            'icon' => $cr->input('icon'),
    		'parent' => $cr->input('parent')
    	]);

    	return redirect()->route('categories.index');
    }

    public function destroy(Category $c, $id)
    {
		$rows = DB::table('post_categories')->where('category_id', '=', $id)->get();
		foreach($rows as $row){
			Db::table('post_categories')->where('category_id', '=', $id)->update(['category_id' => 0]);
		}

    	$c->where('id', '=', $id)->delete();

    	return redirect()->back();
    }
}
