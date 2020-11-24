@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route('pizzas.store')}}">
						@csrf
						<h4>Pizza</h4>
						<div class="row">
							<div class="input-field col s5">
								<input id="name" name="name" type="text">
								<label for="name">Name</label>
							</div>
							<div class="input-field col s4">
								<select name="size_id">
									@foreach($sizes as $size)
									<option value="{{$size->id}}">{{$size->name}}</option>
									@endforeach
								</select>
								<label>Size</label>
							</div>
							<div class="input-field col s3">
								<input id="price" name="price" type="text">
								<label for="price">Price</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea"></textarea>
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
