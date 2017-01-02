@extends('layouts.master')
@section('content') 
<div class="row">
      <div class="col-md-8 col-md-offset-2">
            

<div class="panel panel-white post panel-shadow">
<div class="container-fluid">
   
       


    <div class="card hovercard">
        <div class="card-background">
        </div>
        <div class="useravatar">
            <img alt="" src="{{ Auth::user()->avatar }}">
        </div>
        <div class="card-info"> <span class="card-title">{{ Auth::user()->name }}</span>

        </div>
    </div>
    

      
     <div>

  <!-- Nav tabs -->
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#postuser" aria-controls="postuser" role="tab" data-toggle="tab">Post</a></li>
    <li role="presentation"><a href="#coments" aria-controls="coments" role="tab" data-toggle="tab">Coments</a></li>
    <li role="presentation"><a href="#vote" aria-controls="vote" role="tab" data-toggle="tab">vote</a></li>
    
  </ul>

  <!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">...</div>
  <div role="tabpanel" class="tab-pane fade" id="coments">...</div>
  <div role="tabpanel" class="tab-pane fade" id="vote">...</div>
  
</div>

</div>
    </div>
    
    
            </div>
            </div>
            </div>

@endsection