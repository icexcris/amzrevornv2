<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostPicturesRequest;

use App\Models\Category;
use App\Models\Posts;
use App\Models\PostTags;
use App\Models\PostVotes;

use Auth;
use App\Input;

/*
	1 - Photo
	2 - News
*/

class PostController extends Controller
{
    public function upload(Category $c)
    {
    	$categories = $c->get();
    	$videoCategories = '';
    	return view('/page/upload', compact('categories'));
    }

    public function uploadPost(PostPicturesRequest $ppr, Posts $p, PostTags $pt)
    {
        $file = $ppr->file('picfile');
        $newFile = strtolower( rand().'_'.time().'.'.$file->getClientOriginalExtension() );
        $file->move(public_path() . '/uploads/pictures/', $newFile);
        $fileToDb = $newFile;

    	$post = $p->create([
    		'title' => $ppr->title,
    		'slug' => str_slug($ppr->title, '_'),
    		'author' => Auth::user()->id,
    		'picture' => $fileToDb,
    		'description' => $ppr->description,
    		'type' => 1,
    		'category_id' => $ppr->category
    	]);

    	$tags = explode(',', $ppr->tags);

    	foreach($tags as $tag){
    		$pt->create([
    			'post_id' => $post->id,
    			'tag' => $tag
    		]);
    	}

    	return redirect()->route('post.show', ['slug' => str_slug($ppr->title, '_'), 'id' => $post->id]);
    }

    public function show(PostVotes $pv, Posts $p, Category $c, $slug, $id)
    {
    	$post = $p->with('getTags', 'getComments.createdBy', 'createdBy', 'getVotes', 'getCategory')->whereId($id)->first();
    	$category = $c->whereId($post->category_id)->first();
    	$vote = $pv->where('post_id', '=', $post->id)->where('user_id', '=', Auth::user()->id)->first();

    	return view('/page/post-photo', compact('post', 'vote', 'category'));
    }

    public function vote(PostVotes $pv, $post_id, $type)
    {
    	$check = $pv->where('post_id', '=', $post_id)->where('user_id', '=', Auth::user()->id)->first();

    	if(count($check)){
    		//deja avem, schimbam type
    		$pv->where('post_id', '=', $post_id)->where('user_id', '=', Auth::user()->id)->update([
    			"type" => $type,
    		]);
    	}else{
    		//nu avem, facem create
	    	$pv->create([
	    		"post_id" => $post_id,
	    		"user_id" => Auth::user()->id,
	    		"type" => $type,
	    	]);
    	}
    }

    public function showNews(Posts $p, $slug, $id)
    {
    	$post = $p->with('getTags', 'getComments.createdBy', 'createdBy', 'getVotes')->whereId($id)->first();
    	return view('/page/post-news', compact('post'));
    }

    public function indexPhotos(Posts $p)
    {	
    	$posts = $p->whereType(1)->orderBy('created_at', 'DESC')->paginate(4);
    	$page = 'photos';
    	return view('/photos', compact('posts', 'page'));
    }

    /*public function testMove(PostCategory $pc)
    {
    	$a = $pc->get();
    }*/
}
