@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route('{pizza_id}.store', ['pizza_id' => $pizza_id])}}">
						@csrf
						<h4>Pizza Ingredient</h4>
						<div class="row">
							<div class="input-field col s8">
								<select name="ingredient_id">
									@foreach($ingredients as $ingredient)
									<option value="{{$ingredient->id}}">{{$ingredient->name}} [{{$ingredient->unit->name}}]</option>
									@endforeach
								</select>
								<label>Ingredient</label>
							</div>
							<div class="input-field col s4">
								<input id="quantity" name="quantity" type="text">
								<label for="quantity">Quanity</label>
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
