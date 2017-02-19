@extends('layouts.master')
@section('title', 'Photos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 ">
            <div class="well1">
                
                
                @if(count($posts))
                @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('photos.show', [$post->slug, $post->id]) }}" ><h1>{{ $post->title }}</h1></a>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fa fa-user"></i> by  {{ $post->createdBy->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fa fa-calendar"></i> Posted {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('uploads/pictures/'.$post->picture) }}" class="image" alt="image post">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @if($post->description)
                            <p>{!! $post->description !!}</p>
                            @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <span class="label label-site">Category:</span> <a href="{{ route('post.photos', $post->singlePhotoCategory->slug) }}"><span class="label label-default">{{ $post->singlePhotoCategory->name }}</span></a>
<!--                             <span class="label label-site">Category:</span> 
                            @if(isset($post->getCategory[0]->name))
                            <span class="label label-default">{!! $post->getCategory[0]->name !== null ? "<a href='".route('post.photos', $post->getCategory[0]->slug)."'>".$post->getCategory[0]->name."</a>" : '' !!}</span>
                            @endif -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="label label-site">Tag:</span>
                            @foreach($post->getTags as $tag)
                            <span class="label label-default">{{ $tag->tag }}</span>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            @if(Auth::check())
                            <?php 
                                /*array_map(function($id){
                                    if($id['user_id'] == Auth::user()->id && $id['type'] == 1){
                                        echo 'active';
                                    }else if($id['user_id'] == Auth::user()->id && $id['type'] == 0){
                                        echo 'down';
                                    }
                                }, $post->getVotes->toArray());*/

                                // var_dump($post->getVotes->toArray());
                             ?>
                                <a href="#" class="btn btn-default voteUp" data-url="{{ route('post.vote', [$post->id, 1]) }}" data-id="{{ $post->id }}" data-type="1" data-url="">
                                    <i class="fa fa-arrow-up icon"></i>
                                </a>
                                <a href="#" class="btn btn-default voteDown" data-url="{{ route('post.vote', [$post->id, 0]) }}" data-id="{{ $post->id }}" data-type="0" data-url="">
                                    <i class="fa fa-arrow-down icon"></i>
                                </a>
                            @else
                                <a href="{{ url('login') }}" class="btn btn-default" data-id="" data-type="1" data-url="">
                                    <i class="fa fa-arrow-up icon"></i>
                                </a>
                                <a href="{{ url('login') }}" class="btn btn-default" data-id="" data-type="0" data-url="">
                                    <i class="fa fa-arrow-down icon"></i>
                                </a>                            
                            @endif
                            <a href="#" class="btn btn-default">
                            <i class="fa fa-signal icon"></i> {{ count($post->getVotes) }}</a>
                            <a href="#" class="btn btn-default">
                                <i class="fa fa-commenting-o icon"></i> {{ count($post->getComments) }}
                            </a>
                            
                        </div>
                    </div>
                    <div class="row">
                    <br>
                        <div class="col-md-12">
                            
                            <spam class="addthis_inline_share_toolbox"></spam>
                           
                        </div>
                         <br>
                    </div>
                    <br>
                    
                    @endforeach
                    @else
                    <em>There are no posts</em>
                    @endif
                </div>
                
            </div>
            @include('layouts.sidebar-photo')
            <div class="col-md-12" >
                <button type="button" class="btn btn-site btn-block">I want more posts</button>
            </div>
        </div>
    </div>
    @endsection