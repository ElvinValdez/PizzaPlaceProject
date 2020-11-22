<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index');

Route::get('/dashboard', function() {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/manage-order', 'ManageOrderController');

Route::resource('/drinks', 'DrinkController');

Route::resource('/ingredients', 'IngredientController');

Route::resource('/orders', 'OrderController');

Route::resource('/pizzas', 'PizzaController');

Route::resource('/pizzas/ingredients/{pizza_id}', 'PizzaIngredientController')->parameters(['{pizza_id}' => 'pizza_ingredient_id']);

Route::resource('/prices/pizzas', 'PizzaPriceController');

Route::resource('/prices/drinks', 'DrinkPriceController');

Route::resource('/sizes', 'SizeController');

Route::resource('/unit', 'UnitController');

Route::get('/user/create', function() {
    return view('user.create');
});

Route::get('/user/edit', function() {
    return view('user.edit');
});