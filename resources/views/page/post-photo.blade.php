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
                            <h4>Foto title</h4><a href="#"><b>By Brian cartelly</b></a></div>
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
                    <img src="http://lorempixel.com/400/200/city/2/" class="image" alt="image post">
                </div>
                <div class="post-description">
                    
                    <p>Put here your foto description</p>
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
                        <span class="input-group-addon">
                            <a href="#"><i class="fa fa-edit"></i></a>  
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
     <div class="col-md-4">
<div class="panel panel-white post panel-shadow">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                     <h4>Recent Posts</h4>
                     <ol>
                <li>
                    Lorem ipsum dolor sit amet
                </li>
                <li>
                    Consectetur adipiscing elit
                </li>
                <li>
                    Integer molestie lorem at massa
                </li>
                <li>
                    Facilisis in pretium nisl aliquet
                </li>
                <li>
                    Nulla volutpat aliquam velit
                </li>
                <li>
                    Faucibus porta lacus fringilla vel
                </li>
                <li>
                    Aenean sit amet erat nunc
                </li>
                <li>
                    Eget porttitor lorem
                </li>
            </ol>


                    
                </div>

            </div>

   </div>
</div>
@endsection