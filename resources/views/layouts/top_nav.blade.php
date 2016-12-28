

<nav class="navbar navbar-default">
 <div class="container-fluid">    
  

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 <ul class="list-inline">
    <li><img src="//placehold.it/150x50"></li>
    <li><p>My text</p></li>
  </ul>

      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Funny</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">IT</a></li>
        <li><a href="#">Link</a></li>
        
      </ul>
      <form class="navbar-form navbar-left">
        <i class="fa fa-search"></i> SEARCH
        <i class="fa fa-share-alt"></i> FOLLOW US
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>