<!DOCTYPE html>
<html>
<head>
	<title>Pizza Place</title>
	<link  rel="icon"   href="img/pii.png" type="image/png" />
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}" />

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
                        <li><a href="/admin">Admin Dashboard</a></li>
				        <li><a href="/logout"><i class="material-icons" style="font-size: 35px;">highlight_off</i></a></li>
				    </ul>
                </div>
			</nav>
		</div>
	</header>
	<!--Content-->
	<main>
		<div class="container">
			<br>
			<div class="row">
				<div class="col s12">
					<div class="card  green lighten-3">
						<div class="card-content white-text">
							<span class="card-title">Manage Order</span>
						</div>
						<div class="card-action">
							<table class="centered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Client</th>
										<th>Seller</th>
										<th>Address</th>
										<th>Time</th>
										<th></th>
										<th>Sent</th>
										<th></th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>order id</td>
										<td>order client</td>
										<td>order seller</td>
										<td>order address</td>
										<td>order time</td>
										<td>
                                        <a class="waves-effect waves-light btn modal-trigger    green darken-4" href="#modal{id}"><i class="material-icons">visibility</i></a>
                                        <!-- Modal Structure -->
                                        <div id="modal{id}" class="modal">
                                            <div class="modal-content">
                                                <table class="centered">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Size</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Price</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                    <td>op name</td>
                                                    <td>op size</td>
                                                    <td>op quantity</td>
                                                    <td>op price</td>
                                                    <td>op quantity * op price</td>
                                                    </tr>
                                                    <tr>
                                                    <td>od name</td>
                                                    <td>od size</td>
                                                    <td>od quantity</td>
                                                    <td>od price</td>
                                                    <td>op quantity * op price</td>
                                                    </tr>
                                                    	<td></td>
                                                    	<td></td>
                                                        <td></td>
                                                        <td><b>Total</b></td>
                                                        <td><b>total</b></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                    </td>
										<td><a class="waves-effect waves-light btn-small green darken-1" href="/manage-order/id"><i class="material-icons">send</i></a></td>
										<td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="card  green lighten-3">
						<div class="card-content white-text">
							<span class="card-title">Order History</span>
						</div>
						<div class="card-action">
							<table class="centered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Client</th>
										<th>Seller</th>
										<th>Address</th>
										<th>Time</th>
										<th></th>
										<th></th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>order id</td>
										<td>order client</td>
										<td>order seller</td>
										<td>order address</td>
										<td>order time</td>
										<td>
                                        <a class="waves-effect waves-light btn modal-trigger    green darken-4" href="#modal{id}"><i class="material-icons">visibility</i></a>
                                        <!-- Modal Structure -->
                                        <div id="modal{id}" class="modal">
                                            <div class="modal-content">
                                                <table class="centered">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Size</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                    <td>op name</td>
                                                    <td>op size</td>
                                                    <td>op quantity</td>
                                                    <td>op price</td>
                                                    </tr>
                                                    <tr>
                                                    <td>od name</td>
                                                    <td>od size</td>
                                                    <td>od quantity</td>
                                                    <td>od price</td>
                                                    </tr>
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><b>Total</b></td>
                                                    <td><b>total</b></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                    </td>
										<td><a class="waves-effect waves-light btn-small red darken-1" href="/manage-order/id"><i class="material-icons">eject</i></a></td>
									</tr>
								</tbody>
							</table>
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
