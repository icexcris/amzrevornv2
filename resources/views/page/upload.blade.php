@extends('layouts.master')
@section('content') 
<div class="col-md-8 col-md-offset-2">
 <div class="container-fluid">
 <div class="panel panel-white post panel-shadow">
          
          
             <h1 class="text-center">Upload</h1>
  <hr>
        <!-- Nav tabs -->
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#photo" aria-controls="photo" role="tab" data-toggle="tab">Photos</a></li>
    <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Video</a></li>
   
  </ul>

  <!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="photo">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
 <div class="form-group">
            
            </div>
   
  <div class="form-group">
              
              <input  placeholder="Title" type="text" name="title" id="title" class="form-control" required="required">
            </div>
   <div class="form-group">
   <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-site image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-site image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Choose File</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
                
            </div>
          
                          </div>
   <div class="form-group">
              
              <input  placeholder="Categories" type="text" name="title" id="title" class="form-control" required="required">
            </div>
   <div class="form-group">
              
              <input  placeholder="Tag" type="text" name="title" id="title" class="form-control" required="required">

            </div>


             <div class="form-group">
              <textarea  placeholder="Description" name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
  </div>
    <div class="form-group">
               <div class="col-md-offset-11">
               <div  type="button" class="btn btn-site  btn-md">Upload
              
  </div>            
</div>
            
  </div>
  </div>
  </div>
    </div>
  <div role="tabpanel" class="tab-pane fade" id="video">
      <div class="row">
  <div class="col-md-10 col-md-offset-1">
   <div class="form-group">
            
            </div>
  <div class="form-group">
              
              <input  placeholder="Title" type="text" name="title" id="title" class="form-control" required="required">
            </div>
    <div class="form-group">
              
              <input  placeholder="Url" type="text" name="Url" id="Url" class="form-control" required="required">
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
              <textarea  placeholder="Description" name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
</div>

               <div class="form-group">
               <div class="col-md-offset-11">
               <div  type="button" class="btn btn-site  btn-md">Upload
              
  </div>            
</div>
            
  </div>
  </div>
  </div>
  </div>
  
</div>
        
       

</div>



</div>
</div>
</div>
@endsection