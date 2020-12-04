@extends('layouts.base')

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
	<br>
	<div class="row">
		<div class="col s12">
			<form action="{{route('orders.index')}}" method="GET">
			<div class="card  green lighten-3" style="margin: 0 20px; padding: 0 20px;">
				<input type="text" class="form-control" name="search">
				<i class="material-icons" style="position: absolute; right: 10px; top: 10px">search</i>
			</div>
			</form>
		</div>
	</div>
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
								<th>Time</th>
                                <th></th>
							</tr>
						</thead>

						<tbody>
							@foreach($orders as $order)
							@if($order->order_status_id == 1 && $order->chef_user_id == null)
							<tr>
								<td>{{$order->id}}</td>
								<td>{{$order->customer->username}}</td>
								<td>{{$order->seller->username}}</td>
								<td>{{$order->time}}</td>
								<td>
									<a class="waves-effect waves-light btn modal-trigger green darken-4" href="#modal-order-{{$order->id}}"><i class="material-icons">visibility</i></a>
									<!-- Modal Structure -->
									<div id="modal-order-{{$order->id}}" class="modal">
										<div class="modal-content">
											<table class="centered">
												<thead>
												<tr>
													<th>Pizza</th>
													<th>Size</th>
													<th>Quantity</th>
													<th>Unit Price</th>
													<th>Price</th>
												</tr>
												</thead>
												<tbody>
												@php $total=0; @endphp
												@foreach($order_pizzas as $order_pizza)
													@if ($order_pizza->order_id == $order->id)
													@php $total += $order_pizza->pizza_price->price * $order_pizza->quantity; @endphp
												<tr>
												<td>{{$order_pizza->pizza_price->pizza->name}}</td>
												<td>{{$order_pizza->pizza_price->pizza->size->name}}</td>
												<td>{{$order_pizza->quantity}}</td>
												<td>{{$order_pizza->pizza_price->price}}</td>
												<td>{{$order_pizza->quantity * $order_pizza->pizza_price->price}}</td>
												</tr>
												@endif
												@endforeach
												@foreach($order_drinks as $order_drink)
													@if ($order_drink->order_id == $order->id)
													@php $total += $order_drink->drink_price->price * $order_drink->quantity; @endphp
												<tr>
												<td>{{$order_drink->drink_price->drink->name}}</td>
												<td>{{$order_drink->drink_price->drink->size}}</td>
												<td>{{$order_drink->quantity}}</td>
												<td>{{$order_drink->drink_price->price}}</td>
												<td>{{$order_drink->quantity * $order_drink->drink_price->price}}</td>
												</tr>
												@endif
												@endforeach
													<td></td>
													<td></td>
													<td></td>
													<td><b>Total</b></td>
													<td><b>{{$total}}</b></td>
												</tr>
												</tbody>
											</table>
											<br>
											<div>
												<span style="font-weight: bolder; margin-right:2em">Take order</span>
												<a href="{{route('orders.show', ['order' => $order->id])}}" type="submit" class="waves-effect waves-light btn-small green darken-1" ><i class="material-icons">send</i></a>
											</div>                                        
										</div>
									</div>
								</td>
								<td>
									<form action="{{route('orders.destroy', ['order' => $order->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to refuse this order?')">
										@csrf
										@method('DELETE')
										<button class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">eject</i></button>
									</form>
								</td>
							</tr>
							@endif
							@endforeach
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
					<span class="card-title">Your orders</span>
				</div>
				<div class="card-action">
					<table class="centered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Client</th>
								<th>Seller</th>
								<th>time</th>
                                <th></th>
							</tr>
						</thead>

						<tbody>
							@foreach($orders as $order)
							@if($order->order_status_id == 2 && $order->chef_user_id == Auth::id())
							<tr>
								<td>{{$order->id}}</td>
								<td>{{$order->customer->username}}</td>
								<td>{{$order->seller->username}}</td>
								<td>{{$order->time}}</td>
								<td>
									<a class="waves-effect waves-light btn modal-trigger green darken-4" href="#modal-order-{{$order->id}}"><i class="material-icons">visibility</i></a>
									<!-- Modal Structure -->
									<div id="modal-order-{{$order->id}}" class="modal">
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
												@php $total=0; @endphp
												@foreach($order_pizzas as $order_pizza)
													@if ($order_pizza->order_id == $order->id)
													@php $total += $order_pizza->pizza_price->price * $order_pizza->quantity; @endphp
												<tr>
												<td>{{$order_pizza->pizza_price->pizza->name}}</td>
												<td>{{$order_pizza->pizza_price->pizza->size->name}}</td>
												<td>{{$order_pizza->quantity}}</td>
												<td>{{$order_pizza->pizza_price->price}}</td>
												<td>{{$order_pizza->quantity * $order_pizza->pizza_price->price}}</td>
												</tr>
												@endif
												@endforeach
												@foreach($order_drinks as $order_drink)
													@if ($order_drink->order_id == $order->id)
													@php $total += $order_drink->drink_price->price * $order_drink->quantity; @endphp
												<tr>
												<td>{{$order_drink->drink_price->drink->name}}</td>
												<td>{{$order_drink->drink_price->drink->size}}</td>
												<td>{{$order_drink->quantity}}</td>
												<td>{{$order_drink->drink_price->price}}</td>
												<td>{{$order_drink->quantity * $order_drink->drink_price->price}}</td>
												</tr>
												@endif
												@endforeach
													<td></td>
													<td></td>
													<td></td>
													<td><b>Total</b></td>
													<td><b>{{$total}}</b></td>
												</tr>
												</tbody>
											</table>
											<br>
											<div>
												<span style="font-weight: bolder; margin-right:2em">Go to the order</span>
												<a href="{{route('orders.show', ['order' => $order->id])}}" type="submit" class="waves-effect waves-light btn-small green darken-1" ><i class="material-icons">send</i></a>
											</div>                                        
										</div>
									</div>
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
