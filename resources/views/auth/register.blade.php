@extends('layouts.master')

@section('content')
    <div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="col-md-12  z-depth-2"> 
<div class="col-md-12"> 

  
             <h3 class="text-center"> <a href="{{ url('/login') }}">Login</a> or Sign up</h3>
                 &nbsp;
        </div>
            <div class="row">
                
                <div class="col-md-12">
                   <div class="row">

                        <div class="col-md-4">
                             
                            <a href="{{ url('/auth/twitter') }}" type="button" class="btn btn-md btn-info btn-block">
                                Twitter</a>
                            
                        </div>
                        <div class="col-md-4">
                             
                             <a  href="{{ url('/auth/google') }}" type="button" class="btn btn-md btn-danger btn-block"> Google+</a>
                               
                            
                        </div>
                        <div class="col-md-4">
                             
                             <a href="{{ url('/auth/facebook') }}"  type="button" class="btn btn-md btn-primary btn-block">
                                Facebook</a>
                           
                        </div>
                </div>
                
            </div>


            <div class="row">
                <div class="col-md-12">
                     &nbsp;
                    <h4 class="text-center">
                     
                       - OR -
                       
                    </h4>
                     &nbsp;
                </div>
            </div>


            <div class="row">
            <div class="col-md-12">
               
                
                

                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8 col-md-offset-2">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input placeholder="Nume" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                           <div class="col-md-8 col-md-offset-2">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8 col-md-offset-2">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                           

                           <div class="col-md-8 col-md-offset-2">
                            <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input placeholder="Retype password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-8">
                                <button type="submit" class="btn btn-site">
                                    Register
                                </button>
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

