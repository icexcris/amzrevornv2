@extends('layouts.master')
@section('content') 
<div class="row">
      <div class="col-md-12">
            

<div class="panel panel-white post panel-shadow">
<div class="container-fluid">
    <h1 class="text-center">Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
      <div class="row">
<center>
      <h3>Avatar</h3>
      
       <div class="useravatar" class="text-center">
            <img id="avatar" alt=""  width="100" height="100" class="img-circle" src="{{ Auth::user()->avatar }}">
            <input class="hide" id="avatarchose" type="file">
            </div>
        </center>
      </div>
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
                    <input type="radio" name="gender" value="male" /><i class="fa fa-male"></i>
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="female" /><i class="fa fa-female"></i>
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
</div>
</div>
</div>


@endsection