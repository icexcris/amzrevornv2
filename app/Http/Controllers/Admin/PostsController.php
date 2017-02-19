<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Posts;

class PostsController extends Controller
{
    public function index(Posts $p)
    {
    	$posts = $p->orderBy('createed_at', 'DESC')->paginate(7);
    	return view('admin.posts.blog.index', compact('posts'));
    }
}
