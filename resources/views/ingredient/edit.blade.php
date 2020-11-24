@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route('ingredients.update', ['ingredient' => $ingredient->id])}}">
						@csrf
						@method('PUT')
						<h4>Ingredient</h4>
						<div class="row">
							<div class="input-field col s6">
								<input id="name" name="name" type="text" value="{{$ingredient->name}}">
								<label for="name">Name</label>
							</div>
							<div class="input-field col s6">
								<select name="unit_id">
									@foreach($units as $unit)
									<option value="{{$unit->id}}" {{($unit->id == $ingredient->unit_id) ? 'selected' : ''}}>{{$unit->name}}</option>
									@endforeach
								</select>
								<label>Unit</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea">{{$ingredient->description}}</textarea>
								<label for="description">Description</label>
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
