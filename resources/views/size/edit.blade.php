@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s5 offset-s4">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" action="{{route('sizes.update', ['size' => $size->id])}}" method="POST">
						@csrf
						@method('PUT')
						<h4>Size</h4>
						<div class="row">
							<div class="input-field col s12">
								<input id="name" name="name" type="text" value="{{$size->name}}" class="@error('name') is-invalid @enderror">
								@include('layouts.error', ['input' => 'name'])
								<label for="name">Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea @error('description') is-invalid @enderror">{{$size->description}}</textarea>
								@include('layouts.error', ['input' => 'description'])
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
