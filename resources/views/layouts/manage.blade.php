<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Advanced Blog</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
     {{-- <link href="{{asset('/admin/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

   <!-- MetisMenu CSS -->
   <link href="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

   <!-- Custom CSS -->
   <link href="{{asset('/admin/')}}/dist/css/sb-admin-2.css" rel="stylesheet">

   <!-- Morris Charts CSS -->
   <link href="{{asset('/admin/')}}/vendor/morrisjs/morris.css" rel="stylesheet">

   <!-- Custom Fonts -->
   <link href="{{asset('/admin/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="{{ asset('css/my_custom.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">
          <h4>Blog_Logo</h4>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Learn <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Discuss</a></li>
          <li><a href="#">Share</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guest())
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Sign Up</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Setting</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                         </form>
                </li>
              </ul>
            </li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div id="wrapper">
    @include('partial.sidebar')
    <div id="page-wrapper">

        @yield('content')
    </div>
  </div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{asset('/admin/')}}/vendor/jquery/jquery.min.js"></script> --}}

      <!-- Bootstrap Core JavaScript -->
      {{-- <script src="{{asset('/admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script> --}}

      <!-- Metis Menu Plugin JavaScript -->
      <script src="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>

      <!-- Morris Charts JavaScript -->
      <script src="{{asset('/admin/')}}/vendor/raphael/raphael.min.js"></script>
      <script src="{{asset('/admin/')}}/vendor/morrisjs/morris.min.js"></script>
      <script src="{{asset('/admin/')}}/data/morris-data.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="{{asset('/admin/')}}/dist/js/sb-admin-2.js"></script>
</body>
</html>
