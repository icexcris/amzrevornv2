@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
             <h3 class="text-center">Login or <a href="{{ url('/register') }}">Sign up</a></h3>
             &nbsp;
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="row">

                        <div class="col-md-4">
                             
                            <button type="button" class="btn btn-md btn-info btn-block">
                                Twitter
                            </button>
                        </div>
                        <div class="col-md-4">
                             
                            <button type="button" class="btn btn-md btn-danger btn-block">
                                Google+
                            </button>
                        </div>
                        <div class="col-md-4">
                             
                            <button type="button" class="btn btn-md btn-primary btn-block">
                                Facebook
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                &nbsp;
                    <h5 class="text-center">
                     
                       - OR  with Amzuzament -
                       
                    </h5>
                     &nbsp;
                </div>
            </div>
            <div class="row">
               
            <div class="col-md-12">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-4 col-md-offset-4">
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-4 col-md-offset-4">
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-site">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                
                
            </div>
           </div>
        </div>
    </div>
</div>
   

@endsection

