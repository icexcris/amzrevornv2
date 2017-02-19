<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\PostPicturesRequest;
use App\Models\Category;
use App\Models\VideoCategory;
use App\Models\Posts;
use App\Models\PostTags;
use App\Models\PostVotes;
use Auth;
use App\Input;
use App\Models\NewsCategories;
/*
    1 - Photo
    2 - News
*/
class PostController extends Controller
{
    public function upload(Category $c, VideoCategory $v)
    {
        $categories = $c->get();
        $videoCategories = $v->get();
        return view('/page/upload', compact('categories','videoCategories'));
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
        return redirect()->route('photos.show', ['slug' => str_slug($ppr->title, '_'), 'id' => $post->id]);
    }
    public function showPhotos(PostVotes $pv, Posts $p, Category $c, $slug, $id)
    {
        $post = $p->with('getTags', 'getComments.createdBy', 'createdBy', 'getVotes', 'getCategory')->whereId($id)->first();
        $next = $p->where('type', '=', '1')->where('created_at', '>', $post->created_at)->first();
        $prev = $p->where('type', '=', '1')->where('created_at', '<', $post->created_at)->first();
        $category = $c->whereId($post->category_id)->first();

        if(Auth::check()){
            $vote = $pv->where('post_id', '=', $post->id)->where('user_id', '=', Auth::user()->id)->first();
        }else{
            $vote = 0;
        }

        return view('/page/post-photo', compact('post', 'vote', 'category', 'next', 'prev'));
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
    public function indexNews(Posts $p,NewsCategories $c, $category=null)

    {
        if(!is_null($category)){
        $cat = $c->whereSlug($category)->first();
        $posts = $p->where('category_id', '=', $cat->id)->with('singleNewsCategory')->whereType(2)->orderBy('created_at', 'DESC')->paginate(4);
        }else{
        $posts = $p->with('singleNewsCategory')->whereType(2)->orderBy('created_at', 'DESC')->paginate(4);
        }
        $page = 'news';
        return view('/news', compact('posts', 'page'));
    }
    public function indexPhotos(Posts $p,Category $c, $category=null)

    { 
        if(!is_null($category)){
        $cat = $c->whereSlug($category)->first(); 
        $posts = $p->where('category_id', '=', $cat->id)->with('singlePhotoCategory')->whereType(1)->orderBy('created_at', 'DESC')->paginate(4);
         }else{ 
        $posts = $p->with('singlePhotoCategory')->whereType(1)->orderBy('created_at', 'DESC')->paginate(4);
        }
        $page = 'photos';
        return view('/photos', compact('posts', 'page', 'vote'));
    }
    /*public function testMove(PostCategory $pc)
    {
        $a = $pc->get();
    }*/
    public function show(Posts $p, Category $c, $slug, $id)
    {
        $post = $p->with('getTags', 'getComments.createdBy', 'createdBy', 'getCategory')->whereId($id)->first();
        $next = $p->where('type', '=', 2)->where('created_at', '>', $post->created_at)->first();
        $prev = $p->where('type', '=', 2)->where('created_at', '<', $post->created_at)->first();

        $category = $c->whereId($post->category_id)->first();
        return view('/page/post-blog', compact('post', 'category', 'next', 'prev'));
    }
}