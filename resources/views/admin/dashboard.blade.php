@extends('layouts.base')

@section('content')
<div class="container" id="users_roles">
    <img class="responsive-img" src="{{asset('img/welcomeA.png')}}">
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Manage</span> <!--USER & ROLE-->
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a class="active" href="#user">User</a></li>
                        <li class="tab"><a href="#role">Role</a></li>
                    </ul>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="role">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="user">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                {{--<th>Password</th>--}}
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Role</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                {{--<td>{{$user->password}}</td>--}}
                                <td>{{$user->email}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{implode(", ", $user->getRoleNames()->toArray())}}</td>
                                <td><a href="{{route('users.edit', ['user' => $user->id])}}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                <td>
                                    <form action="{{route('users.destroy', ['user' => $user->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div style="text-align:right; margin-right: 12px;">
                            <a href="{{route('users.create')}}" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">person_add</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="units_ingredients_sizes_prices">
        <div class="col s6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Manage</span><!--UNIT, INGREDIENT & SIZE-->
                    <p></p>
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#unit">Unit</a></li>
                        <li class="tab"><a class="active" href="#ingredient">Ingredients</a></li>
                        <li class="tab"><a href="#size">Size</a></li>
                    </ul>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="unit">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Symbol</th>
                                <th>Description</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                            <tr>
                                <td>{{ $unit->id }}</td>
                                <td>{{ $unit->name }}</td>
                                <td>{{ $unit->symbol }}</td>
                                <td>{{ $unit->description }}</td>
                                <td><a class="waves-effect waves-light btn-small green darken-1" href="{{route('units.edit', ['unit' => $unit->id])}}"><i class="material-icons">edit</i></a></td>
                                <td>
                                    <form action="{{route('units.destroy', ['unit' => $unit->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div style="text-align:right; margin-right: 5px;">
                            <a class="waves-effect waves-light btn-small green darken-3" href="{{route('units.create')}}"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div id="ingredient">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Unit</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ingredients as $ingredient)
                            <tr>
                                <td>{{$ingredient->id}}</td>
                                <td>{{$ingredient->name}}</td>
                                <td>{{$ingredient->description}}</td>
                                <td>{{$ingredient->unit->name}}</td>
                                <td><a href="{{route('ingredients.edit', ['ingredient' => $ingredient->id])}}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                <td>
                                    <form action="{{route('ingredients.destroy', ['ingredient' => $ingredient->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></button>    
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div style="text-align:right; margin-right: 5px;">
                            <a href="{{route('ingredients.create')}}" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div id="size">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sizes as $size)
                            <tr>
                                <td>{{$size->id}}</td>
                                <td>{{$size->name}}</td>
                                <td>{{$size->description}}</td>
                                <td><a href="{{route('sizes.edit', ['size' => $size->id])}}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                <td>
                                    <form action="{{route('sizes.destroy', ['size' => $size->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></button>    
                                    </form>    
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <br>
                        <div style="text-align:right; margin-right: 15px;">
                            <a href="{{route('sizes.create')}}" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Manage Prices</span><!--PRICES-->
                    <p></p>
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a class="active" href="#pricepizza">Pizza</a></li>
                        <li class="tab"><a href="#pricedrink">Drink</a></li>
                    </ul>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="pricepizza">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pizza_prices as $pizza_price)
                            <tr>
                                <td>{{$pizza_price->pizza->name}}</td>
                                <td>{{$pizza_price->pizza->size->name}}</td>
                                <td>{{$pizza_price->price}}</td>
                                <td><a href="{{route('pizza_prices.edit', ['pizza_price' => $pizza_price->id])}}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="pricedrink">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($drink_prices as $drink_price)
                            <tr>
                                <td>{{$drink_price->drink->name}}</td>
                                <td>{{$drink_price->drink->size}}</td>
                                <td>{{$drink_price->price}}</td>
                                <td><a href="{{route('drink_prices.edit', ['drink_price' => $drink_price->id])}}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row" id="pizzas_and_drinks">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Manage</span><!--PIZZA & DRINK-->
                    <p></p>
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a class="active" href="#pizza">Pizza</a></li>
                        <li class="tab"><a href="#drink">Drink</a></li>
                    </ul>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="pizza">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Size</th>
                                <th>Ingredient</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pizzas as $pizza)
                            <tr>
                                <td>{{$pizza->name}}</td>
                                <td>{{$pizza->description}}</td>
                                <td>{{$pizza->size->name}}</td>
                                <td>
                                    <a class="waves-effect waves-light btn modal-trigger green darken-4" href="#modal-pizza-{{$pizza->id}}"><i class="material-icons">restaurant_menu</i></a>
                                    <!-- Modal Structure -->
                                    <div id="modal-pizza-{{$pizza->id}}" class="modal">
                                        <div class="modal-content">
                                            <table class="centered">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Unit</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($pizza->ingredients as $ingredient)
                                                <tr>
                                                    <td>{{$ingredient->name}}</td>
                                                    <td>{{$ingredient->pivot->quantity}}</td>
                                                    <td>{{$ingredient->unit->symbol}}</td>
                                                    <td>
                                                        <form action="{{route('{pizza_id}.destroy', ['pizza_id' => $pizza->id, 'ingredient_id' => $ingredient->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="waves-effect waves-light btn-small red darken-1" href=""><i class="material-icons">delete</i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <br>
                                            <div>
                                                <a href="{{route('{pizza_id}.create', ['pizza_id' => $pizza->id])}}" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="{{route('pizzas.edit', ['pizza' => $pizza->id])}}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                <td>
                                    <form action="{{route('pizzas.destroy', ['pizza' => $pizza->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div style="text-align:right; margin-right: 2%;">
                            <a class="waves-effect waves-light btn-small green darken-3" href="{{route('pizzas.create')}}"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div id="drink">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Size</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($drinks as $drink)
                            <tr>
                                <td>{{$drink->name}}</td>
                                <td>{{$drink->description}}</td>
                                <td>{{$drink->size}}</td>
                                <td><a class="waves-effect waves-light btn-small green darken-1" href="{{route('drinks.edit', ['drink' => $drink->id])}}"><i class="material-icons">edit</i></a></td>
                                <td>
                                    <form action="{{route('drinks.destroy', ['drink' => $drink->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this element?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div style="text-align:right; margin-right: 5.5%;">
                            <a href="{{route('drinks.create')}}" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
