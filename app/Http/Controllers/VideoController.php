<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use App\Models\VideoTags;
use App\Models\VideoCategory;

use Auth;

class VideoController extends Controller
{
    public function indexVideos(Video $v, VideoCategory $vidCat, $category = null)
    {  
        if(!is_null($category)){
            $cat = $vidCat->whereSlug($category)->first();
            $videos = $v->where('category_id', '=', $cat->id)->with('getTags', 'createdBy', 'getComments', 'getTags')->paginate(15);
        }else{
            $videos = $v->with('getTags', 'createdBy', 'getComments', 'getTags')->paginate(15);
        }
        $page = 'videos';
        return view('/videos', compact('page', 'videos'));
    }
    public function showVideos(Video $v, $slug, $id)
    {
        $video = $v->with('getTags', 'createdBy', 'getComments', 'getTags', 'getCategory')->whereId($id)->first();
        $next = $v->where('created_at', '>', $video->created_at)->first();
        $prev = $v->where('created_at', '<', $video->created_at)->first();
        return view('/page/post-video', compact('video', 'next', 'prev'));
    }
    public function videoStore(VideoRequest $vr, VideoTags $vt)
    {

            $post = Video::create([
                'title' => $vr->get('title'),
                'slug' => str_slug($vr->get('title'), '_'),
                'video' => $vr->get('video'),
                'description' => $vr->get('description'),
                'category_id' => $vr->get('video_category'),
                'author' => Auth::user()->id
            ]);
             $tags = explode(',', $vr->tags);
        foreach($tags as $tag){
            $vt->create([
                'post_id' => $post->id,
                'tag' => $tag
            ]);
        }

        return redirect()->route('videos.show', [$post->slug, $post->id]);
    }

}
