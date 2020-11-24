@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="@if(isset($pizza)){{route('pizza_prices.store')}}@elseif(isset($drink)){{route('drink_prices.store')}}@endif">
						@csrf
						<h4>Price</h4>
						<div class="row">
							<div class="input-field col s12">
								@if(isset($pizza))
								<select name="pizza_id">
									@foreach($pizzas as $spizza)
									<option value="{{$spizza->id}}">{{$spizza->name}}</option>
									@endforeach
								</select>
								@elseif(isset($drink))
								<select name="drink_id">
									@foreach($drinks as $sdrink)
									<option value="{{$sdrink->id}}">{{$sdrink->name}}</option>
									@endforeach
								</select>
								@endif
								<label>@if(isset($pizza)) {{'Pizza'}} @elseif(isset($drink)) {{'Drink'}} @endif</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="price" name="price" type="text">
								<label for="price">Price</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12 center-align">
								<button type="submit" class="waves-effect waves-light btn-small	  green darken-2"><i class="material-icons">save</i></button>
							</div>
							<br><br><br>
						</div>
					</form>
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>
@endsection
