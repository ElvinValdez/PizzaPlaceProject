@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route('pizzas.store')}}" enctype="multipart/form-data">
						@csrf
						<h4>Pizza</h4>
						<div class="row">
							<div class="input-field col s5">
								<input class="@error('name') is-invalid @enderror" id="name" name="name" type="text">
								@include('layouts.error', ['input' => 'name'])
								<label for="name">Name</label>
							</div>
							<div class="input-field col s4">
								<select class="@error('size_ids') is-invalid @enderror" name="size_ids[]" multiple>
									@foreach($sizes as $size)
									<option value="{{$size->id}}">{{$size->name}}</option>
									@endforeach
								</select>
								@include('layouts.error', ['input' => 'size_ids'])
								<label>Size</label>
							</div>
							<div class="input-field col s3">
								<input class="@error('price') is-invalid @enderror" id="price" name="price" type="text">
								@include('layouts.error', ['input' => 'price'])
								<label for="price">Price</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea @error('description') is-invalid @enderror"></textarea>
								@include('layouts.error', ['input' => 'description'])
								<label for="description">Description</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input class="@error('image') is-invalid @enderror" id="image" name="image" type="file">
								@include('layouts.error', ['input' => 'image'])
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
