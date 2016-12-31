<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container-fluid">    
  

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
&nbsp;
    <a href="/"> <i class="fa fa-buysellads" style="font-size:48px;color:#FFFFFF"></i></a>
      &nbsp;

      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('/news') }}">News</a></li>
        <li><a href="{{ url('/photo') }}">Photos</a></li>
        <li><a href="{{ url('/video') }}">Video</a></li>

        <li class="dropdown social-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i> FOLLOW US</a>
          <ul class="dropdown-menu">
            <li class="top-fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="top-tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="top-gp"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="top-yt"><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </li>

        <li class="dropdown search-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i> SEARCH</a>
          <ul class="dropdown-menu">
          <li>
            <form action="">
              <input type="text" class="form-control" placeholder="Search">
              <button type="submit" class="btn btn-site">Submit</button>
            </form>
          </li>
            
          </ul>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
<button type="button" class="btn btn-danger navbar-btn">Upload</button>

        <li class="dropdown">
                   
                  
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-user"></span> <strong> {{ Auth::user()->name }}</strong></a>
                  <ul class="dropdown-menu">
                  <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>{{ Auth::user()->name }}</strong></p>
                                        <p class="text-left small">{{ Auth::user()->email }}</p>
                                        <p class="text-left">
                                            <a href="{{ url('/profile') }}" class="btn btn-site btn-block btn-sm">Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider navbar-login-session-bg"></li>
                
                  <li>
                  <a href="{{ url('/editprofile') }}">Account Settings 
                  <span class="fa fa-cog pull-right">
                  </span>
                  </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                  <a href="{{ url('/logout') }}">Sign Out 
                  <span class="fa fa-sign-out pull-right">
                  </span>
                  </a>
                  </li>
                  </ul>
                </li>        @else

                <li class="dropdown">
                        <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Register</b></h3></div>
                <form id="ajax-register-form" action="{{ url('/register') }}" method="post" role="form" autocomplete="off">
                {{ csrf_field() }}
                    <div class="form-group">
                    <button type="button" class="btn btn-md btn-info btn-block">
                                Twitter
                            </button>
                  </div>
                  <div class="form-group">
                  <button type="button" class="btn btn-md btn-danger btn-block">
                                Google+
                            </button>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-md btn-primary btn-block">
                                Facebook
                            </button>
                  </div>
                  <div class="form-group">
                     <h5 class="text-center">
                     
                       - OR -
                       
                    </h5>

                  </div>
                  <div class="form-group">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            
                                <input placeholder="Nume" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                  </div>
                  <div class="form-group">
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                        
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                  </div>
                  <div class="form-group">
                
                           

                           
                                <input placeholder="Retype password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6 col-xs-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-site" value="Register Now">
                      </div>
                    </div>
                  </div>
                                   
                </form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/login') }}" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                         
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>

                                <form id="ajax-login-form" action="{{ url('/login') }}" method="post" role="form" autocomplete="off">
                                
                                
                                <div class="form-group">
                    <button type="button" class="btn btn-md btn-info btn-block">
                                Twitter
                            </button>
                  </div>
                  <div class="form-group">
                  <button type="button" class="btn btn-md btn-danger btn-block">
                                Google+
                            </button>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-md btn-primary btn-block">
                                Facebook
                            </button>
                  </div>
                  <div class="form-group">
                     <h5 class="text-center">
                     
                       - OR -
                       
                    </h5>

                  </div>
                  <div class="form-group">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                       
{{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                   

                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


                                    <div class="form-group">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                                               </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-site" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                <a class="form-control btn btn-danger" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                                                </form>
                            </div>
                        </ul>
                    </li>
          
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>