@extends('layouts.master')
@section('content') 

<div class="container bootstrap snippet">
    <di class="col-md-8">
        <div class="col-sm-12">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                 <a href="{{ url('/showphoto') }}" >
                 
                     <h4>Foto title</h4> 
                     </a>
                    <div class="pull-left meta">
                        <h6 class="text-muted time">5 seconds ago</h6>
                    </div>
                </div>
                <div class="post-image">
                    <img src="http://lorempixel.com/400/200/city/2/" class="image" alt="image post">
                </div>
                <div class="post-description">
                    
                    <div class="stats">
                       <a href="#" class="btn btn-default">
                            <i class="fa fa-arrow-up icon"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-arrow-down icon"></i></a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-commenting-o  icon"></i>128
                        </a>

                    </div>
                     <a href="#"><b>1000 point</b></a> <a href="#"><b>1000 coments</b></a>
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