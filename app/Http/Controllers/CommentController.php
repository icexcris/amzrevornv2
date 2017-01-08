<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

use App\Models\Comments;
use App\Models\Posts;

use Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $cr, Comments $c, Posts $p, $id){
    	$c->create([
    		'post_id' => $id
    		'user_id' => Auth::user()->id,
    		'content' => $cr->comment,
    		'status' => 0
    	]);
    	$post = $p->whereId($id)->first();
    	return redirect()->route('post.show', [$post->slug, $id]);
    }
}
