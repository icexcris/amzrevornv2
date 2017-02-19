<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Video;

use Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $cr, Comments $c, Posts $p, Video $v, $id){

        $type = $cr->type == 'photo' ? 1 : ($cr->type == 'video' ? 2 : 3);

    	$c->create([
    		'post_id' => $id,
    		'user_id' => Auth::user()->id,
    		'content' => $cr->comment,
    		'status' => 0,
            'type' => $type
    	]);

        if($type == 2){
            $post = $v->whereId($id)->first();
        }else{
    	    $post = $p->whereId($id)->first(); 
        }
        //set flash message

        if($cr->type == 'blog'){
            //this is for blog
           return redirect()->route('post.show', [$post->slug, $id])->with('status', 'Comment posted successfully!');
        }else if($cr->type == 'photo'){
           return redirect()->route('photos.show', [$post->slug, $id])->with('status', 'Comment posted successfully!');
        }else if($cr->type == 'video'){
    	   return redirect()->route('videos.show', [$post->slug, $id])->with('status', 'Comment posted successfully!');
            //this is for posts or whatever
        }

    }
}
