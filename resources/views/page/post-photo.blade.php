@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        
        
        <div class="col-md-8">
            <div class="well1">
                
                
                
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{ $post->title }}</h1>
                    </div>
                    <div class="col-md-1">
                        @if(isset($prev) && $prev !== null)
                        <a href="{{ route('photos.show', [$prev->slug, $prev->id]) }}" class="btn btn-md btn-info"><i class="fa fa-arrow-left fa-2x"></i></a>
                        @endif
                    </div>
                    <div class="col-md-1">
                        @if(isset($next) && $next !== null)
                        <a href="{{ route('photos.show', [$next->slug, $next->id]) }}" class="btn btn-md btn-site"><i class="fa fa-arrow-right fa-2x"></i></a>
                        @endif
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
                        <a href="#" class="btn btn-default voteUp {{ (count($vote) && $vote->type == 1) ? 'active' : '' }}" data-id="{{ $post->id }}" data-type="1" data-url="{{ route('post.vote', [$post->id, 1]) }}">
                            <i class="fa fa-arrow-up icon"></i>
                        </a>
                        <a href="#" class="btn btn-default voteDown  {{ (count($vote) && $vote->type == 0) ? 'active' : '' }}" data-id="{{ $post->id }}" data-type="0" data-url="{{ route('post.vote', [$post->id, 0]) }}">
                        <i class="fa fa-arrow-down icon"></i></a>
                        @else
                        <a href="{{ url('login') }}" class="btn btn-default"><i class="fa fa-arrow-up icon"></i></a>
                        <a href="{{ url('login') }}" class="btn btn-default" data-id="{{ $post->id }}"><i class="fa fa-arrow-down icon"></i></a>
                        @endif
                        <a href="#" class="btn btn-default">
                        <i class="fa fa-signal icon"></i> {{ count($post->getVotes) }}</a>
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-commenting-o icon"></i> {{ count($post->getComments) }}
                        </a>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <spam class="addthis_inline_share_toolbox"></spam>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('/images/unnamed.png') }}" alt="Smiley face" class="img img-responsive">
                    </div>
                </div>
                <br>
                @if (session('status'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>                            
                        </div>
                    </div>
                @endif                
                <div class="row">
                    @if(Auth::check())
                    <div class="col-md-2">
                        <img src="{{ Auth::user()->avatar ? Auth::user()->avatar : 'asd' }}" class="post-avatar" alt="">
                    </div>
                    <div class="col-md-10">
                        <div class="comm-container">
                            <div class="form-group">
                                <form action="{{ route('post.store.comment', $post->id) }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <textarea class="form-control comm_text" name="comment" placeholder="Add a comment" cols="70" rows="1"></textarea>
                                    <input type="hidden" name="type" value="photo">
                                    <div class="comm_btns hide">
                                        <span class="pull-right">
                                            <!-- <input type="file" name="commpic" class="commfile"> -->
                                            <input type="submit" class="btn btn-primary btn-xs" value="Post">
                                        </span>
                                    </div>        
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Please log in to comment.
                            <span class="pull-right">
                                <a href="{{ url('/login') }}">Login</a> or <a href="{{ url('/register') }}">Register</a>
                            </span>
                        </div>
                    </div>
                    @endif
                </div>
                
                
                @if(count($post->getComments) == 0)
                <em>Be the first one to comment!</em>
                @else
                <h3 class="text-success">Comments</h3>
                    @foreach($post->getComments as $comment)
                    <div class="row">
                        <div class="col-md-2">
                            <div class="thumbnail">
                                <img  src="{{ $comment->createdBy->provider ? $comment->createdBy->avatar : 'asd' }}"  alt="avatar">
                            </div>
                        </div><!-- /thumbnail -->
                        <!-- /col-sm-1 -->
                        <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>{{ $comment->createdBy->name }}</strong> <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="panel-body">
                                    <p> {{ $comment->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    @endif
                    
                </div>
            </div>
            
            
            
            @include('layouts.sidebar-photo')
            
        </div>
    </div>
    @endsection