@extends('layouts.master')
@section('content') 
<div class="col-md-8 col-md-offset-2">
 <div class="container-fluid">
 <div class="panel panel-white post panel-shadow">
          
          
             <h1 class="text-center">Upload</h1>
  <hr>
        <!-- Nav tabs -->
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Photos</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
   
  </ul>

  <!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="form-group">
              
              <input  placeholder="Title" type="text" name="title" id="title" class="form-control" required="required">
            </div>
   <div class="form-group">
          


                          </div>
   <div class="form-group">
              
              <input  placeholder="Categories" type="text" name="title" id="title" class="form-control" required="required">
            </div>
   <div class="form-group">
              
              <input  placeholder="Tag" type="text" name="title" id="title" class="form-control" required="required">
            </div>

           <div class="form-group">
              
              <textarea placeholder="Description" name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
            </div>
  </div>
  </div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
  
</div>
        
       

</div>

</div>
</div>
</div>
@endsection