@extends('layouts.app')

@section('content')

  <!DOCTYPE html>
  <html lang="en">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Admin </title>

      <!-- Bootstrap Core CSS -->
      <link href="{{asset('/admin/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- MetisMenu CSS -->
      <link href="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="{{asset('/admin/')}}/dist/css/sb-admin-2.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="{{asset('/admin/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>

      <div class="container">
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <div class="login-panel panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title">Reset Password</h3>
                      </div>
                      <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                      {!! Form::open(['url' => '/password/email','method'=>'POST']) !!}
                              <fieldset>
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  {{Form::email('email','',['class'=>'form-control','placeholder'=>'Reset E-mail','autofocus'])}}
                                      {{-- <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> --}}
                                       @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>


                                  <!-- Change this to a button or input when using this as a form -->
                                   <div class="form-group">
                                      <input class="btn  btn-success btn-block"  name="login" type="submit" value="Send Password Reset Link">
                                  </div>
                              </fieldset>
                          {!! Form::close() !!}
                      </div>
                  </div>
                  <h5 class="text-center"><a href="{{route('login')}}"  style="color:#666">Back to login</a></h5>
              </div>
          </div>
      </div>

      <!-- jQuery -->
      <script src="{{asset('/admin/')}}/vendor/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="{{asset('/admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="{{asset('/admin/')}}/dist/js/sb-admin-2.js"></script>

  </body>

  </html>

{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
