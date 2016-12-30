 @extends('layouts.master')
@section('content') 

<div class="panel panel-white post panel-shadow">
<div class="container-fluid">
      <div class="col-md-6 col-md-offset-3">
 
          <form class="form-horizontal" action="" method="post">
          <fieldset>
             <h3 class="text-center">Contact us</h3>
        &nbsp;
    
            <!-- Name input-->
            <div class="form-group">
              
              <div class="col-md-12">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              
              <div class="col-md-12">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-site btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        
      </div>
    </div>
</div>

@endsection