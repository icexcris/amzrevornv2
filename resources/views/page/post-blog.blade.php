@extends('layouts.master')
@section('content') 

<div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <di class="col-md-8">
        	<div class="col-sm-12">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image"></div>
                    <div class="pull-left meta">
                        <div class="title h5">
                        <h4>Titul articolului</h4>   
                            <a href="#"><b>By Brian cartelly</b></a>
                            
                        </div>
                        <h6 class="text-muted time">5 seconds ago</h6>
                    </div>
                </div>
                <div class="post-image">
                    <img src="http://lorempixel.com/400/200/city/2/" class="image" alt="image post">
                </div>
                <div class="post-description">
                    
                    <p>Post descripsion dnsmasd,massdsddmsamasasmdmsa.dmamdsamdmasmdmasmmasmdasmmsamsmaasmmassammam</p>
                    <div class="stats">
                       
                        <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                        <div class="addthis_inline_share_toolbox"></div>
                 </div>
                </div>
                <div class="post-footer">
                    <div class="input-group"> 
                        <input class="form-control" placeholder="Add a comment" type="text">
                        <span class="input-group-addon">
                            <a href="#"><i class="fa fa-edit"></i></a></span>
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

@include('layouts.sidebar-news')






        </div>
         </div>
        <!-- /.row -->

        <hr>

@endsection