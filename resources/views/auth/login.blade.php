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

								<form class="form-horizontal" method="POST" action="{{ route('login') }}" id="form" role="form" class="login-form">
									{{ csrf_field() }}

									<div class="form-group">
										<label class="sr-only" for="form-username">Usuario</label>
										<input id="username" name="email" type="text" placeholder="Username..." class="form-username form-control" id="form-username" value="{{ old('email') }}">
										{{-- {{Session::put('key', 'value')}} --}}
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
									<div class="form-group">
										<label class="sr-only" for="form-password">Contraseña</label>
										<input id="password" name="password" type="password" placeholder="Password..." class="form-password form-control" id="form-password">
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
									<button type="submit" class="btn">Ingresa!</button>
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
