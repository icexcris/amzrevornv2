@extends('layouts.master')
@section('content') 

<div class="container bootstrap snippet">
    <di class="col-md-8">
        <div class="col-sm-12">

        @if(count($posts))
            @foreach($posts as $post)
                <div class="panel panel-white post panel-shadow">
                    <div class="post-heading">
                        <a href="{{ route('post.show', [$post->slug, $post->id]) }}" ><h4>{{ $post->title }}</h4></a>
                        <div class="pull-left meta">
                            <h6 class="text-muted time">{{ $post->created_at->diffForHumans() }}</h6>
                        </div>
                    </div>
                    <div class="post-image">
                        <img src="{{ asset('uploads/pictures/'.$post->picture) }}" class="image" alt="image post">
                    </div>
                    <div class="post-description">
                        
                        <div class="stats">
                            <a href="#" class="btn btn-default">
                                <i class="fa fa-arrow-up icon"></i>
                            </a>
                            <a href="#" class="btn btn-default">
                                <i class="fa fa-arrow-down icon"></i></a>
                                  <a href="#" class="btn btn-default">
                            <i class="fa fa-signal icon"></i> {{ count($post->getVotes) }}</a>
                                 <a href="#" class="btn btn-default">
                                <i class="fa fa-commenting-o icon"></i> {{ count($post->getComments) }}
                            </a>
                                
                           
                        </div>
                        <div class="stats">
                        <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                    
                </div>                    
            @endforeach
        @else
            <em>There are no posts</em>
        @endif
        </div>
    </di>


      @include('layouts.sidebar-photo')




<button type="button" class="btn btn-site btn-block">I want more posts</button> 
</div>
@endsection