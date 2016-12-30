<!DOCTYPE html>
<html lang="en">
  <head>
  @include('cookieConsent::index')
  <link rel="shortcut icon" type="image/png" href="{{asset('images/fav.ico')}}"/>
  <link href=" {{asset('css\font-awesome.css')}}" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Amuzament')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @include('layouts.top_nav')

    <div class="container">
      @yield('content')
    </div>

    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/up.js') }}"></script> 
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53148d1e2c87a649"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
  </body>
</html>
