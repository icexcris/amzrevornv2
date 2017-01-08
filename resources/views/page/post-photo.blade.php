@extends('layouts.master')
@section('content') 
<div class="container bootstrap snippet">
    <di class="col-md-8">
        <div class="row">
      
            <div class="panel panel-white post panel-shadow">
             <div class="col-md-9">
                    <div class="post-heading">
                        <div class="pull-left meta">
                            <div class="title h5">
                            <h4>{{ $post->title }}</h4>
                            <a href="#"> By <b>{{ $post->createdBy->name }}</b></a></div>
                            <h6 class="text-muted time">{{ $post->created_at->diffForHumans() }}</h6>
                        </div>
                    </div>                                 
                </div>

                <div class="col-md-1">
                    <div class="post-heading">
                        <button href="#" type="button" class="btn btn-md btn-info"><i class="fa fa-arrow-left fa-2x"></i></button>
                    </div>
                </div>
                <div class="col-md-1">
                <div class="post-heading">
                     <button href="#" type="button" class="btn btn-md btn-site"><i class="fa fa-arrow-right fa-2x"></i></button>  
                      </div>                    
                </div>  

                <div class="post-image">
                    <img src="{{ asset('uploads/pictures/'.$post->picture) }}" class="image" alt="image post">
                </div>
                <div class="post-description">
                    
                    @if($post->description)
                        <p>{!! $post->description !!}</p>
                        <hr>
                    @endif

                     <div>
                <span class="label label-site">Category:</span> <span class="label label-default">{{ $category->name }}</span>
                 </div>
                    <div>
                        <span class="label label-site">Tag:</span> 
                        @foreach($post->getTags as $tag)
                            <span class="label label-default">{{ $tag->tag }}</span> 
                        @endforeach
                  </div>
                    <hr>
                    <div class="stats">
                        <a href="#" class="btn btn-default voteUp {{ (count($vote) && $vote->type == 1) ? 'active' : '' }}" data-id="{{ $post->id }}" data-type="1" data-url="{{ route('post.vote', [$post->id, 1]) }}">
                            <i class="fa fa-arrow-up icon"></i>
                        </a>
                        <a href="#" class="btn btn-default voteDown  {{ (count($vote) && $vote->type == 0) ? 'active' : '' }}" data-id="{{ $post->id }}" data-type="0" data-url="{{ route('post.vote', [$post->id, 0]) }}">
                            <i class="fa fa-arrow-down icon"></i></a>
                            <a href="#" class="btn btn-default">
                            <i class="fa fa-signal icon"></i> {{ count($post->getVotes) }}</a>
                            <a href="#comments" class="btn btn-default">
                                <i class="fa fa-commenting-o icon"></i> {{ count($post->getComments) }}
                            </a>
                            
                       
                    </div>
                    <div class="stats">
                    <div class="addthis_inline_share_toolbox"></div>
                    </div>
                     
                </div>
                <div class="post-footer">
                <img src="{{ asset('/images/unnamed.png') }}" alt="Smiley face" class="img img-responsive">
                <hr>
                <form action="{{ route('page.upload.post') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group"> 
                        <input class="form-control" placeholder="Add a comment" type="text" name="comment">
                        <input type="file" id="fileupload" class="hide" name="compic">
                        <span class="input-group-addon">
                            <!-- <label for="" class="comm-picc-btn">
                                <input type="file" name='pic' class="comm-pic">
                                <i class="fa fa-edit"></i>
                            </label> -->
                            <a href="#" id="trigFI"><i class="fa fa-edit"></i></a>  

                        </span>
                    
                    </div>
                </form>
                    
                    @if(count($post->getComments) == 0)
                        <em>Be the first one to comment!</em>
                    @else
                        <ul class="comments-list" id="comments">
                            @foreach($post->getComments as $comment)
                                <li class="comment">
                                    <a class="pull-left" href="#">
                                        <img class="avatar" src="{{ $comment->createdBy->provider ? $comment->createdBy->avatar : 'asd' }}" alt="avatar">
                                    </a>
                                    <div class="comment-body">
                                        <div class="comment-heading">
                                            <h4 class="user">{{ $comment->createdBy->name }}</h4>
                                            <h5 class="time">{{ $comment->created_at->diffForHumans() }}</h5>
                                        </div>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </li>                            
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </di>
     @include('layouts.sidebar-photo')





</div>
@endsection
@section('scripts')
<script>
    $('#trigFI').on('click', function(e){
        e.preventDefault();
        $('#fileupload').trigger('click'); 
        return false;
    });
    
</script>
@endsection