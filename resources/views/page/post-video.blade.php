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
                            <h4>Video title</h4><a href="#"><b>By Brian cartelly</b></a></div>
                            <h6 class="text-muted time">5 seconds ago</h6>
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
                    <img src="http://www.ujjwal.com/wp-content/uploads/2016/08/link-to-specific-time-youtube-video.jpg" class="image" alt="image post">
                </div>
                <div class="post-description">
                    
                    <p>Put here your video description</p>
                    <div class="stats">
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-arrow-up icon"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-arrow-down icon"></i></a>
                            <a href="#" class="btn btn-default">
                            <i class="fa fa-signal icon"></i>100d0</a>
                            <a href="#" class="btn btn-default">
                            <i class="fa fa-commenting-o icon"></i>1000</a>
                            
                       
                    </div>
<div class="stats">
                    <div class="addthis_inline_share_toolbox"></div>
                    </div>
                     
                </div>
                <div class="post-footer">
                    <div class="input-group"> 
                        <input class="form-control" placeholder="Add a comment" type="text">
                        <input type="file" id="fileupload" class="hide" name="compic">
                        <span class="input-group-addon">
                            <!-- <label for="" class="comm-picc-btn">
                                <input type="file" name='pic' class="comm-pic">
                                <i class="fa fa-edit"></i>
                            </label> -->
                            <a href="#" id="trigFI"><i class="fa fa-edit"></i></a>  
                        </span>
                    </div>
                    <ul class="comments-list">
                        <li class="comment">
                            <a class="pull-left" href="#">
                                <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Full name 1</h4>
                                    <h5 class="time">7 minutes ago</h5>
                                </div>
                                <p>This is a comment bla bla bla</p>
                            </div>
                        </li>
                        <li class="comment">
                            <a class="pull-left" href="#">
                                <img class="avatar" src="http://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Full name 2</h4>
                                    <h5 class="time">3 minutes ago</h5>
                                </div>
                                <p>This is another comment bla bla bla</p>
                            </div>
                        </li>
                        <li class="comment">
                            <a class="pull-left" href="#">
                                <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Full name 1</h4>
                                    <h5 class="time">10 seconds ago</h5>
                                </div>
                                <p>Wow! This is a comment</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </di>
     @include('layouts.sidebar-video')
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