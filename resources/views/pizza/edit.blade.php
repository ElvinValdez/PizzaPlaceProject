@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		<br><br><br>
		<div class="col s6 offset-s3">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" method="POST" action="{{route('pizzas.update', ['pizza' => $pizza->id])}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="_method" value="PUT">
						<h4>Pizza</h4>
						<div class="row">
							<div class="input-field col s6">
								<input id="name" name="name" type="text" value="{{$pizza->name}}" class="@error('name') is-invalid @enderror">
								@include('layouts.error', ['input' => 'name'])
								<label for="name">Name</label>
							</div>
							<div class="input-field col s6">
								<select name="size_id" class="@error('size_id') is-invalid @enderror">
									@foreach($sizes as $size)
									<option value="{{$size->id}}" {{($pizza->size_id == $size->id)?'selected':''}}>{{$size->name}}</option>
									@endforeach
								</select>
								@include('layouts.error', ['input' => 'size_id'])
								<label>Size</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea @error('description') is-invalid @enderror">{{$pizza->description}}</textarea>
								@include('layouts.error', ['input' => 'description'])
								<label for="description">Description</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input class="@error('image') is-invalid @enderror" id="image" name="image" type="file">
								@include('layouts.error', ['input' => 'image'])
							</div>
							@if(isset($pizza->image))<img src="{{$pizza->image}}" class="" width="250" >@endif
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
