<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

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

Route::middleware('auth')->group(function() {
    Route::get ('/', 'AdminController@main')->name('main');

    Route::get('/dashboard', 'AdminController@index')->name('dashboard');

    Route::resource('/drinks', 'DrinkController');

    Route::resource('/ingredients', 'IngredientController');

    Route::resource('/orders', 'OrderController');
    Route::get     ('/orders/{order}/deliver', 'OrderController@deliver')->name('orders.deliver');
    Route::put     ('/orders/{order}/deliver', 'OrderController@delivered')->name('orders.delivered');

    Route::resource('/pizzas', 'PizzaController');

    Route::resource('/pizzas/ingredients/{pizza_id}', 'PizzaIngredientController')->parameters(['{pizza_id}' => 'ingredient_id']);

    Route::resource('/pizza_sizes', 'PizzaSizeController');

    Route::resource('/drink_prices', 'DrinkPriceController');

    Route::resource('/sizes', 'SizeController');

    Route::resource('/units', 'UnitController');

    Route::resource('/users', 'UserController');
});