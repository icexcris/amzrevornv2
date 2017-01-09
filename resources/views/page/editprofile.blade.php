@extends('layouts.master')
@section('content') 
<div class="row">
<div class="col-md-8 col-md-offset-2">
            

<div class="panel panel-white post panel-shadow">
<div class="container-fluid">
    <h1 class="text-center">Account Setings</h1>
  	<hr>
	<div class="row">
      
          <!-- Nav tabs -->
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#account" aria-controls="account" role="tab" data-toggle="tab">Acoount</a></li>
    <li role="presentation"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Password</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    
  </ul>
  <hr>

  <!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="account">
 
<form class="form-horizontal" role="form">
        <div class="form-group">         
            <div class="col-md-8 col-md-offset-2">
              <input class="form-control" type="text" placeholder="Username">
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
              <input class="form-control" type="text" placeholder="Email">
            </div>
          </div>
          
           <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-6">
              <input type="button" class="btn btn-site" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
          
          </form>
          </div>



  <div role="tabpanel" class="tab-pane fade" id="password">
  <form class="form-horizontal" role="form">
  <div class="form-group">
           
            <div class="col-md-8 col-md-offset-2">
              <input class="form-control" type="password" placeholder="Old Password">
            </div>
          </div>
          <div class="form-group">
           
            <div class="col-md-8 col-md-offset-2">
              <input class="form-control" type="password" placeholder="New Password">
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-8 col-md-offset-2">
              <input class="form-control" type="password" placeholder="Re-type New Password">
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
  <div role="tabpanel" class="tab-pane fade" id="profile">
  
  <form class="form-horizontal" role="form">
  
  <div class="form-group">
  <div class="col-md-8 col-md-offset-2">

      
      
  <div class="useravatar" class="text-center">
            <img id="avatar" alt=""  width="100" height="100"  src="{{ Auth::user()->avatar }}">
            <input class="hide" id="avatarchose" type="file">
            </div>
     
</div>
</div>
         <div class="form-group">
          <div class="col-md-8 col-md-offset-2">
                    
                
           <input type="date" id="birthDate" class="form-control">
           </div>
           </div>

           <div class="form-group">
<div class="col-md-8 col-md-offset-2">
         
          <select name="country" id="country-input" class="form-control" placeholder="Country">
            
              <option selected >Country</option>
             
              <option></option>
             
          </select>
           
        </div>
 </div>

 <div class="form-group">
 <div class="col-md-8 col-md-offset-2">
         
          <textarea name="description" class="form-control" id="yourDescriptionInput" placeholder="Tell people who you are"></textarea>
        </div>
        </div>
          <div class="form-group">
            
            <div class="col-md-8 col-md-offset-2">
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
        </div>
      
       </div>
     
      </div>
  
</div>



@endsection