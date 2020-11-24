@extends('layouts.base')

@section('content')
<div class="container">
	<br><br>
	<div class="row">
		<div class="col s8 offset-s2">
			<div class="card-panel green lighten-5">
				<div class="row">
					<form class="col s12" action="{{route('users.update', ['user' => $user->id])}}" method="POST">
						@csrf
						@method('PUT')
						<h4>User</h4>
						<div class="row">
							<div class="input-field col s6">
								<input id="first_name" name="first_name" type="text" class="validate" value="{{$user->first_name}}">
								<label for="first_name">First Name</label>
							</div>
							<div class="input-field col s6">
								<input id="last_name" name="last_name" type="text" class="validate" value="{{$user->last_name}}">
								<label for="last_name">Last Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="username" name="username" type="text" class="validate" value="{{$user->username}}">
								<label for="username">Username</label>
							</div>
							<div class="input-field col s6">
								<input id="password" name="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="email" name="email" type="email" class="validate" value="{{$user->email}}">
								<label for="email">Email</label>
							</div>
							<div class="input-field col s6">
								<select name="role">
									@foreach($roles as $role)
									<option value="{{$role->id}}" {{($role->id == $user->role_id) ? 'selected' : ''}}>{{$role->name}}</option>
									@endforeach
								</select>
								<label>Role</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12 center-align">
								<button class="waves-effect waves-light btn-small green darken-2"><i class="material-icons">save</i></button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
