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
                            <a href="#" class="btn btn-default">
                            <i class="fa fa-signal icon"></i>100d0</a>
                            <a href="#" class="btn btn-default">
                            <i class="fa fa-commenting-o icon"></i>1000</a>
                            
                       
                    </div>
                    <div class="stats">
                    <div class="addthis_inline_share_toolbox"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </di>


      @include('layouts.sidebar-photo')





</div>
@endsection