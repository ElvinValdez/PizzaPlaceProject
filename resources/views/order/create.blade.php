@extends('layouts.base')

@push('styles')
<link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
@endpush

@section('content')
<div class="container">
	@if(Session::has('success'))
	<div class="row">
		<div class="col s12">
			<div class="card  green lighten-3" style="margin: 20px 20px; padding: 20px 20px;">
				<div class="text-center">{{Session::get('success')}}</div>
			</div>
		</div>
	</div>
	@endif
	<img class="responsive-img" src="{{asset('/img/welcomeP.png')}}">
	<div class="row">
		<div class="col s7">
			<div class="row">
				@foreach($pizzas as $pizza)
				@if(isset($pizza->price))
				<div class="col s6">
					<div class="card">
						<div class="card-image">
							<img src="@if(isset($pizza->image)) {{$pizza->image}} @else {{asset('/img/pepperoni.png')}}@endif">
							<button onclick="addPizza(this)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></button>
						</div>
						<div class="card-content">
							<span class="card-title">{{$pizza->name}}</span>
							<p>Ingredients: {{$pizza->ingredients_flatten}}</p>
							<div class="row">
								<div class="input-field col s12">
									<select>
										<option value="0" disabled selected>Size</option>
										<option value="{{$pizza->price->id}}">{{ucfirst($pizza->size->name)}} ${{$pizza->price->price}}</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<h5>Drinks</h5>
			<div class="row">
				@foreach($drinks as $drink)
				@if(isset($drink->price))
				<div class="col s6">
					<div class="card">
						<div class="card-image">
							<img src="@if(isset($drink->image)) {{$drink->image}} @else {{asset('/img/cocacola.png')}}@endif">
							<button onclick="addDrink(this)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></button>
						</div>
						<div class="card-content">
							<span class="card-title">{{$drink->name}}</span>
							<p>{{$drink->size}}</p>
							<p>${{$drink->price->price}}</p>
							<input type="hidden" name="drink_id" value="{{$drink->price->id}}">
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
		<div class="col s5">
			<div class="row">
				<div class="col s12">
					<div class="card  yellow lighten-3">
						<form method="POST" action="{{route('orders.store')}}">
						@csrf
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
										<td id="pizza_name">None selected</td>
										<td><a id="pizza_remove" onclick="remOne('pizza')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">remove</i></a></td>
										<td id="pizza_qty">0</td>
										<td><a id="pizza_add" onclick="addOne('pizza')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a></td>
									</tr>
									<tr>
										<td id="drink_name">None selected</td>
										<td><a id="drink_remove" onclick="remOne('drink')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">remove</i></a></td>
										<td id="drink_qty">0</td>
										<td><a id="drink_add" onclick="addOne('drink')" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a></td>
									</tr>
								</tbody>
							</table>
								<div class="input-field text-left">
									<label for="total_price">Total</label>
									<input id="total_price" type="text" disabled value="0">
									<input type="hidden" id="pizzaqty" name="pizza_quantity" value="-1">
									<input type="hidden" id="pizzaid" name="pizza_price_id" value="-1">
									<input type="hidden" id="drinkid" name="drink_price_id" value="-1">
									<input type="hidden" id="drinkqty" name="drink_quantity" value="-1">
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
@endsection

@push('scripts')
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
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
			currentPizzaPrice =event.parentNode.parentNode.childNodes[3].childNodes[5].childNodes[1].childNodes[1].childNodes[3].selectedOptions[0].innerHTML.split(" ")[1].split("$")[1];

			calculateTotal();
		} else {
			Swal.fire('Hey select a pizza size first');
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
		currentDrinkPrice = event.parentNode.parentNode.childNodes[3].childNodes[5].innerHTML.split("$")[1];
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
		if (str == 'pizza') {
			if (currentPizzaId != -1)
				pizzaQty++;
			else
				Swal.fire('No pizza selected')
		} else {
			if (currentDrinkId != -1)
				drinkQty++;
			else
				Swal.fire('No drink selected')
		}
		calculateTotal();
	}

	function remOne(str){
		if (str == 'pizza'){
			if (pizzaQty > 0) 
				pizzaQty--;
		} else {
			if (drinkQty > 0)
				drinkQty--;
		}
		calculateTotal();
	}
</script>
@endpush
