@extends('layouts.master')
@section('content') 
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
         <div class="card hovercard">
       
        <div class="useravatar">
        <img alt="" src="{{ Auth::user()->avatar }}">
       </div>
       </div>



          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
  
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
         
         
         
         
          <div class="form-group">
            
            <div class="col-md-6">
              <input class="form-control" type="text" placeholder="Username">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-6">
              <input class="form-control" type="text" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
           
            <div class="col-md-6">
              <input class="form-control" type="password" placeholder="Old Password">
            </div>
          </div>
          <div class="form-group">
           
            <div class="col-md-6">
              <input class="form-control" type="password" placeholder="New Password">
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-6">
              <input class="form-control" type="password" placeholder="Re-type New Password">
            </div>
          </div>
          <div class="form-group">
          <div class="col-md-6">
                    
                
           <input type="date" id="birthDate" class="form-control">
           </div>
           </div>
          <div class="form-group">
            
            <div class="col-md-6">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="male" /> Male
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="female" /> Female
                </label>
               
            </div>
          </div>
          </div>
          
           


          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-site" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>


@endsection