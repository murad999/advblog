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
