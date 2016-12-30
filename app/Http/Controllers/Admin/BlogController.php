<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Posts;

class BlogController extends Controller
{
	public function index(Posts $p)
	{
		$posts = $p->where('type', '=', 1)->with('createdBy', 'categories', 'categories.info')->orderBy('created_at', 'DESC')->paginate(15);
		return view('admin.posts.blog.index', compact('posts'));
	}
}
