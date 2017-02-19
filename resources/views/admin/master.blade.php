<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<title>Admin</title>
	  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('admin/css/AdminLTE.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/css/skins/_all-skins.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
	</head>
	<body class="hold-transition skin-purple sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				    <a href="../index2.html" class="logo"><span class="logo-mini"><b>A</b>MZ</span><span class="logo-lg"><b>Amuzam</b>ENT</span></a>
				    <nav class="navbar navbar-static-top">
      					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
      					</a>				    	
      					<div class="navbar-custom-menu">
        					<ul class="nav navbar-nav">
					        	<li class="dropdown messages-menu"><a href="#"><i class="fa fa-envelope-o"></i><!-- <span class="label label-success">4</span> --></a></li>
          						<li class="dropdown notifications-menu"><a href="#"><i class="fa fa-bell-o"></i><!-- <span class="label label-warning">10</span> --></a></li>
          						<li class="dropdown tasks-menu"><a href="#"><i class="fa fa-flag-o"></i><!-- <span class="label label-danger">9</span> --></a></li>				
                      <li class="dropdown tasks-menu"><a href="{{ url('home') }}">Back to site</a></li>       
          						<li class="dropdown tasks-menu"><a href="{{ url('logout') }}">Logout</a></li>				
        					</ul>
        				</div>
				    </nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar">
      				<ul class="sidebar-menu">
        				<li class="header">MAIN NAVIGATION</li>
        				<li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        				<li class="{{ (isset($page) && $page == 'categories') ? 'active' : '' }}"><a href="{{ route('categories.index') }}"><i class="fa fa-wrench"></i> <span>Categories</span></a></li>
        				<li class="treeview">
          					<a href="#"><i class="fa fa-cubes"></i> <span>Articles</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          					<ul class="treeview-menu">
            					<li><a href="{{ route('posts.blog.index') }}"><i class="fa fa-circle-o"></i> Blog post</a></li>
            					<li><a href="../index2.html"><i class="fa fa-circle-o"></i> Photo</a></li>
            					<li><a href="{{ route('posts.video.index') }}"><i class="fa fa-circle-o"></i> Video</a></li>
          					</ul>
        				</li>
        				<li class="{{ (isset($page) && $page == 'users') ? 'active' : '' }}"><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
                <li><a href=""><i class="fa fa-file"></i><span>Pages</span></a></li>
                <li><a href=""><i class="fa fa-comments"></i><span>Comments</span></a></li>
        			</ul>
				</section>
			</aside>
			<div class="content-wrapper">
				@yield('content')
			</div>
		</div>
		<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('admin/js/app.min.js') }}"></script>
		<script src="{{ asset('admin/js/demo.js') }}"></script>
		<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
		@yield('scripts')
	</body>
</html>