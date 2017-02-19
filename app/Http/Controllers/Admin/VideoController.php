<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Requests\VideoRequest;
use App\Http\Controllers\Controller;

use App\Models\Video;

class VideoController extends Controller
{
    public function index(Video $v)
    {
    	$videos = $v->orderBy('created_at', 'DESC')->paginate(15);
    	return view('admin.posts.video.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.posts.video.create');
    }

    public function store(VideoRequest $vr, Video $v)
    {
        $v->create([
            'title' => $vr->title,
            'slug' => str_slug($vr->title, '-'),
            'video' => $vr->video,
            'description' => $vr->description,
            'author' => Auth::user()->id,
            'lang' => $vr->lang
        ]);    

        return redirect()->route('posts.video.index');
    }

    public function update(Video $v, $id)
    {
    	$video = $v->whereId($id)->first();
    	return view('admin.posts.video.update', compact('video'));
    }

    public function storeUpdate(VideoRequest $vr, Video $v, $id)
    {
    	$v->whereId($id)->update([
    		'title' => $vr->title,
    		'slug' => str_slug($vr->title, '-'),
    		'video' => $vr->video,
    		'description' => $vr->description,
    		'author' => Auth::user()->id,
            'lang' => $vr->lang
    	]);

        return redirect()->back()->with('status', 'Video edited!');
    }

    public function destroy(Video $v, $id)
    {
        $v->where('id', '=', $id)->delete();
        return redirect()->back();
    }
}
