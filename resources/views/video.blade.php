@extends('layouts.master')
@section('content') 

<div class="container bootstrap snippet">
    <di class="col-md-8">
        <div class="col-sm-12">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                 <a href="{{ url('/showvideo') }}" >
                     <h4>Video title</h4>
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


      
        @include('layouts.sidebar')
      
</div>
@endsection