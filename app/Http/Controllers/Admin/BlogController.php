<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Posts;

class BlogController extends Controller
{

	public function index(Posts $p)
	{
		$posts = $p->where('type', '=', 1)->with('createdBy', 'categories', 'categories.info')->orderBy('created_at', 'DESC')->paginate(15);
		return view('admin.posts.blog.index', compact('posts'));
	}

	public function update(Posts $p, $id)
	{
		$post = $p->whereId($id)->first();
		return view('admin.posts.blog.update', compact('post'));
	}

	public function desotry(Posts $p, $id)
	{
		$p->whereId($id)->delete();
		return redirect()->back();
	}

}