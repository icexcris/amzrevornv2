@extends('layouts.master')
@section('title', 'News')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="well1">
        @if(count($posts))
        @foreach($posts as $post)
        <div class="row">
          <div class="col-md-12">
            
            
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" height="150" width="150" src="{{ asset('uploads/pictures/'.$post->picture) }}">
              </a>
              <div class="media-body">
                <a href="{{ route('post.show', [$post->slug, $post->id]) }}" ><h4>{{ $post->title }}</h4></a>
                <p class="text-right">By {{ $post->createdBy->name }}</p>
                <p>{!! $post->description !!}</p>
                <ul class="list-inline list-unstyled">
                  <li><span><i class="fa fa-calendar"></i> {{ $post->created_at->diffForHumans() }}</span></li>
                  <li>|</li>
                  <span><i class="fa fa-commenting-o icon"></i> {{ count($post->getComments) }}</span>
                  <li>|</li>
                <li><span class="label label-site">Category:</span> <a href="{{ route('post.news', $post->singleNewsCategory->slug) }}"><span class="label label-default">{{ $post->singleNewsCategory->name }}</span></a></li>
                
                <li>|</li>
                  <li><span ><i class="fa fa-tags"></i>Tag:</span>
                  @foreach($post->getTags as $tag)
                  <span class="label label-site">{{ $tag->tag }}</span>
                @endforeach</li>
              </ul>
              
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <br>
            <div class="addthis_inline_share_toolbox"></div>
            <br>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <em>There are no posts</em>
      @endif
    </div>
  </div>
  @include('layouts.sidebar-news')
</div>
</div>
@endsection