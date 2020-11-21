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
			<img class="responsive-img" src="{{asset('/img/welcomeP.png')}}">
			<div class="row">
				<div class="col s7">
					<div class="row">
						<div class="col s6">
							<div class="card">
								<div class="card-image">
									<img src="{{asset('/img/pepperoni.png')}}">
									<button onclick="addPizza(this)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></button>
								</div>
								<div class="card-content">
									<span class="card-title">pizzas name</span>
									<p>Ingredients: pizzas ingredients</p>
									<div class="row">
										<div class="input-field col s12">
											<select>
												<option value="" disabled selected>Size</option>
												<option value="pizzas price_id">Medium pizzas price $</option>
                                                <option value="pizzas price_id">Large pizzas price $</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h5>Drinks</h5>
					<div class="row">
						<div class="col s6">
							<div class="card">
								<div class="card-image">
									<img src="{{asset('/img/cocacola.png')}}">
									<button onclick="addDrink(this)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></button>
								</div>
								<div class="card-content">
									<span class="card-title">drink name</span>
                                    <p>drink size</p>
									<p>drink price$</p>
                                    <input type="hidden" name="drink_id" value="drink id">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s5">
					<div class="row">
						<div class="col s12">
							<div class="card  yellow lighten-3">
                                <form method="POST" action="/order">
								<div class="card-content ">
									<span class="card-title">Your Order</span>
									<table>
										<thead>
											<tr>
												<th width="30%"></th>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id="pizza_name">margherita</td>
												<td><a id="pizza_remove" onclick="remOne('pizza')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">remove</i></a></td>
												<td id="pizza_qty">0</td>
												<td><a id="pizza_add" onclick="addOne('pizza')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a></td>
											</tr>
											<tr>
												<td id="drink_name">sprite</td>
												<td><a id="drink_remove" onclick="remOne('drink')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">remove</i></a></td>
												<td id="drink_qty">0</td>
												<td><a id="drink_add" onclick="addOne('drink')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a></td>
											</tr>
										</tbody>
									</table>

										<div class="input-field text-left">
                                            <label for="total_price">Total</label>
                                            <input id="total_price" type="text" disabled value="0">
                                            <input type="hidden" id="pizzaqty" name="pizza_qty" value="-1">
                                            <input type="hidden" id="pizzaid" name="pizza_id" value="-1">
                                            <input type="hidden" id="drinkid" name="drink_id" value="-1">
                                            <input type="hidden" id="drinkqty" name="drink_qty" value="-1">
										</div>
                                        <div class="input-field">
                                            <label for="address"><i class="material-icons">home</i>Address</label>
                                            <input name="address" type="text" required>
                                        </div>
								</div>
								<div class="card-action right-align">
									<button type="submit" class="waves-effect waves-lite btn btn-small green darken-1" >Buy</button>
								</div>
                                </form>
							</div>
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
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			M.AutoInit();
		});
	</script>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.sidenav');
			var instances = M.Sidenav.init(elems);
		});
		var currentPizzaPrice = 0;
		var currentDrinkPrice = 0;
		var currentPizzaId = -1;
		var currentDrinkId = -1;
		var pizzaQty = 0;
		var drinkQty = 0;
		var totalPrice = 0;

		function addPizza(event){
            if(event.parentNode.parentNode.childNodes[3].childNodes[5].childNodes[1].childNodes[1].childNodes[3].selectedIndex != 0){
                var newPizzaId = event.parentNode.parentNode.childNodes[3].childNodes[5].childNodes[1].childNodes[1].childNodes[3].selectedOptions[0].value;
                if(currentPizzaId != newPizzaId){
                    pizzaQty = 0;
                    currentPizzaId = newPizzaId;

                }
                document.getElementById("pizza_name").innerHTML = event.parentNode.parentNode.childNodes[3].childNodes[1].innerHTML;
                pizzaQty++;
                document.getElementById("pizza_qty").innerHTML = pizzaQty+"";
                currentPizzaPrice =event.parentNode.parentNode.childNodes[3].childNodes[5].childNodes[1].childNodes[1].childNodes[3].selectedOptions[0].innerHTML.split(" ")[1].split("$")[0];

                calculateTotal();
            }

        }

        function addDrink(event){
            var newDrinkId = event.parentNode.parentNode.childNodes[3].childNodes[7].value;
            if(newDrinkId != currentDrinkId){
                drinkQty = 0;
                currentDrinkId = newDrinkId;
            }
            document.getElementById("drink_name").innerHTML = event.parentNode.parentNode.childNodes[3].childNodes[1].innerHTML;
            drinkQty++;
            document.getElementById("drink_qty").innerHTML = drinkQty+"";
            currentDrinkPrice = event.parentNode.parentNode.childNodes[3].childNodes[5].innerHTML.split("$")[0];
            calculateTotal();
        }

        function updateQuantities(){
            document.getElementById("drink_qty").innerHTML = drinkQty+"";
            document.getElementById("pizza_qty").innerHTML = pizzaQty+"";
            document.getElementById("pizzaqty").value = pizzaQty;
            document.getElementById("drinkqty").value = drinkQty;
            document.getElementById("pizzaid").value = currentPizzaId;
            document.getElementById("drinkid").value = currentDrinkId;
        }

        function calculateTotal(){
            totalPrice = (pizzaQty*currentPizzaPrice) + (drinkQty*currentDrinkPrice);
            document.getElementById("total_price").value = totalPrice+"";
            updateQuantities();
        }

        function addOne(str){
		    if(str == 'pizza')
		        pizzaQty++;
		    else
		        drinkQty++;
		    calculateTotal();
        }

        function remOne(str){
		    if(str == 'pizza'){
                if(pizzaQty>0)
                    pizzaQty--;
            }else{
                if(drinkQty>0)
                    drinkQty--;
            }
		    calculateTotal();
        }


	</script>


</body>
</html>
