<!DOCTYPE html>
<html>
<head>
	<title>Pizza Place</title>
	<link rel="icon"   href="{{asset('img/pii.png')}}" type="image/png" />
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}" />

	<!-- Compiled and minified CSS -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
	<!--Navbar-->
	<header>
		<div class="navbar-fixed">
			<nav class="green darken-1">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">
						<img class="responsive-img" src="{{asset('img/logo1.png')}}" width="340">       
					</a>
				</div>
			</nav>
		</div>
	</header>

	<!--Content-->
	<main>
		<div class="container">
			<div class="row">
				<br><br><br>
				<div class="col s6 offset-s3">
					<div class="card-panel green lighten-5">
						<div class="row">
							<form class="col s12" method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="row">
									<div class="input-field col s6 offset-s3">
										<input id="first_name" type="text" class="validate @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}">
                                        <label for="first_name">First name</label>
                                        @include ('layouts.error', ['input' => 'first_name'])
									</div>
                                </div>
                                <div class="row">
									<div class="input-field col s6 offset-s3">
										<input id="last_name" type="text" class="validate @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}">
										<label for="last_name">Last name</label>
										@include ('layouts.error', ['input' => 'last_name'])
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6 offset-s3">
										<input id="username" type="text" class="validate @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">
										<label for="username">Username</label>
										@include ('layouts.error', ['input' => 'username'])
									</div>
                                </div>
                                <div class="row">
									<div class="input-field col s6 offset-s3">
										<input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
										<label for="email">Email</label>
										@include ('layouts.error', ['input' => 'email'])
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6 offset-s3">
										<input id="password" name="password" type="password" class="validate @error('password') is-invalid @enderror">
										<label for="password">Password</label>
										@include ('layouts.error', ['input' => 'password'])
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6 offset-s3">
										<input id="password_confirm" name="password_confirmation" type="password" class="validate @error('password_confirm') is-invalid @enderror">
										<label for="password_confirm">Password confirm</label>
										@include ('layouts.error', ['input' => 'password_confirm'])
									</div>
								</div>
								<div class="row">
									<div class="col s12 center-align">
										<button class="btn waves-effect waves-light green darken-2" type="submit" name="action">register
											<i class="material-icons right">send</i>
										</button>
									</div>
									<br><br><br>
									<div class="col s12 offset-s3">
										<h6>Already have an account?<a href="{{route('login')}}"> Sign in</a></h6>
									</div>
								</div>
							</form>
						</div>
					</div>
					<br><br><br>
				</div>
			</div>

		</div>

	</main>

	<!--Footer-->
	<footer class="page-footer red darken-1">
		<div class="container">
			<div class="row">
				<div class="col l6 m12">
					<h5 class="white-text">Pizza Place</h5>
					<p class="grey-text text-lighten-4">Blue Rise, Mabbettsville, New York, 12959-7229, US</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Contact</h5>
					<ul>
						<li><h6><i class="tiny material-icons">call</i>(845) 631-2102</h6></li>
						<li><h6><i class="tiny material-icons">call</i>(917) 148-1304</h6></li> 
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© Copyright 2020. All rights reserved. Powered by PizzaPlace
			</div>
		</div>
	</footer> 

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			M.AutoInit();
		});	
	</script> 


</body>
</html>
