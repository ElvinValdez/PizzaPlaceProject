@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="@if(isset($pizza)){{route('pizza_prices.update', ['pizza_price' => $price->id])}}@elseif(isset($drink)){{route('drink_prices.update', ['drink_price' => $price->id])}}@endif">
					@csrf
					@method('PUT')
					<h4>Price</h4>
					<div class="row">
						<div class="input-field col s12">
							<input name="price" type="text" value="{{$price->price}}" class="@error('price') is-invalid @enderror">
							@include('layouts.error', ['input' => 'price'])
							<label for="name">Price</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12 center-align">
							<button type="submit" class="waves-effect waves-light btn-small	  green darken-2"><i class="material-icons">save</i></a>
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
