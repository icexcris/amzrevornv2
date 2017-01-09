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
        <li><a href="{{ url('/news') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
        <li class="{{ (isset($page) && $page == 'photos' ? 'active' : '') }}"><a href="{{ route('post.photos') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Photos</a></li>
        <li><a href="{{ url('/video') }}"><i class="fa fa-play" aria-hidden="true"></i> Video</a></li>

        <li class="dropdown social-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i> FOLLOW US</a>
          <ul class="dropdown-menu">
            <li class="top-fb"><a href="https://www.facebook.com/viatabunerele"><i class="fa fa-facebook"></i></a></li>
            <li class="top-tw"><a href="https://twitter.com/amuzament_net"><i class="fa fa-twitter"></i></a></li>
            <li class="top-gp"><a href="https://plus.google.com/b/104022084792298942505/+Amuzamentnet"><i class="fa fa-google-plus"></i></a></li>
            <li class="top-yt"><a href="http://www.youtube.com/c/Amuzamentnet"><i class="fa fa-youtube"></i></a></li>
            <li class="top-pt"><a href="https://pinterest.com/amuzamentnet"><i class="fa fa-pinterest"></i></a></li>
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
         <li><a class="btnice-up-nav" href="{{ route('page.upload') }}"><i class="fa fa-plus" aria-hidden="true"></i> Upload</a></li>
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
                                            <a href="{{ route('user.profile') }}" class="btn btn-site btn-block btn-sm">Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider navbar-login-session-bg"></li>
                
                  <li>
                  <a href="{{ route('user.editprofile') }}">Account Settings 
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

                <li>
                        <a href="{{ url('/register') }}" ><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                        
                </li>
                <li>
                        <a href="{{ url('/login') }}" ><i class="fa fa-key" aria-hidden="true"></i> Log In</a> 
                </li>
          
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>