<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title', 'Login') </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <br><br><br>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left"><br>
                        			<h3><strong>MAIIP Administración</strong></h3>
                            		<p>Ingresa tu usuario y contraseña:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom"><br>
			                    <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
                                 {{ csrf_field() }}

			                    	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                    		<label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

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
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

			                        <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
			                    </form>
                                <p id="respuesta"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/usuario/login.js') }}"></script>

    </body>

</html>