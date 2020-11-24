<!DOCTYPE html>
<html>
<head>
	<title>Pizza Place</title>
	<link  rel="icon"   href="{{asset('img/pii.png')}}" type="image/png" />
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}" >

	<!-- Compiled and minified CSS -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body background="{{asset('img/1.png')}}">
	<!--Navbar-->
	<header>
		<div class="navbar-fixed">
			<nav class="green darken-1">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">
						<img class="responsive-img" src="{{asset('img/logo1.png')}}" width="340">
					</a>
					<ul class="right">
				        <li><a href="/logout"><i class="material-icons" style="font-size: 35px;">highlight_off</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--Content-->
	<main>
		<div class="container">
			<br><br>
			<div class="row">
				<div class="col s8 offset-s2">
					<div class="card-panel green lighten-5">
						<div class="row">
							<form class="col s12" action="{{route('users.update', ['user' => $user->id])}}" method="POST">
								@csrf
								@method('PUT')
								<h4>User</h4>
								<div class="row">
									<div class="input-field col s6">
										<input id="first_name" name="first_name" type="text" class="validate" value="{{$user->first_name}}">
										<label for="first_name">First Name</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" name="last_name" type="text" class="validate" value="{{$user->last_name}}">
										<label for="last_name">Last Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="username" name="username" type="text" class="validate" value="{{$user->username}}">
										<label for="username">Username</label>
									</div>
									<div class="input-field col s6">
										<input id="password" name="password" type="password" class="validate">
										<label for="password">Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="email" name="email" type="email" class="validate" value="{{$user->email}}">
										<label for="email">Email</label>
									</div>
									<div class="input-field col s6">
										<select name="role">
											@foreach($roles as $role)
											<option value="{{$role->id}}" {{($role->id == $user->role_id) ? 'selected' : ''}}>{{$role->name}}</option>
											@endforeach
										</select>
										<label>Role</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 center-align">
										<button class="waves-effect waves-light btn-small green darken-2"><i class="material-icons">save</i></button>
									</div>
								</div>
							</form>
						</div>

					</div>
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
