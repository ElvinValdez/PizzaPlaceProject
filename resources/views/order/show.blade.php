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
	<div class="row">
        <br>
		<div class="col s10 offset-s1">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route(isset($driver) ? 'orders.delivered' : 'orders.update', ['order' => $order->id])}}" onsubmit="return confirm('You are about to mark the order as {{(isset($driver) ? 'delivered' : 'done')}}, are you sure?')">
                        @csrf
                        @method('PUT')
                        <h4>Order #{{$order->id}}</h4>
						<div class="row">
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
                                    @php $total = 0; @endphp
                                    @if(isset($pizza))
                                    @php $total = $order_pizza->pizza_price->price * $order_pizza->quantity; @endphp
                                    <tr>
                                        <td>{{$order_pizza->pizza_price->pizza->name}}</td>
                                        <td>{{$order_pizza->pizza_price->pizza->size->name}}</td>
                                        <td>{{$order_pizza->quantity}}</td>
                                        <td>{{$order_pizza->pizza_price->price}}</td>
                                        <td>{{$order_pizza->quantity * $order_pizza->pizza_price->price}}</td>
                                    </tr>
                                    @endif
                                    @if(isset($drink))
                                    @php $total += $order_drink->drink_price->price * $order_drink->quantity; @endphp
                                    <tr>
                                        <td>{{$order_drink->drink_price->drink->name}}</td>
                                        <td>{{$order_drink->drink_price->drink->size}}</td>
                                        <td>{{$order_drink->quantity}}</td>
                                        <td>{{$order_drink->drink_price->price}}</td>
                                        <td>{{$order_drink->quantity * $order_drink->drink_price->price}}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Total</b></td>
                                        <td><b>{{$total}}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                @if(isset($pizza) && count($pizza->ingredients) > 0)
                                <div class="container">
                                    <div class="row">
                                        <div class="col s10 offset-1">
                                            <div class="row">
                                                <h5>Pizza ingredients</h5>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <table class="centered">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Unit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pizza->ingredients as $ingredient)
                                                    <tr>
                                                        <td>{{$ingredient->name}}</td>
                                                        <td>{{$ingredient->pivot->quantity}} {{$ingredient->unit->symbol}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @if(($order->order_status_id == 2 && $order->chef_user_id == Auth::id()) || ($order->order_status_id == 4 && $order->driver_user_id == Auth::id()))
						<div class="row">
							<div class="col s12 center-align">
								<button type="submit" class="waves-effect waves-light btn-small	  green darken-2"><i class="material-icons">done</i></button>
							</div>
							<br><br><br>
                        </div>
                        @endif
					</form>
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>
@endsection
