@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route('units.update', ['unit' => $unit->id])}}">
						@csrf
						@method('PUT')
						<h4>Unit</h4>
						<div class="row">
							<div class="input-field col s6">
								<input id="name" name="name" type="text" value="{{$unit->name}}">
								<label for="name">Name</label>
							</div>
							<div class="input-field col s6">
								<input id="symbol" name="symbol" type="text" value="{{$unit->symbol}}">
								<label for="symbol">Symbol</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea">{{$unit->description}}</textarea>
								<label for="description">Description</label>
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
