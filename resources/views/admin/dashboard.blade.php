<!DOCTYPE html>
<html>
<head>
    <title>Pizza Place</title>
    <link  rel="icon"   href="img/pii.png" type="image/png" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}" />

    <!-- Compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body background="{{asset('img/1.png')}}">
<!--Navbar-->
<header>
    <div class="navbar-fixed">
        <nav class="green darken-1">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img class="responsive-img" src="{{asset('img/logo1.png')}}" width="340">
                </a>
                <ul class="right">
                    <li><a href="/manage-order">Manage Orders</a></li>
                    <li><a href="/logout"><i class="material-icons" style="font-size: 35px;">highlight_off</i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--Content-->
<main>
    <div class="container">
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
                                <tr>
                                    <td>1</td>
                                    <td>customer</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>employee</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="user">
                            <table class="centered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Role ID</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <tr>
                                    <td>user id</td>
                                    <td>user username</td>
                                    <td>user password</td>
                                    <td>user email</td>
                                    <td>user first_name</td>
                                    <td>user last_name</td>
                                    <td>user role_id</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                                
                                </tbody>
                            </table>
                            <br>
                            <div style="text-align:right; margin-right: 12px;">
                                <a class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">person_add</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
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
                                <tr>
                                    <td>unit id</td>
                                    <td>unit name</td>
                                    <td>unit symbol</td>
                                    <td>unit description</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1" href="/unit/id/edit"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1" href="/unit/id/delete"><i class="material-icons">delete</i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <div style="text-align:right; margin-right: 5px;">
                                <a class="waves-effect waves-light btn-small green darken-3" href="/unit/create"><i class="material-icons">add</i></a>
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
                                <tr>
                                    <td>ingredient id</td>
                                    <td>ingredient name</td>
                                    <td>ingredient description</td>
                                    <td>ingredient unit</td>
                                    <td><a  href="/ingredient/id/edit" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a href="/ingredient/id/delete" class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <div style="text-align:right; margin-right: 5px;">
                                <a href="/ingredient/id/create" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
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
                                <tr>
                                    <td>size id</td>
                                    <td>size name</td>
                                    <td>size description</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                            </table>
                            <br>
                            <div style="text-align:right; margin-right: 15px;">
                                <a class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
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
                                <tr>
                                    <td>name</td>
                                    <td>size</td>
                                    <td>price</td>
                                    <td><a href="/price/id/edit" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                </tr>
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>dp name</td>
                                    <td>dp size</td>
                                    <td>dp price</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>pizza name</td>
                                    <td>pizza description</td>
                                    <td>pizza size</td>


                                    <td>
                                        <a class="waves-effect waves-light btn modal-trigger    green darken-4" href="#modal{id}"><i class="material-icons">restaurant_menu</i></a>
                                        <!-- Modal Structure -->
                                        <div id="modal{id}" class="modal">
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
                                                    <tr>
                                                        <td>name</td>
                                                        <td>quantity</td>
                                                        <td>symbol</td>
                                                        <td><a class="waves-effect waves-light btn-small red darken-1" href="/pizza_ingredient/pizza_id/ingredient_id/delete"><i class="material-icons">delete</i></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <div>
                                                    <a href="/pizza_ingredient/id/create" class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/pizza/id/edit" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <div style="text-align:right; margin-right: 2%;">
                                <a class="waves-effect waves-light btn-small green darken-3" href="/pizza/create"><i class="material-icons">add</i></a>
                            </div>
                        </div>
                        <div id="drink">
                            <table class="centered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Coca-Cola</td>
                                    <td>Plastic Bottle</td>
                                    <td>2 lt</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fanta</td>
                                    <td>Plastic Bottle</td>
                                    <td>2 lt</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sprite</td>
                                    <td>Plastic Bottle</td>
                                    <td>2 lt</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pepsi</td>
                                    <td>Plastic Bottle</td>
                                    <td>2 lt</td>
                                    <td><a class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">edit</i></a></td>
                                    <td><a class="waves-effect waves-light btn-small red darken-1"><i class="material-icons">delete</i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <div style="text-align:right; margin-right: 5.5%;">
                                <a class="waves-effect waves-light btn-small green darken-3"><i class="material-icons">add</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<!--Footer-->
<footer class="page-footer red darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 m12">
                <h5 class="white-text">Pizza Place</h5>
                <p class="grey-text text-lighten-4">Blue Rise, Mabbettsville, New York, 12959-7229, US</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li><h6><i class="tiny material-icons">call</i>(845) 631-2102</h6></li>
                    <li><h6><i class="tiny material-icons">call</i>(917) 148-1304</h6></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © Copyright 2020. All rights reserved. Powered by PizzaPlace
        </div>
    </div>
</footer>


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
    });
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
            direction: 'left',
            hoverEnabled: false
        });
    });
</script>

</body>
</html>
