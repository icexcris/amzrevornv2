@extends('layouts.master')
@section('title', 'Videos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 ">
            <div class="well1">
                
                
                @if(count($videos))
                @foreach($videos as $video)
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('videos.show', [$video->slug, $video->id]) }}" ><h1>{{ $video->title }}</h1></a>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><i class="fa fa-user"></i> by  {{ $video->createdBy->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="fa fa-calendar"></i> Posted {{ $video->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video->video, $match)) {
                        $video_id = $match[1];
                        }
                        ?>
                        <div class='embed-container'><iframe src='http://www.youtube.com/embed/{{ $video_id }}' frameborder='0' allowfullscreen></iframe></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if($video->description)
                        <p>{!! $video->description !!}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="label label-site">Category:</span> {!! $video->getCategory[0]->name !== null ? "<a href='".route('post.videos', $video->getCategory[0]->slug)."'><span class='label label-default'>".$video->getCategory[0]->name."</span></a>" : '' !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="label label-site">Tag:</span>
                        @foreach($video->getTags as $tag)
                        <span class="label label-default">{{ $tag->tag }}</span>
                        @endforeach
                    </div>
                    
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <spam class="addthis_inline_share_toolbox"></spam>
                    </div>
                </div>
                <br>
                <?php unset($video_id); ?>
                @endforeach
                @else
                <em>There are no posts</em>
                @endif
            </div>
            
        </div>
        @include('layouts.sidebar-video')
        <div class="col-md-12" >
            <button type="button" class="btn btn-site btn-block">I want more posts</button>
        </div>
    </div>
</div>
@endsection